$(document).ready(function(){

	 $("#registrar-usuario").submit(function(event) {
		event.preventDefault();

		var = obj{
			nombre: $("#nombre").val(),
			cedula: $("#t-cedula").val()+'-'+$("cedula").val();
			
		};


	});
 
});