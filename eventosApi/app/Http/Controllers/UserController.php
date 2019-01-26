<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Passport\Client;

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
}
