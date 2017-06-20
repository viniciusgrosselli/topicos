@extends('app')
@section('content')
    <div class = "container">
        <h1>Editando Estado: {{$estado->nome}}</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->All() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["estado.update", $estado->id], 'method'=>'put']) !!}
        <div class="from-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', $estado->nome, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('uf', 'UF: ') !!}
            {!! Form::text('uf', $estado->uf, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::submit('Editar Estado', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection