<?php $__env->startSection('title', 'نقش ها'); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2/css/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 box-margin height-card">
                        <div class="card card-body">
                            <h4 class="card-title">افزودن نقش</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form wire:submit.prevent='RoleForm'>
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان نقش(لاتین):</label>
                                            <input type="text" wire:model.defer='title' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">توضیحات نقش(فارسی):</label>
                                            <input type="text" wire:model='description' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">سطح دسترسی ها:</label>
                                            <select class="js-example-basic-single form-control"
                                                wire:model='permissions[]' multiple="multiple" style="width: 100%;">
                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($permission->id); ?>"><?php echo e($permission->title); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                            style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست نقش ها</h4>
                                <button type="button" class="btn btn-danger mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-refresh"></i> سطل
                                    زباله</button>
                                <button type="button" class="btn btn-primary mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-file-excel-o"></i> خروجی
                                    اکسل</button>
                                <hr>
                                <input wire:model="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:104%" wire:init='loadRole'>
                                    <thead>
                                        <tr>
                                            <th>عنوان نقش</th>
                                            <th>توضیحات</th>
                                            <th>سطوح دسترسی</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    <!--[if BLOCK]><![endif]--><?php if($readyToLoad): ?>
                                        <tbody>
                                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($role->title); ?></td>
                                                    <td><?php echo e($role->description); ?></td>
                                                    <td>
                                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <span
                                                                style="border: 1px solid #ccc;padding: 0px 2px;border-radius: 3px;"><?php echo e($permission->title); ?></span>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                        <a href="javascript:void(0);" class="action-icon"> <i
                                                                class="zmdi zmdi-delete zmdi-custom"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                        </tbody>
                                    <?php else: ?>
                                        <div class="alert alert-warning">
                                            در حال بارگزاری اطلاعات از پایگاه داده ....
                                        </div>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>
    <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('admin/plugins/select2/js/select2.full.min.js')); ?>"></script>

        <script>
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });
        </script>
    <?php $__env->stopSection(); ?>
</div>
<?php /**PATH E:\Becafe\Becofe\resources\views/livewire/admin/roles/index.blade.php ENDPATH**/ ?>