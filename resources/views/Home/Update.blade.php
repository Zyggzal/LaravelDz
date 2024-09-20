@extends('Layouts.Layout')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('Home.Update_Func')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $task->id }}">
        <label for="title" class="form-label">
            Title: <input class="form-control" type="text" name="title" id="title" value="{{ $task->title }}">
        </label>
        <label for="description" class="form-label" style ="width:60%">
            Description: <input class="form-control" type="text" name="description" id="description" value="{{ $task->description }}">
        </label>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
