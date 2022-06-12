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
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name"
                           value="{{ old('name') }}" required autocomplete="name" placeholder="Имя" autofocus>

                </div>

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

                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-key"></span>
                    <input id="password-confirm" type="password" class="" name="password_confirmation" required
                           autocomplete="new-password" placeholder="Еще раз Пароль">
                </div>

                <button class="btn mt-3">Войти</button>
            </form>
            <div class="text-center fs-6">
                @if (Route::has('password.request'))
                    <a href="{{ route('login') }}">У вас уже есть аккаунт?</a>
                @endif

            </div>
        </div>

    </div>

@endsection
