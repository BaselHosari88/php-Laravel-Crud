@extends('layout')
@section('title','Create computer')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


    <div class="container text-center">

        <h1>Create Computer</h1>
    </div>


    <div class="flex justify-center">

        <form action="{{route('computers.store')}}" method="post" class="form bg-white p-6 border-1">
            @csrf
            <div>
                <label class="form-label" for="computer-name">computer name</label>
                <input class="form-control" type="text" id="computer-name" name="computer-name" value="{{old('computer-name')}}">

                @error('computer-name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div>
                <label class="form-label" for="computer-origin">computer-origin</label>
                <input class="form-control" type="text" id="computer-origin" name="computer-origin" value="{{old('computer-origin')}}">

                @error('computer-origin')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div>
                <label class="form-label" for="computer-proce">computer-price</label>
                <input class="form-control" type="text" id="computer-price" name="computer-price" value="{{old('computer-price')}}">

                @error('computer-price')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>





        </form>


    </div>


</div>





@endsection
