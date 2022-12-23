@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid" id="content">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src=" {{$card['thumb']}} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$card['series']}}</h5>
                    <h6 class="card-sub">{{$card['type']}}</h6>
                    <p class="card-text">{{$card['price']}}  </p>
                    <a href="#" class="btn btn-primary">Buy it</a>
                </div>
            </div>
        </div>
    </main>
@endsection
