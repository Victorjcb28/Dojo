<?php $__env->startSection('content'); ?>
    <table class="table">
        <thead>
        <th>Nombre</th>
        <th>Clave</th>

        </thead>
        <?php foreach($users as $user): ?>
            <tbody>
            <td><?php echo e($user -> name); ?></td>
            <td></td>
            <td>
            <?php echo link_to_route('usuario.edit',$title='Editar', $parameters=$user->id, $attributes=['class'=>'btn btn-primary'] ); ?>

            </td>
            </tbody>
        <?php endforeach; ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>