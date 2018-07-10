<?php
session_start();
include '../conexao.php';

$id = $_GET["id"];




$sql = "DELETE FROM gerentes WHERE id=$id";
$resultado = $conn->query($sql);

  if ($resultado === TRUE) {
      echo "Excluido com sucesso";
      header("Location: ../listar_gerentes.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

 ?>
