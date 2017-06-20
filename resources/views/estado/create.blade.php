@extends('app')
@section('content')
    <div class = "container">
        <h1>Novo Estadoo!!</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->All() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'estado.store']) !!}
        <div class="from-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::label('uf', 'UF: ') !!}
            {!! Form::text('uf', null, ['class'=>'form-control']) !!}
        </div>
        <div class="from-group">
            {!! Form::submit('Criar Estado', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection