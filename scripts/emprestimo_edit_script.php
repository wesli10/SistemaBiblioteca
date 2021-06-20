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
    $livro_emprestimo = $_POST['livro_emprestimo'];
    $user_emprestimo = $_POST['user_emprestimo'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $qtd_emprestimo = $_POST['qtd_emprestimo'];
    

    $sql = "UPDATE `empretimos` set `livro_emprestimo` = '$livro_emprestimo', `user_emprestimo` = '$user_emprestimo', 
    `data_emprestimo` = '$data_emprestimo', `qtd_emprestimo` = '$qtd_emprestimo' WHERE id_emprestimo = $id";


    if (mysqli_query($conn, $sql)) {
        echo('<h2><b> Alterado com sucesso!</b></h2>');
    } else {
        echo('<b>Erro ao Alterar!</b>');
    }
?>
<a href='/formularios/pesquisa_emprestimo.php' class='btn btn-info'>Voltar</a>
</body>
</html>
