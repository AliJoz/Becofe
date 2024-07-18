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
            'rrsLable' => 'از تخفیف‌ها و جدیدترین‌های بی کافه باخبر شوید:',
            'soctaiLable' => 'بی کافه را در شبکه‌های اجتماعی دنبال کنید:',
            'suppirtLable' => 'هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم',
            'phoneLable' => 'شماره تماس :',
            'addresLable' => 'آدرس فروشگاه :',
            'emailLable' => 'آدرس ایمیل :',
            'aboutHeadLable' => 'فروشگاه اینترنتی بی کافه بررسی، انتخاب و خرید آنلاین در زمینه قهوه',
            'aboutbodyLable' => 'ما برآنیم تا با پیشرو بودن در فرآیند تولید، نوع و کیفیت محصول، خدمات و توزیع، الگویی برای تولیدکنندگان ایرانی باشیم و به مرجع فرهنگ قهوه در ایران تبدیل شویم. می‌پنداریم که نظر مردم ایران و منطقه باید نسبت به کالای ایرانی بهبود یابد و در این راستا با اشتیاق می‌کوشیم.',
            'copyright' => 'کلیه حقوق این سایت متعلق به بی کافه  می باشد.     ',
            'phone' => '09191713064',
            'email' => 'Becofe@gmail.com',
            'address' => 'قم ',
            'socialIcon1' => 'fa fa-instagram',
            'socialIcon2' => 'fa fa-twitter',
            'socialIcon3' => 'fa fa-facebook',
            'socialIcon4' => 'fa fa-linkedin-square',
            'socialIcon5' => '',
            'socialIcon6' => '',
            'socialLink1' => '#',
            'socialLink2' => '#',
            'socialLink3' => '#',
            'socialLink4' => '#',
            'socialLink5' => '#',
            'socialLink6' => '#',
        ]);
     }
}
