@extends('layouts.base')

@section('page-title')
  {{$comic->title}}
@endsection

@section('page-content')
  <div class="show-section">
    <a class="btn btn-outline-dark" href="{{route('comics.index')}}">Torna alla Home</a>
    <a class="btn btn-outline-danger" href="{{route('comics.edit', $comic->id)}}">Modifica</a>
    <img src="{{$comic->thumb ? $comic->thumb : 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01'}}" alt="">
    <h1 class="text-center">{{$comic->title}}</h1>
    <h5 class="text-center">Genere: "{{$comic->type}}"</h5>
    <div>
      <p class="my-3">{{!!$comic->description!!}}</p>
    </div>
  </div>
@endsection