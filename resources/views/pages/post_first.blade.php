@extends('layouts.main_layout')

@section('content')
    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->description}}</p>
        @foreach($people as $person)
            @if ($person->id == $post->person_id)
                <h3>{{$person->name}}</h3>
                @foreach($pd as $details)
                    @if ($details->person_id == $post->person_id)
                        <div>Telephone: {{$details->phone}} <br> Address: {{$details->address}}</div>
                    @endif
                @endforeach
            @endif
        @endforeach
        <hr>
    @endforeach
@endsection