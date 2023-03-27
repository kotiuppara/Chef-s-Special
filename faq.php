<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="project.css">
    <title>veg</title>
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
<div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">1. What is Chef's Special?</button>									
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Chef's Special is a website designed for those who wants to learn new variety of recipes regularly.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">2.Do we need to get Paid Subscription to use Chef's Special?</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>No. Chef's Special is a free use website anyone can explore without using single penny.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading3">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">3. Can we get International Reciepes?</button>                     
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>No. At present we are providing only indian recipes</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading4">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse4">4. How to contact Chef's Special?</button>                     
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Please contact us using detail Provided in 'ABOUT US' section.  <a href="about.php"> Click here to check</a></p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading5">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse5">5. What is this Contest?</button>                     
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Our team conducting a contest of best recipes on our Blog First Anniversary</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading6">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse6">6. How to participate in the Contest?</button>                     
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>To participate send your recipe to our mail id <i style="color:green;"> chefsp@gmail.com </i> . And the best 3 recipes of all will win Cash Prizes</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading7">
                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse7">7. What are Prizes in the Contest?</button>                     
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                    <p>Prizes:
                        <ul>
                            <li>1<sup>st</sup> Prize:Rs.10,000</li>
                            <li>2<sup>nd</sup> Prize:Rs.5,000</li>
                            <li>3<sup>rd</sup> Prize:Rs.3,000</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>                            