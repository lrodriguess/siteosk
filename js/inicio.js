// JavaScript Document
larguraDiv = 0;
$(document).ready(function(){
	$ = jQuery.noConflict();
	$(".it_cont").each(function() {
		larguraDiv = larguraDiv + $(this).width()+20;
	});
	$('#content').width(larguraDiv);
	$(".it_cont").fadeIn();
	$('html, body, *').mousewheel(function(e, delta) {
		this.scrollLeft -= (delta * 40);
		e.preventDefault();
	});
});