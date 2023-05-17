@extends('layouts/main-layout')


@section('main-section')

@include('partials/jumbotron')

<div id="main-container">
    <div id="main-section" class="container">
        <div id="comics-tag">
            <h3>Current Series</h3>
        </div>
    
        <div class="row mb-2">
            @foreach($comics as $singleComic)
    
            <div class="col-2 d-flex flex-column gap-2 mb-5">
                <div class="image-container">
                    <a href="{{route('comics.show', $singleComic->id)}}"><img src="{{$singleComic['thumb']}}" alt="comic cover"></a>
                </div>
                <span class="comic-series pt-2">{{$singleComic['series']}}</span>
            </div>
            @endforeach
    
        </div>

        <div id="main-button">
            <button><a href="{{route('comics.create')}}">Aggiungi</a></button>
        </div>
    
    </div>

</div>

@include('partials/blue-nav')

@endsection