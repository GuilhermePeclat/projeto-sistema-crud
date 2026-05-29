<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pesquisar</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <?php
  $pesquisa = $_POST['busca'] ?? '';

  include "conexao.php";

  $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

  $dados = mysqli_query($conn, $sql);

  ?>

  <div class="container mt-4">
    <h1>Pesquisar Colaboradores</h1>
    <div class="d-flex justify-content-end mb-3">
      <form class="d-flex" action="listar.php" method="POST">
        <input class="form-control me-2" type="search" placeholder="Procurar nome" name="busca" autofocus>
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Endereço</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Nascimento</th>
        </tr>
      </thead>

      <tbody>
        <?php
        while ($linha = mysqli_fetch_assoc($dados)) {
          $cod_pessoa = $linha['cod_pessoa'];
          $nome = $linha['nome'];
          $endereco = $linha['endereco'];
          $telefone = $linha['telefone'];
          $email = $linha['email'];
          $data_nascimento = $linha['data_nascimento'];

          echo "<tr>
            <td>$nome</td>
            <td>$endereco</td>
            <td>$telefone</td>
            <td>$email</td>
            <td>$data_nascimento</td>
          </tr>";
        }
        ?>
      </tbody>
    </table>

    <div class="d-flex justify-content-end mt-3">
      <a href="index.php" class="btn btn-primary btn-lg">Voltar</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>