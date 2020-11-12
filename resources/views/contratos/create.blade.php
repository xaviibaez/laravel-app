@extends('layouts.app')

@section('content')
    <h1>Crear Contrato</h1>
    {!! Form::open(['action' => 'ContratosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nombre', 'Nombre')}}
            {{Form::text('nombre', '', ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
        </div>
        <div class="form-group">
            {{Form::label('idCliente', 'ID del cliente')}}
            {{Form::text('idCliente', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'ID del cliente'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection