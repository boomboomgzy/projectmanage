 
<?php $__env->startSection('content-left'); ?>
<a href="<?php echo e(route('projects.create')); ?>" style="padding:5px;border:1px dashed gray;">
        +新建课程
</a> 
 <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projects): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="border:1px solid gray;margin-top:20px;padding:20px;">
        <h2><?php echo e($projects->name); ?></h2>
        <text><?php echo e($projects->teacher); ?></text>
        <p><?php echo e($projects->addition); ?></p>
        <a href="<?php echo e(route('projects.edit', $projects->id )); ?>">Edit</a>
        <form action="<?php echo e(route('projects.destroy', $projects->id)); ?>" method="post" style="display: inline-block;">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button type="submit" style="color: #F08080;background-color: transparent;border: none;">Delete</button>
        </form>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content-right'); ?>
<form action="<?php echo e(route('projects.update', $project->id)); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PATCH')); ?>

        
<label>课程名</label>
<input type="text" name="name" style="width:100%" value="<?php echo e(old('name')); ?>">
<br>
<label>授课老师</label>
<input type="text" name="teacher" style="width:100%;" value="<?php echo e(old('teacher')); ?>">
<br>
<label>备注</label>
<input type="text" name="addition" style="width:100%;" value="<?php echo e(old('addition')); ?>">
<br>
<br>
    <button type="submit">OK</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('projects.project', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>