<?php $__env->startSection('title','فراموشی رمز عبور'); ?>
<div>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="<?php echo e(route('home')); ?>" class="logo-account"><img src="<?php echo e(asset('/home/images/logo.png')); ?>" alt="logo"></a>
                <span class="account-head-line" style="text-align:center">فراموشی رمز عبور</span>
                <div class="content-account">
                    <hr>
                    <form wire:submit.prevent='ForgetForm' id="login">

                        <label for="mobile">شماره موبایل:</label>
                        <input type="text" inputmode="numeric" id="mobile" wire:model.defer="mobile" class="input-email-account" placeholder="">
                        <div class="parent-btn">
                            <button class="dk-btn dk-btn-info" type="submit">
                                ارسال کد تائیدیه
                                <i class="fa fa-sign-in sign-in"></i>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH E:\Becafe\Becofe\resources\views\livewire\home\users\fotget-pass.blade.php ENDPATH**/ ?>