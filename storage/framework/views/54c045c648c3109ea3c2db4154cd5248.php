<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/default-assets/select.bootstrap4.css')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title', 'ویرایش محصول'); ?>
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">ویرایش محصول</h4>
                                <a href="<?php echo e(route('admin.products')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list"></i> لیست
                                    محصولات</a>
                                <hr>
                                <form role="form" wire:submit.prevent='ProductEditForm'>
                                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="">عنوان محصول:</label>
                                            <input class="form-control" wire:model.live="product.title" type="text">
                                        </div>
                                        <div class="col-6">
                                            <label for="">لینک محصول:</label>
                                            <input class="form-control" wire:model.live="product.slug" type="text">
                                        </div>
                                        <div class="col-4 mt-30">
                                            <div class="form-group">
                                                <label for="">برچسب ها:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" multiple="multiple" wire:model.live="tags"
                                                        id="tags" style="width: 100%;">
                                                        <?php $__currentLoopData = \App\Models\Admin\Products\Tag::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($tag->id); ?>"
                                                                <?php echo e(in_array($tag->id,$product->tags()->pluck('id')->toArray())? 'selected': ''); ?>>
                                                                <?php echo e($tag->title); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-4 mt-30">
                                            <div class="form-group">
                                                <label for="">گارانتی:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.live="product.garanty_id"
                                                        id="garanty_id" style="width: 100%;">
                                                        <option value="">--انتخاب گارانتی--</option>
                                                        <?php $__currentLoopData = \App\Models\Admin\Products\Garanty::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $garanty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($garanty->id); ?>"
                                                                <?php echo e($product->garanty_id == $garanty->id ? 'selected' : ''); ?>>
                                                                <?php echo e($garanty->title); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 mt-30">
                                            <div class="form-group">
                                                <label for="">رنگ ها:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" multiple="multiple"
                                                        wire:model.live="colors" id="colors" style="width: 100%;">
                                                        <?php $__currentLoopData = \App\Models\Admin\Products\Color::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($color->id); ?>"
                                                                <?php echo e(in_array($color->id,$product->colors()->pluck('id')->toArray())? 'selected': ''); ?>

                                                                style="color:<?php echo e($color->value); ?> !important">
                                                                <?php echo e($color->title); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-3 mt-30">
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">دسته بندی سطح 1:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.live="product.level1_id"
                                                        id="level1_id" style="width: 100%;">
                                                        <option value="">--انتخاب دسته بندی سطح 1--</option>
                                                        <?php $__currentLoopData = \App\Models\Admin\Products\Category::where('level', 1)->where('isActive', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($category->id); ?>"
                                                                <?php echo e($product->level1_id == $category->id ? 'selected' : ''); ?>>
                                                                <?php echo e($category->title); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-3 mt-30">
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">دسته بندی سطح 2:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.live="product.level2_id"
                                                        id="level2_id" style="width: 100%;">
                                                        <option value="">--انتخاب دسته بندی سطح 2--</option>
                                                        <?php $__currentLoopData = \App\Models\Admin\Products\Category::where('level', 2)->where('isActive', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($category->id); ?>"
                                                                <?php echo e($product->level2_id == $category->id ? 'selected' : ''); ?>>
                                                                <?php echo e($category->title); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-3 mt-30">
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">دسته بندی سطح 3:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.live="product.level3_id"
                                                        id="level3_id" style="width: 100%;">
                                                        <option value="">--انتخاب دسته بندی سطح 3--</option>
                                                        <?php $__currentLoopData = \App\Models\Admin\Products\Category::where('level', 3)->where('isActive', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($category->id); ?>"
                                                                <?php echo e($product->level3_id == $category->id ? 'selected' : ''); ?>>
                                                                <?php echo e($category->title); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-3 mt-30">
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">برند محصول:</label>
                                                <div wire:ignore>
                                                    <select class="form-control" wire:model.live="product.brand_id"
                                                        id="brand_id" style="width: 100%;">
                                                        <option value="">--انتخاب برند محصول--</option>
                                                        <?php $__currentLoopData = \App\Models\Admin\Products\Brand::where('isActive', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($brand->id); ?>"
                                                                <?php echo e($product->brand_id == $brand->id ? 'selected' : ''); ?>>
                                                                <?php echo e($brand->title); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-30">
                                        <label for="">توضیحات کوتاه:</label>
                                        <textarea wire:model.live="product.description" class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="row mt-30">
                                        <label for="">توضیحات کامل:</label>
                                        <textarea wire:model.live="product.body" id="body" class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="row mt-30">
                                        <div class="col-3">
                                            <label for="">قیمت محصول:</label>
                                            <input class="form-control" wire:model.live="product.price" type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">قیمت با تخفیف:</label>
                                            <input class="form-control" wire:model.live="product.discountPrice"
                                                type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">موجودی انبار:</label>
                                            <input class="form-control" wire:model.live="product.number" type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">وزن محصول:</label>
                                            <input class="form-control" wire:model.live="product.weight" type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">حداکثر سفارش:</label>
                                            <input class="form-control" wire:model.live="product.orderMax" type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">حداقل سفارش:</label>
                                            <input class="form-control" wire:model.live="product.orderMin" type="text">
                                        </div>


                                        <div class="col-3 mt-30">
                                            <div class="input-group cust-file-button mb-3">
                                                <div class="custom-file">
                                                    <input type="file" wire:model.blur="image"
                                                        class="custom-file-input form-control" id="inputGroupFile03">
                                                    <label class="custom-file-label" for="inputGroupFile03">تصویر
                                                        محصول</label>
                                                    <span class="text-info" wire:target='image' wire:loading>درحال
                                                        بارگزاری...</span>
                                                </div>
                                            </div>
                                            <div wire:ignore id="progressbar" class="progress mb-0 mt-1 mb-1"
                                                style="display: none">
                                                <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0٪
                                                </div>
                                            </div>

                                            <?php if($image): ?>
                                                <img class="form-control mt-3 mb-3"
                                                    src="<?php echo e($image->temporaryUrl()); ?>" alt="">
                                            <?php endif; ?>

                                        </div>
                                        <div class="col-1 mt-30">
                                            <div class="checkbox checkbox-primary d-inline">
                                                <input type="checkbox" wire:model.live="product.isActive" id="checkbox-p-1">
                                                <label for="checkbox-p-1" class="cr">فعال</label>
                                            </div>

                                        </div>
                                        <div class="col-2 mt-30">
                                            <div class="checkbox checkbox-primary d-inline">
                                                <input type="checkbox" wire:model.live="product.special" id="checkbox-p-2">
                                                <label for="checkbox-p-2" class="cr">محصول ویژه</label>
                                            </div>

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success mt-3 mb-2 mr-2"
                                        style="float:left;"><i class="fa fa-save"></i> ذخیره</button>

                                </form>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:load', () => {
            let progressSection = document.querySelector('#progressbar'),
                progressBar = progressSection.querySelector('.progress-bar');

            document.addEventListener('livewire-upload-start', () => {
                console.log('شروع بارگزاری');
                progressSection.style.display = 'flex';
            });

            document.addEventListener('livewire-upload-finish', () => {
                console.log('اتمام بارگزاری');
                progressSection.style.display = 'none';
            });

            document.addEventListener('livewire-upload-error', () => {
                console.log('خطا در بارگزاری');
                progressSection.style.display = 'none';
            });

            document.addEventListener('livewire-upload-progress', (event) => {
                console.log(`${event.detail.progress}%`);
                progressBar.style.width = `${event.detail.progress}%`;
                progressBar.textContent = `${event.detail.progress}%`;
            });
        });
    </script>


</div>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('#tags').select2();
            $('#tags').on('change', function(e) {
                let data = $(this).val();
                window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('tags', data);
            });
            window.livewire.on('tagStore', () => {
                $('#tags').select2();
            });
        });

        $(document).ready(function() {
            $('#colors').select2();
            $('#colors').on('change', function(e) {
                let data = $(this).val();
                window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('colors', data);
            });
            window.livewire.on('colorStore', () => {
                $('#colors').select2();
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\products\edit.blade.php ENDPATH**/ ?>