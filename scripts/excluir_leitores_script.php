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
    $livro_emprestimo = $_POST['livro_emprestimo'];
    

    $sql = "DELETE from `leitores`  WHERE id_leitor = $id";


    if (mysqli_query($conn, $sql)) {
        echo('<h2><b>Leitor Excluido com sucesso!</b></h2>');
    } else {
        echo('<h2><b>Erro ao Excluir Leitor!</b></h2>');
    }
?>
<hr>
<a href='/formularios/pesquisa_leitores.php' class='btn btn-info'>Voltar</a>
</body>
</html>