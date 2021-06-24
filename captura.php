<html>
	<head>

    <?php require('head.php'); ?>

	</head>
	<body>

	<?php


	/*

		Le os dados do arquivo e atualiza na tela

	*/

	$arquivo = fopen("dados.json","r");
	$dados = fgets($arquivo);
	fclose($arquivo);

	$dados = json_decode($dados, true);

	$e1 = $dados['dados_gerais']['equipe_1'];
	$e2 = $dados['dados_gerais']['equipe_2'];
	$modal = $dados['dados_gerais']['modalidade'];

	//CAPTURA DE DADOS DA MODALIDADE

    if($modal == 'fut')
    { ?>

					<!-- MODALIDADE FUTEBOL -->


          <div class='letreiro' style ='background-image: url(Imagens/letreirofut.png);'>
              <center> <font class="fonte-principal" style="font-size: 70px;"> FUTSAL </font> </center>
          </div>

				<div class="cronometro fonte-cronometro" id="tempo">
				</div>

		  <div style='position: absolute; width: 100%; height: 500px; top: 35%;'>

          <div class="col-xs-6"  style="left: 12%;">
            <div class="box-pontuacao" id="pont-1">
              <h1 class="fonte-pontuacao" id="placar-1"> </h1>
            </div>
          </div>
          <div class="col-xs-6" style="right: 12%;">
            <div class="box-pontuacao" style="float: right;" id="pont-2">
            <h1 class="fonte-pontuacao" id="placar-2"> </h1>
          </div>
        </div>
      </div>


    <?php } elseif($modal == 'volei')
    		{ ?>

					<!-- MODALIDADE VOLEI -->

        	<div class='letreiro' style ='background-image: url(Imagens/letreirovol.png);'>
              <center> <font class="fonte-principal" style="font-size: 70px;"> VOLEIBOL </font> </center>
				  </div>

					<div class="cronometro fonte-cronometro result-Volei" id="tempo">
						<div class="values"></div>
					</div>

		  <div style='position: absolute; width: 100%; height: 100%; top: 28%;'>

          <div class="col-xs-6"  style="left: 12%;">
            <div class="box-pontuacao-vol" id="pont-1">

            	<h1 class="fonte-pontuacao-ope" style="font-size: 60px; margin-top: 10px; right: 5px;" id="setvol-1"></h1>
            	<hr width="230px" color="white" style="height: 4px;">


              <h1 class="fonte-pontuacao" id="placar-1"> </h1>
            </div>
          </div>
          <div class="col-xs-6" style="right: 12%">
            <div class="box-pontuacao-vol" style="float: right;" id="pont-2">

            	<h1 class="fonte-pontuacao-ope" style="font-size: 60px; margin-top: 10px; right: 5px;" id="setvol-2"></h1>
            	<hr width="230px" color="white" style="height: 4px;">

            <h1 class="fonte-pontuacao" id="placar-2"> </h1>
          </div>
        </div>
      </div>


    <?php } elseif($modal == 'basq')
    		{ ?>

					<!-- MODALIDADE BASQUETE -->

					<div class='letreiro' style ='background-image: url(Imagens/letreirobasq.png);'>
							<center> <font class="fonte-principal" style="font-size: 70px;"> BASQUETE </font> </center>
					</div>

					<div class="cronometro fonte-cronometro" id="tempo">
					</div>

			<div style='position: absolute; width: 100%; height: 100%; top: 35%;'>

          <div class="col-xs-6"  style="left: 12%;">
            <div class="box-pontuacao" id="pont-1">
              <h1 class="fonte-pontuacao" id="placar-1"> </h1>
            </div>
          </div>
          <div class="col-xs-6" style="right: 12%">
            <div class="box-pontuacao" style="float: right;" id="pont-2">
            <h1 class="fonte-pontuacao" id="placar-2"> </h1>
          </div>
        </div>
      </div>


	<?php } elseif ($modal == 'hand')
			{ ?>

					<!-- MODALIDADE HANDEBOL -->

					<div class='letreiro' style ='background-image: url(Imagens/letreirohand.png);'>
							<center> <font class="fonte-principal" style="font-size: 70px;"> HANDEBOL </font> </center>
					</div>

					<div class="cronometro fonte-cronometro" id="tempo">
					</div>

			<div style='position: absolute; width: 100%; height: 100%; top: 35%;'>

          <div class="col-xs-6"  style="left: 12%;">
            <div class="box-pontuacao" id="pont-1">
              <h1 class="fonte-pontuacao" id="placar-1"> </h1>
            </div>
          </div>
          <div class="col-xs-6" style="right: 12%">
            <div class="box-pontuacao" style="float: right;" id="pont-2">
            <h1 class="fonte-pontuacao" id="placar-2"> </h1>
          </div>
        </div>
      </div>


			<?php } ?>

  <!--CAPTURA DE DADOS EQUIPE 1-->

  <?php

	if($e1 == '1A')
			{ ?>

				<div class ="adm" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe red"> 1°A </h1>
        </div>

	<?php } else if($e1 == '1B')
			{ ?>

				<div class ="info" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe blue"> 1°B </h1>
        </div>

	<?php } else if($e1 == '1C')
			{ ?>

				<div class ="eletrica" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe yellow"> 1°C </h1>
        </div>

	<?php } else if($e1 == '1D')
			{ ?>

				<div class ="mecanica" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe purple"> 1°D </h1>
        </div>

	<?php } else if($e1 == '2A')
			{ ?>

				<div class ="adm" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe red"> 2°A </h1>
        </div>

	<?php } else if($e1 == '2B')
			{ ?>

				<div class ="info" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe blue"> 2°B </h1>
        </div>

	<?php } else if($e1 == '2C')
			{ ?>

				<div class ="eletrica" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe yellow"> 2°C </h1>
        </div>

	<?php } else if($e1 == '2D')
			{ ?>

				<div class ="mecanica" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe purple"> 2°D </h1>
        </div>

	<?php }	else if($e1 == '3A')
			{ ?>

				<div class ="adm" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe red"> 3°A </h1>
      </div>

	<?php }	else if($e1 == '3B')
			{ ?>

				<div class ="info" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe blue"> 3°B </h1>
        </div>

	<?php }	else if($e1 == '3C')
			{ ?>

				<div class ="eletrica" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe yellow"> 3°C </h1>
        </div>

	<?php }	else if($e1 == '3D')
			{ ?>

				<div class ="mecanica" style="float: left;">
          <h1 style="text-align: left;" class="fonte-equipe purple"> 3°D </h1>
        </div>

	<?php }

	//CAPTURA DE DADOS DA EQUIPE 2
	if($e2 == '1A')
			{ ?>

		    <div class ="adm" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe red"> 1°A </h1>
        </div>

	<?php } else if($e2 == '1B')
			{ ?>

				<div class ="info" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe blue"> 1°B </h1>
        </div>

	<?php } else if($e2 == '1C')
			{ ?>

				<div class ="eletrica" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe yellow"> 1°C  </h1>
        </div>

	<?php } else if($e2 == '1D')
			{ ?>

				<div class ="mecanica" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe purple"> 1°D </h1>
        </div>

	<?php } else if($e2 == '2A')
			{ ?>

			 <div class ="adm" style="float: right;">
         <h1 style="text-align: right;" class="fonte-equipe red"> 2°A </h1>
        </div>

	<?php } else if($e2 == '2B')
			{ ?>

		    <div class ="info" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe blue"> 2°B </h1>
        </div>

	<?php } else if($e2 == '2C')
			{ ?>

				<div class ="eletrica" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe yellow"> 2°C </h1>
        </div>

	<?php } else if($e2 == '2D')
			{ ?>

				<div class ="mecanica" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe purple"> 2°D </h1>
        </div>

	<?php }	else if($e2 == '3A')
			{ ?>

				<div class ="adm" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe red"> 3°A </h1>
        </div>

	<?php }	else if($e2 == '3B')
			{ ?>

				<div class ="info" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe blue"> 3°B </h1>
        </div>

	<?php }	else if($e2 == '3C')
			{ ?>

				<div class ="eletrica" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe yellow"> 3°C </h1>
        </div>

	<?php }	else if($e2 == '3D')
			{ ?>

				<div class ="mecanica" style="float: right;">
          <h1 style="text-align: right;" class="fonte-equipe purple"> 3°D </h1>
        </div>

	<?php }

	?>

	<script type="text/javascript">
	$(document).ready(function(){

		//Animações
			$('.letreiro').addClass('animated slideInDown');
			$('#pont-1').addClass('animated fadeInLeftBig');
			$('#pont-2').addClass('animated fadeInRightBig');
			$('.cronometro').addClass('animated slideInDown');
			$('.fonte-equipe').addClass('animated bounceIn');

			setTimeout( function(){
				$('.cronometro').removeClass('animated slideInDown')}

			, 1000);

		 // Objeto com a pontuação de cada time
			var pontuacao = {
					time_1 : 0,
					time_2: 0
			};

		 // Objeto com pontuação dos sets de volei
			var setvol = {
			 		time_1: 0,
			 		time_2: 0
			};

		 // Objeto com o tempo do cronômetro
			var tempoAtual = {
					minutes: '00',
					seconds: '00'
			};

	   // Objeto com o time vencedor
			var vencedor ='';

			// Atualiza pontuação
			$.fn.atualizaPontuacao = function() {
				console.log("Atualiza!");
				$.ajax({
					method: "POST",
					url: "atualiza_dados.php",
					data: {
					tipo: 'carrega',
					}
				})
				.done(function(data) {
					var dados = JSON.parse(data);
					$('#placar-1').html(dados.pontuacao.time_1);
					$('#placar-2').html(dados.pontuacao.time_2);

					$('#setvol-1').html(dados.setvol.time_1);
					$('#setvol-2').html(dados.setvol.time_2);

					$('#tempo').html(dados.tempoAtual.minutes + ':' + dados.tempoAtual.seconds);

					if (dados.tempoAtual.minutes == 0 || dados.tempoAtual.seconds == 0){
						$('#tempo').html('--:--');
					}

					if (dados.vencedor != '') {
						if ( $( ".result-Volei:first" ).is( ":hidden" ) ) {
							$( ".result-Volei" ).slideDown( "slow" );
						}
						$('#tempo').addClass('blinking').html(dados.vencedor);
					}
				});
			}

			$.fn.atualizaPontuacao();

			setInterval(function(){ $.fn.atualizaPontuacao() }, 100);

		});
	</script>
	</body>
</html>
