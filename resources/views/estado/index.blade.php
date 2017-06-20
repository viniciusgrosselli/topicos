@extends('app')

@section('content')
    <div class="container">
        <h1>Estado</h1>
        <table class = "table table-striped tale-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Uf</th>
            </tr>
            </thead>
            <tbody>
            @foreach($estado as $est)
                <tr>
                    <td>{{$est->nome}}</td>
                    <td>{{$est->uf}}</td>
                    <td>
                        <a href="{{ route ('estado.edit', ['id'=>$est->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route ('estado.destroy', ['id'=>$est->id]) }}" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('estado.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Estado</a>
    </div>
@endsection
