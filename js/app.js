/*======================= HEADER JAVASCRIPT NAVBAR START ===============================*/
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}
/*======================= HEADER JAVASCRIPT NAVBAR END ===============================*/


/*====================slider design start================== */
/* setInterval(function () {
	if (document.getElementsByClassName("slider-item")[0].classList.contains('slider-active')) {
		document.getElementsByClassName('slider-item')[1].classList.add('slider-active');
		document.getElementsByClassName('slider-item')[0].classList.remove('slider-active');
	}
	else if (document.getElementsByClassName('slider-item')[1].classList.contains('slider-active')) {
		document.getElementsByClassName('slider-active')[2].classList.add('slider-active');
		document.getElementsByClassName('slider-active')[1].classList.remove('slider-active');
	}
	else if (document.getElementsByClassName('slider-active')[2].classList.contains('slider-active')) {
		document.getElementsByClassName('slider-active')[2].classList.add('slider-active');
		document.getElementsByClassName('slider-active')[0].classList.remove('slider-active');
	}
}, 3000)
 */

var slide_index = 1;
displaySlides(slide_index);

function nextSlide(n) {
	displaySlides(slide_index += n);
}

function currentSlide(n) {
	displaySlides(slide_index = n);
}

function displaySlides(n) {
	var i;
	var slides = document.getElementsByClassName("showSlide");
	if (n > slides.length) { slide_index = 1 }
	if (n < 1) { slide_index = slides.length }
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slides[slide_index - 1].style.display = "block";
}
/*====================slider design end================== */
