<?php session_start();?>
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
<body> 
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
	<div class="body-container con1" >
		<div class="con2">
			<nav class="navbar navbar-xs bg-light justify-content-center navbar-light sticky-top">
			<div id="list" class="navbar-collapse">
			<ul class="navbar-nav">	
				<li class="nav-item ms-3"><b>My Account</b></li>
				<li class="nav-item" style="display: flex;justify-content: center;"><a class="navbar-brand" href="profile.php"><img style="border: 8px solid #DCDCDC;border-radius: 50%;" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($_SESSION['image']);?>" class="rounded-circle" width="100px" height="100px"></a></li>
				<li class="nav-item" style="display: flex;justify-content: center;"><a class="navbar-brand" href="profile.php"><?php echo $_SESSION['name'];?></a></li>
				<hr>
				<li class="nav-item">
					<a href="#" class="nav-link ms-3 ps-5 " role="button"><i><h4>VEG</h4></i></a>
					<ul>
						<li><a class="text-decoration-none nav-link" href="#a"><b>VEG-DUM-BIRYANI</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#b"><b>ALOO PANEER PAKODA</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#c"><b>MUSHROM NOODLES</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#d"><b>SOYA PULAO</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#e"><b>PALAK PANEER</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#f"><b>MUSHROOM MASALA</b></a></li>
					</ul>
				</li>
			</ul>
			</div>
			</nav>
		</div>
		<div class="con3 me-0"  style="background-image: url('img/switzerland_alps_mountains_night_beautiful_landscape_99817_1920x1080.jpg')">
			<div class="box1">
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="a">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#two"><img src="img/v1.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>VEG-DUM-BIRYANI</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="b">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#four"><img src="img/v2.jpeg"  class="ms-4 card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>ALOO PANEER PAKODA</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="c">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#five"><img src="img/v3.jpeg"  class="ms-3 card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>MUSHROM NOODLES</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="d">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#six"><img src="img/v4.webp"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>SOYA PULAO</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="e">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#seven"><img src="img/v5.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>PALAK PANEER</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="f">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#eight"><img src="img/v6.jpeg"  class="ms-4 card-img-top" height="80%" width="50%"><p class="bg-green"><b>MUSHROOM MASALA</b></p></a>
					</div>
				</div>
			
			</div>
			<div class="box2" style="color: white;">
				<div id="par" class="accordion">
					<div id="o" class="collapse show" data-bs-parent="#par">
						<div class="middle">WELCOME TO CHEF'S SPECIAL</div>
					</div>
					<div id="two" class="collapse" data-bs-parent="#par">
						<h2 class="heading">VEG-DUM-BIRYANI</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>1 tsp Red chilli powder</li>
							<li>1 tsp Pepper</li>
							<li>1 tbsp Biryani masala</li>
							<li>Salt as per taste</li>
							<li>1 Cauliflower</li>
							<li>1/2 cup Peas</li>
							<li>1 Onion</li>
							<li>2 Carrots</li>
							<li>2 Potatoes</li>
							<li>1 Bay Leaf</li>
							<li>1 Cinnamon</li>
							<li>1 Star Anise</li>
							<li>2 Green Cardamom</li>
							<li>1/2 cup Rice</li>	
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
					<ol>
						<li>Take a vessel and add oil to it. Throw in chopped onions and let them become crisp.</li>
						<li>Then, add bay leaf, cinnamon, jeera, star anise, elaichi and cook.</li>
						<li>To this, add ginger garlic paste and let it cook.</li>
						<li>Next, add chopped vegetables such as carrots, cauliflower, beans, peas, and potatoes and mix them
							well.</li>
						<li>Combine this with red chilli powder, pepper, salt and biryani masala.</li>
						<li>Now add some curd and let it cook for a while.</li>
						<li>Till then, take cooked rice and put a layer of it in a bowl.</li>
						<li>Add the veggies and repeat the process.</li>
						<li>Finally, garnish with dry fruits and crisp onions to enjoy!</li>
					</ol>
					</div>
					<div id="four" class="collapse" data-bs-parent="#par">
						<h2 class="heading">ALOO PANEER PAKODA</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>5 Paneer Pieces</li>
							<li>1 Mashed potato</li>
							<li>1/2 tsp Black Pepper</li>
							<li>Salt as per taste</li>
							<li>3 tbsp Gram Flour</li>
							<li>Water</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>Take paneer and cut it into thick slices. Keep it aside.</li>
							<li>Now take mash potatoes and mix them with red chilli powder, salt, pepper, chaat masala. Combine
								it.</li>
							<li>Then once the mashed potato mix is ready, take some of it and cover the paneer with it.</li>
							<li>Mix some besan, salt and water in a bowl.</li>
							<li>Dip the aloo paneer mix in it and fry till crisp and brown.</li>
							<li>Once done, take it out, cut it from the middle and serve!</li>
						</ol>
					</div>
					<div id="five" class="collapse" data-bs-parent="#par">
						<h2 class="heading">MUSHROOM NOODLES</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>200 gms Noodles</li>
							<li>300-400 gram Mushrooms</li>
							<li>1/2 tbsp Chopped Garlic</li>
							<li>1/2 tsp Chopped ginger</li>
							<li>1 tsp Chopped green chilies</li>
							<li>1/2 tsp Black pepper or white pepper</li>
							<li>1/2 cup Chopped spring onions</li>
							<li>1 to 2 tsp Finely chopped celery (optional)</li>
							<li>2 to 2.5 tbsp Oil</li>
							<li>1 tbsp Soya Sauce</li>
							<li>1 tsp Rice vinegar or regular vinegar</li>
							<li>Spring onion greens for garnish</li>
							<li>salt as required</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>Start by boiling noodles al dante, and keep them aside.</li>
							<li>Heat oil in a wok or kadai or a pan. On a low to medium heat, first add chopped garlic, chopped
								ginger and chopped green chilies. For a spicy hot tasting noodles, you can increase the quantity of
								green chilies.</li>
							<li>Saute for a few seconds, then add chopped spring onions. Add both the white and green part.
								Reserve 2 tablespoon of the greens for garnish.</li>
							<li>Stir and saute the spring onions till they turn translucent. Then add the sliced mushrooms.</li>
							<li>Stir the mushrooms very well and saute them on a medium to high heat stirring occasionally. The
								mushrooms will leave water while cooking.</li>
							<li>Continue to saute till all the water dries up and the mushrooms become light golden from the
								edges.Then add ground black pepper.</li>
							<li>Add soy sauce and stir very well. Add the noodles. Add salt as required.</li>
							<li>Stir and toss the noodles very well. Add rice vinegar or regular white vinegar. Stir and mix. Switch
								off the heat and lastly add the chopped spring onions greens.</li>
							<li>Give a final stir and serve mushroom noodles plain or with dry veg manchurian or veg manchurian
								gravy or veg balls in hot garlic sauce.</li>
						</ol>
					</div>
					<div id="six" class="collapse" data-bs-parent="#par">
						<h2 class="heading">SOYA PULAO</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>1 Cup Soya Chunks</li>
							<li>250 gram Soaked Rice</li>
							<li>1/2 cup Curd</li>
							<li>1 tbsp Ginger Garlic Paste</li>
							<li>1 medium Chopped Onion</li>
							<li>1 medium Chopped Tomato</li>
							<li>2 Slit Green Chillies</li>
							<li>1 Cardamom</li>
							<li>2-3 Green Cardamom</li>
							<li>8-10 Black Pepper</li>
							<li>7-8 Cloves</li>
							<li>1 Bay Leaf</li>
							<li>2 Whole Red Chilli</li>
							<li>2 tsp Red Chilli Powder</li>
							<li>2 tsp Coriander Powder</li>
							<li>1 tsp Cumin Powder</li>
							<li>1/2 tsp Turmeric</li>
							<li>1 tsp Chicken Masala</li>
							<li>1/2 tsp Garam Masala</li>
							<li>3 tbsp Vegetable Oil</li>
							<li>to taste Salt</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>First of all, soak soya chunks in hot water for 15 minutes. After 15 minutes, squeeze the
								soya chunks out of the water and separate them.</li>
							<li>Now take soya chunks in the vessel, add curd, red chili, ginger garlic paste, coriander powder and
								mix it well and keep it aside for some time.</li>
							<li>Heat oil in a pressure cooker, add all the whole spices, whole red chilli and fry for a few seconds.
								After this add chopped onion and fry for few seconds.</li>
							<li>Add marinated soya chunks with onions and fry for some time. After this add chopped tomatoes and
								green chilies and cook it till it becomes soft.</li>
							<li>Add red chilli powder, coriander powder, garam masala, turmeric and salt as per taste and cook</li>
								everything well.</li>
							<li>Add the soaked rice to the spices, mix it well and cover the pressure cooker with water as needed.</li>
							<li>After two whistles, turn off the gas and after the pressure is released, take out the prepared casserole
								in a serving bowl and serve it. Pair it with raita or chutney.</li>
						</ol>
					</div>
					<div id="seven" class="collapse" data-bs-parent="#par">
						<h2 class="heading">PALAK PANEER</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>5 cup water</li>
							<li>1 bunch palak / spinach</li>
							<li>1 inch ginger</li>
							<li>1 clove garlic</li>
							<li>3 green chilli</li>
							<h6>other ingredients:-</h6>
							<li>3 tsp oil</li>
							<li>1 tsp butter</li>
							<li>11 cube paneer / cottage cheese</li>
							<li>1 tsp cumin / jeera</li>
							<li>1 inch cinnamon</li>
							<li>4 cloves</li>
							<li>2 pod cardamom / elachi</li>
							<li>1 bay leaf / tej patta</li>
							<li>2 tsp kasuri methi / dry fenugreek leaves</li>
							<li>½ onion (finely chopped)</li>
							<li>½ tomato (finely chopped)</li>
							<li>¼ cup water</li>
							<li>¾ tsp salt</li>
							<li>¼ tsp garam masala</li>
							<li>2 tbsp cream / malai</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>take blanched palak, 1 inch ginger, 1 clove garlic and 4 green chilli.</li>
						    <li>blend to smooth paste without adding any water. keep aside.</li>
						    <li>now in a large kadai heat3 tsp oil, 1 tsp butter and roast the spices till it turns aromatic.</li>
						    <li>further, add½ onion and saute till it turns golden brown</li>
						    <li>additionally, add½ tomato and saute till the tomatoes turn soft and mushy.</li>
						    <li>add prepared palak paste,¼ cup water and ¾ tsp salt.</li>
						    <li>mix well adjusting consistency as required.</li>
						    <li>further, add roasted paneer and mix well.</li>
						    <li>simmer for 5 minutes or till paneer absorbs flavour.</li>
						    <li>turn off the flame and add ¼ tsp garam masala, 1 tsp kasuri methi and 2 tbsp cream. mix well.</li>
						    <li>finally, serve restaurant-style palak paneer with roti / naan.</li>
					</div>
					<div id="eight" class="collapse" data-bs-parent="#par">
						<h2 class="heading">MUSHROOM MASALA</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<h6>for masala:-</h6>
							<li>1 tsp coriander seeds / daniya seeds</li>
							<li>½ tsp jeera / cumin seeds</li>
							<li>¼ tsp pepper / kali mirch</li>
							<li>4 dried kashmiri red chili</li>
							<h6>for gravy:-</h6>
							<li>3 tsp oil</li>
							<li>1 inch cinnamon stick / dalchini</li>
							<li>½ tsp cumin / jeera</li>
							<li>1 medium sized onion (finely chopped)</li>
							<li>1 tbsp ginger-garlic paste</li>
							<li>2 to matoes (pulped)</li>
							<li>½ tsp turmeric powder / haldi</li>
							<li>½ tsp garam masala powder</li>
							<li>salt to taste</li>
							<li>10 mushrooms (sliced)</li>
							<li>1 cup water (add as required)</li>
							<li>¼ cup cashew paste (prepared with 5 cashews)</li>
							<li>2 tbsp cream</li>
							<li>2 tbsp coriander leaves (finely chopped)</li>
							<li>½ tsp kasuri methi / dry fenugreek leaves (crushed)</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>firstly, in a thick bottomed pan dry roast coriander seeds, jeera, pepper and dried red chili.</li>

							<li>dry roast on low to medium flame till the spices turn aromatic.</li>

							<li>further blend to smooth and fine powder and keep aside.</li>

							<li>now in a large kadai heat oil.</li>

							<li>further saute cumin seeds and cinnamon stick till they turn aromatic.</li>

							<li>also add onions and saute till they turn slightly golden brown.</li>

							<li>additionally add ginger garlic paste and saute till the raw aroma disappears.</li>

							<li>further add tomato pulp and saute well. to prepare tomato pulp, blend 2 tomatoes in a blender.</li>

							<li>saute till the tomato pulp thickens and oil separates from sides.</li>

							<li>additionally add turmeric powder, garam masala powder, prepared masala powder and salt.</li>

							<li>saute on low flame for a minute or till masalas are cooked well.</li>

							<li>add sliced mushrooms and mix gently.</li>

							<li>cover and simmer for 5 minutes, or till mushrooms sweat.</li>

							<li>continue to saute for a minute making sure the masalas are mixed uniformly.</li>

							<li>further add 1 cup of water and cashew paste. to prepare cashew paste, soak 5 cashews in hot water for 10 minutes and later blend it smooth.</li>

							<li>mix well. cover and simmer for 15 minutes, or till mushrooms cook completely.</li>

							<li>add cream, coriander leaves and kasuri methi. mix well.</li>

					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>