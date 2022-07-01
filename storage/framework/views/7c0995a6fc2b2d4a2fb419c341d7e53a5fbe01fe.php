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
  <h2>Edit Blog </h2>

  <?php if($errors->any()): ?>
  <div class="alert alert-danger">
      <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
  </div>
<?php endif; ?>




  <form action="<?php echo url('blog/update/'. $data->id); ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<?php echo method_field('put'); ?>

    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title" value="<?php echo e($data->title); ?>">
    </div>
    <div class="form-group">
        <label for="content">content:</label>
            <input type="text" class="form-control" id="title" name="content" value="<?php echo e($data->content); ?>">

      </div>

    <div class="form-group">
        <label for="image">Select a file: image</label>
        <input type="file" id="image" name="image" ><br><br>

    </div>

    <button type="submit" class="btn btn-default">Submit</button>

  </form>
</div>

</body>
</html>
<?php /**PATH C:\Users\js\Desktop\EndTask\resources\views/blog/edit.blade.php ENDPATH**/ ?>