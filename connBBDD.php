<?php



session_start();
header("Content-Type: text/html;charset=utf-8");


class database	{

	//Paràmetres de connexió
	public $servidor="localhost";
	public $usuari="root";
	public $contr="";
	public $bd="Botiga";
	
	//connexió amb la BBDD

	function connexio ()	{

		$con = new mysqli($this->servidor, $this->usuari,$this->contr,$this->bd)
		
			or die("No s'ha pogut realitzar la connexió: ". mysqli_connect_error());
		
			return $con;
		
		}


//funció per insertar dades a la taula, rep els valors de l'array on guardem les dades del Post + la connexió a la BBDD 

	function insert ($con, $dades)	{

			$dadesInsert = "INSERT INTO registre (nick, password) VALUES ('$dades[0]', '$dades[1]')";
           
			if ($con->query($dadesInsert) == TRUE)	{
				echo "Dades inserides correctament";
			}
			else{
				echo "No s'ha pogut connectar".$con->error;
			}

			mysqli_close($con);
        }

}

?>






