@extends('layouts.app')

@section('content')
    <h1>{{$contrato->nombre_contrato}}</h1>
    <p>ID contrato: {{$contrato->id}}</p>
    <p>ID cliente: {{$contrato->id_cliente}}</p>
    <p>Creado: {{$contrato->created_at}}</p>
    <p>Actualizado: {{$contrato->updated_at}}</p>
    <a href="/lsapp/public/contratos/{{$contrato->id}}/edit" class="btn btn-default">Edit</a>
@endsection