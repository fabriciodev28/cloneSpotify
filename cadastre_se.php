<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/favicon.png">

    <style>
        #formulario{
            height: 100%;
        }
        #inputs{
            background-color: black;
            padding: 20px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <section class="d-flex" id="formulario">
        <section class="m-auto w-25 text-white justify-content-center" id="inputs">
            <img src="img/spotify.svg" alt="logo" width="142" class="mb-5">
            <form action="cadastro.php" method="post" class="mb-5">
                <div class="mb-3">
                    <label class="form-check-label mb-2" for="nomeUsuario">Nome de usuário:</label>
                    <input type="text" class="form-control w-75 m-auto" id="nomeUsuario" name="nomeDeUsuario" required>
                  </div>
                <div class="mb-3">
                  <label for="emailCadastro" class="form-label mb-2">Email:</label>
                  <input type="email" class="form-control w-75 m-auto" id="emailCadastro" name="e-mail" required>
                </div>
                <div class="mb-3">
                  <label for="senhaCadastro" class="form-label mb-2">Password:</label>
                  <input type="password" class="form-control w-75 m-auto" id="senhaCadastro" name="senha" required>
                </div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
                <?php

                  if(isset($_GET['login']) && $_GET['login'] == 'erro'){

                ?>

                <div class='text-danger'>
                Preencha os dados corretamente
                </div>

                <?php } ?>
              </form>
              <hr>
              <?php

                  if(isset($_GET['login']) && $_GET['login'] == 'erro2'){

                ?>

                <div class='text-danger'>
                Insira e-mail e senha válidos
                </div>

                <?php } ?>
            <form action="login.php" method="post" class="mt-5">
                <h5 class="mb-3 text-center">Já tem um cadastro?</h5>
                <div class="mb-3">
                    <label for="email" class="form-label mb-2">Email:</label>
                    <input type="email" class="form-control w-75 m-auto" id="email" name="e-mail" required>
                  </div>
                  <div class="mb-3">
                    <label for="senha" class="form-label mb-2">Password:</label>
                    <input type="password" class="form-control w-75 m-auto" id="senha" name="senha" required>
                  </div>
                  <button type="submit" class="btn btn-primary mt-5">Submit</button>
                  <?php

                    if(isset($_GET['login']) && $_GET['login'] == 'erro3'){

                  ?>

                    <div class='text-danger'>
                    É necessário fazer login primeiramente
                    </div>

                  <?php } ?>
            </form>
        </section>
    </section>
    

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- JavaScript Local -->
    <script src="script.js"></script>
</body>
</html>