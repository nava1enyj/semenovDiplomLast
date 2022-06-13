@section('content')

    @extends('layouts.app')

    @section('content')

        <div class="container">


            <div class="p-3">

                <div class="card border border-warning shadow-lg">
                    <div class="p-4 fs-5">

                        <h3 class="">Изменение главы курса под номером: {{ $content->number }}</h3>
                        <hr>
                        <form action="{{ route('del-admin-post') }}" method="POST">
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
                            <input type="hidden" name="number" value="{{ $content->number }}">
                            <div class="d-flex justify-content-center ms-5 ps-2">

                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="name" class="col-form-label">Название главы</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="name" class="form-control"
                                               aria-describedby="name" name="name" value="{{ $content->name }}">
                                    </div>
                                    <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
     Максимум 200 символов
    </span>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-center">




                            </div>


                            <div class="d-flex justify-content-center mt-4 mb-4">
                                <div class="form-floating">
                                        <textarea class="form-control" name="content" placeholder="Leave a comment here"
                                                  id="floatingTextarea2"  style="height: 300px; width: 800px"></textarea>

                                    <label for="floatingTextarea2">Создержание</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-primary">Изменить главу</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @push('scripts')
            <script src="{{ asset('js/scrollToTop.js') }}" defer></script>
        @endpush
    @endsection

