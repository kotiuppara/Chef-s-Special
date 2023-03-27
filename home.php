<?php
	session_start();
	require "connection.php";
	$d=$_SESSION['userid'];
	$_SESSION['error']="";
	$_SESSION['error1']="";
	$query="SELECT * FROM data where Uname='$d';";
	$check=mysqli_query($c,$query);
	if(mysqli_num_rows($check))
	{	
		while($row=mysqli_fetch_assoc($check))
		{
			if(isset($row['image'])){
				$_SESSION['image']=$row['image'];
			}
			else{
				$q="SELECT image from data where Uname='default';";
				$c1=mysqli_query($c,$q);
				$r=mysqli_fetch_array($c1);
				$_SESSION['image']=$r['image'];
			}
			if($row['Name'])
				$_SESSION['name']=$row['Name'];
			else
				$_SESSION['name']=$row['Uname'];
		}
	} 
?>
<!DOCTYPE html>
<html>
	<head>
		  <title>Bootstrap Example</title>
	  <meta charset="utf-8">
	  <meta name="google-site-verification" content="C9yQ3Wh2KFmHiBvKMs-qxMNE7BCetBooL6O8xUwItuk" />
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="project.css">
	 <script type="text/javascript">
	 	function logout(){
	 		if(confirm("Do you want to LogOut?"))
	 			return true;
	 		else
	 			return false;
	 	}
	 </script>
	 <script>
		      $(document).ready(function()
		      {
		        $("#b").click
		        (function(){
		          $("#a").hide();
		          $(".box3").css("width","100%");
		        });
		      });
		</script>
	</head>
	<body>
		<div class="body-container" >
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
			<div class="body-container con1 bg-light">
				<div class="con2">
					<nav class="navbar navbar-xs bg-light justify-content-center navbar-light sticky-top">
						<div id="list" class="navbar-collapse">
						<ul class="navbar-nav">	
							<li class="nav-item ms-3"><b>My Account</b></li>
							<li class="nav-item im2" style="display: flex;justify-content: center;"><a class="navbar-brand" href="profile.php"><img style="border: 8px solid #DCDCDC;border-radius: 50%;" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($_SESSION['image']);?>" class="rounded-circle" width="100px" height="100px"></a></li>
							<li class="nav-item" style="display: flex;justify-content: center;"><a class="navbar-brand" href="profile.php"><?php echo $_SESSION['name'];?></a></li>
							<hr>
							<li><img src="img/19377202_yfv2_2i6j_210524.jpg" width="auto" height="140px" class="mt-2 ms-5 ps-4"></li>
							<li><div class="intro middle">Welcome<br> to <br>Chef's Special</div></li>
						</ul>
						</div>
					</nav>
				</div>
				<div class="con3">
					<div class="box3" style="text-align: center;">
							<div class="carousel slide carousel-dark p-2" id="slider" data-bs-ride="carousel">
						    <ol class="carousel-indicators">
						        <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
							    <li data-bs-target="#slider" data-bs-slide-to="1"></li>
							    <li data-bs-target="#slider" data-bs-slide-to="2"></li>
							    <li data-bs-target="#slider" data-bs-slide-to="3"></li>
						    </ol>
						    <div class="carousel-inner">
						        <div class="carousel-item active" data-bs-interval="2000">
							        <a href="veg.php"><img src="img/v1.jpg"  width="100%" height="500px"></a>
						    	</div>
							    <div class="carousel-item" data-bs-interval="2000">
							        <a href="nveg.php"><img src="img/nv5.webp"  width="100%" height="500px"></a>
						        </div>
						        <div class="carousel-item " data-bs-interval="2000">
							       <a href="tiffin.php"><img src="img/t1.jpg"  width="100%" height="500px"></a>
						    	</div>
							    <div class="carousel-item" data-bs-interval="2000">
							       <a href="sweets.php"><img src="img/s2.webp"  width="100%" height="500px"></a>
						        </div>
				   	        </div>
						    <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
						        <span class="carousel-control-prev-icon"></span>
						    </a>
						    <a href="#slider" class="carousel-control-next" data-bs-slide="next">
							    <span class="carousel-control-next-icon"></span>
						    </a>
						</div>
						<div style="text-align:center;"><a href="veg.php"><button class="btn btn-success">Click here to Explore</button></a></div>
					</div>
					<div class="box4 ps-2 pt-3" id="a">
						<button id="b" class="btn btn-warning">Hide</button>
						<div class="card-lg m-3 shadow-lg ps-2">
							<div style="display: flex;font-size: 35px;justify-content: center;color: royalblue;"><u>Contest</u></div>
							<div style="font-size: 20px;justify-content: center;">
							<h4 style="display: flex;font-size: 30px;justify-content: center;color:greenyellow;">Contest Details:</h4>
							<h6>Share your recipe with us and get a chance to win lot of surprising prizes</h6>
							
							<h3 style="color:forestgreen;">Prizes:</h3><h5 class="ps-5"><i>1<sup>st</sup> Prize:Rs.10,000<br>2<sup>nd</sup> Prize:Rs.5,000<br>
								3<sup>rd</sup> Prize:Rs.3,000<br></i></h5>
								<h5>Send ur reciepe to our mail:<i style="color:chartreuse;">chefsp@gmail.com</i></h6>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>