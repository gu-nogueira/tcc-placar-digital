<html>
	<head>

		<?php require('head.php'); ?>

	</head>

	<body background="Imagens/telainicial.jpg">
	<form action='capturaope.php' method='POST'>


				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<br> <br> <br>
							<div class="titulo"> Placar Digital </div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4" align="center">
							<span class="fonte-principal"> Equipe 1 </span>
							<br>
								<select class="form-control" style="height:40px; font-family: New X Digital tfb; font-size: 13px;" name="equipe1">
								<option value=" "> </option>
								<option value="1A"> 1A - Administração </option>
								<option value="2A"> 2A - Administração </option>
								<option value="3A"> 3A - Administração </option>
								<option value="1B"> 1B - Informática </option>
								<option value="2B"> 2B - Informática </option>
								<option value="3B"> 3B - Informática </option>
								<option value="1C"> 1C - Eletrônica </option>
								<option value="2C"> 2C - Eletrônica </option>
								<option value="3C"> 3C - Eletrônica </option>
								<option value="1D"> 1D - Mecânica </option>
								<option value="2D"> 2D - Mecânica </option>
								<option value="3D"> 3D - Mecânica </option>
							</select>
						<br>
						</div>
						<div class="col-xs-4" align="center">
							<span class="x"> X </span>
						</div>
						<div class="col-xs-4" align="center">
							<span class="fonte-principal"> Equipe 2 </span>
							<br>
							<select class="form-control" style="height:40px; font-family: New X Digital tfb; font-size: 13px;" name="equipe2">
								<option value=" "> </option>
								<option value="1A"> 1A - Administração </option>
								<option value="2A"> 2A - Administração </option>
								<option value="3A"> 3A - Administração </option>
								<option value="1B"> 1B - Informática </option>
								<option value="2B"> 2B - Informática </option>
								<option value="3B"> 3B - Informática </option>
								<option value="1C"> 1C - Eletrônica </option>
								<option value="2C"> 2C - Eletrônica </option>
								<option value="3C"> 3C - Eletrônica </option>
								<option value="1D"> 1D - Mecânica </option>
								<option value="2D"> 2D - Mecânica </option>
								<option value="3D"> 3D - Mecânica </option>
							</select>
						<br>
						</div>
					</div>

					<br> <br> <br>

					<div class="row">
						<div class="col-xs-12" align="center">
							<span class="fonte-principal"> Modalidade </span>
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">

						</div>
						<div class="col-xs-4" align="center">
							<select class="form-control" style="height:40px; font-family: New X Digital tfb; font-size: 13px;" name="modalidade" align="center">
								<option value=" "> </option>
								<option value="fut"> Futsal</option>
								<option value="volei"> Vôleibol </option>
								<option value="basq"> Basquete </option>
								<option value="hand"> Handebol </option>
							</select>
							<br>
						</div>
						<div class="col-xs-4">

						</div>
					</div>

					<br> <br>

					<div class="row">
						<div class="col-xs-12" align="center">
						<input type='submit' value='começar' class='botao hvr-bounce-in'>
					</div>
			</div>
			</form>

	</body>
</html>
