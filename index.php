<?php

require_once("connection.php");


/**
 * EXEMPLO DE USO 
 */

$conn = db_mysql();

$sql = "SELECT * FROM dados";

$response = mysqli_query($conn, $sql);

if(!$response)
{
    echo "Não foi possível conectar";
}
else
{
    while($row = mysqli_fetch_assoc($response))
    {
        var_dump($row);
    }

}

?>