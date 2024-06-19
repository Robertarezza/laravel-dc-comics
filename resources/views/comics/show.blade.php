@extends('layouts.app')

@section('content')
<div class="my_show" style=" background-image: url('{{ $comic->image }}');  
    position: relative;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 90vh;
    margin: 0;
    padding: 0;
    width: 100%;
    margin-top: 80px;
   ">
    <div class="container">
        <!-- <h1 class="m-0 p-0">Dettagli: {{$comic->title}}</h1> -->
        <div class="card mb-5" style=" border: none; background-color: inherit; color:white; margin: 0 auto;
    padding-top: 40px; max-width:90%;">
            <!-- position: relative;
    left: 325px; top: 200px; transform: rotate(0deg);  background-color: inherit;" -->
            <div class="row g-0">
                <div class="col">
                    <img src="{{$comic->image}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title ">{{$comic->title}}</h5>
                        <p class="card-text ">{{$comic->series}}</p>
                        <p class="card-text ">{{$comic->sale_date}}</p>
                        <p class="card-text ">{{$comic->type}}</p>
                        <p class="card-text ">{{$comic->price}}</p>
                        <p class="card-text ">{{$comic->description}}</p>

                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-around align-content-center">
                <div>
                    <a href="{{route('comics.index') }}" class="btn btn-outline-secondary ">Indietro</a>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{route('comics.edit', ['comic'=>$comic->id]) }}" class="btn btn-warning"><i class="fa-solid fa-file-pen"></i></a>
                   @include('partials.form_delete')
                </div>
            </div>
        </div>
    </div>
    @include('partials.modal_delete')
    @endsection