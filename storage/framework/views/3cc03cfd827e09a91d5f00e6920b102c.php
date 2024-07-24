<?php $__env->startSection('title', 'اطلاعات کاربر'); ?>
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">نمایش اطلاعات کاربر: <?php echo e($user->name); ?></h4>
                                <a href="<?php echo e(route('admin.users')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list"></i> لیست
                                    کاربران</a>
                                <hr>

                                <div class="row">
                                    <div class="col-3">
                                        <b>نام و نام خانوادگی:</b> <?php echo e($user->name); ?>

                                    </div>
                                    <div class="col-3">
                                        <b> موبایل:</b> <a href="tel:<?php echo e($user->mobile); ?>"><?php echo e($user->mobile); ?></a>
                                    </div>
                                    <div class="col-3">
                                        <b>پست الکترونیکی:</b> <a
                                            href="mailto:<?php echo e($user->email); ?>"><?php echo e($user->email); ?></a>
                                    </div>
                                    <div class="col-3">
                                        <b>وضعیت کاربر:</b>
                                        <?php if($user->isActive == 1): ?>
                                            کاربر فعال
                                        <?php else: ?>
                                            کاربر غیرفعال
                                        <?php endif; ?>
                                        -
                                        <?php if($user->mobile_verified_at != null): ?>
                                            موبایل تائید شد
                                        <?php else: ?>
                                            موبایل تائید نشد
                                        <?php endif; ?>
                                        -
                                        <?php if($user->email_verified_at != null): ?>
                                            ایمیل تائید شد
                                        <?php else: ?>
                                            ایمیل تائید نشد
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="row mt-15">
                                    <div class="col-3">
                                        <b> تاریخ ایجاد کاربر:</b> <?php echo e($user->created_at); ?>

                                    </div>
                                    <div class="col-3">
                                        <b>تاریخ ویرایش کاربر:</b> <?php echo e($user->updated_at); ?>

                                    </div>
                                    <div class="col-3">
                                        <b>نوع کاربر:</b>
                                        <?php if($user->typeUser == 'admin'): ?>
                                            مدیر
                                        <?php endif; ?>
                                        <?php if($user->typeUser == 'vendor'): ?>
                                            فروشنده
                                        <?php endif; ?>
                                        <?php if($user->typeUser == 'user'): ?>
                                            کاربر عادی
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-3">
                                        <b>نقش های کاربر:</b>
                                        <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($role->description); ?> -
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="row mt-15">
                                    <div class="col-6">
                                        <b>سطح دسترسی های کاربر:</b>
                                        <?php $__currentLoopData = $user->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($permission->description); ?> -
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</div>
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\users\info.blade.php ENDPATH**/ ?>