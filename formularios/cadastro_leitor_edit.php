<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/forms.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cadastro de leitores</title>
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

    <?php
    include ('../conexao.php');
        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM leitores WHERE id_leitor = $id";

        $dados = mysqli_query($conn, $sql);

        $linha = mysqli_fetch_assoc($dados);

    ?>

<form class='form-control'action="/scripts/edit_leitor_script.php" method="POST">
        <div class='titletop'>
            <h2><b>Alteração de Leitor</b></h2>
            
        </div>
        <div class='"form-group"'>
            <label for='nome'><b>Nome Completo</b></label>
            <input class='form-control' type="text" name='nome_completo' placeholder="Nome" required value="<?php echo $linha ['nome_completo']; ?>">
        </div><br>
        <div class='"form-group"'>
            <label ><b>Data Nascimento</b></label>
            <input class='form-control' type='text' name='data_nascimento' required value="<?php echo $linha ['data_nascimento']; ?>">
        </div><br>
        <div class='"form-group"'>
            <label for="tema"><b>Escolaridade</b>
                <input class='form-control' type='text' name='escolaridade' required value="<?php echo $linha ['escolaridade']; ?>">
            </label>
        </div><br>
        <div class='"form-group"'>
            <label ><b>Endereço</b></label>
            <input class='form-control' type="text" name='endereco' placeholder="" required value="<?php echo $linha ['endereco']; ?>">
        </div><br>
        <div class='"form-group"'>
            <label ><b>Telefone</b></label>
            <input class='form-control' type="text" name='telefone' placeholder="" required value="<?php echo $linha ['telefone']; ?>">
        </div><br>
        <div>
            <label><b>Gênero</b></label>
            <input class='form-control' type="text" name="genero" id='genero' value="<?php echo $linha ['genero']; ?>">
        </div><br>
        <div>
            <label ><b>Email</b></label>
            <input class='form-control' type="text" name="email" id='email' value="<?php echo $linha ['email']; ?>">
        </div><br>
        <div class=botaoCadastrar>
            <button type="submit" class='btn btn-success'>Salvar Alterações</button>
            <input type='hidden' name='id' value="<?php echo $linha ['id_leitor']; ?>">
        </div><br>
        <a href="../index.php" class='btn btn-primary'>Voltar</a>
    </form>
</body>
</html>