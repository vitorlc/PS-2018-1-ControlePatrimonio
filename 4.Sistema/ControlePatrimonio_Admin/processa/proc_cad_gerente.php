<?php
session_start();
include '../conexao.php';

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];
$data_nascimento = $_POST["data_nascimento"];
$email = $_POST["email"];
$id_cargo = $_POST["id_cargo"];


$sql = "INSERT INTO gerentes (nome, cpf, sexo, data_nascimento, email, id_cargo)
VALUES ('$nome', '$cpf', '$sexo', '$data_nascimento', '$email', '$id_cargo')";
$resultado = $conn->query($sql);

  if ($resultado === TRUE) {
      echo "Cadastrado com sucesso";
      header("Location: ../listar_gerentes.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

 ?>
