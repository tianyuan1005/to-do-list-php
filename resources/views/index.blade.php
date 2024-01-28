@extends("layouts.app")

@section('title','Task Lists')

@section('content')

@forelse($tasks as $task)
  <div><a href="{{Route('tasks.show',['task'=>$task->id])}}">{{$task->title}}</a></div>
@empty
<div>There are not tasks</div>
@endforelse
@endsection
