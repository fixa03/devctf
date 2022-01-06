@extends('layouts.admin')
@section('content')
<a href="{{route('tasks.create')}}">{{$buttonText}}</a><br>
@if(count($tasksList)>1)
 @foreach($tasksList as $key => $tasks)
    @php $key++; @endphp
    {{$tasks}} <a href="{{route('tasks.edit',['task'=>$key])}}">Редактировать</a><br>
 @endforeach
@else
   <h2>Записей нет</h2>
@endif
@stop
