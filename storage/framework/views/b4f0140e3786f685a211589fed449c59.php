

<?php $__env->startSection('title', 'Kirjaudu'); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(url('log-in')); ?>" method="post">
        <h1>Kirjaudu sisään</h1>

        <label for="email">Sähköposti</label>
        <input type="email" name="email" id="email" required>

        <br>

        <label for="password">Salasana</label>
        <input type="password" name="password" id="password" required>

        <br>

        <?php echo csrf_field(); ?>

        <button type="submit">Kirjaudu</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kokko\Documents\GitHub\taitaja2023\resources\views/log-in.blade.php ENDPATH**/ ?>