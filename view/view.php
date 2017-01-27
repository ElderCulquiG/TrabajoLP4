<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("../model/model.php");
require_once("../model/conection.php");
$con = new mpersona;
?>   

<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <title>Persona</title>
  </head>
  <body>
    <div>
      <h2>Insertar</h2>
    </div>
    <div class="insertar">
      <input id="txtdni" placeholder="descripcion" type="text" required/>
      <input id="txtnombre" placeholder="descripcion" type="text" required/>
      <input id="txtfecha_nac" placeholder="descripcion" type="date" required/>
      <input type="submit" class='btnInsertar' id="btnInsertar" value="Insertar">
    </div>
    <div>
      <?php $con ->mostrarPersona(); 
       echo '<a href="../logout.php">Salir</a>';
        ?>
    </div>

    <script src="../jquery/jquery-3.1.0.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#btnInsertar").click(function(){
          var dni = $("#txtdni").val();
          var nombre = $("#txtnombre").val();
          var fecha_nac = $("#txtfecha_nac").val();
          
          $.post("../controller/controller.php",
                  {
                    dni : dni,
                    nombre : nombre,
                    fecha_nac : fecha_nac,
                    flag : 'insertar'
                  },
                  function(data){
                    alert(data);
                    location.reload();
                  }
                )

        })
        $(".btnModificar").click(function(){
          var id = $(this).attr("id");
          var dni = $("#dni"+id).val();
          var nombre = $("#nombre"+id).val();
          var fecha_nac = $("#fecha_nac"+id).val();


          $.post("../controller/controller.php",
                  {
                    id : id,
                    dni : dni,
                    nombre : nombre,
                    fecha_nac : fecha_nac,
                    flag : 'modificar'
                  },
                  function(data){
                    alert(data);
                    location.reload();
                  }
                )

        })
        $(".btnEliminar").click(function(){
          var id = $(this).attr("id");

          $.post("../controller/controller.php",
                  {
                    id : id,
                    flag : 'eliminar'
                  },
                  function(data){
                    alert(data);
                    location.reload();
                  }
                )

        })

      });
    </script>

  </body>
</html>
