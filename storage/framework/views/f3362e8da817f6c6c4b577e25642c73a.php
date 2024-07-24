<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/default-assets/select.bootstrap4.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title', 'افزودن ویژگی برای محصول'); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">افزودن ویژگی برای محصول</h4>
                                <a href="<?php echo e(route('admin.products')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list"></i> لیست
                                    محصولات</a>
                                <hr>
                                <form method="post" action="<?php echo e(route('admin.product.attributes.create',$product_id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <div class="row">
                                        <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-3 mt-30">
                                                <div class="form-group">

                                                    <label for=""><?php echo e($attribute->title); ?>:</label>
                                                    <div wire:ignore>
                                                        <input type="hidden" value="<?php echo e($attribute->id); ?>" name="attribute_id[]">
                                                        <select class="form-control"
                                                            name="attributeProducts[]"
                                                            id="value_id" class="value_id" style="width: 100%;">
                                                            <option value="">--هیچکدام--</option>
                                                            <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($attribute->id == $value->attribute_id): ?>
                                                                    <option value="<?php echo e($value->id); ?>-<?php echo e($attribute->id); ?>">
                                                                        <?php echo e($value->value); ?>

                                                                    </option>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                    <button type="submit" class="btn btn-outline-success mt-3 mb-2 mr-2"
                                        style="float:left;"><i class="fa fa-save"></i> ذخیره</button>

                                </form>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\products\attributes\create.blade.php ENDPATH**/ ?>