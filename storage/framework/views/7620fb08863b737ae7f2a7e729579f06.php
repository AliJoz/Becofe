<?php $__env->startSection('title', 'داشبورد'); ?>
<div>
    <div class="dashboard-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">نظرات تائید نشده</h4>
                            <div class="table-responsive" id=" ">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>نظردهنده</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2864</td>
                                            <td>81</td>
                                            <td>1،912.00 تومان</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" style="width: 82%"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 box-margin" wire:init='loadLogs'>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">گزارشات سیستمی</h5>
                            <div class="product-table-area">
                                <div class="table-responsive" id=" ">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>نام کاربر</th>
                                                <th>نقش کاربری</th>
                                                <th>موبایل کاربر</th>
                                                <th>آیپی</th>
                                                <th>نوع کار</th>
                                                <th>شرح عملیات - عنوان</th>
                                                <th>تاریخ انجام</th>

                                            </tr>
                                        </thead>
                                        <!--[if BLOCK]><![endif]--><?php if($readyToLoad): ?>

                                            <tbody>
                                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>
                                                            <!--[if BLOCK]><![endif]--><?php if($log->user_id == null): ?>
                                                                ناشناس
                                                            <?php else: ?>
                                                                <?php echo e($log->user->name); ?>

                                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                        </td>
                                                        <td>
                                                            <!--[if BLOCK]><![endif]--><?php if($log->user_id == null): ?>
                                                                -
                                                            <?php else: ?>
                                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                                        </td>
                                                        <td>
                                                            <!--[if BLOCK]><![endif]--><?php if($log->user_id == null): ?>
                                                                -
                                                            <?php else: ?>
                                                                <?php echo e($log->user->mobile); ?>

                                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

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

                                                               

                                                                <?php case ('verifyCode'): ?>
                                                                    <div class="badge badge-warning">تائید موبایل</div>
                                                                <?php break; ?>

                                                                <?php case ('login'): ?>
                                                                    <div class="badge" style="background-color:orange;color:white">ورود به سایت</div>
                                                                <?php break; ?>

                                                                <?php case ('logout'): ?>
                                                                    <div class="badge" style="background-color:orange;color:white">خروج از سایت</div>
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
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

                                            </tbody>
                                        <?php else: ?>
                                            <div class="alert alert-warning">
                                                در حال بارگزاری اطلاعات از پایگاه داده ....
                                            </div>
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-12 mb-3">
                    <div class="card bg-boxshadow full-height">
                        <div
                            class="card-header bg-transparent user-area d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">وضعیت سفارشات</h5>
                            <!-- Nav Tabs -->
                            <ul class="nav total-earnings nav-tabs mb-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link show" id="today-users-tab" data-toggle="tab" href="#today-users"
                                        role="tab" aria-controls="today-users" aria-selected="false">در حال پردازش</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-0 active" id="month-users-tab" data-toggle="tab"
                                        href="#month-users" role="tab" aria-controls="month-users"
                                        aria-selected="true">آماده ارسال</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="userList2">
                                <div class="tab-pane fade" id="today-users" role="tabpanel"
                                    aria-labelledby="today-users-tab">
                                    <div class="table-responsive" id=" ">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>شماره سفارش</th>
                                                    <th>نام خریدار</th>
                                                    <th>موبایل</th>
                                                    <th>مبلغ قابل پرداخت</th>
                                                    <th>تاریخ و ساعت</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div>
                                                                <span>تلفن تلفن</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2864</td>
                                                    <td>81</td>
                                                    <td>1،912.00 تومان</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success" style="width: 82%">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                824
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="tab-pane fade active show" id="month-users" role="tabpanel"
                                    aria-labelledby="month-users-tab">
                                    <div class="table-responsive" id=" ">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>شماره سفارش</th>
                                                    <th>نام خریدار</th>
                                                    <th>موبایل</th>
                                                    <th>مبلغ قابل پرداخت</th>
                                                    <th>تاریخ و ساعت</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media align-items-center">
                                                            <div>
                                                                <span>تلفن تلفن</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2864</td>
                                                    <td>81</td>
                                                    <td>1،912.00 تومان</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success" style="width: 82%">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                824
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 box-margin">
                    <div class="card code-table">
                        <div class="card-body pb-0">
                            <h5 class="card-title">کاربران جدید سایت</h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>نام</th>
                                            <th>موبایل</th>
                                            <th>ایمیل</th>
                                            <th>وضعیت موبایل</th>
                                            <th>نقش کاربری</th>
                                            <th>تاریخ ایجاد</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                شماره 2154
                                            </td>
                                            <td>
                                                8965482
                                            </td>
                                            <td>
                                                1398/5/8
                                            </td>
                                            <td>
                                                7523 تومان
                                            </td>
                                            <td><a href="#!" class="badge badge-success badge-pill">فعال</a></td>
                                            <td>
                                                1400/05/02
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH E:\Becafe\Becofe\resources\views/livewire/admin/home/index.blade.php ENDPATH**/ ?>