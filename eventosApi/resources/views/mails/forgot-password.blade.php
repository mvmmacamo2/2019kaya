@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Esqueceu a senha?') }}
                        {{ __('Clique') }}, <a href="{{$url}}/repor_senha/{{$token->token}}">Repor</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title>Email</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="header">--}}
    {{--<h1 id="title">Esqueceu a senha</h1>--}}
    {{--<img src="{{asset('kaya/kAYA-lOGO.png')}}" id="img">--}}
{{--</div>--}}
{{--<div class="corpo">--}}
    {{--<p>Recebemos o pedido de ti para repor a senha</p>--}}
    {{--<p>Click <a href="{{$url}}/repor_senha/{{$token->token}}" class=" btn btn-secondary">Repor</a></p>--}}
{{--</div>--}}
{{--</body>--}}

{{--<style type="text/css">--}}
    {{--.corpo {--}}
        {{--margin-top: 30px;--}}
        {{--margin-bottom: 10px;--}}
        {{--text-align: center;--}}
    {{--}--}}
    {{--#header {--}}
        {{--background-color: #C2185B;--}}
        {{--width: 100%;--}}
        {{--color: #ffffff;--}}
        {{--height: 180px;--}}
        {{--text-align: center;--}}
    {{--}--}}
    {{--#title {--}}
        {{--color: #ffffff--}}
    {{--}--}}
    {{--#img {--}}
        {{--height: 100%;--}}
        {{--margin-bottom: 0px;--}}
        {{--margin-top: 0px;--}}

    {{--}--}}
    {{--.btn {--}}
        {{--display: inline-block;--}}
        {{--font-weight: 400;--}}
        {{--color: #212529;--}}
        {{--text-align: center;--}}
        {{--vertical-align: middle;--}}
        {{---webkit-user-select: none;--}}
        {{---moz-user-select: none;--}}
        {{---ms-user-select: none;--}}
        {{--user-select: none;--}}
        {{--background-color: transparent;--}}
        {{--border: 1px solid transparent;--}}
        {{--padding: 0.375rem 0.75rem;--}}
        {{--font-size: 1rem;--}}
        {{--line-height: 1.5;--}}
        {{--border-radius: 0.25rem;--}}
        {{--transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;--}}
    {{--}--}}
    {{--.btn-secondary {--}}
        {{--color: #fff;--}}
        {{--background-color: #C2185B;--}}
        {{--border-color: #6c757d;--}}
    {{--}--}}

    {{--.btn-secondary:hover {--}}
        {{--color: #fff;--}}
        {{--background-color: #C2185B;--}}
        {{--border-color: #545b62;--}}
    {{--}--}}

    {{--.btn-secondary:focus, .btn-secondary.focus {--}}
        {{--box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);--}}
    {{--}--}}

{{--</style>--}}
{{--</html>--}}

{{--<h1>Esqueceu a senha</h1>--}}
{{--<p>Recebemos o pedido de ti para repor a senha</p>--}}
{{--<p>Click <a href="{{$url}}/repor_senha/{{$token->token}}">Repor</a></p>--}}
