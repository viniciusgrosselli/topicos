@extends('app')
@section('content')
    <div class = "container">
        <h1>Nova Cidade!!</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->All() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'cidade.store']) !!}
        <div class="from-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('estado_id', 'Estado: ') !!}
            {{ Form::select('estado_id',
                \App\Estado::orderBy('nome')->pluck('nome', 'id')->toArray(), null,
            ['class'=>'form-control']) }}
        </div>
        <div class="from-group">
            {!! Form::submit('Criar Cidade', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection