<?php


  /*
  *   Esta função, escreve um arquivo JSON que será lido pela captura.php e atualizado em tempo real
  *   A lógica é a seguinte: A tela do operador mandará os dados para esta função, que criará um arquivo com os dados que serão lidos pela captura.php
  */

  if ($_POST['tipo'] == 'atualiza') {
    $dados = json_encode($_POST);
    $arquivo = fopen("dados.json","w+");
    echo fwrite($arquivo, $dados);
    fclose($arquivo);
  } else if ($_POST['tipo'] == 'carrega') {
    // Le os dados do arquivo e joga na tela
  	$arquivo = fopen("dados.json","r");
  	$dados = fgets($arquivo);
  	fclose($arquivo);
    $dados = json_decode($dados, true);

    if ($dados['tempoAtual']['minutes'] < 10) {
      $dados['tempoAtual']['minutes'] = '0' . $dados['tempoAtual']['minutes'];
    }

    if ($dados['tempoAtual']['seconds'] < 10) {
      $dados['tempoAtual']['seconds'] = '0' . $dados['tempoAtual']['seconds'];
    }

    $dados = json_encode($dados);

    echo $dados;
  }

?>
