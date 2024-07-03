import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';

// ایجاد یک نمونه جدید از Swiper
document.addEventListener('DOMContentLoaded', () => {
  const swiper = new Swiper('.swiper-container', {
    // تنظیمات Swiper.js
    direction: 'horizontal',
    loop: true,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
});
