<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php echo Form::open(['route'=>'usuario.store','method'=>'POST']); ?>


<div class="form-group">
    <?php echo Form::label('Nombre:'); ?>

    <?php echo Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('Password:'); ?>

    <?php echo Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu nombre']); ?>

</div>
<?php echo Form::Submit('Registrar',['class'=>'btn btn-primary']); ?>

<?php echo Form::close(); ?>

</body>
</html>