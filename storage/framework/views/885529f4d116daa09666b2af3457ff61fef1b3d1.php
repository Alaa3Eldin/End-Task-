<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Users</h2>
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>User name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($users -> id); ?></td>
        <td><?php echo e($users -> name); ?></td>
        <td><?php echo e($users -> email); ?></td>
        <td><a href='<?php echo e(url('user/delete/'.$users->id)); ?>'> Delete</a></td>
        <td><a href="#">Edit</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
  </table>
</div>

</body>
</html>
<?php /**PATH C:\Users\js\Desktop\EndTask\resources\views/user/index.blade.php ENDPATH**/ ?>