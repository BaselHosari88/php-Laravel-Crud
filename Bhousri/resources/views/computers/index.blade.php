@extends('layout')
@section('title','Computers')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


    <div class="container flex justify-center">

        <h1>Computers</h1>
    </div>


    <div class="mt-8">

        @if( count($computers) > 0)
        <ul>
            @foreach ($computers as $computer)



            <a href="{{route('computers.show',['computer'=> $computer['id']])}}">
                <li>

                    {{$computer['name']}} is from <strong>{{$computer['origin']}} and the price is :    <strong>{{$computer['price']}} $</strong></strong>



                </li>
            </a>

            @endforeach
        </ul>
        @else

        <p>There are no computers to display</p>.

        @endif
    </div>


</div>





@endsection
