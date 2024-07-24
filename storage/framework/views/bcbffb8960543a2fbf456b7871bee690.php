<?php $__env->startSection('title','برچسب های فوتر'); ?>

<div>
    <div class="container-fluid">
        <div class="inbox-area">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-sm-flex">
                                <div class="mail-side-menu mb-30">
                                    <div class="ibox-content mailbox-content">
                                        <div class="file-manager clearfix">
                                            <!-- Title -->
                                            <ul class="folder-list">
                                                
                                                <li class="active"><a href="<?php echo e(route('admin.settings.footer.label')); ?>"> برچسب ها </a></li>
                                                <li><a href="<?php echo e(route('admin.settings.footer.social')); ?>"> شبکه های اجتماعی </a></li>
                                            </ul>
                                            
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mail-body--area">
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن برگشت به بالای سایت</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="uplable"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر اول</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="widerLable1"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر دوم</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="widerLable2"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر سوم</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="widerLable3"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر چهارم</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="widerLable4"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">تیتر فوتر پنجم</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="widerLable5"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن خبرنامه</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="rrsLable"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن شبکه های اجتماعی</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="soctaiLable"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن پشتیبانی</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="suppirtLable"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن شماره تلفن</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="phoneLable"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن آدرس ایمیل</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="emailLable"  type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="col-form-label">متن آدرس فروشگاه</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input class="form-control" wire:model.live="addresLable"  type="text">
                                        </div>
                                    </div>

                                    <button type="submit" wire:click="update()" class="btn btn-outline-success mb-2 mr-2   "  style="float:left; "><i class="fa fa-save"></i> ذخیره</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\Becafe\Becofe\resources\views\livewire\home\admin\settings\footer\lable.blade.php ENDPATH**/ ?>