<?php
    session_start();
    include_once("conexao.php");

    $nome_edicao = filter_input(INPUT_POST, 'nome_edicao', FILTER_SANITIZE_STRING);
    $id_jornal_fk = $_POST['select_jornal'];
    $data_public = $_POST['data_publi'];

    $codigo_edicao = "INSERT INTO edicao (titulo_edicao, id_jornal, data_publicacao, data_insercao) VALUES ('$nome_edicao', '$id_jornal_fk', '$data_public', NOW())";
    
    $kuery_edicao = mysqli_query($conn, $codigo_edicao);
    
    if(mysqli_insert_id($conn))
    {
     $_SESSION['msg'] = "<p style='color:green'>Edição cadastrada com sucesso</p>";
    header("Location: index.php");
    }
    else
    {
    $_SESSION['msg'] = "<p style='color:red'>A edição não foi cadastrada</p>";
    header("Location: index.php");
    }
    ?>