<?php $__env->startSection('title', 'سطل زباله رنگ ها'); ?>
<div>
    <div class="main-content">
        <div class="data-table-area" wire:init='loadColor'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست رنگ های حذف شده</h4>
                                <a href="<?php echo e(route('admin.product.colors')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست رنگ ها</a>
                                <hr>
                                <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:104%">
                                    <thead>
                                        <tr>
                                            <th>عنوان رنگ</th>
                                            <th>مقدار رنگ</th>
                                            <th>تاریخ حذف</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    <?php if($readyToLoad): ?>
                                        <tbody>
                                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($color->title); ?></td>
                                                    <td><div style="width:10px;height:10px;background-color:<?php echo e($color->value); ?>"></div></td>

                                                    <td><?php echo e($color->deleted_at); ?></td>
                                                    <td>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-colors-restore')): ?>
                                                            <button wire:click="restore(<?php echo e($color->id); ?>)"
                                                                class="action-icon">
                                                                <i class="zmdi zmdi-replay zmdi-custom"></i></button>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-colors-forceDelete')): ?>
                                                            <button wire:click="deleteId(<?php echo e($color->id); ?>)"
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>

                                        <?php echo e($colors->links()); ?>

                                    <?php else: ?>
                                        <div class="alert alert-warning">
                                            در حال بارگزاری اطلاعات از پایگاه داده ....
                                        </div>
                                    <?php endif; ?>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>

        </div>

    </div>
    <?php echo $__env->make('livewire.admin.include.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\colors\trash.blade.php ENDPATH**/ ?>