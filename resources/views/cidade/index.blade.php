@extends('app')

@section('content')
    <div class="container">
        <h1>Cidade</h1>
        <table class = "table table-striped tale-bordered table-hover">
            <thead>
            <tr>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cidade as $cid)
                <tr>
                    <td>{{ $cid->nome }}</td>
                    <td>{{ $cid->estado_id }}</td>
                    <td>
                        <a href="{{ route ('cidade.edit', ['id'=>$cid->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route ('cidade.destroy', ['id'=>$cid->id]) }}" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('cidade.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Cidade</a>
    </div>
@endsection