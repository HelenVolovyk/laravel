const { ready } = require("jquery");

var searchIcon = document.querySelector('.fa-search');
var closeIcon = document.querySelector('.fa-times');
var search = document.getElementById('query')
searchIcon.onclick = () => {
	search.classList.add('active');
}
closeIcon.onclick = () => {
	search.classList.remove('active');
}


$(document).ready(function(){
	$('.fa-search').click(function(event){
		$('.header__link').toggleClass('hide');
	});
	$('.fa-times').click(function(event){
		$('.header__link').removeClass('hide');
	});

});