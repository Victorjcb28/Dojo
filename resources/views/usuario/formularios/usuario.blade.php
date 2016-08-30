<h1> Datos</h1>
<div class="form-group">
    {!! Form::label('Nombre:') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']) !!}
</div>
<div class="form-group">
    {!! Form::label('Clave') !!}
    {!! Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu Clave']) !!}
</div>