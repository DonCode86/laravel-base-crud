@extends('layouts.base')

@section('page-title')
  Modifica {{$comic->title}}
@endsection

@section('page-content')
<a class="btn btn-outline-dark my-4" href="{{route('comics.index')}}">Torna alla Home</a>
  <h1>Modifica fumetto</h1>
<form  action="{{route('comics.update', $comic->id)}}" method="POST">
  @method('PUT')
  @csrf

  <div class="mb-4">
    <label for="image" class="form-label">Inserisci l'url dell'imagine</label>
    <input type="text" class="form-control" id="image" name="thumb">
  </div>

  <div class="mb-3">
    <label for="titolo" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="titolo" name="title">
  </div>

  <div class="mb-3">
    <label for="tipo" class="form-label">Genere del fumetto</label>
    <select class="form-select" id="tipo" name="type">
      <option selected>scegli il genere del fumetto</option>
      <option value="1">comic book</option>
      <option value="2">graphic novel</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Prezzo</label>
    <input type="text" class="form-control" id="price" name="price">
  </div>

  <div class="mb-3">
    <label for="series" class="form-label">Serie</label>
    <input type="text" class="form-control" id="series" name="series">
  </div>

  <div class="mb-3">
    <label for="sale_date" class="form-label">Data di vendita</label>
    <input type="text" class="form-control" id="sale_date" name="sale_date">
  </div>


  <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Fai una descrizione del fumetto" id="description" name="description"></textarea>
    <label for="description">Descrizione</label>
  </div>

  <button type="submit" class="btn btn-primary">Crea il tuo fumetto</button>
</form>
@endsection