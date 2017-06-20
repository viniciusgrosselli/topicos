@extends('app')

@section('content')
    <div class="container">
        <h1>Servico</h1>
        <table class = "table table-striped tale-bordered table-hover">
            <thead>
            <tr>
                <th>Descrição</th>
                <th>Valor</th>
            </tr>
            </thead>
            <tbody>
            @foreach($servico as $ser)
                <tr>
                    <td>{{$ser->descricao}}</td>
                    <td>{{$ser->valor}}</td>
                    <td>
                        <a href="{{ route ('servico.edit', ['id'=>$ser->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route ('servico.destroy', ['id'=>$ser->id]) }}" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('servico.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Servico</a>
    </div>
@endsection