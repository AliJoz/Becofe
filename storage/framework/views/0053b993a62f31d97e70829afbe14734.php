<?php $__env->startSection('title', 'سطح دسترسی کاربر'); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/default-assets/select.bootstrap4.css')); ?>">

<?php $__env->stopSection(); ?>

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">سطح دسترسی کاربر: </h4>
                                <a href="<?php echo e(route('admin.users')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست کاربران</a>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form wire:submit.prevent='UserPermissionForm'>
                                            <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                            <div class="form-group">
                                                <label for="exampleInputEmail12">نقش ها:</label>
                                                <div wire:ignore>
                                                    <select class="js-example-basic-single form-control"
                                                        multiple="multiple" wire:model.live="roles" id="roles"
                                                        style="width: 100%;">
                                                        <?php $__currentLoopData = \App\Models\Admin\Permissions\Role::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($role->id); ?>"
                                                                <?php echo e(in_array($role->id,$userRole) ? 'selected': ''); ?>>
                                                                <?php echo e($role->description); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail12">سطح دسترسی:</label>
                                                <div wire:ignore>
                                                    <select class="js-example-basic-single form-control"
                                                        multiple="multiple" wire:model.live="permissions"
                                                        id="permissions" style="width: 100%;">
                                                        <?php $__currentLoopData = \App\Models\Admin\Permissions\Permission::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($permission->id); ?>"
                                                                <?php echo e(in_array($permission->id, $userPermission) ? 'selected' : ''); ?>>
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


                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>
    <?php $__env->startSection('scripts'); ?>
        <script>
            $(document).ready(function() {
                //roles
                $('#roles').select2();
                $('#roles').on('change', function(e) {
                    let data = $(this).val();
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('roles', data);
                });
                window.livewire.on('RoleStore', () => {
                    $('#roles').select2();
                });
                //permissions
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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\users\permission.blade.php ENDPATH**/ ?>