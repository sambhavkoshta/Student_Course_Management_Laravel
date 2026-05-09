<div>
    <h2>Login</h2>
    <form action="<?php echo e(url('/login')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="email" name="email" placeholder="Enter Your Email">
        <br><br>
        <input type="password" name="password" placeholder="Enter Your Password">
        <br><br>
        <button>Login</button>
    </form>
</div><?php /**PATH C:\laragon\www\Student_Course_Management\resources\views/user/login.blade.php ENDPATH**/ ?>