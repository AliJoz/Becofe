<?php $__env->startSection('title','تغییر رمز عبور'); ?>
<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="<?php echo e(route('home')); ?>" class="logo-account"><img src="<?php echo e(asset('/home/images/logo.png')); ?>" alt="logo"></a>
                <span class="account-head-line" style="text-align:center">تغییر رمز عبور</span>
                <div class="content-account">
                    <hr>
                    <form wire:submit.prevent='PasswordChange' id="password-change" >
                        <div class="massege-light">
                            شما در حال تغییر رمز عبور برای شماره موبایل <b><?php echo e($user->mobile); ?></b> می باشید.
                            <br>
                        </div>
                        <?php echo $__env->make('errors.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <label for="password">رمز عبور جدید</label>
                        <input type="password" required wire:model.defer='password' id="password" class="input-password" placeholder="">
                        <label for="password_confirmation">تکرار رمز عبور جدید</label>
                        <input type="password" required id="password_confirmation" wire:model.defer='password_confirmation' class="input-password" placeholder="">
                        <div class="parent-btn">
                            <button class="dk-btn dk-btn-info" type="submit">
                                تغییر رمز عبور
                                <i class="fa fa-refresh sign-in"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH E:\Becafe\Becofe\resources\views\livewire\home\users\change-pass.blade.php ENDPATH**/ ?>