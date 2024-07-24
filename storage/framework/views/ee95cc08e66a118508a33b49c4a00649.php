<?php $__env->startSection('title', 'تنوع محصولات'); ?>

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">


                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست محصولات فروشندگان</h4>

                                <hr>
                                <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:102%" wire:init='loadPrice'>
                                    <thead>
                                        <tr>
                                            <th>فروشنده</th>
                                            <th>موبایل</th>
                                            <th>نام محصول</th>
                                            <th>نوع گارانتی</th>
                                            <th>تعداد موجودی</th>
                                            <th>مبلغ</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ ایجاد</th>
                                        </tr>
                                    </thead>

                                    <?php if($readyToLoad): ?>
                                        <tbody>
                                            <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($price->user->name); ?></td>
                                                    <td><?php echo e($price->user->mobile); ?></td>
                                                    <td><?php echo e($price->product->title); ?></td>
                                                    <td><?php echo e($price->garanty->title); ?></td>
                                                    <td><?php echo e($price->number); ?></td>
                                                    <td><?php echo e(number_format($price->price)); ?></td>
                                                    <td>
                                                        <?php if($price->isActive == 1): ?>
                                                            <a wire:click="changeStatus(<?php echo e($price->id); ?>)"
                                                                style="cursor:pointer"><span
                                                                    class="badge badge-success">فعال</span></a>
                                                        <?php else: ?>
                                                            <a wire:click="changeStatus(<?php echo e($price->id); ?>)"
                                                                style="cursor:pointer"><span
                                                                    class="badge badge-danger">غیرفعال</span></a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?php echo e($price->created_at); ?></td>

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <?php echo e($prices->links()); ?>

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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\price.blade.php ENDPATH**/ ?>