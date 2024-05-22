@extends('layouts.base')
@section('title', "Signin - ToDo")

@section('body')
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm" action="{{ route('user.log') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" maxlength="50">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" maxlength="72">
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div>
                <a href="{{ route('user.create') }}">Ainda não possui um cadastro?</a>
            </div>
        </form>
    </div>
@endsection
