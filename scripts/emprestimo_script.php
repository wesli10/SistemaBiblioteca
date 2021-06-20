<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Emprestimo</title>
</head>
<body>
    <?php

    include ('../conexao.php');
    $livro_emprestimo = $_POST['livro_emprestimo'];
    $user_emprestimo = $_POST['user_emprestimo'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $qtd_emprestimo = $_POST['qtd_emprestimo'];
    

    $sql = "INSERT INTO `empretimos` (`livro_emprestimo`, `user_emprestimo`, `data_emprestimo`, `qtd_emprestimo`) 
    VALUES ('$livro_emprestimo', '$user_emprestimo', '$data_emprestimo', '$qtd_emprestimo')";

    if (mysqli_query($conn, $sql)) {
        echo('<h2><b>Emprestimo cadastrado com sucesso!</b></h2>');
    } else {
        echo('<h2><b>Erro ao cadastrar Emprestimo!</b></h2>');
    }
?>
<a href="/formularios/emprestimo.php" class='btn btn-info'>Voltar</a>
</body>
</html>


