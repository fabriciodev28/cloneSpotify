<?php
    session_start();

    //array que armazena todos os cadastros
    $cadastros = [];

    //abertura do arquivo para leitura e comparação com os dados do formulário
    $arquivo = fopen('arquivo.txt', 'r');

    //enquanto houver linhas a serem recuperadas no arquivo.hd
    while(!feof($arquivo)){ //função nativa feof() => procura linha por linha pelo final do arquivo, quando localizado retorna true

        $registro = fgets($arquivo); // função que retorna todos os caracteres de uma linha do arquivo

        $linhaDeCadastro = explode('#',$registro); //juntar os elementos da linha atual em um array

        $cadastros[] = $linhaDeCadastro; //adicionando um array dentro de outro, dessa forma teremos um array geral contendo todos os cadastros
    }

    foreach($cadastros as $cadastro){
        if($cadastro[1] == $_POST['e-mail'] && $cadastro[2] == $_POST['senha']){
            $_SESSION['autenticado'] = 'SIM';
            header('Location: player.php');
        }
    }

    header('Location: cadastre_se.php?login=erro2');

    fclose($arquivo);
?>