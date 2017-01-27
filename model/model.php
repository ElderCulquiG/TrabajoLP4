<?php

require_once('conection.php');

 class mpersona{
    function mostrarPersona(){
      $sql = mysql_query("SELECT * FROM persona");

      echo "<table>
              <div>
                <thead>
                  <tr>
                    <td>DNI</td>
                    <td>Nombre</td>
                    <td>Fecha de Nacimiento</td>
                  </tr>
                </thead>
              <div>
            <tbody>";
       while($row = mysql_fetch_array($sql)){
         echo "<div class='contenido'><tr>
                <td><input size=25 id='dni".$row['id_persona']."'value='".$row['dni']."' disabled></td>
                <td><input size=25 id='nombre".$row['id_persona']."'value='".$row['nombre']."' ></td>
                <td><input size=25 id='fecha_nac".$row['id_persona']."'value='".$row['fecha_nac']."' ></td>
                <td><button class='btnModificar' id='".$row['id_persona']."'>Modificar</button></td>
                <td><button class='btnEliminar' id='".$row['id_persona']."'>Eliminar</button></td>
               </tr></div>";
       }
       echo "</tbody></table>";
    }

    function insertarPersona($dni,$nombre,$fecha_nac){
      mysql_query("INSERT INTO persona VALUES('','$dni','$nombre','$fecha_nac')");
      if(mysql_affected_rows() > 0) return true;
      else return false;
    }

    function modificarPersona($id_persona,$dni,$nombre,$fecha_nac){
      mysql_query("UPDATE persona SET dni='$dni', nombre='$nombre', fecha_nac='$fecha_nac'
                   WHERE id_persona = '$id_persona'");
      if(mysql_affected_rows() > 0) return true;
      else return false;
    }

    function eliminarPersona($id_persona){
      mysql_query("DELETE  FROM persona
                   WHERE id_persona = '$id_persona'");
      if(mysql_affected_rows() > 0) return true;
      else return false;
    }

  }


