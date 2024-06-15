@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista fumetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col" class="w-25">Sale Date</th>
                <th scope="col" class="w-25">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
                <!-- <th scope="col">Description</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ( $comicList as $comic )
            <tr>
                <th scope="row">{{$comic->id}}</th>
               
                    <td class="d-flex">
                        <img src="{{$comic->image}}" alt="" class="w-25 me-2">

                        {{$comic->title}}
                    </td>
               
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->price}}</td>
                <td><button type="submit" class="btn btn-success"><a href="">Dettagli</a></button></td>
                <!-- <td>{{$comic->description}}</td> -->
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection