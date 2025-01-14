

<?php $__env->startSection('title', 'Kotisivu'); ?>

<?php $__env->startSection('content'); ?>
    <section>
    <div class="row">
        <div class="col">
        <h1>Tervetuloa, kirjaudu sisälle nähdäksesi säätiedot</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
            dignissim lacinia justo id molestie. Nulla facilisi. Duis eu enim
            et augue consequat rhoncus.
        </p>
        <a class="btn primary" href="<?php echo e(url('login')); ?>">Kirjaudu</a>
        </div>
        <div class="col">
        <img src="#" alt="kuvakaappaus sääpalvelusta" />
        <!-- Lisä tänne sun kuvakaapaus sääpalvelusta -->
        </div>

        <!-- HUOM! säätietojen ikoonit Font-Awesome v5: 

        <i class="fa fa-cloud-rain"></i>
        <i class="fa fa-snowflake"></i>
        <i class="fa fa-temperature-low"></i>
        <i class="fa fa-temperature-high"></i> 
        -->
    </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kokko\Documents\GitHub\taitaja2023\resources\views/index.blade.php ENDPATH**/ ?>