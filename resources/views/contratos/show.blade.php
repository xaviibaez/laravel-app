@extends('layouts.app')

@section('content')
    @if(!Auth::guest())
        @if(Auth::user()->id == $contrato->id_cliente)
            <h1>{{$contrato->nombre_contrato}}</h1>
            <p>ID contrato: {{$contrato->id}}</p>
            <p>ID cliente: {{$contrato->id_cliente}}</p>
            <p>Creado: {{$contrato->created_at}}</p>
            <p>Actualizado: {{$contrato->updated_at}}</p>
        
            <a href="/lsapp/public/contratos/{{$contrato->id}}/edit" class="btn btn-default">Edit</a>
            
            {!!Form::open(['action' => ['ContratosController@destroy', $contrato->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection