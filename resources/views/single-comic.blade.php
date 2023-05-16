@extends('layouts/main-layout')

@section('main-section')

@include('partials/jumbotron')

<div id="single-comic-container">
    <div id="blue-bar"></div>

    <div id="comic-container" class="container">
        <div id="single-comic">
            <h2 class="comic-title">{{$comics[0]['title']}}</h2>
            <div class="green-bar">

            </div>

        </div>
        <div id="adv-section">
            <div class="adv-container">
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