<?php

include('conect.php'); // Include the connection to the databank THEN start your SQL Job :)
$id = $_POST['id'];
//perform the insert using pg_query
$result = pg_query($conexao, "delete from cliente where id = $id;");

header("Location: http://127.0.0.1");
die();

?>
