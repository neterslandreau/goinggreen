$(document).ready(function() {
	$('#patients-link').bind('click', function(e) {
		$('#patients').dialog({
			width: 800,
			height: 600,
			title: 'Patients',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});

	$('#families-link').bind('click', function(e) {
		$('#families').dialog({
			width: 800,
			height: 600,
			title: 'Families and Visitors',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
});
