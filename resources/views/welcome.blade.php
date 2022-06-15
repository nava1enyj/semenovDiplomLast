@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-3">

            <div class="card border border-warning shadow-lg">
                <div class="p-4 fs-5">

                    <h3 class="">Тестирование информационных систем МДК 05.03</h3>
                    <hr>
                    <div class="text mt-3 text-break fs-5">
                        Тестирование - очень важный и трудоемкий этап процесса
                        разработки программного обеспечения, так как он позволяет выявить
                        подавляющее большинство ошибок, допущенных при составлении программ.
                        Процесс разработки программного обеспечения предполагает три
                        стадии тестирования:
                    </div>
                    <div class="mt-3">

                        <ul>
                            <li>автономное тестирование компонентов программного обеспечения;</li>
                            <li>комплексное тестирование разрабатываемого программного обеспечения;</li>
                            <li>системное или оценочное тестирование на соответствие основным критериям качества.</li>
                        </ul>
                    </div>

                    <div class="p-4">
                        <img src="{{ asset('img/logo.png') }}" class="img-fluid rounded" alt="...">
                    </div>

                    <div class="mt-3">
                        Чтобы начать проходить курс нажмите: <a href="{{ route('contents') }}"
                                                                class="link link-primary">Получить курс</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
