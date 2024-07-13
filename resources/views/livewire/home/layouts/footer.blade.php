<div>
    <!--   Footer---------------------------->
    <footer>
        <div class="footer-jump">
            <a href="#">
                <span class="footer-jump-angle"><i class="fa fa-angle-up"></i>{{ $footer->uplable }}</span>
            </a>
        </div>

         <div class="container">
            {{-- <div class="footer-inner-box">
                @foreach ($topLogoFooter as $logo)
                    <a href="#" class="footer-badge">
                        <img src="{{ $logo->image }}" alt="badge">
                        <span class="item-feature">{{ $logo->title }}</span>
                    </a>
                @endforeach
            </div> --}}
        </div>
      {{--  <div class="col-12">
            <div class="middle-bar-footer">
                <div class="col-lg-9 col-xs-12 pull-right">
                    <div class="footer-links">
                        @if ($menus1->count() != 0)
                            <div class="links-col">
                                <a href="#" class="head-line">{{ $footer->widerLable1 }}</a>
                                <ul class="links-ul">
                                    @foreach ($menus1 as $menu)
                                        <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($menus2->count() != 0)
                            <div class="links-col">
                                <a href="#" class="head-line">{{ $footer->widerLable2 }}</a>
                                <ul class="links-ul">
                                    @foreach ($menus2 as $menu)
                                        <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($menus3->count() != 0)

                            <div class="links-col">
                                <a href="#" class="head-line">{{ $footer->widerLable3 }}</a>
                                <ul class="links-ul">
                                    @foreach ($menus3 as $menu)
                                        <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($menus4->count() != 0)

                            <div class="links-col">
                                <a href="#" class="head-line">{{ $footer->widerLable4 }}</a>
                                <ul class="links-ul">
                                    @foreach ($menus4 as $menu)
                                        <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($menus5->count() != 0)

                            <div class="links-col">
                                <a href="#" class="head-line">{{ $footer->widerLable5 }}</a>
                               <ul class="links-ul">
                                    @foreach ($menus5 as $menu)
                                        <li><a href="{{ $menu->url }}">{{ $menu->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                         @endif -
                        <div class="links-col">
                            <a href="#" class="head-line">نماد ها</a>
                             <ul class="links-ul">
                                {!! $footer->enamad !!}
                            </ul>
                        </div>

                    </div>
                </div>

              <div class="col-lg-3 col-xs-12 pull-left">
                    <div class="footer-form">
                        <span class="newslitter-form">{{ $footer->rrsLable }}</span>

                        <form action="#">
                            <input type="text" class="input-footer" placeholder="آدرس ایمیل خود را وارد کنید">

                            <button class="btn-footer-post">ارسال</button>
                        </form>
                    </div>

                    <div class="footer-social">
                        <span class="newslitter-form-social">{{ $footer->soctaiLable }}</span>

                       <div class="social-links">
                            <a target="_blank" href="{{ $footer->socialLink1 }}"><i
                                    class="{{ $footer->socialIcon1 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink2 }}"><i
                                    class="{{ $footer->socialIcon2 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink3 }}"><i
                                    class="{{ $footer->socialIcon3 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink4 }}"><i
                                    class="{{ $footer->socialIcon4 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink5 }}"><i
                                    class="{{ $footer->socialIcon5 }}"></i></a>
                            <a target="_blank" href="{{ $footer->socialLink6 }}"><i
                                    class="{{ $footer->socialIcon6 }}"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="footer-address">
                <div class="footer-contact">
                     <ul>
                        <li>{{ $footer->suppirtLable }}</li>
                        <li style="float:right">{{ $footer->phoneLable }}{{ $footer->phone }}</li>
                        <li class="email-title">{{ $footer->emailLable }}<a
                                href="mailto:{{ $footer->email }}">{{ $footer->email }}</a></li>
                        <li class="email-title">{{ $footer->addresLable }}{{ $footer->address }}</li>
                    </ul>
                </div>

                <div class="address-images">
                    <a href="{{ $footer->linkApp1 }}"><img src="{{ $footer->imageApp1 }}"></a>
                    <a href="{{ $footer->linkApp2 }}"><img src="{{ $footer->imageApp2 }}"></a>
                </div>
            </div>
        </div>

        <div class="more-info">
            <div class="col-12">
                <div class="about-site">
                    <h1>{{ $footer->aboutHeadLable }}</h1>
                    <p>{{ $footer->aboutbodyLable }}</p>

                     <div class="footer-inner-box">
                        @foreach ($bottomLogoFooter as $logo)
                            <a href="#" class="footer-badge">
                                <img src="{{ $logo->image }}" style="width: 130px !important;" alt="badge">
                            </a>
                       @endforeach
                     </div>
                 </div>

                <div class="copy-right-footer">
                    <p>{{ $footer->copyright }}</p>
                </div>
            </div> --}}
        {{-- </div> --}}
    </footer>
    <!--   Footer---------------------------->

</div>
