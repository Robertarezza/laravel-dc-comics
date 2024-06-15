@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dettagli</h1>
    

        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col">
                    <img src="{{$comic->image}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{{$comic->series}}</p>
                        <p class="card-text">{{$comic->sale_date}}</p>
                        <p class="card-text">{{$comic->type}}</p>
                        <p class="card-text">{{$comic->price}}</p>
                        <p class="card-text">{{$comic->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    
        
   

</div>
@endsection