@extends('Layouts.Layout')

@section('content')
    <h1>New Task</h1>
    <form action="{{ route('Home.Assistant_Create')}}" method="post" style="padding:15px">
        @csrf
        <label for="title" class="form-label">
            Title: <input class="form-control" type="text" name="title" id="title">
        </label>
        <label for="description" class="form-label" style ="width:60%">
            Description: <input class="form-control" type="text" name="description" id="description">
        </label>

        <button type="submit" class="btn btn-outline-success" style="width:150px">Add</button>
    </form>
@endsection
