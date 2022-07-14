@extends('layouts.base')

@section('page-title')
  {{$comic->title}}
@endsection

@section('page-content')
  <div class="show-section">
    <a class="btn btn-outline-dark" href="{{route('comics.index')}}">Torna alla Home</a>
    <img src="{{$comic->thumb}}" alt="">
    <h1 class="text-center">{{$comic->title}}</h1>
    <h5 class="text-center">Genere: "{{$comic->type}}"</h5>
    <div>
      <p class="my-3">{{!!$comic->description!!}}</p>
    </div>
  </div>
@endsection