@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-3">

            <div class="card border border-warning shadow-lg">
                <div class="p-4 fs-5">

                    <h3 class="">Тестирование информационных систем МДК 05.03</h3>
                    <hr>
                    <div class="text mt-3 text-break fs-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur dicta dolorum earum esse explicabo in, ipsum itaque laborum magnam maiores maxime minus odit omnis optio porro quae quam quia quo rerum, vitae. Ab aliquid at consequatur, ducimus eius eos esse est eum explicabo id ipsum libero mollitia, nemo nesciunt nostrum nulla odit officiis omnis pariatur perspiciatis possimus quasi quibusdam quidem repellat reprehenderit saepe, sapiente soluta tenetur unde voluptas! Blanditiis culpa deleniti error eum illum impedit inventore, itaque minima nemo nesciunt nisi repellendus, saepe, voluptatibus. Ea illo illum quae sequi vitae? Consectetur, dolorem ducimus eius est et, eveniet, expedita harum hic itaque molestias omnis ratione sint tempora. Ab aspernatur dolor doloremque earum molestias quis ut vero voluptate? Esse, eveniet, laboriosam. Animi doloremque fugiat maiores odio quo repellendus sed sit voluptate. A accusamus amet, assumenda culpa distinctio ea eius esse facilis in, iste labore nam neque pariatur, perspiciatis quaerat quas quos ratione reiciendis repellat saepe temporibus tenetur velit voluptas? Ab architecto dolor doloremque ducimus error expedita id illum nostrum numquam perspiciatis quam, suscipit tempore voluptates? Cum, expedita minima necessitatibus nostrum quam recusandae reiciendis repellat voluptate. Architecto est fugit in, minus nostrum obcaecati odit quaerat. Fugiat labore maxime pariatur praesentium provident quos voluptatem.</div>
                    <div class="mt-3">
                        <div class="text fs-3">Плюсы курса:</div>
                        <ul>
                            <li>Первый плюс</li>
                            <li>Первый плюс</li>
                            <li>Первый плюс</li>
                            <li>Первый плюс</li>
                            <li>Первый плюс</li>
                        </ul>
                    </div>
                    <div class="mt-3">
                        Чтобы начать проходить курс нажмите: <a href="{{ route('contents') }}" class="link link-primary">Получить курс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
