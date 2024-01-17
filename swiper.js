document.addEventListener('DOMContentLoaded', function () {
    var mySwiper = new Swiper('.swiper-container', {
        // Configuración opcional aquí
        loop: true, // Para que el carrusel sea infinito
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});
