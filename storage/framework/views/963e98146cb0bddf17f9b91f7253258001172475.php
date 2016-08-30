<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-md-6 col-md-offset-3  ">
            <?php echo Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT']); ?>

            <?php echo $__env->make('usuario.formularios.usuario', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-2 col-md-offset-2">
                <?php echo Form::Submit('Actualizar',['class'=>'btn btn-primary']); ?>

            </div>
            <?php echo Form::close(); ?>



            <div class="col-md-2 col-md-offset-2">
                <?php echo Form::open(['route'=>['usuario.destroy',$user],'method'=>'DELETE']); ?>

                <?php echo Form::Submit('Eliminar',['class'=>'btn btn-danger']); ?>

                <?php echo Form::close(); ?>

            </div>


        </div>
    </div>





    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>