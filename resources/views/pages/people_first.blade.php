@extends('layouts.main_layout')

@section('content')
    @foreach ($people as $person)
        <h2>{{$person->name}}</h2>
        <div>{{$person->mail}}</div>
        @foreach($pd as $details)
            @if ($details->person_id == $person->id)
                <div>Telephone: {{$details->phone}} <br> Address: {{$details->address}}</div>
            @endif
        @endforeach
        <br>
        <h3>Posts:</h3>
        @foreach($posts as $post)
            @if ($person->id == $post->person_id)
                <h3>{{$post->title}}</h3>
                <h4>Post number {{$post->id}}</h4>
                <p>{{$post->description}}</p>
            @endif
        @endforeach
        <hr>
    @endforeach
@endsection