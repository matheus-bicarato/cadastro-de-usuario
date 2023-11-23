<?php 
    include "db_conn.php";

    if (isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`)
        VALUES (NULL, '$first_name', '$last_name', '$email', '$gender')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: index.php?msg=Novo registro criado com sucesso!");
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Cadastro de Usuários</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Cadastro de Usuários
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Incluir Novo Usuário</h3>
            <p class="text-muted">Complete o formulário abaixo</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width: 300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nome :</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Digite o nome...">
                    </div>

                    <div class="col">
                        <label class="form-label">Sobrenome :</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Digite o sobrenome...">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com">
                </div>

                <div class="form-group mb-3">
                    <label>Gênero:</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="Masculino">
                    <label for="male" class="form-input-label">Masculino</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="Feminino">
                    <label for="female" class="form-input-label">Feminino</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Salvar</button>
                    <a href="index.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <!-- BS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>