<?php 
    include ('setting/database.php');
    require_once "models/main_models.php"; 

    //--> Fecha Actual
    date_default_timezone_set("America/Argentina/Buenos_Aires");

    $date = date("d, m, Y");
    $day = date("d");
    $month  = date("m");
    $year = date("Y");   

    //--> Schedule Time <---
    $obj_scheduleTime = new Run_Model();
    $data_scheduleTime = $obj_scheduleTime->Run_scheduleTime();
    
    while ($get_scheduleTime = mysqli_fetch_assoc($data_scheduleTime)) { 
            
        //--> Variables
        $date_scheduleTime = $get_scheduleTime['date'];
               
        $date_day = substr($date_scheduleTime, -2, 2);
        $date_month = substr($date_scheduleTime, -5, 2);
        $date_year = substr($date_scheduleTime, 0, 4);

 
        if($date_day == $day && $date_month == $month && $date_year == $year){
            require_once "run_clock.php";
            require_once "home.php";
        }else{
            require_once "home.php";
        }
    }    
?>