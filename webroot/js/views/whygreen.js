$(document).ready(function() {
	$('#patients-link').bind('click', function(e) {
		$('#patients').dialog({
			width: 550,
			title: 'Patients',
			modal: true
		});
	});

	$('#families-link').bind('click', function(e) {
		$('#families').dialog({
			width: 550,
			title: 'Families',
			modal: true
		});
	});
});
