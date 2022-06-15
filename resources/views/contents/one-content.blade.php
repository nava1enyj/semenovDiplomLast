@extends('layouts.app')

@section('content')

    <div class="container">

        <button type="button" class="border-0 mb-5 pb-5" id="btn-back-to-top">
            <i class=""><img src=" {{ asset('img/arrow.png') }} " alt=""></i>
        </button>

        <div class="p-3">

            <div class="card border border-warning shadow-lg">
                <div class="p-4 fs-5">

                    <h3 class="">{{ $content->name }}</h3>
                    <hr>

                    <div class="text-break mt-3">{{ $content->content }}</div>
                    @if( $content->path !== null )
                        <div class="d-flex justify-content-center mt-3">

                            <img src="{{ '/storage/' . $content->path }}" class="rounded img-content" alt="">

                        </div>

                    @endif


                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/scrollToTop.js') }}" defer></script>
    @endpush
@endsection
