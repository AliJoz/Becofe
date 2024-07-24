<?php $__env->startSection('title', 'مدیریت سبد خرید ها'); ?>

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('products')): ?>
                        <div class="col-lg-12 box-margin">
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('products')): ?>
                            <div class="col-12 box-margin">
                            <?php endif; ?>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">لیست سبد خرید</h4>

                                    <hr>
                                    <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadCart'>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>سفارش دهنده</th>
                                                <th>موبایل</th>
                                                <th>وضعیت سبد خرید</th>
                                                پ <th>مبلغ</th>
                                                <th>تاریخ ایجاد</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        <?php if($readyToLoad): ?>
                                            <tbody>
                                                <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($cart->id); ?></td>
                                                        <td><?php echo e($cart->user->name); ?></td>
                                                        <td><?php echo e($cart->user->mobile); ?></td>
                                                        <td>
                                                            <?php if($cart->status == 'done'): ?>
                                                                <label class="badge badge-success">تکمیل شده</label>
                                                            <?php elseif($cart->status == 'sending'): ?>
                                                                <label class="badge badge-danger-lighten">در حال
                                                                    ارسال</label>
                                                            <?php elseif($cart->status == 'cancelled'): ?>
                                                                <label class="badge badge-danger">لغو شده</label>
                                                            <?php else: ?>
                                                                <label class="badge badge-info">در حال انجام</label>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e(number_format($cart->price)); ?></td>
                                                        <td><?php echo e($cart->created_at); ?></td>

                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carts')): ?>
                                                                <a href="" class="action-icon"> <i
                                                                        class="zmdi zmdi-view-list zmdi-custom"></i></a>

                                                                <a href="" class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carts')): ?>
                                                                <button wire:click="deleteId(<?php echo e($cart->id); ?>)"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <?php echo e($carts->links()); ?>

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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\cart.blade.php ENDPATH**/ ?>