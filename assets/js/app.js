(function($) {
	$('#delete-form').on('submit', function(event) {
		return confirm('Ste si isty, ze chcete vymazat zaznam?');
	});
	$('#delete-order').on('submit', function(event) {
		return confirm('Ste si isty, ze chcete vymazat zaznam?');
	});
	$('#delete--car').on('click', function(event) {
		event.preventDefault();
		return confirm('Ste si isty, ze chcete vymazat zaznam?');
	});
})(jQuery);
