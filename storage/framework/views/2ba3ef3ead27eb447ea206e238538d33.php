<div>
    <h2>User Registration</h2>
    <form action="<?php echo e(url('/register')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="Enter Your Name">
        <br><br>
        <input type="email" name="email" placeholder="Enter Email">
        <br><br>
        <input type="password" name="password" placeholder="Enter password">
        <br><br>
        <button>Register</button>
    </form>
</div><?php /**PATH C:\laragon\www\Student_Course_Management\resources\views/user/register.blade.php ENDPATH**/ ?>