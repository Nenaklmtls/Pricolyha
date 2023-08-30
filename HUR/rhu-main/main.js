const swiper = new Swiper('.swiper', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: -300,
        depth: 470,
        modifier: 1,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

