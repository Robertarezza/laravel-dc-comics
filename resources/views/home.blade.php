@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h3>Vai all'archivio dei Fumetti</h3>
    <a href="{{ route('comics.index') }}" class="btn btn-success">Clicca Qui</a>

</div>
    
@endsection