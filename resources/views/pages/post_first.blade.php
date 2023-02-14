@extends('layouts.main_layout')

@section('content')
    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->description}}</p>
        <h3>{{$post->person->name}}</h3>
        <div>Telephone: {{$post->person->personDetail->phone}} <br> Address: {{$post->person->personDetail->address}}</div>
        <hr>
    @endforeach
@endsection