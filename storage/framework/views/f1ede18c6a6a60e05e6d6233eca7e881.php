<?php $__env->startSection('title', 'مدیریت محصولات'); ?>

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
                                    <h4 class="card-title mb-2">لیست محصولات</h4>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('products-trash')): ?>
                                        <a href="<?php echo e(route('admin.products.trash')); ?>" type="button"
                                            class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                                <?php echo e(\App\Models\Admin\products\Product::onlyTrashed()->count()); ?>

                                            </span></a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('products-create')): ?>
                                        <a href="<?php echo e(route('admin.products.create')); ?>" type="button"
                                            class="btn btn-success mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                                class="fa fa-plus"></i> افزودن محصول </a>
                                    <?php endif; ?>

                                    
                                    <hr>
                                    <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                        placeholder="جستجو...">

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                        style="width:102%" wire:init='loadProduct'>
                                        <thead>
                                            <tr>
                                                <th>نام محصول</th>
                                                <th>مبلغ</th>
                                                <th>مبلغ با تخفیف</th>
                                                <th>مشاهده محصول</th>
                                                <th>محصول ویژه</th>
                                                <th>تاریخ ایجاد</th>
                                                <th>وضعیت</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>

                                        <?php if($readyToLoad): ?>
                                            <tbody>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><a href="<?php echo e($product->slug); ?>"><?php echo e($product->title); ?></a>
                                                        </td>
                                                        <td><?php echo e(number_format($product->price)); ?></td>
                                                        <td><?php echo e(number_format($product->discountPrice)); ?></td>
                                                        <td><?php echo e($product->viewCount); ?></td>

                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('products-edit')): ?>
                                                                <?php if($product->special == 1): ?>
                                                                    <a wire:click="changeSpecial(<?php echo e($product->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">بلی</span></a>
                                                                <?php else: ?>
                                                                    <a wire:click="changeSpecial(<?php echo e($product->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">خیر</span></a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('products-edit')): ?>
                                                                <?php if($product->special == 1): ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></span>
                                                                <?php else: ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></span>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        </td>
                                                        <td><?php echo e($product->created_at); ?></td>
                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('products-edit')): ?>
                                                                <?php if($product->isActive == 1): ?>
                                                                    <a wire:click="changeStatus(<?php echo e($product->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></a>
                                                                <?php else: ?>
                                                                    <a wire:click="changeStatus(<?php echo e($product->id); ?>)"
                                                                        style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('products-edit')): ?>
                                                                <?php if($product->isActive == 1): ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-success">فعال</span></span>
                                                                <?php else: ?>
                                                                    <span style="cursor:pointer"><span
                                                                            class="badge badge-danger">غیرفعال</span></span>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        </td>
                                                        <td>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('products-edit')): ?>
                                                            <a href="<?php echo e(route('admin.product.attributes.create', $product->id)); ?>"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-view-list zmdi-custom"></i></a>

                                                                <a href="<?php echo e(route('admin.products.edit', $product->id)); ?>"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>

                                                            <?php endif; ?>
                                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('products-delete')): ?>
                                                                <button wire:click="deleteId(<?php echo e($product->id); ?>)"
                                                                    data-toggle="modal" data-target="#exampleModal"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <?php echo e($products->links()); ?>

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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\products\index.blade.php ENDPATH**/ ?>