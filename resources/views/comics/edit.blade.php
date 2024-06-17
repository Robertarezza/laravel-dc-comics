@extends('layouts.app')

@section('content')
<div class="container">
<h1>Modifica: {{$comic->title}}</h1>
<form action="{{ route('comics.update', ['comic'=>$comic->id]) }}" method="POST">
      {{-- Cookie per far riconoscere il form al server --}}
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" value="{{$comic->image}}">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{$comic->description}}</textarea>
      </div>

      <button class="btn btn-success" type="submit">Salva</button>
      <a href="{{route('comics.index') }}" class="btn btn-warning">Indietro</a>
    </form>
</div>
    
@endsection