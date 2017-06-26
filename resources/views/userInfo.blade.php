@extends('layout')

@section('content')
    <h1>This is a test content of user: {{$name}}</h1>

    @if(count($friends))
        @foreach($friends as $friend)
            Friend: {{$friend}} </br>
        @endforeach

        @if($name =='Dima')
            if statement executed
        @endif
    @endif

@stop


@section('footer')

    this is a footer
    <script>
        console.log('Hello from js!');
    </script>

@stop