<?php $__env->startSection('title', 'ویرایش دسته محصول سطح سه'); ?>
<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/default-assets/select.bootstrap4.css')); ?>">

<?php $__env->stopSection(); ?>
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 box-margin height-card">
                        <div class="card card-body">
                            <div class="row">
                                <a href="<?php echo e(route('admin.product.categories')); ?>" class="btn btn-info col-6"
                                    style="max-height:30px;margin-bottom:10px;border-left:2px solid white"><i class="fa fa-plus-square"></i> دسته
                                    بندی سطح یک</a>
                                <a href="<?php echo e(route('admin.product.categories.level2')); ?>" class="btn btn-info col-6"
                                    style="max-height:30px;margin-bottom:10px"><i class="fa fa-plus-square"></i> دسته
                                    بندی سطح دو</a>
                            </div>

                            <h4 class="card-title">ویرایش دسته محصول سطح سه</h4>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form wire:submit.prevent='CategoryForm'>
                                        <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="form-group">
                                            <label for="exampleInputEmail12">دسته مادر:</label>
                                            <div wire:ignore>
                                                <select class="js-example-basic-single form-control" required="required"
                                                    wire:model.blur="parent_id" id="parents" style="width: 100%;">
                                                    <?php $__currentLoopData = $parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item->id); ?>"
                                                            <?php echo e($item->id == $category->parent_id ? 'selected' : ''); ?>>
                                                            <?php echo e($item->title); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان دسته بندی:</label>
                                            <input type="text" wire:model.blur='category.title' class="form-control"
                                                id="exampleInputEmail111">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">توضیحات دسته بندی:</label>
                                            <textarea wire:model.blur='category.description' class="form-control" id="exampleInputEmail111"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">عنوان متا:</label>
                                            <input type="text" wire:model.blur='category.metaTitle'
                                                class="form-control" id="meta-title">
                                            <div id="counter1" style="font-size:12px"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail111">توضیحات متا:</label>
                                            <textarea wire:model.blur='category.metaDescription' class="form-control" id="meta-description"></textarea>
                                            <div id="counter2" style="font-size:12px"></div>
                                        </div>
                                        <div class="checkbox checkbox-primary d-inline">
                                            <input type="checkbox"
                                                wire:model.live="Footerlogo.isActive"
                                                id="checkbox-p-1">
                                            <label for="checkbox-p-1"
                                                class="cr">فعال</label>
                                        </div>
                                        <button type="submit" class="btn btn-outline-success mb-2 mr-2"
                                            style="float:left;"><i class="fa fa-save"></i> ذخیره</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">لیست دسته بندی های محصولات</h4>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-trash')): ?>
                                    <a href="<?php echo e(route('admin.product.categories.trash')); ?>" type="button"
                                        class="btn btn-danger mb-2 mr-2" style="float:left;margin-top:-37px;"><i
                                            class="fa fa-trash"></i> سطل زباله <span class="badge badge-danger">
                                            <?php echo e(\App\Models\Admin\products\Category::onlyTrashed()->count()); ?>

                                        </span></a>
                                <?php endif; ?>
                                
                                <a href="<?php echo e(route('admin.product.categories')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-plus-square"></i> افزودن</a>

                                <hr>
                                <input wire:model.live="search" type="search" class="form-control mb-2 w-50 float-left"
                                    placeholder="جستجو...">

                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap"
                                    style="width:102%" wire:init='loadCategory'>
                                    <thead>
                                        <tr>
                                            <th>نام دسته بندی</th>
                                            <th>دسته مادر</th>
                                            <th>سطح</th>
                                            <th>وضعیت</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>

                                    <?php if($readyToLoad): ?>
                                        <tbody>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($category->title); ?></td>
                                                    <td><?php echo e(isset($category->parent->title) ? $category->parent->title : '-'); ?>

                                                    </td>
                                                    <td>سطح <?php echo e($category->level); ?></td>
                                                    <td>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-categories-edit')): ?>
                                                            <?php if($category->isActive == 1): ?>
                                                                <a wire:click="changeStatus(<?php echo e($category->id); ?>)"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-success">فعال</span></a>
                                                            <?php else: ?>
                                                                <a wire:click="changeStatus(<?php echo e($category->id); ?>)"
                                                                    style="cursor:pointer"><span
                                                                        class="badge badge-danger">غیرفعال</span></a>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('product-categories-edit')): ?>
                                                            <?php if($category->isActive == 1): ?>
                                                                <span style="cursor:pointer"><span
                                                                        class="badge badge-success">فعال</span></span>
                                                            <?php else: ?>
                                                                <span style="cursor:pointer"><span
                                                                        class="badge badge-danger">غیرفعال</span></span>
                                                            <?php endif; ?>
                                                        <?php endif; ?>

                                                    </td>
                                                    <td>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-categories-edit')): ?>
                                                            <?php if($category->level == 1): ?>
                                                                <a href="<?php echo e(route('admin.product.categories.edit', $category->id)); ?>"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            <?php elseif($category->level == 2): ?>
                                                                <a href="<?php echo e(route('admin.product.categories.edit.level2', $category->id)); ?>"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(route('admin.product.categories.edit.level3', $category->id)); ?>"
                                                                    class="action-icon"> <i
                                                                        class="zmdi zmdi-edit zmdi-custom"></i></a>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product-categories-delete')): ?>
                                                            <button wire:click="deleteId(<?php echo e($category->id); ?>)"
                                                                data-toggle="modal" data-target="#exampleModal"
                                                                class="action-icon"> <i
                                                                    class="zmdi zmdi-delete zmdi-custom"></i></button>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <?php echo e($categories->links()); ?>

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

    <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('admin/js/MaxLength.min.js')); ?>"></script>
        <script>
            $(document).ready(function() {

                //Specifying the Character Count control explicitly
                $("#meta-title").MaxLength({
                    MaxLength: 60,
                    CharacterCountControl: $('#counter1')
                });
                $("#meta-description").MaxLength({
                    MaxLength: 160,
                    CharacterCountControl: $('#counter2')
                });

            });

            $(document).ready(function() {
                $('#parents').select2();
                $('#parents').on('change', function(e) {
                    let data = $(this).val();
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('parent_id', data);
                });
                window.livewire.on('ParentStore', () => {
                    $('#parents').select2();
                });
            });
        </script>
    <?php $__env->stopSection(); ?>
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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\products\categories\edit\level3.blade.php ENDPATH**/ ?>