@extends('template.template')

@section('title', 'Entrar no sistema')

@section('sidebar')

@endsection

@section('content')
<div class="m-b-md row">
    <div class="col-md-offset-4"><h3>Entrar no sistema</h3></div>

    <div class="panel panel-default col-md-5 col-md-offset-4">
        <div class="panel-body">
        {!! Form::open(['url' => '/into', 'method' => 'post']) !!}

            <div class="form-group">
                {{ Form::label('login', 'Usuário ou Email') }}
                {{ Form::text('login', '', ['class' => 'form-control', 'required']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Senha') }}
                {{ Form::password('password', ['class' => 'form-control', 'required']) }}
            </div>

            <hr>
            <div class="row">
                <div class="col-md-8 text-danger">
                @if(isset($erro))
                    {{$erro}}
                @endif

                @if(session('erro'))
                    {{ session('erro') }}
                @endif
                </div>

                <div class="col-md-4 text-right">
                    {{  Form::submit('Entrar no sistema', ['class' => 'btn btn-default']) }}
                </div>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection