<?php

$valEmail = "/^[a-zA-Z0-9]*[@][gmail|hotmail|outlook]*[.com]/";
$valPass = "/^[a-zA-Z0-9_%&*.]+/";
$valDate = "/^[0-9]{4}*[-][0-9]{1,2}*[-][0-9]{1,2}/";

if(isset($_POST['emailForm']) && isset($_POST['passwordForm']) && isset($_POST['dateForm'])){

    echo "corre: ".$_POST['emailForm'];
    echo "pass: ".$_POST['passwordForm'];
    echo "date: ".$_POST['dateForm'];
    if(preg_match($valEmail, $_POST['emailForm']) != 1){
        echo "Error en el correo<br/>";
    }else{
        echo "el correo es: ".$_POST['emailForm']."<br/>";
    }
    if(preg_match($valPass,$_POST['passwordForm']) != 1){
        echo "Error en el password<br/>";
    }else{
        echo "el password es: ".$_POST['passwordForm']."<br/>";
    }
}else{

}

?>