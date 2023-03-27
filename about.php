<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	    <link rel="stylesheet" type="text/css" href="project.css">
		<title>profile</title>
		 <script type="text/javascript">
		 	function logout(){
		 		if(confirm("Do you want to LogOut?"))
		 			return true;
		 		else
		 			return false;
		 	}
	 	</script>
	</head>
	<body class="bg1">
		<div class="body-container">
			<nav class="navbar navbar-expand-lg bg-dark navbar-dark justify-content-center p-2 sticky-top me-auto">
				<a class="navbar-brand ms-5" href="#"><img style="border: 2px solid cornflowerblue;border-radius: 50%;" src="img/cook-chef-logo-or-label-restaurant-concept-vector-20578108.jpg" class="rounded-circle" width="50px" height="50px"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
	      		<span class="navbar-toggler-icon"></span>
	    		</button>
				<div id="collapsibleNavbar"  class="navbar-collapse collapse">
					<ul class="navbar-nav align-items-center p-1">
						<li class="nav-item ms-3"><a class="nav-link active " href="home.php">HOME</a></li>
						<li class="nav-item ms-4"><a class="nav-link " href="about.php">ABOUT US</a></li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle ms-4 pe-5 " role="button" data-bs-toggle="dropdown"><i>RECIEPE'S</i></a>
							<ul class="dropdown-menu">
								<li><a href="veg.php" class="dropdown-item" ><b>Veg</a></b></li>
								<li class="dropdown-divider"></li>
								<li><a href="nveg.php" class="dropdown-item " ><b>Non-Veg</b></a></li>
								<li class="dropdown-divider"></li>
								<li><a href="tiffin.php" class="dropdown-item " ><b>Tiffins</b></a></li>
								<li class="dropdown-divider"></li>
								<li><a href="sweets.php" class="dropdown-item " ><b>Sweets & Hots</b></a></li>
							</ul>
						</li>
						<li>
							<div class="input-group input-group-sm ms-5 me-2">
					            <div class="form-floating">
					            <input type="text" class="form-control" placeholder="name">
					            <label class="form-label">Search</label></div>
					            <button type="submit" class="btn btn-success">SEARCH</button>
				            </div>
						</li> 
						<li class="nav-item ms-5"><a class="navbar-brand" href="profile.php"><img style="border: 2px solid skyblue;border-radius: 50%;" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($_SESSION['image']);?>" class="round" width="50px" height="50px"></a></li>
						<li class="nav-item"><a href="profile.php" class="nav-link">MyProfile</a></li>
						<li class="nav-item ms-3"><a href="faq.php" class="nav-link">FAQ'S</a></li>
						<li class="nav-item ms-5"><a class="nav-link active " href="logout.php"><button onclick="return logout()" class="button1">LogOut</button></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="container">
			<div class="row g-0">
				<div class="col-md-4 offset-md-4">
					<div class="card-lg m-3 shadow">	
						<div class="card-header">
							<img src="img/c1.jpg"  class="aimage mx-auto d-block img-fluid ms-5">
						</div>
						<table class="tab1">
							<tr>
								<th>Name</th>
								<th>:</th>
								<td>KotaAnjaneyulu</td>
							</tr>
							<tr>
								<th>ID</th><th>:</th>
								<td>R180844</td>
							</tr>
							<tr>
								<th>Branch</th><th>:</th>
								<td>CSE</td>
							</tr>
							<tr>
								<th>Role</th><th>:</th>
								<td>Front-end & Back-end</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="row g-0">
				<div class="col-md-5 offset-md-1">
					<div class="card-lg m-3 shadow">	
						<div class="card-body">
							<h4><i>Follow us on:</i></h4>
							<div class="ps-5 pt-1 pb-3">
								<a class="text-decoration-none" style="color: #4267B2;font-size: 25px;" href="#!" role="button" ><i class="bi bi-facebook"></i><i class="ps-2">Facebook</i></a><br>
								<a class="text-decoration-none" style="color: #55acee;font-size: 25px;" href="#!" role="button"><i class="bi bi-twitter"></i><i class="ps-2">Twitter</i></a><br>
								<a class="text-decoration-none" style="color:#30618A;font-size: 25px;" href="#!" role="button"><i class="bi bi-instagram"></i><i class="ps-2">Instagram</i></a><br>
								<a class="text-decoration-none" style="color: #ed302f;font-size: 25px;" href="#!" role="button"><i class="bi bi-youtube"></i><i class="ps-2">YouTube</i></a><br>
							</div>
							<h4><i>Join Our Groups:</i></h4>
							<div class="ps-5 pt-1 pd-1">
								<a class="text-decoration-none" style="color: #25d366;font-size: 25px;" href="#!" role="button"><i class="bi bi-whatsapp"></i><i class="ps-2">WhatsApp</i></a><br>
								<a class="text-decoration-none" style="color: rgb(42, 171, 238);font-size: 25px;" href="#!" role="button"><i class="bi bi-telegram"></i><i class="ps-2">Telegram</i></a><br>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 mt-5">
					<div class="card-lg m-3 mt-5 shadow">	
						<div class="card-body">
							<h3 style="color:rosybrown;">Contact Us:</h3>
							<div style="font-size: 20px;" class="m-2">
								<b style="color:forestgreen;font-family: robato;"><i class="bi bi-envelope-fill"></i> Mail Id:</b><i> chefsp@gmail.com</i><br>
								<b style="color:forestgreen;font-family: robato;"><i class="bi bi-telephone-fill"></i> Phone:</b><i> 78235645XX</i><br>
							</div>
							<h3 style="color:rosybrown;">For Queries:</h3>
							<b style="color:forestgreen;font-family: robato;"><i class="bi bi-envelope"></i> Mail to:</b><i> chefspquery@gmail.com</i><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>