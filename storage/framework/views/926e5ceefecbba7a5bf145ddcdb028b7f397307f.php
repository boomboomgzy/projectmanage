<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('projects.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        
<label>课程名</label>
<input type="text" name="name" style="width:20%" value="<?php echo e(old('name')); ?>">
<br>
<label>授课老师</label>
<input type="text" name="teacher" style="width:50%;" value="<?php echo e(old('teacher')); ?>">
<br>
<label>备注</label>
<input type="text" name="addition" style="width:50%;" value="<?php echo e(old('addition')); ?>">
<br>
        
        <button type="submit">OK</button>
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('projects.project', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>