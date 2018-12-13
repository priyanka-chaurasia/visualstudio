


@extends('layouts.appp')

@section('content')
        <h1>this is introduction to laravel technology</h1>
        @if(count($ways)>0)
        <ul>
                @foreach($ways as $way)
                        <li>{{$way}}</li>
                @endforeach
        </ul>
        @endif
        <h1>technologies are:</h1>
        @if(count($techs)>0)
        <ol>
            @foreach($techs as $tech)
                <li>{{$tech}}</li>
            @endforeach
        </ol>
        @endif
@endsection   