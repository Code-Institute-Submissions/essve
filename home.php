<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!--ABOVE CODE IS NOT WRITTEN BY ME, SEE THE README.MD-->

<!DOCTYPE html>
<html lang="sv">
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
	<header class="container-fluid header"> <!--header-container-->

		<nav class="navbar fixed-top navbar-dark navbar-expand-lg"> <!--navbar-->
			<a href="home.php" class="navbar-brand" target="_self"> <!--header-logo-->
				<img src="assets/images/essve-logo.jpg" class="img-fluid logo-header" alt="Webpage Logo - responsive image" href="home.php">
            </a> <!--!header-logo-->

				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button> <!--button displayed on small screens-->

				<div class="navbar-collapse collapse" id="navbarNavDropdown"> <!--the menu that's collapsed into the toggler above, on small screens-->
					<ul class="navbar-nav mr-auto">	<!--menu list-->
						<li class="nav-item mr-1 home margin-top"><a class="nav-link" href="home.php">Hem</a></li> <!--link/list-item within menu-->
						<li class="nav-item mr-2 margin-top dropdown"> <!--categories dropdown menu-->
							<a id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" class="nav-link dropdown-toggle"
								data-target="#" href="#" aria-haspopup="true" aria-expanded="false">
								Kategorier
							</a>
							<ul class="dropdown-menu" role="menu"> <!--the list of what's displayed within the category dropdown-->
								<li>
									<a class="dropdown-item" id="inredning" href="product-overview.html" onclick="storeChoice(this.id)">inredning</a>
								</li>
                                <li class="dropdown-submenu"> <!--a list with subcategories/sub-menu-items-->
									<a class="dropdown-item" id="marknadsmaterial" href="product-overview.html" onclick="storeChoice(this.id)">marknadsmaterial</a>
									<ul class="dropdown-menu"> <!--the actual list-->
										<li><a class="dropdown-item" id="pallsvep" href="product-overview.html" onclick="storeChoice(this.id)">pallsvep</a></li>
										<li><a class="dropdown-item" id="skyltar" href="product-overview.html" onclick="storeChoice(this.id)">skyltar</a></li>
										<li><a class="dropdown-item" id="affischer" href="product-overview.html" onclick="storeChoice(this.id)">affischer</a></li>
										<li><a class="dropdown-item" id="ställ" href="product-overview.html" onclick="storeChoice(this.id)">ställ</a></li>
										<li><a class="dropdown-item" id="movrigt" href="product-overview.html" onclick="storeChoice(this.id)">övrigt</a></li>
									</ul> <!--!the actual list-->
								</li> <!--!a list with subcategories/sub-menu-items-->
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
										<li><a class="dropdown-item" id="klader" href="product-overview.html" onclick="storeChoice(this.id)">kläder</a></li>
										<li><a class="dropdown-item" id="govrigt" href="product-overview.html" onclick="storeChoice(this.id)">övrigt</a></li>
									</ul>
								</li>
                                <li>
									<a class="dropdown-item" id="ovrigt" href="product-overview.html">övrigt</a>
								</li>
							</ul> <!--!the list of what's displayed within the category dropdown-->
						</li> <!--!categories dropdown menu-->
						<li class="nav-item mr-2 nav-link social-icon"> <!--the icons in the menu-->
							<span id="icons" onmouseleave="backToNormal()"><i class="fa fa-search" id="iconified" onmouseenter="searchBar()"></i></span> <!--the search icon/search bar-->
							<span><i class="fa fa-list-alt"></i></span> <!--the list icon-->

							<button type="button" class="btn btn-link" data-toggle="modal" data-target="#profileModal"> <!--the profile icon/button-->
                            	<span><i class="fa fa-user-circle-o"></i></span>
							</button> <!--!the profile icon/button-->

							<a href="logout.php"><span><i class="fa fa-sign-out"></i></span></a> <!--the logout icon/button-->
						</li> <!--!the icons in the menu-->
					</ul> <!--menu list-->
				</div> <!--!the menu-->
		</nav> <!--!navbar-->

		<div class="modal" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel"
			aria-hidden="true"> <!--the profile page modal-->
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">	<!--the modal content-->
					<div class="modal-header"> <!--the modal top content-->
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
						<h2 class="text-center" id="profileModalLabel">Profile Page</h2>
						<p class="text-center">Your account details are below:</p>
					</div> <!--the modal top content-->
					<div class="modal-body"> <!--the modal body content-->
						<table>
							<tr>
								<td><strong>Username:</strong></td>
								<td><?=$_SESSION['name']?></td>	<!--gets the name from the mySQL-database-->
							</tr>
							<tr>
								<td><strong>Password:</strong></td>
								<td>**********</td>
							</tr>
							<tr>
								<td><strong>Email:</strong></td>
								<td><?=$email?></td> <!--gets the email from the mySQL-database-->
							</tr>
						</table>
					</div> <!--the modal body content-->
				</div> <!--!the modal content-->
			</div>
		</div> <!--!the profile page modal-->
	</header> <!--!header-container-->

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> <!--the carousel-->
  		<ol class="carousel-indicators">
    		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		</ol>
  		<div class="carousel-inner"> <!--the carousel wrap-->
    		<div class="carousel-item active"> <!--carousel item-->
				<img class="img-fluid d-block w-100" src="assets/images/slider/space4.jpg" alt="First slide">
    		</div> <!--!carousel item-->
    		<div class="carousel-item"> <!--carousel item-->
      			<img class="img-fluid d-block w-100" src="assets/images/slider/space3.jpg" alt="Second slide">
    		</div> <!--!carousel item-->
    		<div class="carousel-item"> <!--carousel item-->
      			<img class="img-fluid d-block w-100" src="assets/images/slider/space5.jpg" alt="Third slide">
			</div> <!--!carousel item-->
			<div class="carousel-caption"> <!--the transparent jumbotron-->
				<div class="jumbotron search-jumbo text-center">
					<p class="lead">Navigera med menyknapparna ovan, eller sök efter din produkt här:</p>
                	<input type="text" name="search" class="form-control main-search" placeholder="Sök.."></input>
				</div>
			</div> <!--!the transparent jumbotron-->
  		</div> <!--!the carousel wrap-->
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <!--the carousel previous button-->
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Previous</span>
 		</a> <!--!the carousel previous button-->
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <!--the carousel next button-->
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Next</span>
  		</a> <!--!the carousel next button-->
	</div> <!--!the carousel-->
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