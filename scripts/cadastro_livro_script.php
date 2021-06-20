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
    $nome_livro = $_POST['nome_livro'];
    $autor = $_POST['autor'];
    $tema = $_POST['tema'];
    $data_publi = $_POST['data_publi'];
    $categoria = $_POST['categoria'];
    $qtd_copias = $_POST['qtd_copias'];

    $sql = "INSERT INTO `livros`(`nome_livro`, `autor`, `tema`, `data_publi`, `categoria`, `qtd_copias`) 
    VALUES ('$nome_livro', '$autor', '$tema', '$data_publi', '$categoria', '$qtd_copias')";

    if (mysqli_query($conn, $sql)) {
        echo('<h2><b>Exemplar cadastrado com sucesso!</b></h2>');
    } else {
        echo('<h2><b>Erro ao cadastrar Exemplar!</b></h2>');
    }
?>
<a href="/formularios/cadastro_livro.php" class='btn btn-info'>Voltar</a>
</body>
</html>


