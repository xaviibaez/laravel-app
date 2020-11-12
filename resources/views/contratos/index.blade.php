@extends('layouts.app')

@section('content')
    <h1>Contratos</h1>
    @if(count($contratos) > 1)
        @foreach ($contratos as $contrato)
            <div class="well">
                <h4>{{$contrato->id}}</h4>
                <h4>{{$contrato->nombre_contrato}}</h4>
                <small>{{$contrato->created_at}}</small>
            </div>
        @endforeach

    @else
            <p>No hay contratos</p>
    @endif
@endsection