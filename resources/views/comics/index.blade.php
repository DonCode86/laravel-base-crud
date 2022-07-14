@extends('layouts.base')

@section('page-title')
  Tutti i fumetti
@endsection

@section('page-content')
  <h1>Tutti i fumetti</h1>
  @dump($comics)
@endsection