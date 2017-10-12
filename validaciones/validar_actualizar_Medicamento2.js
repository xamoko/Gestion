
	function validar_actualizar_Medicamentos2()
	{
		var Go =false;
		Go=$("#validar_actualizar_Medicamento2").validationEngine('validate');
		
		if(Go==true)
	 	{
		  
		  var parametros = {
		  "clave" : $("#clave").attr("value"),
		   "descripcion" : $("#descripcion").attr("value"),
	      "presentacion" : $("#presentacion").attr("value"),
          "existencia_inicial" : $("#existencia_inicial").attr("value"),
          "total_entradas" : $("#total_entradas").attr("value"),
          "total_salidas" : $("#total_salidas").attr("value"),
          "existencia_final" : $("#existencia_final").attr("value"),
          "fecha_de_caducidad" : $("#fecha_de_caducidad").attr("value"),
          "numero_de_anaquel" : $("#numero_de_anaquel").attr("value"),
          "numero_de_columna" : $("#numero_de_columna").attr("value"),
          "numero_de_fila" : $("#numero_de_fila").attr("value")};
		  
	  	
		 $.ajax({
				   async:true,
				   type: "POST",
				   dataType: "html",
				   contentType: "application/x-www-form-urlencoded;charset=UTF-8",
				   url:"../php/actualizar_medicamento_2.php",
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
		$('#validar_actualizar_Medicamento2')[0].reset();
	}
	
	function problemas()
	{
	  $("#respuesta").html('<br /><p class="red">Problemas en el servidor intente mas tarde.</p>');
	}
	
	function reiniciar(id) {
document.getElementById(id).innerHTML="";
}
