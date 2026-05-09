<div class="w-full">

    <h2>Create Course</h2>
    
    <form action="<?php echo e(url('/courses/create')); ?>" method="post">
    
        <?php echo csrf_field(); ?>
        <input type="text" name="title" placeholder="Enter Course Title">
        <br>
        <input type="text" name="description" placeholder="Enter description">
        <br>
        <input type="number" name="price" placeholder="Price">
        <br>
        <button>Create</button>
    
    </form>

</div>
<?php /**PATH C:\laragon\www\Student_Course_Management\resources\views/Courses/create.blade.php ENDPATH**/ ?>