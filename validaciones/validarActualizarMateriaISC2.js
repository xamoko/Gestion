
	function ActualizarMateriaISC2()
	{
		var Go =false;
		Go=$("#validarActualizarMateriaISC2").validationEngine('validate');
		
		if(Go==true)
	 	{
		  
		  var parametros = {
		  "PlanDeEstudios" : $("#PlanDeEstudios").attr("value"),
		   "NombredeLaMateria" : $("#NombredeLaMateria").attr("value"),
	      "HorasDeMateria" : $("#HorasDeMateria").attr("value"),
          "Carrera" : $("#Carrera").attr("value"),
          "clave" : $("#clave").attr("value"),
          "Creditos" : $("#Creditos").attr("value")
          };
		  
	  	
		 $.ajax({
				   async:true,
				   type: "POST",
				   dataType: "html",
				   contentType: "application/x-www-form-urlencoded;charset=UTF-8",
				   url:"../../php/ActualizarMateriaISC2.php",
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
		$('#validarActualizarMateriaISC2')[0].reset();
	}
	
	function problemas()
	{
	  $("#respuesta").html('<br /><p class="red">Problemas en el servidor intente mas tarde.</p>');
	}
	
	function reiniciar(id) {
document.getElementById(id).innerHTML="";
}
