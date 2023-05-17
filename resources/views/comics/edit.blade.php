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

    <button class="btn btn-primary" type="submit">Salva</button>

    
    
    
  </form>

</div>


@endsection