<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projeto_jornais";

//Cria a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//avisa se der erro
    if(!$conn)
    {
        die("Falha na conexao: " . mysqli_connect_error());
    }
    else
    {
        //echo "conexao realizada com sucesso";
    }
?>