@extends('Plantillaweb')

@section('secciondinamica')
    <h1>Entrada para listado de Instructores </h1>
    
    @foreach($datos as $id)
        <p class="font-italic">{{$id}}</p>
    @endforeach
    <br>
    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }} <br>
    @endfor
    <br> 
@endsection
