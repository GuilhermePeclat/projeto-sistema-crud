<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editor</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

        <?php
            include "conexao.php";

            $id = $_GET['id'] ?? '';
            $sql = "SELECT * FROM pessoas where cod_pessoa = $id";
            
            $dados = mysqli_query($conn, $sql);
            $linha = mysqli_fetch_assoc($dados);

        ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <h1>Editar</h1>
                    <a href="listar.php" class="btn btn-primary btn-sm">Voltar</a>
                </div>
                <form action="cadastro_script.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control w-50" name="nome" required value="<?php echo $linha['nome'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control w-50" name="endereco" required value="<?php echo $linha['endereco'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control w-25" name="telefone" required value="<?php echo $linha['telefone'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control w-50" name="email" required value="<?php echo $linha['email'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="nascimento" class="form-label">Nascimento</label>
                        <input type="date" class="form-control w-25" name="data_nascimento" required value="<?php echo $linha['data_nascimento'];?>">
                    </div>
                    <div class="mb-3 d-flex gap-2 justify-content-end">
                        <button type="submit" class="btn btn-success btn-lg">Salvar alteração</button>
                        <button type="reset" class="btn btn-outline-secondary btn-lg">Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>