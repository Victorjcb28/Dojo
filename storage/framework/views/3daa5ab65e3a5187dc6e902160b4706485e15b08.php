<?php $__env->startSection('content'); ?>
    <section class="jumbotron">
        <div class="container ">
            <div class="col-md-9">
                <img src="images/texto.png" alt="" class="nombre animated  bounceInLeft">
            </div>
            <div class="col-md-3">

                <img src="images/log1.png" alt="" class="animated infinite  flip">
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-md-12">
            <img src="images/log1.png" alt="" class="thumbail" style="text-align: center">
        </div>
    </div>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>