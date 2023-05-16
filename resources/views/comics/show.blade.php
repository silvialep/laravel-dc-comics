@extends('layouts/main-layout')

@section('main-section')

@include('partials/jumbotron')

<div id="single-comic-container">
    <div id="blue-bar"></div>

    <div id="comic-container" class="container">
        <div id="single-comic">
            <h2 class="comic-title">{{$comic['title']}}</h2>
            <div class="green-bar">
                <span>U.S. Price: <strong class="price-tag">{{$comic['price']}}</strong></span>
            </div>
            <div class="comic-description">
                {{$comic['description']}}
            </div>
        </div>
        <div id="pubbli-section">
            <div class="pubbli-container">
                <span>Advertisement</span>
                <img src="{{ Vite::asset('resources/images/pubbli.jpg') }}" alt="adv image">
            </div>

        </div>
    </div>

    <div id="description-container">
        <div id="description-inner" class="container">
            <div id="talent">
                
            </div>
            <div id="specs">

            </div>
        </div>

    </div>
</div>


@endsection