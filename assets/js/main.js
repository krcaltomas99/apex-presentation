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

// Ligghtbox
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

/*
let $el = $('.parallax');
$(window).on('scroll', function () {
	$el.each(function() {
		var scroll = $(document).scrollTop();

		$el.css({
			'background-position': '50% ' + (-.1 * scroll) + 'px'
		});
	});

});
*/

let isEmailValid = false;
let isPhoneValid = false;

// Validace Emailu s formulářem
$('form input#email').keyup(function (e) {
	if ($(this).val()) {
		if (!isEmail(e.target.value)) {
			isEmailValid = false;
			$(this).parent().find('.error').show();
		} else {
			isEmailValid = true;
			$(this).parent().find('.error').hide();
		}
	} else {
		$(this).parent().find('.error').hide();
	}
});

// Validace telefonního čísla
$('form input#tel').keyup(function (e) {
	if ($(this).val()) {
		if (!isPhone(e.target.value)) {
			isPhoneValid = false;
			$(this).parent().find('.error').show();
		} else {
			isPhoneValid = true;
			$(this).parent().find('.error').hide();
		}
	} else {
		$(this).parent().find('.error').hide();
	}
});

// Kontrolova emailu a telefonu přes RegEx

function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

function isPhone(tel) {
	let regex = /^[+]([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{3})/;
	return regex.test(tel)
}

function showModal() {
	$('.modal').fadeIn(200);
}

function showDarker() {
	$('.darker').fadeIn(200);
}

function hideModal() {
	$('.modal').fadeOut(200);
}

function hideDarker() {
	$('.darker').fadeOut(200);
}

// Kontrola při odeslání ofrmuláře
$("form").submit(function (e) {
	e.preventDefault();
	if (isPhoneValid && isEmailValid) {
		showModal();
		showDarker();
	}
});


// Dismiss modálu
$(".darker, .modal .fa-times").click(function () {
	hideModal();
	hideDarker();
});

