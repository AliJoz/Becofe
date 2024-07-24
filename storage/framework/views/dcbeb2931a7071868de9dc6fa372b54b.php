<?php $__env->startSection('title', 'رنگ محصولات'); ?>

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-colors-create')): ?>

                        <div class="col-xl-4 box-margin height-card">
                            <div class="card card-body">

                                <h4 class="card-title">افزودن رنگ محصولات</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form wire:submit.prevent='ColorForm'>
                                            <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <div class="form-group">
                                                <label for="exampleInputEmail111">عنوان رنگ:</label>
                                                <input type="text" wire:model.blur='color.title' class="form-control"
                                                    id="exampleInputEmail111">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail111">مقدار رنگ:</label>
                                                <input type="text" wire:model.blur='color.value' class="form-control"
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

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('product-colors-create')): ?>
                        <div class="col-lg-12 box-margin">
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-colors-create')): ?>
                            <div class="col-12 col-lg-8 box-margin">
                            <?php endif; ?>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">لیست رنگ محصولات</h4>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-colors-trash')): ?>
                                        <a href="<?php echo e(route('admin.product.colors.trash')); ?>" type="button"
                                            class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                                <?php echo e(\App\Models\Admin\products\Color::onlyTrashed()->count()); ?>

                                            </span></a>
                                    <?php endif; ?>
                                    
                                    <hr>
                                    <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadColor'>
                                        <thead>
                                            <tr>
                                                <th>عنوان رنگ</th>
                                                <th>مقدار رنگ</th>
                                                <th>وضعیت</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        <?php if($readyToLoad): ?>
                                            <tbody>
                                                <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($color->title); ?></td>
                                                        <td><div style="width:10px;height:10px;background-color:<?php echo e($color->value); ?>"></div></td>
                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-colors-edit')): ?>
                                                                <?php if($color->isActive == 1): ?>
                                                                    <a wire:click="changeStatus(<?php echo e($color->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></a>
                                                                <?php else: ?>
                                                                    <a wire:click="changeStatus(<?php echo e($color->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('product-colors-edit')): ?>
                                                                <?php if($color->isActive == 1): ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></span>
                                                                <?php else: ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></span>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        </td>
                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-colors-edit')): ?>
                                                                    <a href="<?php echo e(route('admin.product.colors.edit', $color->id)); ?>"
                                                                        class="action-icon"> <i
                                                                            class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-colors-delete')): ?>
                                                                <button wire:click="deleteId(<?php echo e($color->id); ?>)"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <?php echo e($colors->links()); ?>

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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\colors\index.blade.php ENDPATH**/ ?>