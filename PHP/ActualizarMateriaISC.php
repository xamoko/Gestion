
<?php
require ('conexion.php');

    $clave                      = $_POST['clave'];

        
        $query      =   "SELECT PanDeEstudios,NombredeLaMateria,HorasDeMateria,Carrera,Creditos,imagen FROM AgregarMateria WHERE clave='".$clave."'";

        $consulta = "SELECT imagen FROM AgregarMateria WHERE clave='".$clave."'";
        $resultado = mysql_query($consulta) or die (mysql_error());
        
        
        $result=mysql_query($query,$conexion);
        echo mysql_error();

        $row = mysql_fetch_row($result);
        if ($row == "") {
            echo '<span class="red_text">La Materia que Busca no se Encuentra Registrada.</span>';
        }
        else{
            $datos = mysql_fetch_assoc($resultado); 
                                $ruta = "imagenes/".$datos['imagen'];

        echo
              '
              <form name="validarActualizarMateriaISC2" id="validarActualizarMateriaISC2" method="post" onblur="limpia()"  >
              <table>
              <tr>
                                <tr>
                                <td class="t3">Plan de Estudios:</td>
                                <td><input type="text" name="PlanDeEstudios" id="PlanDeEstudios" value="'.$row[0].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Nombre de la Materia:</td>
                                <td><input type="text" name="NombredeLaMateria" id="NombredeLaMateria" value="'.$row[1].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Horas de Materia:</td>
                                <td><input type="text" name="HorasDeMateria" id="HorasDeMateria" value="'.$row[2].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Carrera:</td>
                                <td><input type="text" name="Carrera" id="Carrera" value="'.$row[3].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3">Creditos:</td>
                                <td><input type="text" name="Creditos" id="Creditos" value="'.$row[4].'" class="validate[required]"></td>
                            </tr>
                            <tr>
                                <td class="t3"> Ver plan de estudios</td>
                                <td>
                                <button><a href="../../'.$ruta.'">'.$row[5].'</a></button></td>
                                
                            </tr>
                            <tr>
                                <td class="t3">Cargar plan de estudios:</td>
                                <td><input type="file" name="imagen" id="imagen" value="" class="validate[required]">k</td>
                            </tr>
                            <tr>
                                <td class="t3">*Si cambiara el archivo, '."</br>".'carguelo; '."</br>".'de lo contrario descarguelo '."</br>".'pulsando el boton de arriba y '."</br>".'vuelva a cargarlo.</td>
                            </tr>
                            <tr>
                            <td></td>
                            <td><input type="button" value="Actualizar" onClick="ActualizarMateriaISC2()"></td>
                            </tr>
                            
                            </table>
                            </form>';}
        /*if($result)
        {
            //echo '<span class="green_text">El medicamento se ha registrado con exito.</span>';
            
        }   
        else 
        {
            echo '<span class="red_text">Ocurrio un error al intentar registrar al medicamento.</span>';
        } */

?>