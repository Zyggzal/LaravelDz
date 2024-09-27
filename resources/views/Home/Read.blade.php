@extends('Layouts.Layout')

@section('content')
    <h1>Read Page</h1>

    <table class="table">
        <thead>
            <tr scope="row">
                <th scope="col">ID</th>
                <th cope="col">Title</th>
                <th scope="col">Description</th>
                @auth
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $i)
                <tr scope="row">
                    <th scope="col">{{$i->id}}</th>
                    <th scope="col">{{$i->title}}</th>
                    <th scope="col">{{$i->description}}</th>
                    @auth
                    <th scope="col"><a href="{{ route('Home.Update', $i->id) }}" class="btn btn-outline-info">Update</a></th>
                    <th scope="col"><a href="{{ route('Home.Delete', $i->id) }}" class="btn btn-outline-danger">Delete</a></th>
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
