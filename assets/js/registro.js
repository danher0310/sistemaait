$(document).ready(function(){

	 $("#registrar-usuario").submit(function(event) {
		event.preventDefault();

		var obj = {
			nombre: $("#name").val(),
			cedula: $("#t-cedula").val()+'-'+$("#cedula").val(),
			correo: $("#email").val(),
			user: 	$("#usuario").val(),
			pass: 	$("#password").val(),
			conpas: $("#conf-pass").val(),
			tuser: 	$("#t-usuario").val()

		};
		console.log(obj);

		$.ajax({
			url: 'assets/php/usuario.php',
			data: obj,
			dataType: 'json',
			method: 'POST',
			success:function(response){
				if(response.Success){
					alert(response.Msg);
					nombre: $("#name").val('');
					cedula: $("#t-cedula").val()+'-'+$("#cedula").val('');
					correo: $("#email").val('');
					user: 	$("#usuario").val('');
					pass: 	$("#password").val('');
					conpas: $("#conf-pass").val('');
					tuser: 	$("#t-usuario").val('');
				}
				else{
					alert(response.Msg+' '+response.Error)

				}
			},
			error: function(xhr, status, error) {
            	alert(xhr.status+' Funcion error '+error);
            	console.log(xhr);
        }
		});


	});



	  $("#registrar-equipo").submit(function(event) {
		event.preventDefault();

		var obj = {
			equipo: 	$("#equipo").val(),
			serial: 	$("#serial").val(),
			marca: 		$("#marca").val(),
			memoria: 	$("#ram").val(),
			discod: 	$("#hdd").val(),
			monitor: 	$("#monitor").val(),
			nombre:		$("#nombreasig").val(),
			cedula:     $("#cdasigna") .val(),
			departamento: $("#departamento").val(),
			serialmon:	$("#serialmon").val(),
			serialmous: $("#smouse").val(),
			serialtec: 	$("#steclado").val(),
			extras: 	$("#extrasperi").val(),
			fecha: 		$('#mantenimiento').val()



		};
		console.log(obj);

		$.ajax({
			url: 'assets/php/equipo.php',
			data: obj,
			dataType: 'json',
			method: 'POST',
			success:function(response){
				if(response.Success){
					alert(response.Msg);
			equipo: 	$("#equipo").val('');
			serial: 	$("#serial").val('');
			marca: 		$("#marca").val('');
			memoria: 	$("#ram").val('');
			discod: 	$("#hdd").val('');
			nombre:		$("#nombreasig").val('');
			cedula:     $("#cdasigna") .val('');
			departamento: $("#departamento").val('');
			monitor: 	$("#monitor").val('');
			serialmon:	$("#serialmon").val('');
			serialmous: $("#smouse").val('');
			serialtec: 	$("#steclado").val('');
			extras: 	$("#extrasperi").val('');
			fecha: 		$('#mantenimiento').val('');

				}
				else{
					alert(response.Msg+' '+response.Error)

				}
			},
			error: function(xhr, status, error) {
            	alert(xhr.status+' Funcion error '+error);
            	console.log(xhr);
        }
		});


	});

	  $("#registrar-repuesto").submit(function(event) {
		event.preventDefault();

		var obj = {
			repuesto: $("#repuesto").val(),
			descripcion: $("#descripcion").val(),
			serial: $("#serial").val(),
			marca: 	$("#marca").val(),
			

		};
		console.log(obj);

		$.ajax({
			url: 'assets/php/repuesto.php',
			data: obj,
			dataType: 'json',
			method: 'POST',
			success:function(response){
				if(response.Success){
					alert(response.Msg);
					repuesto: $("#repuesto").val(''); 
					descripcion: $("#descripcion").val(''); 
					serial: $("#serial").val(''); 
					marca: 	$("#marca").val(''); 
				}
				else{
					alert(response.Msg+' '+response.Error)

				}
			},
			error: function(xhr, status, error) {
            	alert(xhr.status+' Funcion error '+error);
            	console.log(xhr);
        }
		});


	});
 
});

