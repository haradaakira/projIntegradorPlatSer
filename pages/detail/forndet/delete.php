<?php
include "../../../db.php";
session_start();
$cu = $_SESSION['id_forn'];
$sql = "DELETE FROM SERVICO WHERE ID_FORNECEDOR = $cu";

if ($mysqli->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $mysqli->error;
}

$mysqli->close();

echo "<script>
   alert('Seu Cadastro Foi Realizado Com Sucesso!');
   window.location.href='../../service/fornserv/fornserv.php';
   </script>";


