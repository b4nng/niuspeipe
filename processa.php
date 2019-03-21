<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

//echo "Nome : $nome <br>";
//echo "Descrição: $descricao <br>";

$result_jornal = "INSERT INTO jornal (nome_jornal, data_criacao, descricao_jornal)
 VALUES ('$nome', NOW(), '$descricao')";

 $resultado_jornal = mysqli_query($conn, $result_jornal);

 if(mysqli_insert_id($conn))
 {
     $_SESSION['msg'] = "<p style='color:green'>Jornal cadastrado com sucesso</p>";
    header("Location: index.php");
 }
 else
 {
    $_SESSION['msg'] = "<p style='color:red'>O Jornal não foi cadastrado</p>";
    header("Location: index.php");
 }