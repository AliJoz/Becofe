<?php $__env->startSection('title', 'مدیریت سفارشات'); ?>

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
                                    <h4 class="card-title mb-2">لیست سفارشات</h4>

                                    <hr>
                                    <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadOrder'>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>سفارش دهنده</th>
                                                <th>موبایل</th>
                                                <th>وضعیت</th>
                                                <th>وضعیت سفارش</th>
                                                <th>مبلغ کل</th>
                                                <th>تاریخ ایجاد</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        <?php if($readyToLoad): ?>
                                            <tbody>
                                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($order->id); ?></td>
                                                        <td><?php echo e($order->user->name); ?></td>
                                                        <td><?php echo e($order->user->mobile); ?></td>
                                                        <td>
                                                            <?php if($order->cart->status == 'done'): ?>
                                                                <label class="badge badge-success">تکمیل شده</label>
                                                            <?php elseif($order->cart->status == 'sending'): ?>
                                                                <label class="badge badge-danger-lighten">در حال
                                                                    ارسال</label>
                                                            <?php elseif($order->cart->status == 'cancelled'): ?>
                                                                <label class="badge badge-danger">لغو شده</label>
                                                            <?php else: ?>
                                                                <label class="badge badge-info">در حال انجام</label>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if($order->status == 'paid'): ?>
                                                                <label class="badge badge-success">پرداخت شده</label>
                                                            <?php elseif($order->status == 'unpaid'): ?>
                                                                <label class="badge badge-danger-lighten">پرداخت نشده</label>
                                                            <?php else: ?>
                                                                <label class="badge badge-danger">لغو شده</label>
                                                            <?php endif; ?>

                                                        </td>
                                                        <td><?php echo e(number_format($order->price)); ?></td>
                                                        <td><?php echo e($order->created_at); ?></td>

                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders')): ?>
                                                                <a href="<?php echo e(route('admin.orders.status.edit',$order)); ?>" class="action-icon"> <i
                                                                        class="zmdi zmdi-view-list zmdi-custom"></i></a>

                                                                <a href="" class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders')): ?>
                                                                <button wire:click="deleteId(<?php echo e($order->id); ?>)"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <?php echo e($orders->links()); ?>

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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\order.blade.php ENDPATH**/ ?>