
@extends('pages.layout')
@section('title','create task')


@section('content')
<h1>Create a  new Task</h1>

<form action="{{route('createtask')}}" method="POST">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" placeholder="enter title" id="">
    </div>

    <div>
      <textarea name="description" placeholder="enter description" id="" cols="30" rows="10"></textarea>
    </div>

        <div>
            <input type="submit" value="Create Task">
        </div>

</form>

@endsection
