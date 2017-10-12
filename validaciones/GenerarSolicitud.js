
	function ValidarSolicitud()
	{
		var Go =false;
		Go=$("#solicitudes").validationEngine('validate');
		
		if(Go==true)
	 	{
		  
		  var parametros = {
		  "Materias" : $("#Materias").attr("value"),
		  "seleccion" : $("#seleccion").attr("value"),
		  "PlanDeEstudios" : $("#PlanDeEstudios").attr("value"),
		  "NombreDeLaMateria" : $("#NombreDeLaMateria").attr("value"),
		  "Clave" : $("#Clave").attr("value"),
		  "HorasDeMateria" : $("#HorasDeMateria").attr("value"),
		  "Carrera" : $("#Carrera").attr("value"),
		  "Creditos" : $("#Creditos").attr("value"),
		  "TextArea" : $("#textarea").attr("value")
		  };

	  	
		 $.ajax({
				   async:true,
				   type: "POST",
				   dataType: "html",
				   contentType: "application/x-www-form-urlencoded;charset=UTF-8",
				   url:"../php/g.php",
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
		$('#solicitudes')[0].reset();
	}
	
	function problemas()
	{
	  $("#respuesta").html('<br /><p class="red">Problemas en el servidor intente mas tarde.</p>');
	}
	
	function reiniciar(id) {
document.getElementById(id).innerHTML="";
}
