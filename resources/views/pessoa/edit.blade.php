@extends('app')
@section('content')
    <div class = "container">
        <h1>Editando Pessoa: {{$pessoa->nome}}</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->All() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["pessoa.update", $pessoa->id], 'method'=>'put']) !!}
        <div class="from-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', $pessoa->nome, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('sobrenome', 'Sobrenome: ') !!}
            {!! Form::text('sobrenome', $pessoa->sobrenome, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('telefone', 'Telefone: ') !!}
            {!! Form::text('telefone', $pessoa->telefone, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('endereco', 'Endereco: ') !!}
            {!! Form::text('endereco', $pessoa->endereco, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('cpf', 'CPF: ') !!}
            {!! Form::text('cpf', $pessoa->cpf, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('rg', 'RG: ') !!}
            {!! Form::text('rg', $pessoa->rg, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::submit('Editar Pessoa', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection