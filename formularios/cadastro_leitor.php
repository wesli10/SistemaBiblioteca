<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/forms.css" media="screen" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cadastro Leitor</title>
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
            Biblioteca M??rio de Andrade
        </span>
        </div>
    </div>
    </nav>
    <form  class='form-control'action="/scripts/cadastro_leitor_script.php" method="POST">
        <div class='titletop'>
            <h2><b>Cadastro de Leitor</b></h2>
        </div>
        <div class='group'>
            <label for='nome'><b>Nome Completo</b></label>
            <input class='form-control' type="text" name='nome_completo' placeholder="Nome Completo" required>
        </div><br>
        <div class='form-group'>
            <label for='data_nascimento'><b>Data de Nascimento</b></label>
            <input  class='form-control' type='date' name='data_nascimento' required>
        </div><br>
        <div class='form-group'>
            <label for="escolaridade"><b>Escolaridade:</b>
                <input class="form-check-input" type="radio" name='escolaridade' value='Ensino Fundamental'> Ensino Fundamental
            </label>
            <label>
                <input class="form-check-input" type='radio' name='escolaridade' value='Ensino Medio'> Ensino M??dio
            </label>
            <label> 
                <input class="form-check-input" type='radio' name='escolaridade' value='Ensino Superior'> Ensino Superior
            </label>
        </div><br>
        <div class='form-group'>
            <label for='endereco'><b>Endere??o: </b></label>
            <input class='form-control'  type="text" name='endereco' placeholder="Endere??o" required>
        </div><br>
        <div class='form-group'>
            <label><b>Telefone</b></label>
            <input class='form-control' type="text" name='telefone' placeholder="(DDD) _________" required>
        </div><br>
        <div>
            <label><b>G??nero</b></label>
            <select class="form-select" name='genero' id='genero'>
                <option selected disabled value="">Selecione</option>
                <option>Masculino</option>
                <option>Feminino</option>
                <option>Outro</option>
            </select>
        </div><br>
        <div>
            <label><b>Email</b></label>
            <input class='form-control' type="email" name='email' id='email' required>
        </div><br>
        
        <div class=botaoCadastrar>
            <button type="submit" class='btn btn-success'>Cadastrar</button>
        </div><br>
        <a href="../index.php" class='btn btn-primary'>Voltar</a>
    </form>
</body>
</html>