<?php
    session_start();

    //variavel responsável pela validação de acesso
    $autenticacao = 'NAO';

    //Abertura do arquivo de texto onde ficará os cadastros
    $arquivo = fopen('arquivo.txt','a');

    //Transformando os elementos do array POST em uma única string
    $texto = implode('#',$_POST) . PHP_EOL;

    //Escrevendo a string criada a partir de POST dentro do arquivo.txt
    //Verificando se todos os dados do formulário foram preenchidos corretamente
    foreach($_POST as $indice){
        if($indice == '' || $indice == null){
            header('Location: cadastre_se?login=erro');
        }else{
            $autenticacao = 'SIM';
        }
    }
    fwrite($arquivo , $texto);

    //Fechando o arquivo.txt
    fclose($arquivo);

    $_SESSION['autenticado'] = $autenticacao;

    //Encaminhando para o player após o usuário se cadastrar
    header('Location: player.php');

?>