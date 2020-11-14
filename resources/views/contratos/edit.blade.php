@extends('layouts.app')

@section('content')
    <h1>Editar contrato</h1>
    {!! Form::open(['action' => ['ContratosController@update', $contrato->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nombre_contrato', 'Nombre del contrato')}}
            {{Form::text('nombre_contrato', $contrato->nombre_contrato, ['class' => 'form-control', 'placeholder' => 'Nombre del contrato'])}}
        </div>
        <div class="form-group">
            {{Form::label('nombre_cliente', 'Nombre del cliente')}}
            {{Form::textarea('nombre_cliente', $contrato->nombre_cliente, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Nombre del cliente'])}}
        </div>
        
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection