<?php $__env->startSection('title', 'سطل زباله کاربران'); ?>
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid" wire:init='loadUser'>
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست کاربران حذف شده</h4>
                                <a href="<?php echo e(route('admin.users')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list-alt"></i> لیست کاربران</a>
                                <hr>
                                <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>تصویر</th>
                                            <th>نام</th>
                                            <th>نقش کاربری</th>
                                            <th>پست الکترونیکی</th>
                                            <th>موبایل</th>
                                            <th>نوع کاربر</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ ایجاد</th>
                                            <th>تاریخ حذف</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    <?php if($readyToLoad): ?>
                                        <tbody>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td>
                                                        <img src="<?php echo e($user->profilePhoto); ?>" width="30px"
                                                            style="border-radius:100%">
                                                    </td>
                                                    <td><?php echo e($user->name); ?></td>
                                                    <td>
                                                        <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <span
                                                                style="border: 1px solid #ccc;padding: 0px 2px;border-radius: 3px;"><?php echo e($role->description); ?></span>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </td>
                                                    <td><?php echo e($user->email); ?></td>
                                                    <td><?php echo e($user->mobile); ?></td>
                                                    <td>
                                                        <?php switch($user->typeUser):
                                                            case ('user'): ?>
                                                                کاربر عادی
                                                            <?php break; ?>

                                                            <?php case ('admin'): ?>
                                                                مدیر
                                                            <?php break; ?>

                                                            <?php case ('vendor'): ?>
                                                                فروشنده
                                                            <?php break; ?>

                                                            <?php default: ?>
                                                                دیگر
                                                        <?php endswitch; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($user->isActive == 1): ?>
                                                            <span class="badge badge-success">فعال</span>
                                                        <?php else: ?>
                                                            <span class="badge badge-danger">غیرفعال</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($user->created_at); ?></td>
                                                    <td><?php echo e($user->deleted_at); ?></td>
                                                    <td>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-restore')): ?>
                                                            <button wire:click="restore(<?php echo e($user->id); ?>)"
                                                                class="action-icon">
                                                                <i class="zmdi zmdi-replay zmdi-custom"></i></button>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-forceDelete')): ?>
                                                            <button wire:click="deleteId(<?php echo e($user->id); ?>)"
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                        <?php echo e($users->links()); ?>

                                    <?php else: ?>
                                        <div class="alert alert-warning">
                                            در حال بارگزاری اطلاعات از پایگاه داده ....
                                        </div>
                                    <?php endif; ?>

                                </table>
                                <?php echo $__env->make('livewire.admin.include.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\users\trash.blade.php ENDPATH**/ ?>