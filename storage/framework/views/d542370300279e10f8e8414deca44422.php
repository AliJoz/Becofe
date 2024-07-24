<?php $__env->startSection('title', 'ویژگی محصولات'); ?>

<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-brands-create')): ?>
                        <div class="col-xl-4 box-margin height-card">
                            <div class="card card-body">

                                <h4 class="card-title">افزودن ویژگی محصولات</h4>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <form wire:submit.prevent='AttributeForm'>
                                            <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <div class="form-group">
                                                <label for="exampleInputEmail111">عنوان ویژگی:</label>
                                                <input type="text" wire:model.blur='attribute.title' class="form-control"
                                                    id="exampleInputEmail111">
                                            </div>
                                            <div class="checkbox checkbox-primary d-inline">
                                                <input type="checkbox" wire:model.live="attribute.isFilter" id="checkbox-p-1">
                                                <label for="checkbox-p-1" class="cr">فیلتر باشد؟</label>
                                            </div>


                                            <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                                style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('product-attributes-create')): ?>
                        <div class="col-lg-12 box-margin">
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-attributes-create')): ?>
                            <div class="col-12 col-lg-8 box-margin">
                            <?php endif; ?>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2">لیست ویژگی محصولات</h4>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-attributes-trash')): ?>
                                        <a href="<?php echo e(route('admin.product.attributes.trash')); ?>" type="button"
                                            class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                                <?php echo e(\App\Models\Admin\products\Attribute::onlyTrashed()->count()); ?>

                                            </span></a>
                                    <?php endif; ?>
                                    
                                    <hr>
                                    <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadAttribute'>
                                        <thead>
                                            <tr>
                                                <th>عنوان ویژگی</th>
                                                <th>وضعیت</th>
                                                <th>فیلتر؟</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        <?php if($readyToLoad): ?>
                                            <tbody>
                                                <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($attribute->title); ?></td>
                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-attributes-edit')): ?>
                                                                <?php if($attribute->isActive == 1): ?>
                                                                    <a wire:click="changeStatus(<?php echo e($attribute->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></a>
                                                                <?php else: ?>
                                                                    <a wire:click="changeStatus(<?php echo e($attribute->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('product-attributes-edit')): ?>
                                                                <?php if($attribute->isActive == 1): ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></span>
                                                                <?php else: ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></span>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        </td>
                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-attributes-edit')): ?>
                                                                <?php if($attribute->isFilter == 1): ?>
                                                                    <a wire:click="changeFilter(<?php echo e($attribute->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">بله</span></a>
                                                                <?php else: ?>
                                                                    <a wire:click="changeFilter(<?php echo e($attribute->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">خیر</span></a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('product-attributes-edit')): ?>
                                                                <?php if($attribute->isFilter == 1): ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">بله</span></span>
                                                                <?php else: ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">خیر</span></span>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        </td>

                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-attributes-edit')): ?>
                                                                <a href="<?php echo e(route('admin.product.attributes.value', $attribute->id)); ?>"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-view-list zmdi-custom"></i></a>
                                                                <a href="<?php echo e(route('admin.product.attributes.edit', $attribute->id)); ?>"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-attributes-delete')): ?>
                                                                <button wire:click="deleteId(<?php echo e($attribute->id); ?>)"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <?php echo e($attributes->links()); ?>

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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\attributes\index.blade.php ENDPATH**/ ?>