<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['route'=>'atleta.store','method'=>'POST']); ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3  ">
            <h1> Datos</h1>
            <div class="form-group">
                <?php echo Form::label('Nombre:'); ?>

                <?php echo Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre']); ?>

            </div>

            </div>

            <div class="col-md-2 col-md-offset-2">
                <?php echo Form::Submit('Registrar',['class'=>'btn btn-primary']); ?>

            </div>
            <div class="col-md-2 col-md-offset-2">
                <?php echo Form::Reset('Limpiar',['class'=>'btn btn-default']); ?>

            </div>

        </div>



    </div>

    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>