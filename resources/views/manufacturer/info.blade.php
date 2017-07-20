@extends('layout')

@section('title', 'Producer ' . $producer->name)

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <a href="{{url('producers')}}">Back</a>
    <h2>
        <a href="{{url('producers/'.$producer->id)}}">{{$producer->name}}</a>
    </h2>
        <article>
            {{$producer->body}}
        </article>
@endsection