<div  >

    <svg class="hidden">
        <symbol
          id="shopping-cart"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
          />
        </symbol>
        <symbol
          id="moon"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"
          />
        </symbol>
        <symbol
          id="sun"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
          />
        </symbol>
        <symbol
          id="arrowLeft"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15"
          />
        </symbol>
        <symbol>
          <svg
            id="star"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"
            />
          </svg>
        </symbol>

    </svg>



    <header class="hidden md:flex bg-black/50 w-[98%] xl:w-[90%] h-24 mx-auto rounded-3xl z-20 items-center pr-10 pt-5 pl-4 fixed top-9 left-0 right-0 backdrop-npm startblur-[6px]"
  >
    <!-- header -->
    <div class="hedear flex justify-between w-full">
      <!-- logo -->
      <nav class="flex gap-x-4 md:gap-x-9 items-center h-14">
        <img
        class="w-[59px] h-[56px]"
        src="{{asset('img/app-logo.png')}}"
        alt="golden coffee"
        srcset=""
      />
        <ul
          class="flex items-center font-dana-R text-base gap-x-5 md:text-base lg:text-xl text-gray-300 tracking-tightest child:leading-[56px] md:gap-x-7"
        >
          <li>
            <a href="#" class="text-orange-200 font-dana-Med"> صفحه اصلی</a>
          </li>
          <li class="relative group">
            <a href="#" class="group-hover:text-orange-300 transition-colors"
              >فروشگاه</a
            >
            <div
              class="absolute p-6 w-52 opacity-0 invisible group-hover:opacity-100 group-hover:visible bg-white dark:bg-zinc-700 rounded-2xl border-t-orange-300 border-t-[3px] dark:text-white text-zinc-700 tracking-normal space-y-4 transition-all child:block font-normal child:transition-color child-hover:text-orange-300 top-full delay-75 font-dana-Med text-base"
            >
              <a href="#" >قهوه ویژه</a>
              <a href="#" >ویژه در سطح جهانی</a>
              <a href="#" >قهوه درجه یک</a>
              <a href="#">ترکیبات تجاری</a>
              <a href="#">کپسول قهوه</a>
              <a href="#">قهوه زینو برزیلی</a>
            </div>
          </li>
          <li><a href="#">دیکشنری</a></li>
          <li><a href="#">بلاگ</a></li>
          <li><a href="#">درباره ما</a></li>
          <li><a href="#">تماس ما</a></li>
        </ul>

      </nav>
      <div class="flex items-center gap-x-5 lg:gap-x-10 text-orange-200">
        <!-- icons -->
        <div class="icons gap-x-2 lg:gap-x-5 flex items-center">
          <!-- icons buy -->
          <div class="relative group cursor-pointer group-hover">
            <div class="py-3">
              <svg class="w-6 h-6 md:w-8 md:h-8">
                <use href="#shopping-cart"></use>
              </svg>
            </div>
            <div
              class="invisible w-[400px] absolute left-0 top-full group-hover:opacity-100 group-hover:visible bg-white dark:bg-zinc-700 rounded-2xl border-t-orange-300 border-t-[3px] dark:text-white text-zinc-700 text-xl tracking-normal font-normal transition-all delay-75"
            >
              <!-- top div -->
              <div
                class="flex items-center justify-between p-5 font-dana-Med text-base tracking-tighter"
              >
                <span class="text-gray-300 text-base">1 مورد</span>
                <a href="#" class="text-orange-200 flex items-center">
                  مشاهده سبد خرید
                  <svg class="w-5 h-5">
                    <use href="#left"></use>
                  </svg>
                </a>
              </div>
              <!-- card body -->
              <div
                class="mb-2 pb-2 border-b border-gray-500 dark:border-b-white/50 divide-y divide-gray-100 dark:divide-white/10 child:py-5"
              >
                <div class="flex gap-x-2.5">
                  <img
                    class="w-30 h-30"
                    src=" {{asset('img/products/p1.png')}}"
                    alt="Product"
                    srcset=""
                  />
                  <div class="flex flex-col justify-between">
                    <h4
                      class="text-zinc-700 text-base font-dana-Med font-medium dark:text-white line-clamp-2"
                    >
                      قهوه اسپرسو بن مانو مدل پریسکا 450 گرمی
                    </h4>
                    <span
                      class="text-teal-600 text-sm font-dana-Med inline-block pt-6"
                      >14.500 تومان تخفیف</span
                    >
                    <div
                      class="text-zinc-700 pt-9 leading-9 dark:text-white font-dana-B"
                    >
                      175,000
                      <span class="text-sm font-mono">تومان</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- footer -->
              <div class="flex justify-between">
                <div>
                  <span class="p-5 text-xl font-dana-B"
                    >مبلغ قابل پرداخت</span
                  >
                  <div class="price pr-5 pb-5">
                    <div
                      class="text-zinc-700 leading-9 pt-6 dark:text-white font-dana-B bottom-1 text-2xl"
                    >
                      350,000
                      <span class="text-sm font-mono">تومان</span>
                    </div>
                  </div>
                </div>
                <div
                  class="bg-teal-600 dark:bg-teal-800 rounded-xl w-32 h-12 flex justify-center items-center mt-6 mb-2.5 ml-5"
                >
                  <span
                    class="text-white font-dana-B text-xl -tracking-[6.5%]"
                    >ثبت سفارش</span
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- icon toggle theme -->
          <span class="btnThem">
            <svg class="w-6 h-6 md:w-8 md:h-8">
              <use href="#moon" class="icon-light"></use>
            </svg>
          </span>
        </div>
        <span class="w-px h-14 inline-block bg-white/20"></span>
        <!-- Login and register form -->
        <div class="login flex">
          <a href="/Login" class="flex items-center gap-x-2.5">
            <svg class="w-6 h-6 md:w-8 md:h-8">
              <use href="#arrowLeft"></use>
            </svg>
            <span
              class="hidden lg:inline-block font-dana-B text-xl pl-10 tracking-tightest"
              >ورود | ثبت نام</span
            >
          </a>
        </div>
      </div>

    </div>
  </header>

  {{-- <div class="bg-white dark:bg-zinc-700 h-16 md:hidden w-[100%] p-4">
    <div class="flex justify-between">
      <svg
        class="hambergermeno w-8 h-8 text-zinc-600 dark:text-white relative"
      >
        <!-- Hamburger menu -->
        <use href="#menu"></use>
        <div id="submeno" class="hidden">
          <!-- First div hamburger -->
          <div
            class="flex justify-between p-5 relative border-b border-gray-500 dark:border-b-white/50 pb-5 mb-5"
          >
            <!-- Logo and contact svg -->

            <div class="flex text-zinc pr-4 text-orange-300">
              <svg
                class="w-[155px] h-10 absolute -right-9 top-2.5 text-orange-300"
              >
                <use href="#apptype"></use>
              </svg>
              <svg
                class="w-[155px] h-10 absolute right-9 top-2.5 text-orange-300"
              >
                <use href="#logoApp"></use>
              </svg>
            </div>
            <svg class="close w-6 h-6 cursor-pointer">
              <use href="#close"></use>
            </svg>
          </div>
          <div class="h-2 font-dana-Med text-base">
            <ul
              class="pr-5 space-y-2 pb-6 flex flex-col gap-4 tracking-tighter"
            >
              <li
                class="flex h-10 w-56 bg-orange-200/20 text-orange-300 items-center gap-x-2 pr-2 rounded-md"
              >
                <svg class="w-5 h-5">
                  <use href="#Home"></use>
                </svg>
                <a href="#s">صفحه اصلی</a>
              </li>
              <!-- Hover down and up -->

              <li class="relative group gap-x-2 pr-2">
                <div
                  class="flex justify-between pl-4 items-center group"
                  id="MMeno"
                >
                  <div class="flex items-center gap-x-2">
                    <svg class="w-5 h-5"><use href="#shop"></use></svg>
                    <div class="flex">
                      <a
                        href="#"
                        class="text-block group-hover:text-orange-300 group-hover:font-bold"
                      >
                        فروشگاه
                      </a>
                    </div>
                  </div>
                  <svg class="w-5 h-5">
                    <use href="#down" class="up"></use>
                  </svg>
                </div>
                <div id="Menosub" class="hidden">
                  <a href="#">قهوه ویژه</a>
                  <a href="#" class="subMenu">ویژه در سطح جهانی</a>
                  <a href="#">قهوه درجه یک</a>
                  <a href="#">ترکیبات تجاری</a>
                  <a href="#">کپسول قهوه</a>
                  <a href="#">قهوه زینو برزیلی</a>
                </div>
              </li>

              <li class="flex gap-x-2 pr-2">
                <svg class="w-5 h-5"><use href="#document"></use></svg>
                <a href="#">دیکشنری</a>
              </li>
              <li class="flex gap-x-2 pr-2">
                <svg class="w-5 h-5"><use href="#briefcase"></use></svg>
                <a href="#">بلاگ</a>
              </li>
              <li class="flex gap-x-2 pr-2">
                <svg class="w-5 h-5"><use href="#document"></use></svg>
                <a href="#">درباره ما</a>
              </li>
              <li class="flex gap-x-2 pr-2">
                <svg class="w-5 h-5"><use href="#phone"></use></svg>
                <a href="#">تماس ما</a>
              </li>
            </ul>
            <div
              class="flex flex-col items-start pr-4 mt-4 pb-16 border-t items- border-b-gray-100 dark:border-b-white/10 space-y-6 text-orange-400 dark:text-orange-300"
            >
              <!-- Register -->
              <div>
                <a class="flex items-center mt-4 gap-x-2" href="#">
                  <svg class="w-6 h-6"><use href="#arrowLeft"></use></svg>
                  <span>ورود | ثبت‌نام</span>
                </a>

                <a class="flex btnThem mt-4 gap-x-2" href="#">
                  <svg class="w-6 h-6">
                    <use href="#moon" class="icon-light"></use>
                  </svg>
                  <span class="changeName">تم تیره</span>
                </a>
                <a class="flex mt-4 gap-x-2">
                  <svg class="w-6 h-6"><use href="#shopping-cart"></use></svg>
                  <span>سبد خرید</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Close -->
      </svg>
      <!-- Close -->
      <!-- Logo type -->
      <svg class="w[100px] h-10 text-orange-300">
        <use href="#logo-type"></use>
      </svg>
      <!-- Shopping cart -->

      <svg id="shopping" class="w-8 h-8 text-zinc-600 dark:text-white">
        <use href="#shopping-cart"></use>

        <div id="closebtn" class="hidden">
          <div
            class="flex justify-between p-5 relative border-b border-gray-500 dark:border-b-white/50 pb-5 mb-5"
          >
            <!-- Log contact 2svg -->
            <svg class="closed w-6 h-6 cursor-pointer">
              <use href="#close"></use>
            </svg>
            <h3 class="tracking-tighter text-xl -mt-1">سبد خرید</h3>
          </div>

          <!-- Shopping responsive -->
          <div class="dir">
            <!-- Product cart -->
            <div class="child:pb-3 child:mt-3 h-screen -mb-44">
              <div
                class="flex flex-row-reverse gap-x-1 border-b border-b-gray-100 dark:border-b-gray-100/10 pl-2"
              >
                <img
                  src="style/img/products/p1.png"
                  alt="Product"
                  class="w-[90px] h-[90px]"
                  srcset=""
                />
                <div class="flex flex-col justify-between gap-y-1.5">
                  <h4
                    class="text-zinc-700 text-base font-medium dark:text-white line-clamp-2 tracking-tighter font-dana-Med"
                  >
                    قهوه اسپرسو بن مانو مدل پریسکا 450 گرمی
                  </h4>
                  <div class="flex items-center justify-center">
                    <span
                      class="flex text-teal-600 text-sm font-morba-B tracking-tighter"
                    >
                      تومان تخفیف
                      <span>15000</span>
                    </span>
                  </div>
                  <div
                    class="text-zinc-700 pt-5 leading-9 text-sm dark:text-white font-dana-B"
                  >
                    175,000
                    <span class="text-sm font-dana-Nnm">تومان</span>
                  </div>
                </div>
              </div>

              <!-- Order -->
              <div class="flex fixed bottom-0">
                <div
                  class="w-28 h-11 bg-teal-600 rounded-xl mb-8 mr-4 dark:bg-teal-500 pt-[10px]"
                >
                  <span
                    class="flex justify-center items-center font-dana-B text-white"
                  >
                    ثبت سفارش
                  </span>
                </div>
                <div class="flex flex-col">
                  <span
                    class="pr-3 text-zinc-700 dark:text-white font-dana-B text-xs"
                  >
                    مبلغ قابل پرداخت
                  </span>
                  <div
                    class="pr-3 text-zinc-700 leading-9 dark:text-white font-dana-B bottom-1 text-base"
                  >
                    350,000
                    <span class="text-sm font-mono">تومان</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </svg>

      <!-- Close -->
    </div>
  </div> --}}

</div>
