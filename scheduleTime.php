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
            </br>
            <hr> 
            <div id="box_boton">
                <div class="boton">
                    <a href="index.php">Home</a>
                </div>
            </div>
            <hr> 
            
            <div class="scheduleTime">
    
                <form action="controllers/resch_scheduleTime.php" method='post' class='form_contact'>
                    <div class='formulario'>
                      
                        <!--Single-->
                        <label for='single'>Single<span>*</span></label>
                        <input class='single' type='number' name='single' pattern='[0-9- ]+' required='required' maxlength="9" placeholder='$'>

                        <!--Single Superior-->
                        <label for='superior'>Single Superior<span>*</span></label>
                        <input class='superior' type='number' name='superior' pattern='[0-9- ]+' required='required' maxlength="9" placeholder='$'>

                        <!--Doble-->
                        <label for='doble'>Doble<span>*</span></label>
                        <input class='doble' type='number' name='doble' pattern='[0-9- ]+' required='required' maxlength="9" placeholder='$'><br/>

                        <!--Triple-->
                        <label for='triple'>Triple<span>*</span></label>
                        <input class='triple' type='number' name='triple' pattern='[0-9- ]+' required='required' maxlength="9" placeholder='$'>
                       
                        <!--Cuádruple-->
                        <label for='cuadruple'>Cuádruple<span>*</span></label>
                        <input class='cuadruple' type='number' name='cuadruple' pattern='[0-9- ]+' required='required' maxlength="9" placeholder='$'>

                        <!--Quíntuple-->
                        <label for='quintuple'>Quíntuple<span>*</span></label>
                        <input class='quintuple' type='number' name='quintuple' pattern='[0-9- ]+' required='required' maxlength="9" placeholder='$'><br/>

                        <!--Séxtuple-->
                        <label for='sextuple'>Séxtuple<span>*</span></label>
                        <input class='sextuple' type='number' name='sextuple' pattern='[0-9- ]+' required='required' maxlength="9" placeholder='$'>

                        <!--Siesta-->
                        <label for='siesta'>Siesta<span>*</span></label>
                        <input class='siesta' type='number' name='siesta' pattern='[0-9- ]+' required='required' maxlength="9" placeholder='$'>

                        <!--Mascota-->
                        <label for='mascota'>Mascota<span>*</span></label>
                        <input class='mascota' type='number' name='mascota' pattern='[0-9- ]+' required='required' maxlength="9" placeholder='$'><br/>

                        <!--Cochera Adicional-->
                        <label for='cochera'>Cochera Adicional<span>*</span></label>
                        <input class='cochera' type='number' name='cochera' pattern='[0-9- ]+' required='required' maxlength="9" placeholder='$'><br/>

                        <!--Fecha-->
                        <label for='date'>Fecha <span>*</span></label>
                        <input class='date' type='date' name='date' required='required'>

                        <!--Hora-->
                        <label for='hour'>Hora <span>*</span></label>
                        <input class='hour' type='time' name='hour'>
                    
                        <div id='enviar'>
                            <button type="submit" class="btn_reschedule">Reprogramar</button>                    
                        </div>
                    </div>
                </form>
            </div>            
        </div>
    </body>
</html>