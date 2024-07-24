<?php $__env->startSection('title', 'سطل زباله گارانتی ها'); ?>
<div>
    <div class="main-content">
        <div class="data-table-area" wire:init='loadGaranty'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست گارانتی های حذف شده</h4>
                                <a href="<?php echo e(route('admin.product.garanties')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست گارانتی ها</a>
                                <hr>
                                <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:104%">
                                    <thead>
                                        <tr>
                                            <th>عنوان گارانتی</th>
                                            <th>تاریخ حذف</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    <?php if($readyToLoad): ?>
                                        <tbody>
                                            <?php $__currentLoopData = $garanties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $garanty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($garanty->title); ?></td>
                                                    <td><?php echo e($garanty->deleted_at); ?></td>
                                                    <td>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-garanties-restore')): ?>
                                                            <button wire:click="restore(<?php echo e($garanty->id); ?>)"
                                                                class="action-icon">
                                                                <i class="zmdi zmdi-replay zmdi-custom"></i></button>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-garanties-forceDelete')): ?>
                                                            <button wire:click="deleteId(<?php echo e($garanty->id); ?>)"
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>

                                        <?php echo e($garanties->links()); ?>

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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\garanties\trash.blade.php ENDPATH**/ ?>