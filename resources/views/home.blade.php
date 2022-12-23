@extends('layouts.main')

@section('content')
    <main>
        <!-- ? JumboTron -->
        <div id="hero" class="">
            <img src=" {{ Vite::asset('resources/img/jumbotron.jpg') }} " alt="" />
        </div>

        <!-- ? Main Content -->
        <div id="content" class="">
            <div class="container d-flex ">
                <!-- ? Row -->
                <div class="row row-cols-xl-4 row-cols-xxl-6">
                    <!-- ? Col -->
                    @foreach (config('db.cards') as $card)
                        <a href=" {{route('card_detail', ['id' =>$card['id']])}} " class="thumb">
                            <img src=" {{ $card['thumb'] }} " alt="">
                            <h3> {{ $card['series'] }} </h3>
                        </a>
                    @endforeach
                    <div class="col mb-4">

                    </div>

                </div>

                <a class="my-btn">Load more</a>
            </div>
        </div>
    </main>
@endsection
