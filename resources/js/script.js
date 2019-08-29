$(function(){

	$('.active-list button.bal').click(function(){
		$('.balance_container').addClass('show');
	});
	$('.active-list button.cur').click(function(){
		$('.balance_container').addClass('show');
	});
	$('.close-mods').click(function(){
		$(this).parents('.list-of-mods').find('.show').removeClass('show');
	});
});