<?php $__env->startSection('content'); ?>
<h1>about</h1>
<p>this is my first laravel web</p>
<p>author:gzy</p>

<?php echo $__env->make('shared.author', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>