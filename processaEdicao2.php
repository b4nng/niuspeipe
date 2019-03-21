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