<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>Formulario</h1>

    <script type="text/javascript">
        $(function ()
        {
            $("#wizard").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft"
            });
        });


    </script>

    <form id="example-form" action="#">
        <div id="wizard">
            <h3>Account</h3>
            <section>
                <label for="userName">User name *</label>
                <input id="userName" name="userName" type="text" class="required">
                <label for="password">Password *</label>
                <input id="password" name="password" type="text" class="required">
                <label for="confirm">Confirm Password *</label>
                <input id="confirm" name="confirm" type="text" class="required">
                <p>(*) Mandatory</p>
            </section>
            <h3>Profile</h3>
            <section>
                <label for="name">First name *</label>
                <input id="name" name="name" type="text" class="required">
                <label for="surname">Last name *</label>
                <input id="surname" name="surname" type="text" class="required">
                <label for="email">Email *</label>
                <input id="email" name="email" type="text" class="required email">
                <label for="address">Address</label>
                <input id="address" name="address" type="text">
                <p>(*) Mandatory</p>
            </section>


        </div>
    </form>



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>