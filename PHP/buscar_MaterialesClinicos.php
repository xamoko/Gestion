
<?php
require ('conexion.php');

	$clave				        = $_POST['clave'];

		
		$query		=	"SELECT Nombre,Clave,Descripcion,Cantidad,Estado,Fecha_de_Registro FROM MaterialesClinicos WHERE clave='".$clave."'";
		
		$result=mysql_query($query,$conexion);
		echo mysql_error();

		$row = mysql_fetch_row($result);

		echo
			  '
              <form name="validar_actualizar_Medicamento2" id="validar_actualizar_Medicamento2" method="post" onblur="limpia()"  >
              <table>
              <tr>
                                <tr>
                                <td class="t3">Nombre</td>
                                <td><input type="text" name="Nombre" id="Nombre" value="'.$row[0].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Clave</td>
                                <td><input type="text" name="clave" id="clave" value="'.$row[1].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Descripcion</td>
                                <td><input type="text" name="descripcion" id="descripcion" value="'.$row[2].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Cantidad</td>
                                <td><input type="text" name="Cantidad" id="Cantidad" value="'.$row[3].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Estado</td>
                                <td><input type="text" name="Estado" id="Estado" value="'.$row[4].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Fecha de Registro</td>
                                <td><input type="date" name="Fecha_de_Registro" id="Fecha_de_Registro" value="'.$row[5].'" class="validate[required]"></td>
                            </tr> 
                            </table>
                            </form>';
		/*if($result)
		{
			//echo '<span class="green_text">El medicamento se ha registrado con exito.</span>';
			
		}	
		else 
		{
			echo '<span class="red_text">Ocurrio un error al intentar registrar al medicamento.</span>';
		} */

?>