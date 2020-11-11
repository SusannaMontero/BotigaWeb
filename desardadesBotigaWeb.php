<!--Classe Registre amb les propietats nick i pasword. Conté  el mètode save(), que comprovarà i insertarà un nou usuari a la BBDD. !-->

<?php

require_once 'postBotigaWeb.php';
require_once 'connBBDD.php';

header("Content-Type: text/html;charset=utf-8");

class Registre {


    public $nick;
    public $pasword;

//métodoe save  (li passo els paràmetres de les propietats + el de la connexió)
//Primer comprovarem si l'usuari ja està enregistrat

    function save ($dades) {

        $con = new database;
        $con = $con->connexio();

        $validacio = "SELECT *  FROM registre where nick = '$dades[0]' AND password = '$dades[1]'";
        $res = mysqli_query($con, $validacio);

        $files = mysqli_num_rows($res);
        

        if ($files > 0)  {

            echo ("Usuari no disponible");
            
           
        }
        else    {

            $vehicleInsert = new database;
            $vehicleInsert -> insert($con, $dades, 'registre');
            die("Usuari desat correctament.");
        }
        
    }

    

}

?>
