

@extends('layouts.appp')

@section('content')
        <h1>technologies are:</h1>
        @if(count($techs)>0)
        <ol>
            @foreach($techs as $tech)
                <li>{{$tech}}</li>
            @endforeach
        </ol>
        @endif
@endsection   