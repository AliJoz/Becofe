<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Footersetingseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::connection('mysql-setting')->table('footer')->insert([
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
            'uplable' => 'برگشت به بالا',
            'widerLable1' => 'فوتر اول',
            'widerLable2' => 'فوتر دوم',
            'widerLable3' => 'فوتر سوم',
            'widerLable4' => 'فوتر چهارم',
            'widerLable5' => 'فوتر پنجم',
            'rrsLable' => 'از تخفیف‌ها و جدیدترین‌های دیجی‌استور باخبر شوید:',
            'soctaiLable' => 'دیجی‌استور را در شبکه‌های اجتماعی دنبال کنید:',
            'suppirtLable' => 'هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم',
            'phoneLable' => 'شماره تماس :',
            'addresLable' => 'آدرس فروشگاه :',
            'emailLable' => 'آدرس ایمیل :',
            'aboutHeadLable' => 'فروشگاه اینترنتی دیجی‌استور بررسی، انتخاب و خرید آنلاین',
            'aboutbodyLable' => 'دیجی‌استور به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت دیجی‌استور با دنیایی از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.',
            'copyright' => 'حق کپی رایت شراعا حرام است',
            'phone' => '09191713064',
            'email' => 'alireza00joz@gmail.com',
            'address' => 'قم ',

        ]);
     }

}
