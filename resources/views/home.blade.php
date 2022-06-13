@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Добро пожаловать') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="ps-3 fs-5">
                    <div class="mb-2">Логин: {{ Auth::user()->login }}</div>
                    <div class="mb-2">Еmail: {{ Auth::user()->email }}</div>
                    <div class="mb-2">Имя: {{ Auth::user()->name }}</div>
                    <div class="mb-2">Фамилия: {{ Auth::user()->lastname }}</div>
                    <div class="mb-2">Отчество: {{ Auth::user()->patronymic }}</div>
                    <div class="mb-2">Телефон: {{ Auth::user()->phone }}</div>



                    <form action="{{ route('profile-change-password') }}" method="post" class="mt-3">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success">

                                <li>{{ session('success') }}</li>

                            </div>
                        @endif
                        @csrf
                        <div class="mb-3 me-3">
                            <label for="exampleInputPassword1" class="form-label">Введите новый пароль:</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 me-3">
                            <label for="exampleInputPassword1" class="form-label">Еще раз:</label>
                            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1">

                        </div>
                        <button class="btn btn-primary mb-3">Сменить пароль</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
