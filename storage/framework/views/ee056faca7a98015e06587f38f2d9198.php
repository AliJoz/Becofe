<div>
    <!--   Footer---------------------------->
    <footer>
        <div class="footer-jump">
            <a href="#">
                <span class=" flex justify-center align-middle footer-jump-angle"><svg class="w-6 h-6 md:w-8 md:h-8 mr-3">
                    <use href="#arowdo"></use>
                  </svg> <?php echo e($footer->uplable); ?> </span>
            </a>
        </div>

        <div class="container">
            <div class="footer-inner-box">
                <a href="#" class="footer-badge">
                    <img src="<?php echo e(asset('home/images/footer-svg/delivery.svg')); ?>" alt="badge">
                    <span class="item-feature">تحویل اکسپرس</span>
                </a>

                <a href="#" class="footer-badge">
                    <img src="<?php echo e(asset('home/images/footer-svg/contact-us.svg')); ?>" alt="badge">
                    <span class="item-feature">پشتیبانی 24 ساعته</span>
                </a>

                <a href="#" class="footer-badge">
                    <img src="<?php echo e(asset('home/images/footer-svg/payment-terms.svg')); ?>" alt="badge">
                    <span class="item-feature">پرداخت در منزل</span>
                </a>

                <a href="#" class="footer-badge">
                    <img src="<?php echo e(asset('home/images/footer-svg/return-policy.svg')); ?>" alt="badge">
                    <span class="item-feature">7 روز ضمانت برگشت</span>
                </a>

                <a href="#" class="footer-badge">
                    <img src="<?php echo e(asset('home/images/footer-svg/origin-guarantee.svg')); ?>" alt="badge">
                    <span class="item-feature">ضمانت اصل بودن کالا</span>
                </a>
            </div>
        </div>
        <div class="col-12">
            <div class="middle-bar-footer">
                <div class="col-lg-9 col-xs-12 pull-right">
                    <div class="footer-links">
                        <div class="links-col">
                            <a href="#" class="head-line"><?php echo e($footer->widerLable1); ?></a>
                            <ul class="links-ul">
                                <li><a href="#">نحوه ثبت سفارش</a></li>
                                <li><a href="#">رویه ارسال سفارش</a></li>
                                <li><a href="#">شیوه‌های پرداخت</a></li>
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line"><?php echo e($footer->widerLable2); ?> </a>
                            <ul class="links-ul">
                                <li><a href="#">پرسش یه پاسخ های متداول</a></li>
                                <li><a href="#">رویه های بازگرداندن کالا</a></li>
                                <li><a href="#">شرایط استفاده</a></li>
                                <li><a href="#">حریم خصوصی</a></li>
                                <li><a href="#">گزارش باگ</a></li>
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line"><?php echo e($footer->widerLable3); ?></a>
                            <ul class="links-ul">
                                <li><a href="#">اتاق خبر دیجی استور</a></li>
                                <li><a href="#">فروش در دیجی استور</a></li>
                                <li><a href="#">فرصت های شغلی</a></li>
                                <li><a href="#">تماس با دیجی استور</a></li>
                                <li><a href="#">درباره ما دیجی استور</a></li>
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line"><?php echo e($footer->widerLable4); ?>  </a>
                            <ul class="links-ul">
                                <li><a href="#">اتاق خبر دیجی استور</a></li>
                                <li><a href="#">فروش در دیجی استور</a></li>
                                <li><a href="#">فرصت های شغلی</a></li>
                                <li><a href="#">تماس با دیجی استور</a></li>
                                <li><a href="#">درباره ما دیجی استور</a></li>
                            </ul>
                        </div>

                        <div class="links-col">
                            <a href="#" class="head-line"><?php echo e($footer->widerLable5); ?>  </a>
                            <ul class="links-ul">
                                <li><a href="#">اتاق خبر دیجی استور</a></li>
                                <li><a href="#">فروش در دیجی استور</a></li>
                                <li><a href="#">فرصت های شغلی</a></li>
                                <li><a href="#">تماس با دیجی استور</a></li>
                                <li><a href="#">درباره ما دیجی استور</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-12 pull-left">
                    <div class="footer-form">
                        <span class="newslitter-form">
                           <?php echo e($footer->rrsLable); ?>

                        </span>

                        <form action="#">
                            <input type="text" class="input-footer" placeholder="آدرس ایمیل خود را وارد کنید">

                            <button class="btn-footer-post">ارسال</button>
                        </form>
                    </div>

                    <div class="footer-social">
                        <span class="newslitter-form-social">  <?php echo e($footer->rrsLable); ?>   :</span>

                        <div class="social-links">
                            <a target="_blank" href="<?php echo e($footer->socialLink1); ?>" ><i class="<?php echo e($footer->socialIcon1); ?>"></i></a>
                            <a target="_blank" href="<?php echo e($footer->socialLink2); ?>"><i class="<?php echo e($footer->socialIcon2); ?>"></i></a>
                            <a target="_blank" href="<?php echo e($footer->socialLink3); ?>"><i class="<?php echo e($footer->socialIcon3); ?>"></i></a>
                            <a target="_blank" href="<?php echo e($footer->socialLink4); ?>"><i class="<?php echo e($footer->socialIcon4); ?>"></i></a>
                            <a target="_blank" href="<?php echo e($footer->socialLink5); ?>"><i class="<?php echo e($footer->socialIcon5); ?>"></i></a>
                            <a target="_blank" href="<?php echo e($footer->socialLink6); ?>"><i class="<?php echo e($footer->socialIcon6); ?>"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="footer-address">
                <div class="footer-contact">
                    <ul>
                        <li><?php echo e($footer->soctaiLable); ?> </li>
                        <li style="float:right"><?php echo e($footer->phoneLable); ?><?php echo e($footer->phone); ?></li>
                                <li class="email-title"><?php echo e($footer->emailLable); ?><a href="mailto:<?php echo e($footer->email); ?>"><?php echo e($footer->email); ?></a></li>
                                <li class="email-title"><?php echo e($footer->addresLable); ?><?php echo e($footer->address); ?>

                            </ul>
                </div>

                <div class="address-images">
                    <a href="#" class="bazarImg py-2">
                        <img src="<?php echo e(asset('home/images/footer-img/1090a120.png')); ?>" alt="address">
                        <img src="<?php echo e(asset('home/images/footer-img/71abe5c9.png')); ?>" alt="address">
                    </a>
                </div>
            </div>
        </div>

        <div class="more-info">
            <div class="col-12">
                <div class="about-site">
                    <h1><?php echo e($footer->aboutHeadLable); ?> </h1>
                    <p><?php echo e($footer->aboutbodyLable); ?></p>

                    <div class="footer-inner-box">
                        <a href="#" class="footer-badge">
                            <img src="<?php echo e(asset('home/images/footer-svg/footer-1.svg')); ?>" style="width: 130px !important;"
                                alt="badge">
                        </a>

                        <a href="#" class="footer-badge">
                            <img src="<?php echo e(asset('home/images/footer-svg/footer-2.svg')); ?>" style="width: 130px !important;"
                                alt="badge">
                        </a>

                        <a href="#" class="footer-badge">
                            <img src="<?php echo e(asset('home/images/footer-svg/footer-3.svg')); ?>" style="width: 130px !important;"
                                alt="badge">
                        </a>

                        <a href="#" class="footer-badge">
                            <img src="<?php echo e(asset('home/images/footer-svg/footer-4.svg')); ?>" style="width: 130px !important;"
                                alt="badge">
                        </a>
                        <a href="#" class="footer-badge">
                            <img src="<?php echo e(asset('home/images/footer-svg/footer-5.svg')); ?>" style="width: 130px !important;"
                                alt="badge">
                        </a>
                    </div>
                </div>

                <div class="copy-right-footer">
                    <p>
                        <?php echo e($footer->copyright); ?>

                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--   Footer---------------------------->

</div>
<?php /**PATH E:\Becafe\Becofe\resources\views/livewire/home/layouts/footer.blade.php ENDPATH**/ ?>