<!DOCTYPE html>
<html lang="fa">

<head>
    <?php echo $__env->make('livewire.home.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?> | بی کافه</title>
    
</head>

<body>
    <?php echo e($slot); ?>

    <?php echo $__env->make('livewire.home.layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo app('Illuminate\Foundation\Vite')([
        'resources/css/app.css',
        'resources/js/app.js'

    ]); ?>
</html>
<?php /**PATH E:\Becafe\Becofe\resources\views\auth.blade.php ENDPATH**/ ?>