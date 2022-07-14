@extends('layouts.base')

@section('page-title')
  {{$comic->title}}
@endsection

@section('page-content')
  <img src="{{$comic->thumb}}" alt="">
  <h1>{{$comic->title}}</h1>
  <div>
    <p>{{!!$comic->description!!}}</p>
  </div>
@endsection