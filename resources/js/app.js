import './bootstrap';

import Alpine from 'alpinejs';

import Swal from 'sweetalert2';

import.meta.glob([
    '../fonts/**',
]);

window.Alpine = Alpine;
window.Swal = Swal;

Alpine.start();

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

const swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 24,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
    0: { slidesPerView: 1, spaceBetween: 16 },
    640: { slidesPerView: 2, spaceBetween: 20 },
    1024: { slidesPerView: 3, spaceBetween: 24 },
    1280: { slidesPerView: 4, spaceBetween: 24 },
    },

});





