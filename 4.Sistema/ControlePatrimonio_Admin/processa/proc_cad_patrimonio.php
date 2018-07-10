<?php
session_start();
include '../conexao.php';

$nome = $_POST["nome"];
$data_de_compra = $_POST["data_de_compra"];
$preco = $_POST["preco"];
$id_situacao = $_POST["id_situacao"];
$id_departamento = $_POST["id_departamento"];
$id_gerente = $_POST["id_gerente"];
$descricao = $_POST["descricao"];



$sql = "INSERT INTO patrimonio (nome, data_de_compra, preco, id_situacao, id_departamento, id_gerente, descricao)
VALUES ('$nome', '$data_de_compra', '$preco', '$id_situacao', '$id_departamento', '$id_gerente', '$descricao')";
$resultado = $conn->query($sql);

  if ($resultado === TRUE) {
      echo "Cadastrado com sucesso";
      header("Location: ../listar_patrimonio.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

 ?>
