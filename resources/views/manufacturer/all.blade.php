@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    @foreach($producers as $producer)
        <article>
            <h2>
                <a href="{{url('producers/'.$producer->id)}}">{{$producer->name}}</a>
            </h2>
        </article>
    @endforeach
@endsection