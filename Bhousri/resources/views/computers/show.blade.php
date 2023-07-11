@extends('layout')
@section('title','Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


    <div class="container text-center">

        <h1>Computers</h1>
    </div>


    <div class="mt-8">

        <h3>{{$computer['name']}} is from <strong>{{$computer['origin']}} <strong>{{$computer['price']}}</strong></h3>

    </div>
    <a class="edit-btn" href="{{route('computers.edit',$computer->id)}}">edit</a>

    <form action="" method="POST">
        @CSRF
        @method('delete')
        <input class="delete-btn" type="submit" value="delete">
    </form>

    <!-- <a class="edit-btn" href="{{route('computers.destroy',$computer->id)}}">delete</a> -->
</div>





@endsection
