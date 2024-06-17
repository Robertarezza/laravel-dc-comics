@extends('layouts.app')

@section('content')
<div class="my_show" style="position: relative; top:0px;">
    <div class="container">
        <!-- <h1 class="m-0 p-0">Dettagli: {{$comic->title}}</h1> -->
        <div class="card mb-3" style="max-width: 60%; border: none; position: relative;
    left: 325px; top: 260px; transform: rotate(0deg);  background-color: inherit;">
            <div class="row g-0">
                <div class="col">
                    <img src="{{$comic->image}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8" style="font-size: 12px;">
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
            <div class="d-flex justify-content-around mt-3 align-content-center">
                <div>
                    <a href="{{route('comics.index') }}" class="btn btn-outline-secondary ">Indietro</a>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{route('comics.edit', ['comic'=>$comic->id]) }}" class="btn btn-warning"><i class="fa-solid fa-file-pen"></i></a>
                    <form action="{{route('comics.destroy', ['comic'=>$comic->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa-solid fa-trash-can " ></i></button>
                    </form>
                </div>
            </div>




        </div>
    </div>
    @endsection