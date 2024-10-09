@extends('layouts/common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-form__content">
    <div class="login-form__heading">
        <h2>Login</h2>
    </div>
    <div class="login-form__input">
        <div class="login-form__form" >
        <form action="/login" method="post">
            @csrf
            <div class="login-form__input-item">
                <p>メールアドレス</p>
                <input type="email" name="email" placeholder="test@example.com" value="{{old('email')}}">
            </div>
            <div class="login-form__input-item">
                <p>パスワード</p>
                <input type="password" name="password">
            </div>
            <div class="login-form__button">
                <button>ログイン</button>
            </div>
        </form>
        </div>
    </div>
    <div login-form__register>
        <form action="/register" method="get">
            <button class="login-form__register-submit">register</button>
        </form>
    </div>

</div>
@endsection