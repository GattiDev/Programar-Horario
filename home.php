<!DOCTYPE html>
<html lang="en">    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta athor="GattiDev : Ezequiel Gatti" date="10/12/2020">
        <link rel="icon" type="favicon/x-icon" href="Icon/favicon.ico" />
    
        <title>Programar Horario</title>

        <!--/ Styles /-->
		<link rel="stylesheet" type="text/css" href="css/styles.css" />

    </head>
    <body>
        <div id='conteiner'>
            <h1>Programar Horario</h1>
            <p>Cambio los Precios a un determinado horario y el cambio se hace automaticamnete.</p>
            
            <div class="boton">
                <a href="scheduleTime.php">Programar Horario</a>
            </div>

            <?php   
                //--> Show Data <---
                $obj_showData = new Run_Model();
                $data_showData = $obj_showData->Run_showData();
                
                while ($get_showData = mysqli_fetch_assoc($data_showData)) { 
                        
                    //--> Variables
                    $single = $get_showData['single'];
                    $superior = $get_showData['superior'];
                    $doble = $get_showData['doble'];
                    $triple = $get_showData['triple'];
                    $cuadruple = $get_showData['cuadruple'];
                    $quintuple = $get_showData['quintuple'];
                    $sextuple = $get_showData['sextuple'];
                    $siesta = $get_showData['siesta'];
                    $mascota = $get_showData['mascota'];
                    $cochera = $get_showData['cochera'];
                
                    echo "<p>Single ==> ".$single."</p>";
                    echo "</br>";      
                    echo "<p>Single Superior ==> ".$superior."</p>";
                    echo "</br>";
                    echo "<p>Doble ==> ".$doble."</p>";
                    echo "</br>";
                    echo "<p>Triple ==> ".$triple."</p>";
                    echo "</br>";
                    echo "<hr>";  
                    echo "<p>Cuádruple ==> ".$cuadruple."</p>";
                    echo "</br>";                
                    echo "<p>Quíntuple ==> ".$quintuple."</p>";
                    echo "</br>";   
                    echo "<p>Séxtuple ==> ".$sextuple."</p>";
                    echo "</br>";      
                    echo "<p>Siesta ==> ".$siesta."</p>";
                    echo "</br>";
                    echo "<hr>";
                    echo "<p>Mascota ==> ".$mascota."</p>";
                    echo "</br>";  
                    echo "<p>Cochera Adicional ==> ".$cochera."</p>";
                    echo "<hr>";  
                }
            ?>
        </div>
    </body>
</html>