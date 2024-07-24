    <!-- Must needed plugins to the run this Template -->
    <script src="<?php echo e(asset('admin/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/default-assets/date-time.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/default-assets/setting.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/default-assets/bootstrap-growl.js')); ?>"></script>
    <!-- Active JS -->
    <script src="<?php echo e(asset('admin/js/default-assets/active.js')); ?>"></script>

    <!-- These plugins only need for the run this page -->
    <script src="<?php echo e(asset('admin/js/default-assets/peity.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/default-assets/peity-demo.js')); ?>"></script>

    <script src="<?php echo e(asset('admin/plugins/select2/js/select2.full.min.js')); ?>" defer></script>


   <?php echo app('Illuminate\Foundation\Vite')(

        'resources/js/app.js'
    ); ?>;
    <?php echo $__env->yieldContent('scripts'); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\layouts\scripts.blade.php ENDPATH**/ ?>