<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Alteração</title>
</head>
<body>
    <?php

    include ('../conexao.php');
    $id = $_POST['id'];
    $nome_completo = $_POST['nome_completo'];
    $data_nascimento = $_POST['data_nascimento'];
    $escolaridade = $_POST['escolaridade'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];

    $sql = "UPDATE `leitores` set `nome_completo` = '$nome_completo', `data_nascimento` = '$data_nascimento', `escolaridade` = '$escolaridade', `endereco` = '$endereco',
     `telefone` = '$telefone', `genero` = '$genero', `email` = '$email'  WHERE id_leitor = $id";


    if (mysqli_query($conn, $sql)) {
        echo(' <h2><b>Alterado com sucesso!</b></h2>');
    } else {
        echo('<h2><b>Erro ao Alterar!</b></h2>');
    }
?>
<a href='/formularios/pesquisa_leitores.php' class='btn btn-info'>Voltar</a>
</body>
</html>
