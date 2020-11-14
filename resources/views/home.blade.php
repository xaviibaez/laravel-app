@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/lsapp/public/contratos/create" class="btn btn-primary">Create contrato</a>
                    <h3>Tus contratos:</h3>
                    @if(count($contratos) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($contratos as $contrato)
                                <tr>
                                    <td>{{$contrato->nombre_contrato}}</td>
                                    <td><a href="/lsapp/public/contratos/{{$contrato->id}}/edit" class="btn btn-default">Editar</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['ContratosController@destroy', $contrato->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>No tienes contratos</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection