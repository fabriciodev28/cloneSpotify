<?php

    require_once 'valida_acesso.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Web</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87cb5ecc11.js" crossorigin="anonymous"></script>

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/favicon.png">

    <style>
        .card{
            width: 180px;
            height: 200px;
            background-color: #2c2c2c;
            font-family: Helvetica, sans-serif;
            margin: 5px 50px;
            padding: 15px;
            cursor: pointer;
        }

        p {
            font-weight: 600;
            font-family: Helvetica, sans-serif;
            margin-top: 5px;
            text-align: center;
        }

        #rodape{
            width: 100%;
            display: none;
        }

        #preview{
            width: 22%;
        }

        .fas{
            cursor: pointer;
        }

        #pause{
            display: none;
        }
    </style>
</head>
<body style="background: #121212; min-width: 700px;" class="text-white">

    <header id="navegacao" style="background-color: rgb(0, 0, 0); width: 300px; min-width: 300px; max-width: 300px;" class="float-start">
            <div class="ms-3">
                <a href="player.html">
                    <img src="img/spotify.svg" alt="logo" width="142" class="mt-4 ml-3">
                </a>

                <ul class="mt-4 navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Your Library</a>
                    </li>
                </ul>

                <hr class="text-white me-3">

                <ul class="navbar-nav mt-4">
                    <li class="nav-item">
                        <a class="nav-link" href="">Create Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Liked Songs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Your Episodes</a>
                    </li>
                </ul>
                
            </div>
    </header>

    <section class="float-end">
        <header class="sticky-top">
            <a class="nav-link text-white mt-3 me-3" href=""><i class="fa-solid fa-user"></i></a>
        </header>
    </section>

    <section class="float-start mt-5 me-5">
        <a href="" class="nav-link mt-3 ms-5" style="font-weight: 800; font-size: large;">Top 50 Global</a>

        <div class="card" id="topglobal" onclick="exibirMusica('top50globais',0)">
            <img src="img/top50global.jpg" alt="top50global">
            <p>Top 50 Global</p>
        </div>
    </section>

    <footer class="float-start fixed-bottom w-100" id="rodape">
        <section id="responsive">
            <section class="float-start" id="preview">
                <img class="mt-2 ms-3 float-start" src="img/top50global.jpg" alt="top50globais" id="faixa" width="100px">
                <span class="ms-3" id="nomeMusica">Musica</span><br>
                <span class="ms-3" id="artista">Artista</span>
            </section>

            <section class="duracao float-start">
                <section class="barra">
                    <progress value="0" max="1" id="barraProgress"></progress>
                    <section class="ponto"></section>
                </section>
                <section class="tempo">
                    <p id="inicio">00:00</p>
                    <p id="fim">00:00</p>
                </section>
                <section class="player">
                    <i class="fas fa-step-backward setas" onclick="musicaAnterior()"></i>
                    <i class="fas fa-play-circle botao-play" id="play" onclick="tocarMusica()"></i>
                    <i class="fas fa-pause-circle botao-pause" id="pause" onclick="pausarMusica()"></i>
                    <i class="fas fa-step-forward setas" onclick="proximaMusica()"></i>
                </section>
                <audio src="" id="audio"></audio>
            </section>
        </section>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- JavaScript Local -->
    <script src="script.js"></script>
</body>
</html>