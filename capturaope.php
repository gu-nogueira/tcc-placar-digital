<html>
	<head>

		<?php require('head.php'); ?>

	</head>
	<body background="Imagens/tfoperador.jpg">

	<?php

	$e1 = $_POST['equipe1'];
	$e2 = $_POST['equipe2'];
	$modal = $_POST['modalidade'];

	//CAPTURA DE DADOS DA MODALIDADE

    if($modal == 'fut')
    { ?>

			<!-- MODALIDADE FUTEBOL -->

			<audio id="AudioFut">
				<source src="Audio/fut.mp3" type="audio/mpeg">
				Seu navegador não suporta elementos de audio.
			</audio>

      <div class='letreiro' style ='background-image: url(Imagens/letreirofut.png);'>
      	<center> <font class="fonte-principal" style="font-size: 70px;"> FUTSAL </font> </center>
      </div>

			<div id="countdownExample">
		    <div class="cronometro-ope fonte-cronometro">
	    		<div class="values">--:--</div>
		    </div>
				<div class="botoes hvr-grow">
					<div class="startButton hvr-sink" onclick="condicao();"></div>
					<div class="pauseButton hvr-sink"></div>
					<div class="stopGame hvr-sink" id="stop"></div>
					<div class="resetButton hvr-sink"></div>
				</div>
			</div>

			<div style='position: absolute; width: 100%; height: 250px; top: 48%;'>

      	<div class="col-xs-6"  style="left: 12%;">
      		<div class="add-score btn-action-left" id="add-time-1" onclick="playfut()">+</div>
					<div class="sub-score btn-action-left" id="sub-time-1">-</div>

					<div class="box-pontuacao-ope" id="pont-1">
  					<h1 class="fonte-pontuacao-ope" id="placar-1"></h1>
      		</div>
      	</div>

        <div class="col-xs-6" style="right: 12%">
        	<div class="add-score btn-action-right" id="add-time-2" onclick="playfut()">+</div>
					<div class="sub-score btn-action-right" id="sub-time-2">-</div>

          <div class="box-pontuacao-ope" style="float: right;" id="pont-2">
          	<h1 class="fonte-pontuacao-ope" id="placar-2"></h1>
          </div>
        </div>

  		</div>

    <?php } elseif($modal == 'volei')
    { ?>

			<!-- MODALIDADE VOLEI -->

			<audio id="AudioVol">
				<source src="Audio/vol.mp3" type="audio/mpeg">
				Seu navegador não suporta elementos de audio.
			</audio>

      	<div class='letreiro' style ='background-image: url(Imagens/letreirovol.png);'>
        	<center> <font class="fonte-principal" style="font-size: 70px;"> VOLEIBOL </font> </center>
		  	</div>

				<div class="cronometro-ope fonte-cronometro result-Volei">
					<div class="values"></div>
				</div>

				<div class="stopVolei b09_electric" id="stop">Finalizar</div>

		  	<div style='position: absolute; width: 100%; height: 250px; top: 35%;'>

          <div class="col-xs-6"  style="left: 12%;">

          		<div class="add-score-vol btn-action-left" id="add-vol-1">+</div>
							<div class="sub-score-vol btn-action-left" id="sub-vol-1">-</div>

          	    <div class="add-score btn-action-left" id="add-time-1" style="top: 460px;" onclick="playvol()">+</div>
								<div class="sub-score btn-action-left" id="sub-time-1" style="top: 460px; left: 150px;">-</div>

          	<div class="box-pontuacao-ope-vol" id="pont-1">
							<h1 class="fonte-pontuacao-ope" style="font-size: 60px; margin-top: 10px; right: 5px;" id="setvol-1"></h1>
            	<hr width="200px" color="white">
            	<h1 class="fonte-pontuacao-ope" id="placar-1"></h1>


            </div>
          </div>

          <div class="col-xs-6" style="right: 12%">

          		<div class="add-score-vol btn-action-right" id="add-vol-2">+</div>
							<div class="sub-score-vol btn-action-right" id="sub-vol-2">-</div>

          	    <div class="add-score btn-action-right" id="add-time-2" style="top: 460px;" onclick="playvol()">+</div>
								<div class="sub-score btn-action-right" id="sub-time-2" style="top: 460px; right: 150px;">-</div>

          	<div class="box-pontuacao-ope-vol" style="float: right;" id="pont-2">
							<h1 class="fonte-pontuacao-ope" style="font-size: 60px; margin-top: 10px; right: 5px;" id="setvol-2"></h1>
            	<hr width="200px" color="white">
              <h1 class="fonte-pontuacao-ope" id="placar-2"></h1>
            </div>
          </div>

        </div>

    <?php } elseif($modal == 'basq')
    		{ ?>

					<!-- MODALIDADE BASQUETE -->

					<audio id="AudioBasq">
						<source src="Audio/basq.mp3" type="audio/mpeg">
						Seu navegador não suporta elementos de audio.
					</audio>

						<div class='letreiro' style ='background-image: url(Imagens/letreirobasq.png);'>
							<center> <font class="fonte-principal" style="font-size: 70px;"> BASQUETE </font> </center>
						</div>

						<div id="countdownExample">
							<div class="cronometro-ope fonte-cronometro">
								<div class="values">--:--</div>
							</div>
							<div class="botoes hvr-grow">
								<div class="startButton hvr-sink" onclick="condicao();"></div>
								<div class="pauseButton hvr-sink"></div>
								<div class="stopGame hvr-sink" id="stop"></div>
								<div class="resetButton hvr-sink"></div>
							</div>
						</div>

						<div style='position: absolute; width: 100%; height: 250px; top: 48%'>

							<div class="col-xs-6"  style="left: 12%;">
								<div class="add-score btn-action-left" id="add-time-1" onclick="playbasq()">+</div>
								<div class="sub-score btn-action-left" id="sub-time-1">-</div>

								<div class="box-pontuacao-ope" id="pont-1">
									<h1 class="fonte-pontuacao-ope" id="placar-1"></h1>
								</div>
							</div>

							<div class="col-xs-6" style="right: 12%">
								<div class="add-score btn-action-right" id="add-time-2" onclick="playbasq()">+</div>
								<div class="sub-score btn-action-right" id="sub-time-2">-</div>

								<div class="box-pontuacao-ope" style="float: right;" id="pont-2">
									<h1 class="fonte-pontuacao-ope" id="placar-2"></h1>
								</div>
        			</div>

						</div>

		<?php } elseif ($modal == 'hand')
				{ ?>

					<!-- MODALIDADE HANDEBOL -->

					<audio id="AudioHand">
						<source src="Audio/hand.mp3" type="audio/mpeg">
						Seu navegador não suporta elementos de audio.
					</audio>

					<div class='letreiro' style ='background-image: url(Imagens/letreirohand.png);'>
						<center> <font class="fonte-principal" style="font-size: 70px;"> HANDEBOL </font> </center>
					</div>

					<div id="countdownExample">
						<div class="cronometro-ope fonte-cronometro">
							<div class="values">--:--</div>
						</div>
						<div class="botoes hvr-grow">
							<div class="startButton hvr-sink" onclick="condicao();"></div>
							<div class="pauseButton hvr-sink"></div>
							<div class="stopGame hvr-sink" id="stop"></div>
							<div class="resetButton hvr-sink"></div>
						</div>
					</div>

					<div style='position: absolute; width: 100%; height: 250px; top: 48%'>

          	<div class="col-xs-6"  style="left: 12%;">
							<div class="add-score btn-action-left" id="add-time-1" onclick="playhand()">+</div>
							<div class="sub-score btn-action-left" id="sub-time-1">-</div>

              <div class="box-pontuacao-ope" id="pont-1">
              	<h1 class="fonte-pontuacao-ope" id="placar-1"> </h1>
              </div>
          	</div>

          	<div class="col-xs-6" style="right: 12%">
          		<div class="add-score btn-action-right" id="add-time-2" onclick="playhand()">+</div>
							<div class="sub-score btn-action-right" id="sub-time-2">-</div>

             	<div class="box-pontuacao-ope" style="float: right;" id="pont-2">
              	<h1 class="fonte-pontuacao-ope" id="placar-2"> </h1>
              </div>
          	</div>

        	</div>

		<?php } ?>

			<form acion="captura.php" method="POST">
				<input type="hidden" name="equipe1" value=<?php echo $e1; ?>>
				<input type="hidden" name="equipe2" value=<?php echo $e2; ?>>
				<input type="hidden" name="modalidade" value=<?php echo $modal; ?>>
			</form>

			<audio id="AudioStop">
				<source src="Audio/stop.mp3" type="audio/mpeg">
				Seu navegador não suporta elementos de audio.
			</audio>


	  <!--CAPTURA DE DADOS EQUIPE 1-->

		<?php
	  if($e1 == '1A')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe red"> 1°A </h1>
	        </div>

		<?php } else if($e1 == '1B')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe blue"> 1°B </h1>
	        </div>

		<?php } else if($e1 == '1C')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe yellow"> 1°C </h1>
	        </div>

		<?php } else if($e1 == '1D')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe purple"> 1°D </h1>
	        </div>

		<?php } else if($e1 == '2A')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe red"> 2°A </h1>
	        </div>

		<?php } else if($e1 == '2B')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe blue"> 2°B </h1>
	        </div>

		<?php } else if($e1 == '2C')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe yellow"> 2°C </h1>
	        </div>

		<?php } else if($e1 == '2D')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe purple"> 2°D </h1>
	        </div>

		<?php }	else if($e1 == '3A')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe red"> 3°A </h1>
	      </div>

		<?php }	else if($e1 == '3B')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe blue"> 3°B </h1>
	        </div>

		<?php }	else if($e1 == '3C')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe yellow"> 3°C </h1>
	        </div>

		<?php }	else if($e1 == '3D')
				{ ?>

					<div class ="ope" style="float: left;">
	          <h1 style="text-align: left;" class="fonte-equipe purple"> 3°D </h1>
	        </div>

		<?php }

		//CAPTURA DE DADOS DA EQUIPE 2
		if($e2 == '1A')
				{ ?>

			    <div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe red"> 1°A </h1>
	        </div>

		<?php } else if($e2 == '1B')
				{ ?>

					<div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe blue"> 1°B </h1>
	        </div>

		<?php } else if($e2 == '1C')
				{ ?>

					<div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe yellow"> 1°C  </h1>
	        </div>

		<?php } else if($e2 == '1D')
				{ ?>

					<div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe purple"> 1°D </h1>
	        </div>

		<?php } else if($e2 == '2A')
				{ ?>

				 <div class ="ope" style="float: right;">
	         <h1 style="text-align: right;" class="fonte-equipe red"> 2°A </h1>
	        </div>

		<?php } else if($e2 == '2B')
				{ ?>

			    <div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe blue"> 2°B </h1>
	        </div>

		<?php } else if($e2 == '2C')
				{ ?>

					<div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe yellow"> 2°C </h1>
	        </div>

		<?php } else if($e2 == '2D')
				{ ?>

					<div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe purple"> 2°D </h1>
	        </div>

		<?php }	else if($e2 == '3A')
				{ ?>

					<div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe red"> 3°A </h1>
	        </div>

		<?php }	else if($e2 == '3B')
				{ ?>

					<div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe blue"> 3°B </h1>
	        </div>

		<?php }	else if($e2 == '3C')
				{ ?>

					<div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe yellow"> 3°C </h1>
	        </div>

		<?php }	else if($e2 == '3D')
				{ ?>

					<div class ="ope" style="float: right;">
	          <h1 style="text-align: right;" class="fonte-equipe purple"> 3°D </h1>
	        </div>

		<?php }

		// COMANDO PARA VOLTAR CASO SEJA A MESMA EQUIPE / NÃO HAJA equipe

		if ($e1 == ' ')
			{ ?>
					<script>
						alert("Preencha os dados da Equipe 1!");
						window.location="operador.php";
					</script>
		<?php }

		else if ($e2 == ' ')
			{ ?>
					<script>
						alert("Preencha os dados da Equipe 2!");
						window.location="operador.php";
					</script>
		<?php }

		else if ($modal == ' ')
			{ ?>
					<script>
						alert("Preencha a modalidade a ser disputada!");
						window.location="operador.php";
					</script>
		<?php }

		else if ($e1 == $e2)
			{ ?>
					<script>
						alert("Escolha equipes diferentes!");
						window.location="operador.php";
					</script>
		<?php }

		?>

		<script type="text/javascript">

		// Áudios

		var fut = document.getElementById("AudioFut");
		var vol = document.getElementById("AudioVol");
		var basq = document.getElementById("AudioBasq");
		var hand = document.getElementById("AudioHand");
		var stop = document.getElementById("AudioStop");

		function playfut() {
			fut.play();
		}

		function playvol() {
			vol.play();
		}

		function playbasq() {
			basq.play();
		}

		function playhand() {
			hand.play();
		}

		// Variável do EasyTimer.js
		// var timerInstance = new Timer();

		// Cronômetro

		var timer = new Timer();

		var modaltempo = '<?php echo $modal ?>';

		if (modaltempo == "fut"){

					$('#countdownExample .startButton').click(function () {
			    	timer.start({countdown: true,startValues: {minutes: 20}, precision: 'seconds'});
					});

		} else if (modaltempo == "basq"){

					$('#countdownExample .startButton').click(function () {
			    timer.start({countdown: true,startValues: {minutes: 10}, precision: 'seconds'});
					});

		} else if (modaltempo == "hand"){

					$('#countdownExample .startButton').click(function () {
			    timer.start({countdown: true,startValues: {minutes: 30}, precision: 'seconds'});
					});

		}

		// Função de condição dos botoes do cronômetro

		function condicao(){

			$('#countdownExample .pauseButton').click(function () {
			    timer.pause();
			});
			$('#countdownExample .stopButton').click(function () {
			    timer.stop();
			});
			$('#countdownExample .resetButton').click(function () {
			    timer.reset();
			});

		};

		// Objeto com o tempo do cronômetro
		var tempoAtual = {
				minutes: '',
				seconds: ''
		};

		timer.addEventListener('secondsUpdated', function (e) {
    		$('#countdownExample .values').html(timer.getTimeValues().toString(['minutes', 'seconds']));

				var tempo = timer.getTimeValues();

				tempoAtual.minutes = tempo.minutes;
				tempoAtual.seconds = tempo.seconds;

				$.fn.atualizaPontuacao();

		});
		timer.addEventListener('started', function (e) {
		    $('#countdownExample .values').html(timer.getTimeValues().toString(['minutes', 'seconds']));
		});
		timer.addEventListener('reset', function (e) {
		    $('#countdownExample .values').html(timer.getTimeValues().toString(['minutes', 'seconds']));
		});
		timer.addEventListener('targetAchieved', function (e) {
    		$('#countdownExample .values').html('--:--');
		});

		$(document).ready(function(){

			//Animações
				$('.letreiro').addClass('animated slideInDown');
				$('#pont-1').addClass('animated fadeInLeftBig');
				$('#pont-2').addClass('animated fadeInRightBig');
				$('.btn-action-left').addClass('animated bounceInLeft');
				$('.btn-action-right').addClass('animated bounceInRight');
				$('.cronometro-ope').addClass('animated slideInDown');
				$('.botoes').addClass('animated bounceInDown');
				$('.stopVolei').addClass('animated bounceInDown');
				$('.fonte-equipe').addClass('animated bounceIn');

				setTimeout( function(){
					$('.btn-action-left').removeClass('animated bounceInLeft');
					$('.btn-action-right').removeClass('animated bounceInRight');
					$('.botoes').removeClass('animated bounceInDown')}


				, 1000);

			// Objeto com os dados gerais
				var dados_gerais ={
					equipe_1: '<?php echo $e1 ?>',
					equipe_2: '<?php echo $e2 ?>',
					modalidade: '<?php echo $modal ?>'
				}

				console.log(dados_gerais);

			 // Objeto com a pontuação de cada time
				var pontuacao = {
						time_1: 0,
						time_2: 0
				};

			 // Objeto com pontuação dos sets de volei
			 	var setvol = {
			 			time_1: 0,
			 			time_2: 0
			 	};

				// Objeto da tela Captura (abre e fecha)
				var captura;

				// Função com equipe vencedora
				var vencedor = '';


				 $('#stop').click(function(event){

					 var condition = confirm("Deseja finalizar o jogo?");
					 	if (condition == true){

							if (dados_gerais.modalidade == 'volei') {

								if (setvol.time_1 > setvol.time_2) {
									vencedor = dados_gerais.equipe_1 + ' WIN';
								} else if (setvol.time_1 < setvol.time_2) {
									vencedor = dados_gerais.equipe_2 + ' WIN';
								} else if(setvol.time_1 == setvol.time_2) {
									vencedor = 'Empate';
								}

							} else if (dados_gerais.modalidade != 'volei') {

								if (pontuacao.time_1 > pontuacao.time_2) {
									vencedor = dados_gerais.equipe_1 + ' WIN';
								} else if (pontuacao.time_1 < pontuacao.time_2) {
									vencedor = dados_gerais.equipe_2 + ' WIN';
								} else if(pontuacao.time_1 == pontuacao.time_2) {
									vencedor = 'Empate';
								}
							}

				    timer.pause();

						stop.play();

							  if ( $(".result-Volei:first").is(":hidden") ) {
							    $(".result-Volei").slideDown("slow");
									$(".stopVolei").hide();
							  } else {
							    $( ".result-Volei" ).hide();
							  }

						$('.values').addClass('blinking').html(vencedor);

						setTimeout(function(){var end = confirm("Voltar à pagina inicial?");

							if (end == true){
								window.location="operador.php";
								captura.close();
							}

						}, 5000);

						$.fn.atualizaPontuacao();
						}

				});

				// Atualiza pontuação
				$.fn.atualizaPontuacao = function() {

					$('#placar-1').html(pontuacao.time_1);
					$('#placar-2').html(pontuacao.time_2);

					$('#setvol-1').html(setvol.time_1);
					$('#setvol-2').html(setvol.time_2);

					$.ajax({
					  method: "POST",
					  url: "atualiza_dados.php",
					  data: {
							tipo: 'atualiza',
							tempoAtual: tempoAtual,
							pontuacao: pontuacao,
							setvol: setvol,
							dados_gerais: dados_gerais,
							vencedor: vencedor
						}
					})
				  .done(function() {

				  });

				}

				$.fn.atualizaPontuacao();

				$('.add-score-vol').click(function(){
					if ($(this).attr('id') == 'add-vol-1') {
						setvol.time_1 += 1;
					} else {
						setvol.time_2 += 1;
					}
					pontuacao.time_1 = 0;
					pontuacao.time_2 = 0;
					$.fn.atualizaPontuacao();
				});

				$('.sub-score-vol').click(function(){
					if ($(this).attr('id') == 'sub-vol-1') {
						setvol.time_1 -= 1;
					} else {
						setvol.time_2 -= 1;
					}
					$.fn.atualizaPontuacao();
				});



				$('.add-score').click(function(){
					if ($(this).attr('id') == 'add-time-1') {
						pontuacao.time_1 += 1;
						html = '<h1 class="fonte-pontuacao-ope animated flipInX" id="placar-1">'+pontuacao.time_1+'</h1>';
		        $(pontuacao.time_1).html(html);
					} else {
						pontuacao.time_2 += 1;
					}
					$.fn.atualizaPontuacao();
				});

				$('.sub-score').click(function(){
					if ($(this).attr('id') == 'sub-time-1') {
						pontuacao.time_1 -= 1;
					} else {
						pontuacao.time_2 -= 1;
					}
					$.fn.atualizaPontuacao();
				});

				setTimeout(function(){captura = window.open('captura.php', '_blank')}, 2000);

			});

		</script>
	</body>
</html>
