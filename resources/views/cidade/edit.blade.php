@extends('app')
@section('content')
    <div class = "container">
        <h1>Editando Cidade: {{$cidade->nome}}</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->All() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["cidade.update", $cidade->id], 'method'=>'put']) !!}
        <div class="from-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', $cidade->nome, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('estado_id', 'Estado: ') !!}
            {{ Form::select('estado_id',
                \App\Estado::orderBy('nome')->pluck('nome', 'id')->toArray(), $cidade->estado_id,
            ['class'=>'form-control']) }}
        </div>
        <div class="from-group">
            {!! Form::submit('Editar Cidade', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection