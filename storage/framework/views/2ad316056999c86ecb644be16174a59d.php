<?php $__env->startSection('title', 'ایجاد کاربر'); ?>
<div>
    <div class="main-content">
        <div class="data-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-2">ایجاد کاربر</h4>
                                <a href="<?php echo e(route('admin.users')); ?>" class="btn btn-success mb-2 mr-2"
                                    style="float:left;margin-top:-37px;"><i class="fa fa-list"></i> لیست
                                    کاربران</a>
                                <hr>
                                <form role="form" wire:submit.prevent='UserForm'>
                                    <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <div class="row">
                                        <div class="col-3">
                                            <label for="">نام و نام خانوادگی:</label>
                                            <input class="form-control" wire:model.live="user.name" type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">موبایل:</label>
                                            <input class="form-control" wire:model.live="user.mobile" type="text">
                                        </div>
                                        <div class="col-3">
                                            <label for="">پست الکترونیکی:</label>
                                            <input class="form-control" wire:model.live="user.email" type="text">
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail12">
                                                    نوع کاربر:</label>
                                                <select class="form-control" wire:model.live="user.typeUser"
                                                    style="width: 100%;">
                                                    <option value="admin">مدیر
                                                    </option>
                                                    <option value="vendor">فروشنده
                                                    </option>
                                                    <option value="user">کاربر عادی
                                                    </option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label for="">رمز عبور:</label>
                                            <input class="form-control" wire:model.live="password" type="password">
                                        </div>

                                        <div class="col-3 mt-30">
                                            <div class="input-group cust-file-button mb-3">
                                                <div class="custom-file">
                                                    <input type="file" wire:model.blur="profilePhoto"
                                                        class="custom-file-input form-control" id="inputGroupFile03">
                                                    <label class="custom-file-label" for="inputGroupFile03">تصویر
                                                        پروفایل</label>
                                                    <span class="text-info" wire:target='profilePhoto'
                                                        wire:loading>درحال
                                                        بارگزاری...</span>
                                                </div>
                                            </div>
                                            <div wire:ignore id="progressbar" class="progress mb-0 mt-1 mb-1"
                                                style="display: none">
                                                <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0٪
                                                </div>
                                            </div>

                                            <?php if($profilePhoto): ?>
                                                <img class="form-control mt-3 mb-3"
                                                    src="<?php echo e($profilePhoto->temporaryUrl()); ?>" alt="">
                                            <?php endif; ?>

                                        </div>
                                        <div class="col-2">
                                            <div class="checkbox checkbox-primary d-inline">
                                                <input type="checkbox" wire:model.live="isActive" id="checkbox-p-1">
                                                <label for="checkbox-p-1" class="cr">فعال</label>
                                            </div>

                                        </div>
                                        <div class="col-2">
                                            <div class="checkbox checkbox-primary d-inline">
                                                <input type="checkbox" wire:model.live="mobile_verified_at"
                                                    id="checkbox-p-2">
                                                <label for="checkbox-p-2" class="cr">تائید موبایل</label>
                                            </div>

                                        </div>
                                        <div class="col-2">
                                            <div class="checkbox checkbox-primary d-inline">
                                                <input type="checkbox" wire:model.live="email_verified_at"
                                                    id="checkbox-p-3">
                                                <label for="checkbox-p-3" class="cr">تائید ایمیل</label>
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
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\admin\users\create.blade.php ENDPATH**/ ?>