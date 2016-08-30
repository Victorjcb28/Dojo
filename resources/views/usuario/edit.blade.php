@extends('layouts.admin')
@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3  ">
            {!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}
            @include('usuario.formularios.usuario')

            <div class="col-md-2 col-md-offset-2">
                {!! Form::Submit('Actualizar',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}


            <div class="col-md-2 col-md-offset-2">
                {!!Form::open(['route'=>['usuario.destroy',$user],'method'=>'DELETE'])!!}
                {!! Form::Submit('Eliminar',['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>


        </div>
    </div>





    @endsection