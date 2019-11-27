// kolotoč pro reference na hlavní stránce
$('.reference-slick').slick({
	infinite: false,
	slidesToShow: 1,
	slidesToScroll: 2,
	centerMode: true,
	arrows: false,
	dots: true,
	centerPadding: '100px',
	responsive: [
		{
			breakpoint: 768,
			settings: {
				centerPadding: '10px',
			}
		}
	]
});

// Klikání buttonu na stránce ceníku
$('.price-button').click(function (e) {
	$('.price-services').hide();
	const $button = $('.' + $(this).data('toggle'));
	$(".price-button button").removeClass('active');
	$(this).find('button').addClass('active');
	$button.show();
});

// Lioghtbox
lightbox.option({
	resizeDuration: 200,
	wrapAround: true,
	maxHeight: 1200,
	maxWidth: 1200
});

const $navUl = $('nav ul');
const $close = $('.times');
const $ham = $('.hamburger');

// Funkcionalita menu
function openMenu() {
	$navUl.fadeIn(200);
	$close.show();
	$ham.hide();
}

function closeMenu() {
	$navUl.fadeOut(200);
	$ham.show();
	$close.hide();
}

$close.hide();

$ham.click(function () {
	$navUl.addClass('is-open');
	openMenu();
});

$close.click(function () {
	$navUl.removeClass('is-open');
	closeMenu();
});

// parallax pro divy s třídou parallax
window.addEventListener('scroll', function () {
	var scrollPosition = window.pageYOffset;
	var bgParallax = document.getElementsByClassName('parallax');

	for (let i = 0; i < bgParallax.length; i++) {
		let limit = bgParallax[i].offsetTop + bgParallax[i].offsetHeight;
		if (scrollPosition > bgParallax[i].offsetTop && scrollPosition <= limit) {
			bgParallax[i].style.backgroundPositionY = (50 - 10 * scrollPosition / limit) + '%';
		} else {
			bgParallax[i].style.backgroundPositionY = '50%';
		}
	}

});
