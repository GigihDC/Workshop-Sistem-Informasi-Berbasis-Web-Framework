<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_','-', app()->getLocale())); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo e(config('app.name')); ?></tittle>
    </head>
<body>
    <div class="jumbroton jumbroton-fluid">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\user\Downloads\testMembuatLaravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>