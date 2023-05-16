@extends('layouts/main-layout')


@section('main-section')

@include('partials/jumbotron')
<div class="bg-dark">
    <div class="container p-5 d-flex flex-column gap-3">
    
        <h2><a class="text-white" href="{{route('comics.index')}}">Clicca per guardare i comics disponibili</a></h2>
        <h3><a class="text-white" href="{{route('comics.create')}}">Clicca per aggiungere comics</a></h3>
    
    </div>

</div>

@include('partials/blue-nav')

@endsection