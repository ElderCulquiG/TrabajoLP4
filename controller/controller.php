<?php
require_once("../model/model.php");
  $con = new mpersona;

  switch ($_POST['flag']) {
    case 'insertar':
        if($con -> insertarPersona($_POST["dni"],$_POST["nombre"],$_POST["fecha_nac"]) == true){
          echo "Se insertó correctamente";
        }
        else{
          echo "No se pudo insertar";
        }
      break;
    case 'modificar':
        if($con -> modificarPersona($_POST["id"],$_POST["dni"],$_POST["nombre"],$_POST["fecha_nac"]) == true){
          echo "Se modificó correctamente";
        }
        else{
          echo "No se pudo modificar";
        }
      break;
    case 'eliminar':
        if($con -> eliminarPersona($_POST["id"]) == true){
          echo "Se eliminó correctamente";
        }
        else{
          echo "No se pudo eliminar";
        }
      break;

    default:
        echo "¿Cómo llegaste aquí?";
      break;
  }

