
	function validar_actualizar_Medicamentos()
	{
		var Go =false;
		Go=$("#validar_actualizar_Medicamento").validationEngine('validate');
		
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

		  "clave" : $("#clave").attr("value")
		   };
		  
	  	
		 $.ajax({
				   async:true,
				   type: "POST",
				   dataType: "html",
				   contentType: "application/x-www-form-urlencoded;charset=UTF-8",
				   url:"../php/actualizar_medicamento.php",
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
		$('#validar_actualizar_Medicamento')[0].reset();
	}
	
	function problemas()
	{
	  $("#respuesta").html('<br /><p class="red">Problemas en el servidor intente mas tarde.</p>');
	}
	
	function reiniciar(id) {
document.getElementById(id).innerHTML="";
}
