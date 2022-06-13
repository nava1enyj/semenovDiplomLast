@extends('layouts.app')

@section('content')

    <div class="container">

        <button type="button" class="border-0 mb-5 pb-5" id="btn-back-to-top">
            <i class=""><img src=" {{ asset('img/arrow.png') }} " alt=""></i>
        </button>

        <div class="p-3">

            <div class="card border border-warning shadow-lg">
                <div class="p-4 fs-5">

                    <h3 class="">Тестирование информационных систем МДК 05.03</h3>
                    <hr>

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
                    @foreach($contents as $content)
                        <div class="d-flex justify-content-between align-items-center">


                            <div class="d-flex  align-self-start mt-3">


                                <div class="number fs-5 me-1">{{ $content->number }}.</div>
                                <a class="" href="{{ route('one-content' , $content->id) }}">{{ $content->name }}</a>

                            </div>
                            @if(Auth::user()->admin == 1)
                                <div class="mt-2">

                                    <a href="{{ route('edit-admin' , $content->id) }}" class="link link-secondary me-3">Редактировать</a>
                                    <a href="{{ route('del-admin' , $content->id) }}" class="link link-danger">Удалить</a>

                                </div>


                            @endif
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/scrollToTop.js') }}" defer></script>
    @endpush
@endsection
