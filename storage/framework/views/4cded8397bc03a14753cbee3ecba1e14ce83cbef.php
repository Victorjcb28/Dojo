<h1> Datos</h1>
<div class="form-group">
    <?php echo Form::label('Nombre:'); ?>

    <?php echo Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']); ?>

</div>
<div class="form-group">
    <?php echo Form::label('Clave'); ?>

    <?php echo Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu Clave']); ?>

</div>