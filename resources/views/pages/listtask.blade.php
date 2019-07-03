
@extends('pages.layout')

@section('title','list task')

@section('content')

@foreach ($t as $item)

{{$item->id}}
{{$item->title}}
{{$item->description}}

@endforeach

@endsection


