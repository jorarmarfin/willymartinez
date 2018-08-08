$(document).ready(function() {
	$('#ExperienciaDetalle').on('show.bs.modal', function (e) {
			var id = $(e.relatedTarget).data('nombre');
			var v_institucion = $(e.relatedTarget).data('institucion');
			var v_cargo = $(e.relatedTarget).data('cargo');
			var v_descripcion = $(e.relatedTarget).data('descripcion');
			var v_referencia = $(e.relatedTarget).data('referencia');

		    $(e.currentTarget).find('#m_institucion').html(v_institucion);
		    $(e.currentTarget).find('#m_cargo').html(v_cargo);
		    $(e.currentTarget).find('#m_descripcion').html(v_descripcion);
		    $(e.currentTarget).find('#m_referencia').html(v_referencia);
		});
	$('#EducacionDetalle').on('show.bs.modal', function (e) {
			var v_institucion = $(e.relatedTarget).data('institucion');
			var v_descripcion = $(e.relatedTarget).data('descripcion');
			var v_curso = $(e.relatedTarget).data('curso');

		    $(e.currentTarget).find('#m_institucion').html(v_institucion);
		    $(e.currentTarget).find('#m_descripcion').html(v_descripcion);
		    $(e.currentTarget).find('#m_curso').html(v_curso);
			/*var id = $(e.relatedTarget).data('nombre');
			var v_cargo = $(e.relatedTarget).data('cargo');
			var v_referencia = $(e.relatedTarget).data('referencia');

		    $(e.currentTarget).find('#m_cargo').html(v_cargo);
		    $(e.currentTarget).find('#m_referencia').html(v_referencia);*/
		});

});
