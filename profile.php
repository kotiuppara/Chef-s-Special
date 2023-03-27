<?php 
	session_start();
	require "connection.php";
	$d=$_SESSION['userid'];
	$query="SELECT * FROM data where Uname='$d';";
	$check=mysqli_query($c,$query);
	if(mysqli_num_rows($check))
	{	
		while($row=mysqli_fetch_assoc($check))
		{
			$_SESSION['name']=$row["Name"];
			$_SESSION['email']=$row["Email"];
			$_SESSION['phone']=$row["Phone"];
			$_SESSION['gender']=$row['Gender'];
			if(isset($row['image']))
				$_SESSION['image']=$row['image'];
				
		}
	}
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$mail=$_POST['email'];
		$phone=$_POST['phone'];
		if(isset($_POST['gender']))
			$gender=$_POST['gender'];
		else
			$gender="";
		$name=$_POST['name'];
		$n=$_FILES['myfile']['name'];
		$size= $_FILES['myfile']['size'];
		$max=1024*1024;
		$extension=pathinfo($n,PATHINFO_EXTENSION);
		$n=$_FILES['myfile']['name'];
		function insert($name,$phone,$mail,$size)
		{
			if(empty($name)){
				$_SESSION['error']="Name cannot be empty";
				return false;
			}
			if(strlen($name)<3){
				$_SESSION['error']="Name should be atleast 3 characterss";
				return false;
			}
			if (!preg_match ("/^[a-zA-z ]*$/", $name) ) {  
    			$_SESSION['error'] = "Only alphabets and whitespace are allowed in name.";
    			return false; 
            }
			if (!preg_match ("/^[0-9]*$/", $phone) ){  
			    $_SESSION['error'] = "Only numeric value is allowed in phone.";
			    return false;
			}
			if(strlen($phone) != 10){
			    $_SESSION['error'] = "Size 10 is allowed in Phone.";
		    	return false;	
			}
			if(empty($mail)){
				$_SESSION['error'] = "mail can't be empty ";
				return false;
			}
			$_SESSION['error'] = "";
			return true;
		}
		function pic($n,$size,$max){
			if(empty($n)){
				$_SESSION['error1'] = "file not uploaded";
				return false;
			}
			if($size>$max)
			{
				$_SESSION['error1'] = "Size of file is Exceeded";
				return false;
			}
			$_SESSION['error1'] = "";
			return true;
		}
		if(insert($name,$phone,$mail,$size)){
			$q2="UPDATE data SET Email='$mail',Phone='$phone',Name='$name' WHERE Uname='$d';";
			mysqli_query($c,$q2);
		}
		if(pic($n,$size,$max)){
			$file= $_FILES['myfile']['tmp_name'];
			$img=addslashes(file_get_contents($file));
			$allowed=array('jpg','png','jpeg','gif');
			$n=$_FILES['myfile']['name'];
			$extension=pathinfo($n,PATHINFO_EXTENSION);
			if(! in_array($extension,$allowed))
			{
				$_SESSION['error1'] = "Please choose Valid extension";
			}
			else{
				$q2="UPDATE data SET image='$img' WHERE Uname='$d';";
				mysqli_query($c,$q2);
				$_SESSION['error1'] = "";
			}
		}
		if(isset($_POST['gender'])){
			$q3="UPDATE data SET Gender='$gender' WHERE Uname='$d';";
			mysqli_query($c,$q3);
		}
		if(insert($name,$phone,$mail,$size) && pic($n,$size,$max))
		{	
			$_SESSION['error']="";
			$_SESSION['error1']="";
			header('Location:profile.php');	
		}
		elseif(insert($name,$phone,$mail,$size)){
			$_SESSION['error']="";
			header('Location:profile.php');	
		}
		elseif(pic($n,$size,$max)){
			$_SESSION['error1']="";	
			header('Location:profile.php');	
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="project.css">
		<title>profile</title>
		<script>
		      $(document).ready(function(){
		        $("#a").mouseenter(function(){
		          $("#edit").toggle();
		        });
		        $("#b").click(function(){
		        	$('#b').css("border-color","chocolate")
		        });

		      });
		</script>
		 <script type="text/javascript">
		 	function logout(){
		 		if(confirm("Do you want to LogOut?"))
		 			return true;
		 		else
		 			return false;
		 	}
		 	function update(){
		 		if(confirm("Click Ok to update"))
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
			<div class="row pt-5 g-0">
				<div class="col-md-4 offset-md-2">
					<div class="card-lg"><div class="card-body"><img id="b" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($_SESSION['image']);?>" class="image mx-auto d-block img-fluid"></div></div>
					<button class="button1 toggler" id="a" type="button" >Edit Profile</button>
					<div class="card-md collapse" id="edit" style="border-radius: 25px;background-color:rgb(150, 230, 255);">
						<div class="card-body" >
							<h3 class="text-primary">Edit Profile</h3>
							<form id="form" action="#" onsubmit="return update()" method="POST" enctype="multipart/form-data">
								<div class="form-floating mt-4 mb-4">
									<input type="text" class="form-control" name="name" value='<?php echo $_SESSION["name"];?>' id="name"placeholder="uname">
									<label class="form-label" for="name">NAME</label>
								</div>
								<div class="form-floating mt-4 mb-4">
									<input type="email" class="form-control" name="email" id="mail" value='<?php echo $_SESSION["email"];?>' placeholder="email">
									<label class="form-label" for="name">EMAIL</label>
								</div>
								<div class="form-floating mt-4 mb-4">
									<input type="tel" class="form-control" name="phone" id="tele" value='<?php echo $_SESSION["phone"];?>' 
										placeholder="phone">
									<label class="form-label" for="name">PHONE</label>
								</div>
								<div class="form mb-4">
									<label class="form-label"><b>Upload Profile pic</b></label>
									<input type="file" class="form-control" name="myfile" id="upload">
								</div>
								<label class="pe-3"><b>Gender:</b></label>
								<input type="radio" name="gender" id="male" value="Male"><i class="pe-3"> Male</i>
								<input type="radio" name="gender" id="female" value="Female"><i class="pe-3"> Female</i><br><br>
								<div class="d-grid gap-3">
									<button type="submit" name="submit" class="btn btn-danger btn-block">Update</button>
								</div>
							</form>
						</div>
					</div>
					<div class="form-floating mt-4 mb-4"><span id="error" name='error' class="text-danger"><?php echo $_SESSION['error']; ?></span></div>
					<div class="form-floating mt-4 mb-4"><span id="error" name='error' class="text-danger"><?php echo $_SESSION['error1']; ?></span></div>
				</div>
				<div class="col-md-4 mt-5">
					<fieldset class="set ">
						<legend style="text-align: center;color: darkseagreen;font-size:30px;"><u>Profile</u></legend>
						<table class="tab">
							<tr>
								<th>Name</th>
								<th>:</th>
								<td><?php echo $_SESSION['name'];?></td>
							</tr>
							<tr>
								<th>Email</th><th>:</th>
								<td><?php echo $_SESSION["email"];?></td>
							</tr>
							<tr>
								<th>Phoneno</th><th>:</th>
								<td><?php echo $_SESSION["phone"];?></td>
							</tr>
							<tr>
								<th>Gender</th><th>:</th>
								<td><?php echo $_SESSION["gender"];?></td>
							</tr>
						</table>
					</fieldset>
				</div>
			</div>
		</div>
	</body>
</html>