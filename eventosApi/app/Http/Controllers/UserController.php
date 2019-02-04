<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Token;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\Client;
use DB;

class UserController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function registar(Request $request){


        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);
        //  |confirmed
        $user = User::create([
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);
        $params = [
            'grant_type' => 'password',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'username' => request('email'),
            'password' =>  request('password'),
            'scope' => '*'
        ];

        $request->request->add($params);

        $proxy = Request::create('oauth/token', 'POST');

        return Route::dispatch($proxy);
    }
    public function updateAvatar(Request $request)
    {
        $exploded = explode(',', $request->foto);

        $decoded = base64_decode($exploded[1]);

        if (str_contains($exploded[0], 'jpeg'))
            $extension = 'jpg';
        else
            $extension = 'png';


        $fileName = str_random().'.'.$extension;

        $path = public_path().'/imagens/users/avatar'.'/'.$fileName;

        file_put_contents($path, $decoded);
        $user = User::find($request->id);
        if ($user->foto === $request->foto) {
            return response()->json(['message' => 'Avatar Actualizado com Sucesso!']);
        } else {
            $user->update($request->except('foto') + ['foto' => 'http://localhost:8000/imagens/users/avatar/'.$fileName]);
            $new = User::find($request->id);
            return response()->json(['message' => 'Avatar Actualizado com Sucesso!', 'data' => $new]);
        }
    }
    public function updateUser(Request $request)
    {
        $user = User::find($request->id);
        $user->update($request->all());
        $new = User::find($request->id);
        return response()->json(['message' => 'Perfil Actualizado com Sucesso!', 'data' => $new]);
    }
    public function forgotPassword(Request $request)
    {
       $user = User::where('email', $request->input('email'))->first();
       if (!$user) {
           return response()->json(['messade' => 'Verifique, se o email está correcto', 'class' => 'error'], 403);
       }
       $token = Token::create([
           'user_id' => $user->id,
           'token' => uniqid(),
           'expire_at' => Carbon::now()->addHour()
       ]);
       Mail::to($user)->send(new ForgotPassword($token, $request));
       return response()->json(['message' => 'Email Enviado com Sucesso, abra o seu inbox para repor a senha!'], 200);
    }
    public function resetPassword(Request $request)
    {
       $validator = Validator::make($request->all(), [
         'password' => 'required|min:6',
         'confirm_password' => 'required|same:password'
       ]);
       if ($validator->fails()) {
           return response()->json(['message' => $validator->errors()], 433);
       }

       $token = $request->input('token');
       $dbToken = DB::table('tokens')->where('token', $token)
                                       ->where('expire_at', '>', Carbon::now())->first();
       if (!$dbToken) {
           return response()->json(['messade' => 'Token Expirado, requisite outro', 'class' => 'error'], 403);
       }
       $user = User::where('id', $dbToken->user_id)->first();
       $user->password = bcrypt($request->input('password'));
       $user->save();
       DB::table('tokens')->where('id', $dbToken->id)->delete();
        return response()->json(['messade' => 'Senha Actualizada com sucesso!', 'class' => 'success'], 200);
    }
}
