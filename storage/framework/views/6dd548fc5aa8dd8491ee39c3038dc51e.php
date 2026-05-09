<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h1><?php echo e($course->title); ?></h1>
<p><?php echo e($course->description); ?></p>
<p><?php echo e($course->price); ?></p>
<form action="<?php echo e(url('/courses/'.$course->id).'/edit'); ?>" method="get">
    <?php echo csrf_field(); ?>
    <button>Edit</button>
</form>

<form action="<?php echo e(url('/courses/'.$course->id).'/delete'); ?>" method="get">
    <?php echo csrf_field(); ?>
    <button>Delete</button>
</form>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\laragon\www\Student_Course_Management\resources\views/Courses/index.blade.php ENDPATH**/ ?>