@extends('layouts/main-layout')

@section('main-section')

@include('partials/jumbotron')

<div class="container" id="form-container">
    <form action="{{route('comics.store')}}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="title">Titolo</label>
      <input type="text" id="title" name="title">
    </div>

    <div class="mb-3">
      <label for="description">Descrizione</label>
      <textarea id="description" name="description"></textarea>
    </div>

    <div class="mb-3">
      <label for="thumb">Link immagine</label>
      <input type="text" id="thumb" name="thumb">
    </div>
    
    <div class="mb-3">
        <label for="price">Prezzo</label>
        <input type="text" id="price" name="price">
    </div>

    <div class="mb-3">
      <label for="series">Serie</label>
      <input type="text" id="series" name="series">
    </div>

    <div class="mb-3">
      <label for="sale_date">Data di uscita</label>
      <input type="text" id="sale_date" name="sale_date">
    </div>

    <div class="mb-3">
      <label for="type">Tipologia</label>
      <input type="text" id="type" name="type">
    </div>

    <button class="btn btn-primary" type="submit">Aggiungi</button>
  </form>
</div>


@endsection