<div>
    <h2>Update Course Detaills</h2>
    <form action="<?php echo e(url('/courses/'.$course->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="PUT">
        <br>
        <br>
        <input type="text" name="title" value="<?php echo e($course->title); ?>">
        <br>
        <br>
        <input type="text" name="description" value="<?php echo e($course->description); ?>">
        <br>
        <br>
        <input type="number" name="price" value="<?php echo e($course->price); ?>">
        <br>
        <br>
        <button>Update</button>
    </form>
</div><?php /**PATH C:\laragon\www\Student_Course_Management\resources\views/Courses/edit.blade.php ENDPATH**/ ?>