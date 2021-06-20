<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cadastro Livro</title>
</head>
<body>
    <?php
        
    include ('../conexao.php');
    $nome_completo = $_POST['nome_completo'];
    $data_nascimento = $_POST['data_nascimento'];
    $escolaridade = $_POST['escolaridade'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'] ;
    $email =  $_POST['email'];

    $sql = "INSERT INTO `leitores`(`nome_completo`, `data_nascimento`, `escolaridade`, `endereco`, `telefone`, `genero`, `email`) 
    VALUES ( '$nome_completo', '$data_nascimento', '$escolaridade', '$endereco', '$telefone', '$genero', '$email')";
    
    if (mysqli_query($conn, $sql)) {
        echo('<h2><b>Cadastrado com sucesso!</b></h2>');
    }else {
        echo('<h2><b>Cadastro NÃO realizado!</b></h2>');
    }
?>

<a href="/formularios/cadastro_leitor.php" class='btn btn-info'>Voltar</a>
</body>
</html>

