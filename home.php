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
	<link rel="stylesheet" href="assets/css/home.css" type="text/css" />
	<script type="text/javascript" src="assets/js/nav.js"></script>
	<script type="text/javascript" src="assets/js/product.js"></script>
</head>

<body>
	<header class="container-fluid header">

		<nav class="navbar fixed-top navbar-dark navbar-expand-lg">
			<a href="home.php" class="navbar-brand" target="_self">
				<img src="assets/images/essve-logo.jpg" class="img-fluid logo-header" alt="Webpage Logo - responsive image" href="home.php">
            </a>

				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>

				<div class="navbar-collapse collapse" id="navbarNavDropdown">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item mr-1 home margin-top"><a class="nav-link" href="home.php">Hem</a></li>
						<li class="nav-item mr-2 margin-top dropdown">
							<a id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" class="nav-link dropdown-toggle"
								data-target="#" href="#" aria-haspopup="true" aria-expanded="false">
								Kategorier
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li>
									<a class="dropdown-item" id="inredning" href="product-overview.html" onclick="storeChoice(this.id)">inredning</a>
								</li>
                                <li class="dropdown-submenu">
									<a class="dropdown-item" id="marknadsmaterial" href="product-overview.html" onclick="storeChoice(this.id)">marknadsmaterial</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" id="pallsvep" href="product-overview.html" onclick="storeChoice(this.id)">pallsvep</a></li>
										<li><a class="dropdown-item" id="skyltar" href="product-overview.html" onclick="storeChoice(this.id)">skyltar</a></li>
										<li><a class="dropdown-item" id="affischer" href="product-overview.html" onclick="storeChoice(this.id)">affischer</a></li>
										<li><a class="dropdown-item" id="ställ" href="product-overview.html" onclick="storeChoice(this.id)">ställ</a></li>
										<li><a class="dropdown-item" id="övrigt" href="product-overview.html" onclick="storeChoice(this.id)">övrigt</a></li>
									</ul>
								</li>
                                <li>
									<a class="dropdown-item" id="forpackningsmaterial" href="product-overview.html" onclick="storeChoice(this.id)">förpackningsmaterial</a>
								</li>
                                <li class="dropdown-submenu">
									<a class="dropdown-item" id="trycksaker" href="product-overview.html" onclick="storeChoice(this.id)">trycksaker</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" id="kataloger" href="product-overview.html" onclick="storeChoice(this.id)">kataloger</a></li>
										<li><a class="dropdown-item" id="broschyrer" href="product-overview.html" onclick="storeChoice(this.id)">broschyrer</a></li>
									</ul>
								</li>
                                <li class="dropdown-submenu">
									<a class="dropdown-item" id="giveaway" href="product-overview.html" onclick="storeChoice(this.id)">give-away</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" id="kläder" href="product-overview.html" onclick="storeChoice(this.id)"">kläder</a></li>
										<li><a class="dropdown-item" id="övrigt" href="product-overview.html" onclick="storeChoice(this.id)">övrigt</a></li>
									</ul>
								</li>
                                <li>
									<a class="dropdown-item" href="ovrigt.html">övrigt</a>
								</li>
							</ul>
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

		<div class="modal" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel"
			aria-hidden="true">
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

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
				<img class="img-fluid d-block w-100" src="assets/images/slider/space4.jpg" alt="First slide">
    		</div>
    		<div class="carousel-item">
      			<img class="img-fluid d-block w-100" src="assets/images/slider/space3.jpg" alt="Second slide">
    		</div>
    		<div class="carousel-item">
      			<img class="img-fluid d-block w-100" src="assets/images/slider/space5.jpg" alt="Third slide">
			</div>
			<div class="carousel-caption">
				<section class="jumbotron search-jumbo text-center">
					<p class="lead">Navigera med menyknapparna ovan, eller sök efter din produkt här:</p>
                	<input type="text" name="search" class="form-control main-search" placeholder="Sök.."></input>
				</section>
			</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
 		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a>
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