<?php $__env->startSection('title', 'تسویه حساب ها'); ?>

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">


                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">درخواست های تسویه حساب</h4>

                                <hr>
                                <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:102%" wire:init='loadPayment'>
                                    <thead>
                                        <tr>
                                            <th>فروشنده</th>
                                            <th>موبایل</th>
                                            <th>مبلغ درخواستی</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ درخواست</th>
                                        </tr>
                                    </thead>

                                    <?php if($readyToLoad): ?>
                                        <tbody>
                                            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($payment->user->name); ?></td>
                                                    <td><?php echo e($payment->user->mobile); ?></td>
                                                    <td><?php echo e(number_format($payment->price)); ?></td>
                                                    <td>
                                                        <?php if($payment->status == "unpaid"): ?>
                                                            <a wire:click="changeStatus(<?php echo e($payment->id); ?>)"
                                                                style="cursor:pointer"><span
                                                                    class="badge badge-danger">تسویه نشده</span></a>
                                                        <?php else: ?>
                                                            <a wire:click="changeStatus(<?php echo e($payment->id); ?>)"
                                                                style="cursor:pointer"><span
                                                                    class="badge badge-success">تسویه شده</span></a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($payment->created_at); ?></td>

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <?php echo e($payments->links()); ?>

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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\payment.blade.php ENDPATH**/ ?>