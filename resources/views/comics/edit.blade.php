@extends('layouts/main-layout')

@section('main-section')

@include('partials/jumbotron')



<div class="container" id="form-container">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf

    @method ('PUT')

    <div class="mb-3">
      <label for="title">Titolo</label>
      <input type="text" id="title" name="title" value="{{$comic->title}}">
    </div>

    <div class="mb-3">
      <label for="description">Descrizione</label>
      <textarea id="description" name="description" value="{{$comic->description}}"></textarea>
    </div>

    <div class="mb-3">
      <label for="thumb">Link immagine</label>
      <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
    </div>
    
    <div class="mb-3">
        <label for="price">Prezzo</label>
        <input type="text" id="price" name="price" value="{{$comic->price}}">
    </div>

    <div class="mb-3">
      <label for="series">Serie</label>
      <input type="text" id="series" name="series" value="{{$comic->series}}">
    </div>

    <div class="mb-3">
      <label for="sale_date">Data di uscita</label>
      <input type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
    </div>

    <div class="mb-3">
      <label for="type">Tipologia</label>
      <input type="text" id="type" name="type" value="{{$comic->type}}">
    </div>

    <button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="confirmModal">Salva</button>

    {{-- <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Sei veramente sicuro di voler modificare così il comic?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div> --}}
  </form>
</div>


@endsection