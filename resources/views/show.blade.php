@extends('temptest')
@section('content')

    @foreach($people as $p)
        <h4>{{$p['firstname']}} {{$p['lastname']}} {{$p['age']}}
            <a href ="/edit/{{$p['id']}}">edit</a> <a href ="/del/{{$p['id']}}">delete</a></h4>
    @endforeach
@endsection()