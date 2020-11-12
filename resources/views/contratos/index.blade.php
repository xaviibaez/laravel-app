@extends('layouts.app')

@section('content')
    <h1>Contratos</h1>
    @if(count($contratos) > 1)
        @foreach ($contratos as $contrato)
            <div class="well">
                <h3>{{$contrato->id}}</h3>
                <small>{{$contrato->created_at}}</small>
            </div>
        @endforeach

    @else
            <p>No hay contratos</p>
    @endif
@endsection