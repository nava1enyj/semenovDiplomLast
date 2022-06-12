@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif


        </div>

        <div class="wrapper">

            <div class="text-center mt-4 name mb-3">
                Вход
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf


                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email"
                           autofocus>


                </div>


                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input id="password" type="password"
                           class="@error('password') is-invalid @enderror" name="password"
                           placeholder="Пароль"
                           required autocomplete="current-password">


                </div>

                <button class="btn mt-3">Войти</button>
            </form>
            <div class="text-center fs-6">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Востановите пароль</a> или <a href="{{ route('register') }}">Создайте аккаунт</a>
                @endif

            </div>
        </div>

    </div>
@endsection
