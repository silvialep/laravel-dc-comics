@extends('layouts/main-layout')

@section('main-section')

@include('partials/jumbotron')

<div id="single-comic-container">
    <div id="blue-bar"></div>

    <div id="comic-container" class="container">
        <div id="comic-image-container">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
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

    <div class="container" id="edit-delete-bar">
        <button class="btn btn-primary"><a href="{{route('comics.edit', $comic->id)}}">Modifica il comic</a></button>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary" type="submit">Elimina il comic</button>
        </form>
        {{-- <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sei veramente sicuro di voler eliminare il comic?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div> --}}
        
    </div>
</div>


@endsection