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
                <td class="d-flex gap-2">
                    <a href="{{route('comics.show', ['comic'=>$comic->id]) }}" class="btn btn-success"><i class="fa-solid fa-circle-info"></i></a>
                    <a href="{{route('comics.edit', ['comic'=>$comic->id]) }}" class="btn btn-warning"><i class="fa-solid fa-file-pen"></i></a>
                    <form action="{{route('comics.destroy', ['comic'=>$comic->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa-solid fa-trash-can "></i></button>
                       
                    </form>
                    
                </td>
                
            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection