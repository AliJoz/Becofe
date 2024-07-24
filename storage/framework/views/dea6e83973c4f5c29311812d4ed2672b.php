<?php $__env->startSection('title', 'گارانتی محصولات'); ?>

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-garanties-create')): ?>

                        <div class="col-xl-4 box-margin height-card">
                            <div class="card card-body">

                                <h4 class="card-title">افزودن گارانتی محصولات</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form wire:submit.prevent='GarantyForm'>
                                            <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <div class="form-group">
                                                <label for="exampleInputEmail111">عنوان گارانتی:</label>
                                                <input type="text" wire:model.blur='garanty.title' class="form-control"
                                                    id="exampleInputEmail111">
                                            </div>

                                            <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                                style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('product-garanties-create')): ?>
                        <div class="col-lg-12 box-margin">
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-garanties-create')): ?>
                            <div class="col-12 col-lg-8 box-margin">
                            <?php endif; ?>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">لیست گارانتی محصولات</h4>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-garanties-trash')): ?>
                                        <a href="<?php echo e(route('admin.product.garanties.trash')); ?>" type="button"
                                            class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                                <?php echo e(\App\Models\Admin\products\Garanty::onlyTrashed()->count()); ?>

                                            </span></a>
                                    <?php endif; ?>
                                    
                                    <hr>
                                    <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadGaranty'>
                                        <thead>
                                            <tr>
                                                <th>عنوان گارانتی</th>
                                                <th>وضعیت</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        <?php if($readyToLoad): ?>
                                            <tbody>
                                                <?php $__currentLoopData = $garanties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $garanty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($garanty->title); ?></td>
                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-garanties-edit')): ?>
                                                                <?php if($garanty->isActive == 1): ?>
                                                                    <a wire:click="changeStatus(<?php echo e($garanty->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></a>
                                                                <?php else: ?>
                                                                    <a wire:click="changeStatus(<?php echo e($garanty->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('product-garanties-edit')): ?>
                                                                <?php if($garanty->isActive == 1): ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></span>
                                                                <?php else: ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></span>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        </td>
                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-garanties-edit')): ?>
                                                                    <a href="<?php echo e(route('admin.product.garanties.edit', $garanty->id)); ?>"
                                                                        class="action-icon"> <i
                                                                            class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-garanties-delete')): ?>
                                                                <button wire:click="deleteId(<?php echo e($garanty->id); ?>)"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <?php echo e($garanties->links()); ?>

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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\garanties\index.blade.php ENDPATH**/ ?>