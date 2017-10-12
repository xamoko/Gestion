
	function validarMaterialesClinicos()
	{
		var Go =false;
		Go=$("#AddMaterialesClinicos").validationEngine('validate');
		
		if(Go==true)
	 	{
		  
		  var parametros = {
		  "Nombre" : $("#Nombre").attr("value"),
		  "clave" : $("#clave").attr("value"),
		  "descripcion" : $("#descripcion").attr("value"),
		  "Cantidad" : $("#Cantidad").attr("value"),
		  "Estado" : $("#Estado").attr("value"),
		  "Fecha_de_Registro" : $("#Fecha_de_Registro").attr("value")};

	  	
		 $.ajax({
				   async:true,
				   type: "POST",
				   dataType: "html",
				   contentType: "application/x-www-form-urlencoded;charset=UTF-8",
				   url:"../php/MaterialesClinicos.php",
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
		$('#AddMaterialesClinicos')[0].reset();
	}
	
	function problemas()
	{
	  $("#respuesta").html('<br /><p class="red">Problemas en el servidor intente mas tarde.</p>');
	}
	
	function reiniciar(id) {
document.getElementById(id).innerHTML="";
}
