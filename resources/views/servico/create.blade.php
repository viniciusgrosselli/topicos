@extends('app')
@section('content')
    <div class = "container">
        <h1>Novo Serviço!!</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->All() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'servico.store']) !!}
        <div class="from-group">
            {!! Form::label('descricao', 'Descrição: ') !!}
            {!! Form::text('descricao', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('valor', 'Valor: ') !!}
            {!! Form::text('valor', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::submit('Criar Serviço', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection