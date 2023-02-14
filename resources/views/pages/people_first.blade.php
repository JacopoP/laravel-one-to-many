@extends('layouts.main_layout')

@section('content')
    @foreach ($people as $person)
        <h2>{{$person->name}}</h2>
        <div>{{$person->mail}}</div>
        <div>Telephone: {{$person->personDetail->phone}} <br> Address: {{$person->personDetail->address}}</div>
        <br>
        <h3>Posts: {{$person->posts->count()}}</h3>
        @foreach($person->posts as $post)
            <h3>{{$post->title}}</h3>
            <h4>Post number {{$post->id}}</h4>
            <p>{{$post->description}}</p>
        @endforeach
        <hr>
    @endforeach
@endsection