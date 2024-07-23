<?php $__env->startSection('title', 'گزارشات سیستمی'); ?>
<div>
    <div class="data-table-area">
        <div class="container-fluid" wire:init='loadLog'>
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-2">گزارشات سیستمی</h4>
                            <hr>
                            <input wire:model.live="search" type="search"
                            class="form-control mb-2 w-50 float-left"
                            placeholder="جستجو...">

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>نام کاربر</th>
                                        <th>موبایل کاربر</th>
                                        <th>آیپی</th>
                                        <th>نوع کار</th>
                                        <th>شرح عملیات</th>
                                        <th>تاریخ انجام</th>
                                    </tr>
                                </thead>
                                <!--[if BLOCK]><![endif]--><?php if($readyToLoad): ?>

                                    <tbody>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?php echo e($log->user->name); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($log->user->mobile); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($log->ip); ?>

                                                </td>
                                                <td>
                                                    <!--[if BLOCK]><![endif]--><?php switch($log->actionType):
                                                        case ('create'): ?>
                                                            <div class="badge badge-success">ایجاد</div>
                                                        <?php break; ?>

                                                        <?php case ('delete'): ?>
                                                            <div class="badge badge-danger">حذف</div>
                                                        <?php break; ?>

                                                        <?php case ('update'): ?>
                                                            <div class="badge badge-primary">ویرایش</div>
                                                        <?php break; ?>

                                                        <?php case ('restore'): ?>
                                                            <div class="badge badge-info">بازیابی</div>
                                                        <?php break; ?>

                                                        <?php default: ?>
                                                    <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
                                                
                                                </td>
                                                <td>
                                                    <?php echo e($log->description); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($log->created_at); ?>

                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                                    </tbody>
                                    <?php echo e($logs->links()); ?>

                                <?php else: ?>
                                    <div class="alert alert-warning">
                                        در حال بارگزاری اطلاعات از پایگاه داده ....
                                    </div>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div>
    </div>
</div>
<?php /**PATH E:\Becafe\Becofe\resources\views/livewire/admin/logs/index.blade.php ENDPATH**/ ?>