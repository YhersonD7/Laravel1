@extends('Plantillaweb')

@section('secciondinamica')
    <h1>Entrada para listado de Aprendices </h1>

    @foreach($nombres as $i)
        <h1 class="display-1">{{$i}}</h1>
        <p>Texto del ejemplo</p>
    @endforeach
@endsection
