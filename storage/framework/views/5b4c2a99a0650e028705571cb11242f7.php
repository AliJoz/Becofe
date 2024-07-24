<?php $__env->startSection('title', 'مدیریت تراکنش های بانکی'); ?>

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
                                    <h4 class="card-title mb-2">لیست تراکنش ها</h4>

                                    <hr>
                                    <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadTransaction'>
                                        <thead>
                                            <tr>
                                                <th>شماره تراکنش</th>
                                                <th>سفارش دهنده</th>
                                                <th>موبایل</th>
                                                <th>شماره سبدخرید</th>
                                                <th>وضعیت تراکنش</th>
                                                <th>مبلغ کل</th>
                                                <th>تاریخ</th>
                                            </tr>
                                        </thead>

                                        <?php if($readyToLoad): ?>
                                            <tbody>
                                                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($transaction->transaction_id); ?></td>
                                                        <td><?php echo e($transaction->user->name); ?></td>
                                                        <td><?php echo e($transaction->user->mobile); ?></td>
                                                        <td><?php echo e($transaction->cart_id); ?></td>
                                                        <td>
                                                            <?php if($transaction->status == 2): ?>
                                                                <label class="badge badge-success">موفق</label>
                                                            <?php elseif($transaction->status == 1): ?>
                                                                <label class="badge badge-danger">ناموفق
                                                                    </label>
                                                            <?php elseif($transaction->status == 0): ?>
                                                                <label class="badge badge-danger-lighten">لغو شده</label>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td><?php echo e(number_format($transaction->paid)); ?></td>
                                                        <td><?php echo e($transaction->created_at); ?></td>

                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <?php echo e($transactions->links()); ?>

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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\transaction.blade.php ENDPATH**/ ?>