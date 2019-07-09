$(document).ready(function(){
	$('#btn').click(function(){

		$('.box').slideToggle('fast');

	});

	$('#btn2').click(function(){

		$('.box3').hide();
	});

	$('#btn3').click(function(){
		$('.box3').show();
	});
});