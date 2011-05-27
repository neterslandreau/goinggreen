$(document).ready(function() {
	$('#patients-link').bind('click', function(e) {
		$('#patients').dialog({
			width: 650,
			title: 'Patients',
			modal: true,
			show: 'blind'
		});
	});

	$('#families-link').bind('click', function(e) {
		$('#families').dialog({
			width: 650,
			title: 'Families and Visitors',
			modal: true,
			show: 'blind'
		});
	});
});
