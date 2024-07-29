<div>
    <?php $__env->startSection('styles'); ?>
        <script src="<?php echo e(asset('home/js/alpine.min.js')); ?>"></script>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('title','تائید موبایل'); ?>
    <div id="main">
        <div class="col-lg-4 col-md-6 col-xs-12 mx-auto">
            <div class="account-box">
                <a href="index.html" class="logo-account"><img src="<?php echo e(asset('home/images/logo.png')); ?>"
                        alt="logo"></a>
                <div class="message-light">
                    <div class="massege-light">
                        برای شماره همراه <b><?php echo e($user->mobile); ?></b> کد تایید ارسال گردید
                        <br>
                    </div>
                    <div class="content-account">
                        <form wire:submit.prevent='verifyCode'>
                            <div class="form-account-title">کد تایید را وارد کنید</div>
                            <input type="number" style="text-align:center" inputmode="numeric" required id="code"
                                wire:model.defer="code" class="input-email-account" placeholder="">

                    </div>
                    <div class="parent-btn">
                        <button class="dk-btn dk-btn-info" type="submit">
                            ثبت
                            <i class="mdi mdi-account-plus-outline sign-in"></i>
                        </button>
                    </div>
                    </form>

                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 180000)">
                        <div class="form-account-row" style="text-align:center">دریافت مجدد کد تایید(
                            <span data-countdownseconds="180" id="countdown">
                                03:00
                            </span>
                            ) دیگر
                        </div>
                    </div>

                    <div x-data="{ show: false }" x-show="show" x-init="setTimeout(() => show = true, 180000)" style="display: none">
                        <a href="" style="font-weight:bold" style="text-align:center" wire:click="resendSms(<?php echo e($this->user->id); ?>)"
                             class="link-border-verify form-account-link mt-5">ارسال مجدد کد تائید</a>
                    </div>

                </div>
                <div class="account-footer">
                    <span>کاربر جدید هستید؟</span>
                    <a href="<?php echo e(route('register')); ?>" class="btn-link-register">ثبت نام </a>
                </div>
            </div>
        </div>

    </div>
<!-- Timer alpin js -->
    <script>
        var seconds, temp;
        var GivenTime = document.getElementById('countdown').innerHTML;

        function countdown() {
            time = document.getElementById('countdown').innerHTML;
            timeArray = time.split(':')
            seconds = timeToSeconds(timeArray);
            // console.log(seconds);
            if (seconds === 0) {
                clearTimeout(timeoutMyOswego);
                return;
            }
            seconds--;
            temp = document.getElementById('countdown');
            temp.innerHTML = secondsToTime(seconds);
            timeoutMyOswego = setTimeout(countdown, 1000);
        };
        countdown();

        function timeToSeconds(timeArray) {
            var minutes = (timeArray[0] * 1);
            var seconds = (minutes * 60) + (timeArray[1] * 1);
            return seconds;
        }

        function secondsToTime(secs) {
            var hours = Math.floor(secs / (60 * 60));
            hours = hours < 10 ? '0' + hours : hours;
            var divisor_for_minutes = secs % (60 * 60);
            var minutes = Math.floor(divisor_for_minutes / 60);
            minutes = minutes < 10 ? '0' + minutes : minutes;
            var divisor_for_seconds = divisor_for_minutes % 60;
            var seconds = Math.ceil(divisor_for_seconds);
            seconds = seconds < 10 ? '0' + seconds : seconds;
            return minutes + ':' + seconds;
        }
    </script>
</div><?php /**PATH E:\Becafe\Becofe\resources\views\livewire\home\users\verify-mobile.blade.php ENDPATH**/ ?>