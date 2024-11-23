<?php 
    include ('../setting/database.php'); /* --> Importo la Base de Dato*/
    require_once "../models/main_models.php";
     
    $single = $_POST['single'];
    $superior = $_POST['superior'];
    $doble = $_POST['doble'];
    $triple = $_POST['triple'];
    $cuadruple = $_POST['cuadruple'];
    $quintuple = $_POST['quintuple'];
    $sextuple = $_POST['sextuple'];
    $siesta = $_POST['siesta'];
    $mascota = $_POST['mascota'];
    $cochera = $_POST['cochera'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];

    /*Fecha actual*/
    $current_date = date("Y-m-d");
            
    $current_day = substr($current_date, -2, 2);
    $current_month = substr($current_date, -5, 2);
    $current_year = substr($current_date, 0, 4);

    //--> Obtengo el dia
    $day = substr($date, -2, 2);
    //--> Obtengo el mes
    $month = substr($date, -5, 2);
    //--> Obtengo el año
    $year = substr($date, 0, 4);

    if($year >= $current_year && $month >= $current_month && $day >= $current_day){
       
        $obj_update = new Update_Model();
        $data_scheduleTime = $obj_update->Update_scheduleTime($single, $superior, $doble, $triple, $cuadruple, $quintuple, $sextuple, $siesta, $mascota, $cochera, $date, $hour);
           
        echo "<script>";
            echo " window.location.href = '../index.php'";
        echo "</script>";
           
    }else{
        echo "<script>";
            echo " window.location.href = '../scheduleTime.php'";
        echo "</script>";
    }
      
?>