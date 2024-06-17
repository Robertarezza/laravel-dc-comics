@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Aggiungi un nuovo Comic all'archivio</h3>
  <form action="{{ route('comics.store') }}" method="POST">
    {{-- Cookie per far riconoscere il form al server --}}
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="mb-3">
      <label for="type" class="form-label">Tipologia</label>
      <input type="text" class="form-control" id="type" name="type">
    </div>

    <div class="mb-3">
      <label for="series" class="form-label">Serie</label>
      <input type="text" class="form-control" id="series" name="series">
    </div>

    <div class="mb-3">
      <label for="sale_date" class="form-label">Data di uscita</label>
      <input type="text" class="form-control" id="sale_date" name="sale_date">
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" class="form-control" id="image" name="image">
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Prezzo</label>
      <input type="text" class="form-control" id="price" name="price">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <div class="d-flex justify-content-around mt-3 mb-3 align-content-center">
      <a href="{{route('comics.index') }}" class="btn btn-outline-secondary ">Indietro</a>
      <button class="btn btn-primary" type="submit">Salva</button>
    </div>
  </form>

</div>

@endsection