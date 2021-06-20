<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Exclusão</title>
</head>
<body>
    <?php

    include ('../conexao.php');
    $id = $_POST['id'];
    $nome_livro = $_POST['nome_livro'];
    

    $sql = "DELETE from `livros`  WHERE id_livro = $id";


    if (mysqli_query($conn, $sql)) {
        echo('<h2><b>Exemplar Excluido com sucesso!</b></h2>');
    } else {
        echo('<h2><b>Erro ao Excluir Exemplar!</b></h2>');
    }
    ?>
    <hr>
    <a href='/formularios/pesquisa.php' class='btn btn-info'>Voltar</a>
</body>
</html>

