<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Start Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"
		type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
	<link rel="stylesheet" href="assets/css/product-overview.css" type="text/css" />
	<script type="text/javascript" src="assets/js/nav.js"></script>
</head>

<body>
	<header class="container-fluid">

	    <nav class="navbar fixed-top navbar-dark navbar-expand-lg">
	    	<a href="home.php" class="navbar-brand" target="_self">
				<img src="assets/images/essve-logo.jpg" class="img-fluid logo-header" alt="Webpage Logo - responsive image" href="home.php">
            </a>

	    	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>

	    	<div class="navbar-collapse collapse" id="navbarNavDropdown">
				<ul class="navbar-nav mr-auto">
    				<li class="nav-item mr-1 margin-top"><a class="nav-link" href="home.php">Hem</a></li>
					<li class="nav-item mr-2 margin-top dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Kategorier
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="inredning.html">Inredning</a>
							<a class="dropdown-item" href="marknadsmatr.html">Marknadsmaterial</a>
							<a class="dropdown-item" href="giveaway.html">Give away</a>
							<a class="dropdown-item" href="kataloger.html">Kataloger/Broschyrer</a>
						</div>
					</li>
			        <li class="nav-item mr-2 nav-link social-icon">
						<span id="icons" onmouseleave="backToNormal()"><i class="fa fa-search" id="iconified" onmouseenter="searchBar()"></i></span>
						<span><i class="fa fa-list-alt"></i></span>
						
						<button type="button" class="btn btn-link" data-toggle="modal" data-target="#profileModal">
                            <span><i class="fa fa-user-circle-o"></i></span>
						</button>

			    	    <a href="logout.php"><span><i class="fa fa-sign-out"></i></span></a>
			        </li>
				</ul>		
			</div>
		</nav>

		<div class="modal" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
						<h2 class="text-center" id="profileModalLabel">Profile Page</h2>
						<p class="text-center">Your account details are below:</p>
					</div>
					<div class="modal-body">
						<table>
							<tr>
								<td><strong>Username:</strong></td>
								<td><?=$_SESSION['name']?></td>
							</tr>
							<tr>
								<td><strong>Password:</strong></td>
								<td>**********</td>
							</tr>
							<tr>
								<td><strong>Email:</strong></td>
								<td><?=$email?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</header>

    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<section class="jumbotron search-jumbo text-center">
					<p class="lead">Navigera med menyknapparna ovan, eller sök efter din produkt här:</p>
                    <input type="text" name="search" class="form-control main-search" placeholder="Sök.."></input>
				</section>
			</div>
		</div>
	</div>
    
	<div class="container-fluid callout-container">
		<div class="row">
			<div class="col-12">
				<section class="callout jumbotron">
					<h2 class="text-center">Home</h2>
					<p class="text-center">Populära artiklar:</p>
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<figure class="card card-product">
									<button type="button" id="style-modal" data-toggle="modal" data-target="#essconModal">
										<div class="img-wrap"><img src="assets/images/products/ESS-Con.jpg"></div>
										<figcaption class="info-wrap">
											<h4 class="title">ESS-CON Broschyr</h4>
											<p class="desc">Some small description goes here</p>
										</figcaption>
										<div class="rating-wrap">
											<div class="label-rating">154 views </div>
										</div> <!-- rating-wrap.// -->
									</button>
									<div class="bottom-wrap">
										<a href="" class="btn btn-sm btn-success float-right">Lägg till</a>
										<div class="">
											<form action="">
												<input max="99" min="1" name="antal" type="number" value="1"/>
											</form>
										</div>
									</div> <!-- bottom-wrap.// -->
								</figure>
							</div> <!-- col // -->
		
							<div class="col-md-3">
								<figure class="card card-product">
									<button type="button" id="style-modal" data-toggle="modal" data-target="#kvinfastModal">
										<div class="img-wrap"><img src="assets/images/products/kvalificierad_infastning.jpg"> </div>
										<figcaption class="info-wrap">
											<h4 class="title">Kvalificierad infästning Broschyr</h4>
											<p class="desc">Some small description goes here</p>
										</figcaption>
										<div class="rating-wrap">
											<div class="label-rating">154 views </div>
										</div> <!-- rating-wrap.// -->
									</button>
									<div class="bottom-wrap">
										<a href="" class="btn btn-sm btn-success float-right">Lägg till</a>
										<div class="">
											<form action="">
												<input max="99" min="1" name="antal" type="number" value="1"/>
											</form>
										</div>
									</div> <!-- bottom-wrap.// -->
								</figure>
							</div> <!-- col // -->

							<div class="col-md-3">
								<figure class="card card-product">
									<button type="button" id="style-modal" data-toggle="modal" data-target="#tungInfastModal">
										<div class="img-wrap"><img src="assets/images/products/tung_infastning.jpg"></div>
										<figcaption class="info-wrap">
											<h4 class="title">Tung Infästning Broschyr</h4>
											<p class="desc">Some small description goes here</p>
										</figcaption>
										<div class="rating-wrap">
											<div class="label-rating">154 views </div>
										</div> <!-- rating-wrap.// -->
									</button>
									<div class="bottom-wrap">
										<a href="" class="btn btn-sm btn-success float-right">Lägg till</a>
										<div class="">
											<form action="">
												<input max="99" min="1" name="antal" type="number" value="1"/>
											</form>
										</div>
									</div> <!-- bottom-wrap.// -->
								</figure>
							</div> <!-- col // -->

							<div class="col-md-3">
								<figure class="card card-product">
									<button type="button" id="style-modal" data-toggle="modal" data-target="#sortEttModal">
										<div class="img-wrap"><img src="assets/images/products/nytt-sortiment-del1.jpg"></div>
										<figcaption class="info-wrap">
											<h4 class="title">Lim & Fog Guide del 1</h4>
											<p class="desc">Some small description goes here</p>
										</figcaption>
										<div class="rating-wrap">
											<div class="label-rating">154 views </div>
										</div> <!-- rating-wrap.// -->
									</button>
									<div class="bottom-wrap">
										<a href="" class="btn btn-sm btn-success float-right">Lägg till</a>
										<div class="">
											<form action="">
												<input max="99" min="1" name="antal" type="number" value="1"/>
											</form>
										</div>
									</div> <!-- bottom-wrap.// -->
								</figure>
							</div> <!-- col // -->
						</div> <!-- row.// -->
					</div>
				</section>
			</div>
		</div>

		<div class="modal" id="essconModal" tabindex="-1" role="dialog" aria-labelledby="essconModallabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      			<div class="modal-content">
				  <iframe src="product-one.html" class="product-info" title="product-information"></iframe>
      			</div>
    		</div>
		  </div>
		  
		<div class="modal" id="kvinfastModal" tabindex="-1" role="dialog" aria-labelledby="kvinfastModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      			<div class="modal-content">
				  <iframe src="product-two.html" class="product-info" title="product-information"></iframe>
      			</div>
    		</div>
		  </div>
		  
		<div class="modal" id="tungInfastModal" tabindex="-1" role="dialog" aria-labelledby="tungInfastModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      			<div class="modal-content">
				  <iframe src="product-three.html" class="product-info" title="product-information"></iframe>
      			</div>
    		</div>
		</div>
		
		<div class="modal" id="sortEttModal" tabindex="-1" role="dialog" aria-labelledby="sortEttModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      			<div class="modal-content">
				  <iframe src="product-four.html" class="product-info" title="product-information"></iframe>
      			</div>
    		</div>
  		</div>
	</div>
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</html>