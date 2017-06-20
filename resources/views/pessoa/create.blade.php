@extends('app')
@section('content')
    <div class = "container">
        <h1>Nova Pessoa!!</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->All() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'pessoa.store']) !!}
        <div class="from-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('sobrenome', 'Sobrenome: ') !!}
            {!! Form::text('sobrenome', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('telefone', 'Telefone: ') !!}
            {!! Form::text('telefone', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('endereco', 'Endereço: ') !!}
            {!! Form::text('endereco', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('cpf', 'CPF: ') !!}
            {!! Form::text('cpf', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('rg', 'RG: ') !!}
            {!! Form::text('rg', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::submit('Criar Pessoa', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection