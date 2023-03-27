<?php
	session_start();
	require "connection.php";
	$_SESSION['error']="";
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name=$_POST['name'];
		$pwd=$_POST['pwd'];
		//echo $name,"<br>",$pwd,"<br>";
		$query="SELECT * FROM data;";
		$check=mysqli_query($c,$query);
		if(mysqli_num_rows($check))
		{	
			$c1=0;
			$c2=0;
			$c3=0;
			while($row=mysqli_fetch_assoc($check))
			{
				if($row['Uname']==$name)
					$c1=$c1+1;
				if($row['Password']==$pwd)
					$c2=$c2+1;
				if($row['Uname']==$name && $row['Password']==$pwd)
					$c3=$c3+1;
			}
			//echo $c1,"<br>",$c2;
			if($c3)
				{	
					$_SESSION["userid"]=$name;
					header("location:home.php");
				}
			elseif ($c1==0 && $c2==0)
				$_SESSION["error"]="Incorrect Username and Password";
				//echo "<br><span style=\"color:green;\"><b>Incorrect Username and Password</b></span><br>";
			elseif($c1==0 && $c2>=1)
				$_SESSION["error"]="Incorrect Username";
				//echo "<br><span style=\"color:green;\"><b>Incorrect Username</b></span><br>";
			elseif($c1==1 && $c2==0 )
				$_SESSION["error"]="Incorrect Password";
				//echo "<br><span style=\"color:green;\"><b>Incorrect Password</b></span><br>";
			else
				$_SESSION["error"]="USERID and Password Mismatch";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		  <title>Bootstrap Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="project.css">
	</head>
	<body class="bg-light">
		<div class="body-container" >
			<div class="container mb-1">
				<marquee scrollamount=20 direction=right>
					<img src="img/19377202_yfv2_2i6j_210524.jpg" width="8%" style="border-radius: 25px;"> Chef's Special <img src="img/20220908_213050.jpg" width="8%" style="border-radius: 25px;">
				</marquee>
			</div>
			<div class="row g-0">
				<div class="col-md-4 offset-md-2 mt-3 " >
					<div class="card-lg" style="border-radius: 25px;background-color:rgb(150, 230, 255);">	
						<div class="card-body mt-4">
							<h3 class="text-primary">Login In</h3>
							<form method="post" >
								<div class="form-floating mt-4 mb-4">
								<input type="text" class="form-control" name="name" required  id="name" placeholder="uname">
								<label class="form-label" for="name">USERID</label>
								</div>
								<div class="form-floating mt-4 mb-4">
								<input type="password" class="form-control" name="pwd" required id="pwd" placeholder="pass">
								<label class="form-label" for="pwd">PASSWORD</label>
								</div>
								<div style="text-align: center;">
									<button type="submit" name="submit" class="btn btn-danger">Login</button>
									<a class="text-decoration-none ms-3" href="create.php">New User?Create Account</a>
								</div>
								<span><?php echo $_SESSION['error'];$_SESSION['error']=""; ?></span>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 offset-md-1 mt-4">
					<img src="img/cook-chef-logo-or-label-restaurant-concept-vector-20578108.jpg"
						class="image img-fluid" width="70%">
				</div>
			</div>
		</div>
	</body>
</html>