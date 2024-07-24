<?php $__env->startSection('title', 'ویرایش نقش کاربری'); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/default-assets/select.bootstrap4.css')); ?>">

<?php $__env->stopSection(); ?>
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 box-margin height-card">
                        <div class="card card-body">
                            <h4 class="card-title">ویرایش نقش</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form wire:submit.prevent='RoleForm'>
                                        <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان نقش(لاتین):</label>
                                            <input type="text" wire:model.blur='role.title' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">توضیحات نقش(فارسی):</label>
                                            <input type="text" wire:model.blur='role.description' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">سطح دسترسی ها:</label>
                                            <div wire:ignore>
                                                <select class="js-example-basic-single form-control" multiple="multiple"
                                                    wire:model.blur="permissions" id="permissions" style="width: 100%;">
                                                    <?php $__currentLoopData = \App\Models\Admin\Permissions\Permission::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($permission->id); ?>"
                                                            <?php echo e(in_array($permission->id,$role->permissions()->pluck('id')->toArray())? 'selected': ''); ?>>
                                                            <?php echo e($permission->description); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
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
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-trash')): ?>
                                    <a href="<?php echo e(route('admin.roles.trash')); ?>" type="button"
                                        class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                            class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                            <?php echo e(\App\Models\Admin\Permissions\Role::onlyTrashed()->count()); ?>

                                        </span></a>
                                <?php endif; ?>
                                
                                <a href="<?php echo e(route('admin.roles')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i> افزودن</a>

                                <hr>
                                <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:102%" wire:init='loadRole'>
                                    <thead>
                                        <tr>
                                            <th>عنوان نقش</th>
                                            <th>توضیحات</th>
                                            <th>سطوح دسترسی</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    <?php if($readyToLoad): ?>
                                        <tbody>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($role->title); ?></td>
                                                    <td><?php echo e($role->description); ?></td>
                                                    <td>
                                                        <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <span
                                                                style="border: 1px solid #ccc;padding: 0px 2px;border-radius: 3px;"><?php echo e($permission->description); ?></span>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </td>
                                                    <td>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>
                                                            <a href="<?php echo e(route('admin.roles.edit', $role->id)); ?>"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>
                                                            <button wire:click="deleteId(<?php echo e($role->id); ?>)"
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <?php echo e($roles->links()); ?>

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

    <?php $__env->startSection('scripts'); ?>
        <script>
            $(document).ready(function() {
                $('#permissions').select2();
                $('#permissions').on('change', function(e) {
                    let data = $(this).val();
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('permissions', data);
                });
                window.livewire.on('PermissionStore', () => {
                    $('#permissions').select2();
                });
            });
        </script>
    <?php $__env->stopSection(); ?>
</div>
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\roles\edit.blade.php ENDPATH**/ ?>