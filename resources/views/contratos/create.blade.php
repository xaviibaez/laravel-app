@extends('layouts.app')

@section('content')
    <h1>Crear Contrato</h1>
    {!! Form::open(['action' => 'ContratosController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nombre_contrato', 'Nombre del contrato')}}
            {{Form::text('nombre_contrato', '', ['class' => 'form-control', 'placeholder' => 'Nombre del contrato'])}}
        </div>
        <div class="form-group">
            {{Form::label('id_cliente', 'ID del cliente')}}
            {{Form::text('id_cliente', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'ID del cliente'])}}
        </div>
        <div class="form-group">
            {{Form::label('nombre_cliente', 'Nombre del cliente')}}
            {{Form::text('nombre_cliente', '', ['class' => 'form-control', 'placeholder' => 'Nombre del cliente'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection