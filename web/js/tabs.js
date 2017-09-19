$(function() {
	var $menu = $('.main-content .menu');
	var $tabContent = $('.main-content .content');

	$menu.find('li').bind('click', function() {
		$menu.find('li').removeClass('active');
		$(this).addClass('active');

		var tabId = $(this).attr('id');

		$tabContent.fadeOut('fast');
		setTimeout(function() {
			$('.content.'+tabId).fadeIn('normal');
		}, 300);
	});
});