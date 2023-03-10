<?php 
    require_once("_db_dal_inc.php");
    require('_config_inc.php');
?>


<!--DA MODIFICARE GRAFICAMENTE (RITOCCHI O RIFARE)-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/styleBottiglia.css">
	<link rel="stylesheet" href="./style/styleSezioneVini.css">


</head>
<body class="dark hero-anime" style="overflow: auto;">

    <!-- TITOLO -->
    
    <!-- NAVBAR -->
	<div class=" bg-light start-header start-style" style="position: sticky; z-index: 3;">
		<!-- <span class="nav-item icon pl-4 pl-md-0 ml-0 ml-md-5">
			<a class="nav-link"> <i class="fa-solid fa-bag-shopping fa-3x"></i></a>
		</span> -->
        <div >
            <img src="./img/LOGO_scritta_oro.png" class="title mx-auto d-block" style="width: 180px; " alt="">
        </div>

		<div class="container ">
			<div class="row" >
				<nav class="navbar navbar-expand-lg nav-fill w-100 navbar-light " >
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					
					<div class="collapse navbar-collapse justify-content-md-center"  id="navbarSupportedContent">

						
						<ul class="navbar-nav col-10 " >

							<!-- HOME -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 ">
								<a class="nav-link" href="index.html">Home</a>
							</li>

							<!-- CANTINE -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5">
								<a class="nav-link" href="cantine.html">Cantine</a>
							</li>

							<!-- DROPDOWN VINI -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5 active ">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Vini</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Bianco</a>
									<a class="dropdown-item" href="#">Spumante</a>
									<a class="dropdown-item" href="#">Rosso</a>
									<a class="dropdown-item" href="#">Ros??</a>
									<a class="dropdown-item" href="bottiglia.html">Linea Frati Limited</a>
									<a class="dropdown-item" href="bottiglia2.html">Linea Frati Limited 2</a>
								</div>
							</li>

							<!-- VISITACI -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5">
								<a class="nav-link" href="#">Visitaci</a>
							</li>

							<!-- DROPDOWN SERVIZI -->
							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Servizi</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Imbottigliamento</a>
									<a class="dropdown-item" href="#">Corso ONAV</a>
									<a class="dropdown-item" href="#">Feste Private</a>
								</div>
							</li>

							<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5" >
								<a class="nav-link" > <i class="fa-solid fa-bag-shopping fa-2x"></i></a>
							</li>
							<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-5" >
								<a class="nav-link" > <i class="fa-solid fa-user fa-2x"></i></a>
							</li> -->
						</ul>
						
		
						
					</div>
					
				</nav>		
			</div>
			<!-- DIV UTENTE -->
		</div>
		
		<a href="login.html" class="link-to-portfolio hover-target"    > <i class="fa-solid fa-user fa-2x mt-2"></i></a>
	</div>

<!-- CONTENT -->
	<div class="row" style="height: 100%;">
		<div class="col-3 pt-5 pl-5 pr-5 border border-dark " style="height: 100%;">
			<h3 style="font-family: serif; margin-bottom: 20px; margin-left: 5px;">FILTRA</h3>
			<form action="" method="">
				<!--PRIMA SELECT-->
                <div class="input-group pb-4">
						<div class="input-group-prepend">
						<label class="input-group-text" for="cantina">Formato</label>
						</div>
						<select class="custom-select" id="formato">
						<option selected >Scegli...</option>
						<option value="" >0.5l</option>
						<option value="" >0.75l</option>
						<option value="" >1.5l</option>
						</select>
					</div>

					<!--SECONDA SELECT-->
					<div class="input-group pb-4">
						<div class="input-group-prepend">
						<label class="input-group-text" for="cantina">Cantina</label>
						</div>
						<select class="custom-select" id="cantina">
						<option selected >Scegli...</option>
						<option value="" >Pippo</option>
						<option value="" >Topolinia</option>
						<option value="" >Minera di minatori</option>
						<option value="" >Vinatori</option>
						<option value="" >Beees</option>
						<option value="" >APES</option>
						<option value="">Scimmioni</option>
						</select>
					</div>

					<!--RANGE PREZZO-->
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						<span class="input-group-text">Prezzo Min.(???)</span>
						</div>
						<input type="text" class="form-control" id="min" onkeypress="return onlyNumberKey(event)">
						<div class="input-group-append">
						<span class="input-group-text">.00</span>
						</div>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
						<span class="input-group-text">Prezzo Max.(???)</span>
						</div>
						<input type="text" class="form-control" id="max" onkeypress="return onlyNumberKey(event)">
						<div class="input-group-append">
						<span class="input-group-text">.00</span>
						</div>
					</div>

					<!--PRENDE IN INPUT SOLO I NUMERI RICONOSCENDOLI TRAMITE ASCII-->
					<script>
						function onlyNumberKey(evt) {
							// Only ASCII character in that range allowed
							var ASCIICode = (evt.which) ? evt.which : evt.keyCode
							if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
								return false;
							return true;
						}
					</script>

					<!--QUARTA SELECT-->
					<div class="input-group pb-4">
						<div class="input-group-prepend">
						<label class="input-group-text" for="cantina">Certificazione</label>
						</div>
						<select class="custom-select" id="certificazione">
						<option selected >Scegli...</option>
						<option value="" >DOC</option>
						<option value="" >DOCG</option>
						<option value="" >DOP</option>
						<option value="" >IGP</option>
						</select>
					</div>
			</form>
		</div>
                    <?php if($result->num_rows>0){
                while($row=$result->fetch_assoc()){  ?>
            <?php /*FINIRLO*/ ?>
            <?php
            }?>
            <?php    }?>

            

	</div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src="./js/function.js"></script>
<script src="./js/functionBottiglia.js"></script>

</body>
</html>