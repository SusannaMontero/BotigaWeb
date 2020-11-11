<?php


require_once 'connBBDD.php';
require_once 'desardadesBotigaWeb.php';



//Parámetres  que venen del POST


        $nick = $_POST["nick"];
        $password = $_POST["password"];
                
//Dades recollides del post passades a array

        $dades = [$nick, $password]; 
        

//instancia de la classe Registre i crido la funció save per guardar dades

    $Registre = new Registre;
    $Registre -> save($dades, 'registre');
    
?>