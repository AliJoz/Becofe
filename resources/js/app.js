import "./bootstrap";

import Swal from "sweetalert2";

// import Swiper JS
import Swiper from "swiper";

// import Swiper styles
import "swiper/css";

// ایجاد یک نمونه جدید از Swiper
new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next-custom",
        prevEl: ".swiper-button-prev-custom",
    },
    breakpoints: {
        300: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        500: {
            spaceBetween: 20,
        },
        750: {
            spaceBetween: 40,
        },
        980: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
});

/// them dark and light

//swett artert2

window.addEventListener("alert", (event) => {
    let data = event.detail;
    console.log(data);
    Swal.fire({
        position: "center",
        icon: data.type,
        title: data.title,
        timer: 8000,
        showConfirmButton: false,

    });
});
