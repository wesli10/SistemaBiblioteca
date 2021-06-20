<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/forms.css" media="screen" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Pesquisa de Exemplar</title>
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
$pesquisa = $_POST['busca'] ?? '';

include '../conexao.php';

$sql = "SELECT * FROM leitores WHERE nome_completo LIKE '%$pesquisa%'";

$dados = mysqli_query($conn, $sql);

?>



    <h1><b>Pesquisar Leitores</b></h1>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <form class="d-flex" action="pesquisa_leitores.php" method="POST">
                <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name='busca' autofocus>
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
    <table class="table table table-hover">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Data Nascimento</th>
            <th scope="col">Escolaridade</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <th scope="col">Gênero</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
while ($linha = mysqli_fetch_assoc($dados)) {
    $id_leitor = $linha['id_leitor'];
    $nome_completo = $linha['nome_completo'];
    $data_nascimento = $linha['data_nascimento'];
    $escolaridade = $linha['escolaridade'];
    $endereco = $linha['endereco'];
    $telefone = $linha['telefone'];
    $genero = $linha['genero'];
    $email = $linha['email'];
    echo "<tr>
                    <th scope='row'>$nome_completo</th>
                    <td>$data_nascimento</td>
                    <td>$escolaridade</td>
                    <td>$endereco</td>
                    <td>$telefone</td>
                    <td>$genero</td>
                    <td>$email</td>
                    <td width=150px><a href='/formularios/cadastro_leitor_edit.php?id=$id_leitor' class='btn btn-success'>Editar</a>
                        <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma' onclick=" . '"' . "get_data($id_leitor, '$nome')" . '"' . ">Excluir</a>

                    </td>
                </tr>";
}
?>
        </tbody>
    </table>
    <a href="../index.php" class='btn btn-primary'>Voltar</a>

    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
            <form action='/scripts/excluir_leitores_script.php' method='POST'>
                <p>Deseja realmente excluir</p>
                <p id='nome_leitor'>Nome da Pessoa</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <input type='hidden' name='id' id='id_leitor' value=''>
                <input type="submit" class="btn btn-danger" value='Sim'>
            </form>
      </div>
    </div>
  </div>
</div>
<script type='text/javascript'>
    function get_data(id, nome) {
        document.getElementById('nome_leitor').innerHTML = nome;
        document.getElementById('id_leitor').value = id;
    }
</script>
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>