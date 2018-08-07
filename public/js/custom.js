$(document).ready(function() {
	$('#ExperienciaDetalle').on('show.bs.modal', function (e) {
			var id = $(e.relatedTarget).data('nombre');
		    $(e.currentTarget).find('#defaultModalLabel').html(id);
		});

});
