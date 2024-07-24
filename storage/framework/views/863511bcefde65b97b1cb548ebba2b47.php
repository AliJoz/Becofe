<?php $__env->startSection('title', 'کاربران'); ?>
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid" wire:init='loadUser'>
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست کاربران</h4>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-trash')): ?>
                                    <a href="<?php echo e(route('admin.users.trash')); ?>" class="btn btn-danger mb-2 mr-2"
                                        style="float:left;margin-top:-37px;"><i class="fa fa-trash"></i> سطل زباله
                                        <span class="badge badge-danger">
                                            <?php echo e(\App\Models\User::onlyTrashed()->count()); ?>

                                        </span></a>
                                <?php endif; ?>

                                <a href="<?php echo e(route('admin.users.create')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i> افزودن</a>

                                
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
                                            <th>وضعیت کاربر</th>
                                            <th>تاریخ ایجاد</th>
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
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit')): ?>
                                                            <?php if($user->isActive == 1): ?>
                                                                <a wire:click="changeStatus(<?php echo e($user->id); ?>)"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-success">فعال</span></a>
                                                            <?php else: ?>
                                                                <a wire:click="changeStatus(<?php echo e($user->id); ?>)"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-danger">غیرفعال</span></a>
                                                            <?php endif; ?>
                                                            <?php if($user->mobile_verified_at != null): ?>
                                                                <a wire:click="changeStatusMobile(<?php echo e($user->id); ?>)"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-success">تائید موبایل</span></a>
                                                            <?php else: ?>
                                                                <a wire:click="changeStatusMobile(<?php echo e($user->id); ?>)"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-danger">تائید موبایل</span></a>
                                                            <?php endif; ?>
                                                            <?php if($user->email_verified_at != null): ?>
                                                                <a wire:click="changeStatusEmail(<?php echo e($user->id); ?>)"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-success">تائید ایمیل</span></a>
                                                            <?php else: ?>
                                                                <a wire:click="changeStatusEmail(<?php echo e($user->id); ?>)"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-danger">تائید ایمیل</span></a>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('user-edit')): ?>
                                                            <?php if($user->isActive == 1): ?>
                                                                <span style="cursor:pointer"><span
                                                                        class="badge badge-success">فعال</span></span>
                                                            <?php else: ?>
                                                                <span style="cursor:pointer"><span
                                                                        class="badge badge-danger">غیرفعال</span></span>
                                                            <?php endif; ?>
                                                        <?php endif; ?>

                                                    </td>
                                                    <td><?php echo e($user->created_at); ?></td>
                                                    <td>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-info')): ?>
                                                            <a href="<?php echo e(route('admin.users.info', $user->id)); ?>"
                                                                class="action-icon" style="font-size:20px;"
                                                                title="نمایش اطلاعات کاربر"><i
                                                                    class="fa fa-eye"></i></a>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-login')): ?>
                                                            <button wire:click="loginForce(<?php echo e($user->id); ?>)"
                                                                class="action-icon" style="font-size:20px;"
                                                                title="ورود به پنل کاربر"><i
                                                                    class="fa fa-sign-in"></i></button>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-permission')): ?>
                                                            <a href="<?php echo e(route('admin.users.permission', $user->id)); ?>"
                                                                style="font-size:20px;" class="action-icon"
                                                                title="سطح دسترسی کاربر"><i
                                                                    class="fa fa-user-secret"></i></a>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-basket')): ?>
                                                            <a href="" style="font-size:20px;" title="خرید های کاربر"><i
                                                                    class="fa fa-shopping-basket"
                                                                    style="color:rgb(115, 194, 108);"></i></a>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit')): ?>
                                                            <a href="<?php echo e(route('admin.users.edit',$user)); ?>" style="font-size:20px;" class="action-icon"><i
                                                                    class="fa fa-edit"></i></a>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-delete')): ?>
                                                            <button wire:click="deleteId(<?php echo e($user->id); ?>)"
                                                                style="font-size:20px;" data-toggle="modal"
                                                                data-target="#exampleModal" class="action-icon"><i
                                                                    class="fa fa-trash"></i></button>
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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\users\index.blade.php ENDPATH**/ ?>