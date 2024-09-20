@extends('Layouts.Layout')

@section('content')
    <h1>Delete Task</h1>
    <form action="{{ route('Home.Delete_Func')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $task->id }}">
        <h1>Are you sure you want to delete task #{{ $task->id }}?</h1>
        <button type="submit" class="btn btn-outline-danger mt-3" style="width: 200px">Yes</button>
    </form>
    <a href="{{ route('Home.Read')}}" class="btn btn-outline-warning mt-3" style="width: 200px">No</a>
@endsection
