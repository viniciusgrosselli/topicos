@extends('app')
@section('content')
    <div class = "container">
        <h1>Editando Servico: {{$servico->descricao}}</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->All() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["servico.update", $servico->id], 'method'=>'put']) !!}
        <div class="from-group">
            {!! Form::label('descricao', 'Descricao: ') !!}
            {!! Form::text('descricao', $servico->descricao, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('valor', 'Valor: ') !!}
            {!! Form::text('valor', $servico->valor, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::submit('Editar Servico', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection