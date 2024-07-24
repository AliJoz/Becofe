<?php $__env->startSection('title', 'درخواست فروشندگی'); ?>
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid" wire:init='loadUser'>
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست درخواست های فروشندگی</h4>

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
                                            <th>تاریخ ایجاد</th>
                                        </tr>
                                    </thead>

                                    <?php if($readyToLoad): ?>
                                        <tbody>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($user->vendorRequest == 1): ?>
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
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-edit')): ?>
                                                                <?php if($user->typeUser == 'user'): ?>
                                                                    <a wire:click="changeStatus(<?php echo e($user->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">تائید
                                                                            فروشندگی</span></a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        </td>
                                                        <td><?php echo e($user->created_at); ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                        <?php echo e($users->links()); ?>

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
</div>
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\users\vendor.blade.php ENDPATH**/ ?>