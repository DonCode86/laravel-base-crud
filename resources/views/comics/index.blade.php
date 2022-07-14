@extends('layouts.base')

@section('page-title')
  Tutti i fumetti
@endsection

@section('page-content')
  <h1>Tutti i fumetti</h1>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Immagine</th>
      <th scope="col">Titolo</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Data di vendita</th>
      <th scope="col">Azioni</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($comics as $comic)
        <tr>
          <td>{{$comic->id}}</td>
          <td><img src="{{$comic->thumb}}"></td>
          <td>{{$comic->title}}</td>
          <td>{{$comic->price}}</td>
          <td>{{$comic->sale_date}}</td>
          <td></td>
        </tr>
      @endforeach
  </tbody>
</table>
@endsection