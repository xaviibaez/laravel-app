@extends('layouts.app')

@section('content')
    <h1>Contratos</h1>
    <a href="/lsapp/public/contratos/create" class="btn btn-default">Crear contrato</a>
    
    @if(count($contratos) > 0)
        @foreach ($contratos as $contrato)
            <div class="well">
                <h4><a href="/lsapp/public/contratos/{{$contrato->id}}">{{$contrato->id}} {{$contrato->nombre_contrato}}</a></h4>
                
                <small>{{$contrato->created_at}} by {{$contrato->nombre_cliente}}</small>
            </div>
        @endforeach
    @else
        <p>No hay contratos</p>
    @endif
@endsection