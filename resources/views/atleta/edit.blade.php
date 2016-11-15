@extends('layouts.admin')
@section('content')

    {!!Form::model($atleta,['route'=>['atleta.update',$atleta],'method'=>'PUT'])!!}

    <div class="row">
        <div class="col-md-6 ">
            <h1> Datos del Atleta</h1>
            <div class="form-group">
                {!! Form::label('Nombre:') !!}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Apellido:') !!}
                {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Cedula:') !!}
                {!! Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Direccion:') !!}
                {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Kyu:') !!}
                {!! Form::text('kyu',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
            </div>

        </div>
        {!!Form::model($atletas,['route'=>['atleta.edit',$atleta],'method'=>'PUT'])!!}
        <div class="col-md-6 ">
            <h1> Datos del Representante</h1>
            <div class="form-group">
                {!! Form::label('Nombre:') !!}
                {!! Form::text('name1',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Apellido:') !!}
                {!! Form::text('apellido1',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Cedula:') !!}
                {!! Form::text('cedula1',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Direccion:') !!}
                {!! Form::text('direccion1',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
            </div>

        </div>




    </div>

    <div class="row">
        <div class="col-md-2 col-md-offset-2">
            {!! Form::Submit('Actualizar',['class'=>'btn btn-success']) !!}
        </div>
        <div class="col-md-2 col-md-offset-3">
            {!! Form::Reset('Eliminar',['class'=>'btn btn-danger']) !!}
        </div>
    </div>
    {!! Form::close() !!}
    {!! Form::close() !!}



@endsection