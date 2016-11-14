@extends('layouts.admin')
@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3  ">
            {!!Form::model($atleta,['route'=>['usuario.update',$atleta],'method'=>'PUT'])!!}
            <div class="form-group">
                {!! Form::label('Nombre:') !!}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
            </div>

            <div class="col-md-2 col-md-offset-2">
                {!! Form::Submit('Actualizar',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}





        </div>
    </div>





@endsection