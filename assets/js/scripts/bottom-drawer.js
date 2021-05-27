jQuery(document).ready(function($){
	$('.pull-tab').click(function(){
		$('.bottom-drawer').slideToggle('fast');
		$('.pull-tab').toggleClass('opened closed');
	});
});