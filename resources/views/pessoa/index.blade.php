@extends('app')

@section('content')
    <div class="container">
        <h1>Pessoa</h1>
        <table class = "table table-striped tale-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Telefone</th>
                <th>Endereco</th>
                <th>CPF</th>
                <th>RG</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pessoa as $pes)
                <tr>
                    <td>{{$pes->nome}}</td>
                    <td>{{$pes->sobrenome}}</td>
                    <td>{{$pes->telefone}}</td>
                    <td>{{$pes->endereco}}</td>
                    <td>{{$pes->cpf}}</td>
                    <td>{{$pes->rg}}</td>
                    <td>
                        <a href="{{ route ('pessoa.edit', ['id'=>$pes->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="{{ route ('pessoa.destroy', ['id'=>$pes->id]) }}" class="btn-sm btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('pessoa.create') }}" class="btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Incluir Pessoa</a>
    </div>
@endsection