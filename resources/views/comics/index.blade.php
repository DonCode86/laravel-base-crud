@extends('layouts.base')

@section('page-title')
  Lista fumetti
@endsection

@section('page-content')
  <h1 class="text-center my-4">FUMETTI</h1>
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
        <tr class="align-middle">
          <td>{{$comic->id}}</td>
          <td><img src="{{$comic->thumb ? $comic->thumb :'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01'}}"></td>
          <td>{{$comic->title}}</td>
          <td>{{$comic->price}}</td>
          <td>{{$comic->sale_date}}</td>
          <td>
            <a class="btn btn-outline-dark" href="{{route('comics.show', $comic->id)}}">More Info</button>
          </td>
        </tr>
      @endforeach
  </tbody>
</table>
@endsection