@extends('layouts.admin')
@section('content')
    {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
    <div class="row">
        <div class="col-md-6 col-md-offset-3  ">
           @include('usuario.formularios.usuario')

            <div class="col-md-2 col-md-offset-2">
                {!! Form::Submit('Registrar',['class'=>'btn btn-primary']) !!}
            </div>
            <div class="col-md-2 col-md-offset-2">
                {!! Form::Reset('Limpiar',['class'=>'btn btn-default']) !!}
            </div>

        </div>



    </div>

    {!! Form::close() !!}

@endsection