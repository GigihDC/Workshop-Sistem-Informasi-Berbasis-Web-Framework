<!-- <!DOCTYPE html>
<html lang="<?php echo e(str_replace('_','-', app()->getlocale())); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>"Laravel"</tittle>
    </head>
<body>
    <div class="jumbroton jumbroton-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Home</h1>
            <p class="lead">Halaman ini merupakan Halaman Home</p>
        </div>
    </div>
</body>
</html> -->

<!-- 

<?php $__env->startSection('content'); ?>
    <div class="jumbroton jumbroton-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Home</h1>
            <p class="lead">Halaman ini merupakan Halaman Home</p>
        </div>
    </div>
<?php $__env->stopSection(); ?> -->



<?php $__env->startSection('content'); ?>
    <div class="jumbroton jumbroton-fluide">
        <div class="container">
            <h1 class="display-4">Halaman Home</h1>
            <p class="lead">Halaman ini merupakan Halaman Home</p>
        </div>
        <p>Nama : <?php echo e($nama); ?></p>
        <p>Mata Kuliah :</p>
        <ul>
            <?php $__currentLoopData = $pelajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($p); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
    </div>
<?php $__env->stopSection(); ?>
 
 
<!--  
 <!DOCTYPE html>
 <html>
 <head>
     <title>test</title>
 </head>
 <body>
     <br>
  
     <p>Nama : <?php echo e($nama); ?></p>
  
     <p>Mata Pelajaran</p>
     <ul>
  
         <?php $__currentLoopData = $pelajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
         <li><?php echo e($m); ?></li>
  
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
     </ul>
  
 </body>
 </html> -->
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Downloads\testMembuatLaravel\resources\views/home.blade.php ENDPATH**/ ?>