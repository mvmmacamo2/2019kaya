<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Auth::routes(['verify' => true]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('profile', function () {
    return 'Estou verficado';
})->middleware('verified');

// USER SECTION
Route::post('create-acount', ['uses' => 'UserController@registar']);
Route::post('update-avatar-user', ['uses' => 'UserController@updateAvatar']);
Route::post('update-user', ['uses' => 'UserController@updateUser']);
// ENDE USER SERCTION

//SERVICOS
Route::get('servicos', ['uses' => 'Admin\ServicoController@getServicos']);
Route::post('save-servico', ['uses' => 'Admin\ServicoController@saveServico']);

Route::post('forgot-password', ['uses' => 'UserController@forgotPassword']);
Route::post('reset-password', ['uses' => 'UserController@resetPassword']);
