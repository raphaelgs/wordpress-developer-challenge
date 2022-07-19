jQuery(document).ready(function($) {
	var swiper = new Swiper('.videos', {
		slidesPerView: 7,
		spaceBetween: 30,
		grabCursor: true,
		pagination: {
		el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: {
			delay: 5000,
		},
		breakpoints: {
			1200: {
				slidesPerView: 5,
				spaceBetween: 30,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
			640: {
				slidesPerView: 1,
				spaceBetween: 30,
			},
			425: {
				slidesPerView: 1,
				spaceBetween: 30,
			}
		},		    
	});
});