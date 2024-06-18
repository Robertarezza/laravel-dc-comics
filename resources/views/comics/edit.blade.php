@extends('layouts.app')

@section('content')
<div class="container">
    
<!-- validazione -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>
                {{$error}}
            </li>

            @endforeach
        </ul>
    </div>
    @endif
<!-- /validazione -->
    <h1>Modifica: {{$comic->title}}</h1>
    <form action="{{ route('comics.update', ['comic'=>$comic->id]) }}" method="POST">
        {{-- Cookie per far riconoscere il form al server --}}
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title',$comic->title)}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" value="{{old('type',$comic->type)}}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{old('series', $comic->series)}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="image" name="image" value="{{old('image', $comic->image)}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{old('price', $comic->price)}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{old('description', $comic->description)}}</textarea>
        </div>

        <div class="d-flex justify-content-around mt-3 mb-3 align-content-center">
            <a href="{{route('comics.index') }}" class="btn btn-outline-secondary ">Indietro</a>
            <button class="btn btn-primary" type="submit">Salva</button>
        </div>

    </form>
</div>

@endsection