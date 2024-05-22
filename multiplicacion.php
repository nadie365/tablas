<?php

if((isset($_POST['numero']) && !empty($_POST['numero']))
    && (isset($_POST['maximo']) && !empty($_POST['maximo'])) ){
        $numero = $_POST['numero'];
        $multiplicar = $_POST['maximo'];
    
        for($i = 1; $i<=$multiplicar; $i++){
            echo $numero . " x " . $i . " = ".$numero * $i . "<br>";
        }
}else{
    echo "No se ha enviado el formulario";
};

