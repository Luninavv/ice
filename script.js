$(document).ready(function(){
	/*Открыть модальное окно*/
	$('.imdiz-open').click(function(){
		$('.imdiz-overlay').css({'visibility': 'visible', 'opacity': 1});
		$('.imdiz-modal').css({'visibility': 'visible', 'opacity': 1});
	});
	/*Закрыть модальное окно*/
	$('.imdiz-close').click(function(){
		$('.imdiz-overlay').css({'visibility': 'hidden', 'opacity': 0});
		$('.imdiz-modal').css({'visibility': 'hidden', 'opacity': 0});
	});
})
$(document).ready(function(){
	/*Открыть модальное окно*/
	$('.imdiz-open1').click(function(){
		$('.imdiz-overlay').css({'visibility': 'visible', 'opacity': 1});
		$('.imdiz-modal1').css({'visibility': 'visible', 'opacity': 1});
	});
	/*Закрыть модальное окно*/
	$('.imdiz-close').click(function(){
		$('.imdiz-overlay').css({'visibility': 'hidden', 'opacity': 0});
		$('.imdiz-modal1').css({'visibility': 'hidden', 'opacity': 0});
	});
})
//слайдер
var slideIndex = 1;
showSlides(slideIndex);

// следующее/предыдущее
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// текущая картинка
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}