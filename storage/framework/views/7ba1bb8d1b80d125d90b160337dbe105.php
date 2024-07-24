<?php $__env->startSection('title', 'مدیریت سفارش'); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">سفارش شماره #<?php echo e($order->id); ?></h4>
                                <hr>
                                <form method="post" action="<?php echo e(route('admin.orders.status.update', $order->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('patch'); ?>
                                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <div class="row">
                                        <div class="col-3 mt-30">
                                            <div class="form-group">

                                                <label for="">وضعیت سفارش:</label>
                                                <select name="status">
                                                    <option value="paid" <?php echo e($order->status=="paid" ? "selected" : ""); ?>>پرداخت شده</option>
                                                    <option value="unpaid" <?php echo e($order->status=="unpaid" ? "selected" : ""); ?>>پرداخت نشده</option>
                                                    <option value="cancelled" <?php echo e($order->status=="cancelled" ? "selected" : ""); ?>>منصرف شده</option>
                                                </select>

                                            </div>

                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-outline-success mt-3 mb-2 mr-2"
                                        style="float:left;"><i class="fa fa-save"></i> ثبت</button>

                                </form>
                                <label for="">نام کاربر: <?php echo e($order->user->name); ?></label><br>
                                <label for="">موبایل کاربر: <?php echo e($order->user->mobile); ?></label><br>
                                <label for="">آدرس کاربر: <?php echo e($address->address); ?></label>
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap" style="width:102%"
                                wire:init='loadOrder'>
                                <thead>
                                    <tr>
                                        <th>شماره سفارش</th>
                                        <th>نام محصول</th>
                                        <th>تعداد</th>
                                        <th>مبلغ</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->order->id); ?></td>
                                            <td><?php echo e($item->product->title); ?></td>
                                            <td><?php echo e($item->number); ?></td>
                                            <td><?php echo e(number_format($item->price)); ?></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->

                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\products-order.blade.php ENDPATH**/ ?>