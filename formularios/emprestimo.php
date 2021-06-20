<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/forms.css" media="screen" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Emprestimo</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">Painel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/formularios/cadastro_leitor.php">Cadastrar Leitor </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/formularios/cadastro_livro.php">Cadastrar Livro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/formularios/emprestimo.php">Cadastrar Emprestimo</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/formularios/pesquisa.php">Consultar Livros</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/formularios/pesquisa_leitores.php">Consultar Leitores</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/formularios/pesquisa_emprestimo.php">Consultar Emprestimos</a>
            </li>
        </ul>
        <span class="navbar-text">
            Biblioteca Mário de Andrade
        </span>
        </div>
    </div>
    </nav>
    
    <form class='form-control'action="/scripts/emprestimo_script.php" method="POST">
        <div class='titletop'>
            <h2><b>Emprestimo</b></h2>
        </div>

        <!-- SELECT DE LIVRO PARA EMPRESTIMO -->
        <div class='group'>
            <label ><b>Nome do Livro</b></label>
            <select class="form-select" aria-label=".form-select-lg example" name='livro_emprestimo' required>
                <option value=''>Selecione...</option>
            <?php
                include ('../conexao.php');
                $sql= "SELECT * FROM livros";
                $resultado = mysqli_query($conn, $sql);
                while( $dados = mysqli_fetch_array($resultado)) {
                    $nome_livro = $dados['nome_livro'];
                    $nome_livro = $dados['nome_livro'];
                    echo ("<option value='$nome_livro'>$nome_livro</option>");                  
                }
            ?>
        </select>
        </div><br>

        <!-- SELECT DE NOME DO LEITOR PARA EMPRESTIMO -->
        <div class='group'>
            <label ><b>Nome do Leitor: </b></label>
            <div class='group'>
            <select class="form-select" aria-label=".form-select-lg example" name='user_emprestimo' required>
                <option value=''>Selecione...</option>
            <?php
                include ('../conexao.php');
                $sql= "SELECT * FROM leitores";
                $resultado = mysqli_query($conn, $sql);
                while( $dados = mysqli_fetch_array($resultado)) {
                    $nome_completo = $dados['nome_completo'];
                    $nome_completo = $dados['nome_completo'];
                    echo ("<option value='$nome_completo'>$nome_completo</option>");                  
                }
            ?>
            </select>
        </div><br>
        <div class='group'>
            <label><b>Data</b><br>
                <input type='text' name='data_emprestimo' value='<?php echo date("d/m/Y"); ?>'>
            </label>
        </div><br>    
        <div>
            <label ><b>Quantidade</b></label>
            <input class="form-control" aria-label="Amount" type="number" name="qtd_emprestimo" min="1" max="10" required>
        </div><br>
        <div class=botaoemprestimo>
            <button type="submit" class='btn btn-success'>Efetuar Emprestimo</button>
        </div><br>
        <a href="../index.php" class='btn btn-primary'>Voltar</a>
    </form>
</body>
</html>