
	function validarRecetados()
	{
		var Go =false;
		Go=$("#AddRecetados").validationEngine('validate');
		
		if(Go==true)
	 	{
		  
		  var parametros = {
		  /*"nombre" : $("#nombre").attr("value"),
		  "appat" : $("#appat").attr("value"),
		  "apmat" : $("#apmat").attr("value"),
		  "cedula" : $("#cedula").attr("value"),
		  "nac" : $("#nac").attr("value"),
		  "telefono" : $("#telefono").attr("value"),
		  "especialidad" : $("#especialidad").attr("value"),
		  "domicilio" : $("#domicilio").attr("value"),
		  "accound" : $("#accound").attr("value"),
		  "pass" : $("#pass").attr("value")};*/

		  "No_Consecutivo" : $("#No_Consecutivo").attr("value"),
		  "Fecha" : $("#Fecha").attr("value"),
		  "No_Fuce" : $("#No_Fuce").attr("value"),
		  "No_Poliza" : $("#No_Poliza").attr("value"),
		  "Nombre_Paciente" : $("#Nombre_Paciente").attr("value"),
		  "Procedencia" : $("#Procedencia").attr("value"),
		  "Medico_Preescribe" : $("#Medico_Preescribe").attr("value"),
		  "Diagnostico" : $("#Diagnostico").attr("value"),
		  "Clave_Medicamento" : $("#Clave_Medicamento").attr("value"),
		  "Unidades_Preescritas" : $("#Unidades_Preescritas").attr("value"),
		  "Unidades_Surtidas" : $("#Unidades_Surtidas").attr("value"),
		  };

	  	
		 $.ajax({
				   async:true,
				   type: "POST",
				   dataType: "html",
				   contentType: "application/x-www-form-urlencoded;charset=UTF-8",
				   url:"../php/recetados.php",
				   data: parametros,
				   beforeSend:inicioEnvio,
				   success:llegadaDatos,
				   timeout:4000,
				   error:problemas
				 }); 
		
	  		return false;
	 	}//fin if
	}
	
	function inicioEnvio()
	{
	  $("#respuesta").html('<br /><img src="../img/loading.gif">');
	  //x.html('<br /><img src="images/resources/loading.gif">');
	}
	
	function llegadaDatos(datos)
	{
		$("#respuesta").html(datos);
		//reiniciando el formulario
		$('#AddRecetados')[0].reset();
	}
	
	function problemas()
	{
	  $("#respuesta").html('<br /><p class="red">Problemas en el servidor intente mas tarde.</p>');
	}
	
	function reiniciar(id) {
document.getElementById(id).innerHTML="";
}
