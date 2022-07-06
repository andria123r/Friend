$(function(){
	'use steict';
	$('html').niceScroll();
	$('.header').height($(window).height());
$('.header .arrow i ').click(function(){
	$('html, body').animate({
		scrollTop: $('.features').offset().top
	},1000);
});
                
                
    

 