@extends('guest.template.base')

@section('title', 'Comics')

@section('content')
    <main>
        <div class="main-comics_top">
            <img class="jumbo-img" src="./images/jumbotron.jpg" alt="immagine dc">
        </div>
        <div class="main-comics_bottom">
            <div class="container">
                <div class="cards">
                    @foreach($comics as $card)
                        <div class="card-content">
                            <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                            <h2 class="card-title">{{ $card['series'] }}</h2>
                        </div>
                    @endforeach
                </div>
            </div>
            <button>Load more</button>
        </div>
    </main>
@endsection