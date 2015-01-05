<?php

include('conect.php'); // Include the connection to the databank THEN start your SQL Job :)
$nome = $_POST['nome'];
$email = $_POST['email'];
//perform the insert using pg_query
$result = pg_query($conexao, "INSERT INTO cliente(nome, email) 
				VALUES('$nome', '$email');");

header("Location: http://127.0.0.1");
die();

?>
