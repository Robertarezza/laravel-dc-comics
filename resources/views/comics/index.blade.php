@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista fumetti</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col" class="w-25">Title</th>
                <th scope="col">Series</th>
                <th scope="col" class="w-25">Sale Date</th>
                <th scope="col" class="w-25">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
                <th scope="col"></th>
                <th scope="col"></th>
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
                <td>
                    <a href="{{route('comics.show', ['comic'=>$comic->id]) }}" class="btn btn-success">
                        <i class="fa-solid fa-circle-info"></i>
                    </a>
                </td>
                <td>
                    <a href="{{route('comics.edit', ['comic'=>$comic->id]) }}" class="btn btn-warning">
                        <i class="fa-solid fa-file-pen"></i>
                    </a>
                </td>
                <td>
@include('partials.form_delete')

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('partials.modal_delete')
@endsection