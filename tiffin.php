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
					<a href="#" class="nav-link ms-3 ps-5 " role="button"><i><h4>TIFFIN</h4></i></a>
					<ul>
						<li><a class="text-decoration-none nav-link" href="#a"><b>MASALA DOSA</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#b"><b>PURI</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#c"><b>IDLY</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#d"><b>PONGAL</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#e"><b>CHAPATHI</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#f"><b>VADA(GARELU)</b></a></li>
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
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#one"><img src="img/t1.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>MASALA DOSA</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="b">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#two"><img src="img/t2.jpeg"  class="card-img-top ps-4" height="80%" width="50%"><p style="color:chocolate;"><b>PURI</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="c">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#three"><img src="img/t3.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>IDLY</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="d">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#four"><img src="img/t4.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>PONGAL</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="e">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#five"><img src="img/t5.webp"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>CHAPATHI</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg">	
					<div class="c card-header" id="f">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#six"><img src="img/t6.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>VADA(GARELU)</b></p></a>
					</div>
				</div>
			</div>
			<div class="box2" style="color: white;">
				<div id="par" class="accordion">
					<div id="o" class="collapse show" data-bs-parent="#par">
						<div class="middle">WELCOME TO CHEF'S SPECIAL</div>
					</div>
					<div id="one" class="collapse" data-bs-parent="#par">
						<h2 class="heading">MASALA DOSA</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>3/4 cup Parboiled Rice (idli-dosa rice)</li>
							<li>3/4 cup Regular Rice</li>
							<li>1/2 cup Whole Urad Dal (without skin) or Split Urad Dal (black lentils)</li>
							<li>1/4 teaspoon Fenugreek Seeds (methi dana)</li>
							<li>1/2 tablespoon Chana Dal (gram lentils), optional</li>
							<li>Water, as needed</li>
							<li>Salt to taste</li>
							<li>Oil, for shallow frying</li>
						</ul>
						<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>Take all the ingredients to prepare the dosa batter. Rice, urad dal and
								fenugreek seeds are the main ingredients. Chana dal is used for getting a
								golden color for Dosa.</li>
							<li>Rinse both types of rice (regular rice and parboiled rice) together in water
								for 3-4 times and soak them in 2 cups of water for 4-5 hours – (Place both
								types of rice in a medium-size bowl and fill it with water till 3/4th height.
								Rinse the rice by rubbing them between your fingertips; the water will turn
								cloudy. Drain the water and repeat</li>
							<li>Rinse urad dal and chana dal together in water, add fenugreek seeds and
								soak in 1 cup water for 4-5 hours.</li>
							<li>Drain water from urad dal in a small bowl and reserve it (it will be used in
								the next step while grinding the dal). Add drained urad dal, chana dal and
								fenugreek seeds mixture in the medium jar of a mixer grinder or blender.
								Add water as needed and grind until smooth and fluffy batter (use water
								reserved in previous step, approx. 1½ cups water will required to grind 1/2
								cup dry urad dal).</li>
							<li>The batter should be fluffy and not very thick. Transfer it to a large
								container.</li>
							<li>Drain water from rice and add them to the same mixer grinder jar.
								Depending on the size of the jar, you can ground the rice in multiple
								batches.</li>
							<li>Add water as needed and grind until smooth texture. Don’t add too much
								water in a single go; add 1-2 tablespoons water at a time (approx. 1/2 cup
								water will required). Rice requires less water compared to urad dal while
								grinding. Rice batter will be little grainy and will not be as smooth as urad
								dal batter. Transfer it to the same container</li>
							<li>Add salt and mix both batters well using spoon. The final batter should not
								be too thick or too watery. Cover it with plate and leave it at room
								temperature for 8-10 hours or overnight for fermentation. During cold
								weather, keep the batter in warm place (or inside the oven with oven light
								on) for fermentation.</li>
							<li>During fermentation, the batter volume would increase and the tiny
								bubbles would appear on the surface when you stir it with a spoon. Stir the
								batter with a spoon. If it looks too thick, add few tablespoons water and
								mix well until it has attained pouring consistency (little watery than idli
								batter).Heat non-stick tava or iron tava (skillet or griddle) over medium flame.
								Sprinkle few drops of water on the surface. 
								<li>If water drops sizzle and
								evaporate within few seconds, tava is hot enough to cook. Apply 1/2-
								teaspoon oil on the griddle and spread it evenly with a spatula or a clean
								wet cloth. Take a ladle full of batter, pour it over the surface of tawa, swirl
								it as thin as possible in a spiral motion by rotating ladle and make it intoround shape of approx.
								7-8 inch diameter circle.A pply 1-teaspoon oil (or ghee / butter for crispy dosa) around the edges of
								dosa (or spread oil/ghee/butter evenly with brush for crispy dosa).</li>
								<li>Cook until the bottom surface turns light brown and the edges start to
								come upward, it will take around 2-minutes.</li>
							<li>Flip it and cook for a minute. If you are mathin dosa (as shown in the
								photo), you do not need to cook the other side. Transfer it to a plate. Wipe
								tava with clean wet cloth before making next dosa (this is to prevent dosa
								from sticking to Pan) and repeat the process from step-11 to step-13 for
								remaining batter. Hot and crispy plain dosa is ready.</
						</ol>
					</div>
					<div id="two" class="collapse" data-bs-parent="#par">
						<h2 class="heading">PURI</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>2 cup wheat flour</li>
							<li>1 tbsp rava / semolina / suji (fine)</li>
							<li>½tsp sugar</li>
							<li>½tsp salt</li>
							<li>2tsp oil</li>
							<li>water(for kneading)</li>
							<li>oil (for frying)</li>	
						</ul>
						<h4 class="pro-heading">PROCEDURE:--</h4>
							<ol>
								<li>firstly, in a large bowl take 2 cup wheat flour, 1 tbsp rava, ½ tsp sugar,
									½ tsp salt and 2 tsp oil.</li>
								<li>crumble and mix well making sure the flour is moist.</li>
								<li>now add water and knead the dough.</li>
								<li>knead the dough tight adding water as required.</li>
								<li>now pinch a large ball size dough and roll to form a log.</li>
								<li>cut into pieces and roll them to small balls.</li>
								<li>place the balls into a small bowl and 1 tsp oil. grease the ball to
									prevent from drying.</li>
								<li>now take a ball and roll using a rolling pin.</li>
								<li>roll to slightly thick thickness.</li>
								<li>drop the rolled dough into the hot oil.</li>
								<li>press until the puri puffs up and splash oil to puff up fully.</li>
								<li>flip over and fry until it turns golden brown finally, drain off the poori.</li>
							</ol>
					</div>
					<div id="three" class="collapse" data-bs-parent="#par"><li>
						<h2 class="heading">IDLY</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
							<ul type="disk">
								<li>2 1/2 cup basmati rice</li>
								<li>1/2 tablespoon fenugreek seeds</li>
								<li>5 tablespoon sesame oil</li>
								<li>1 1/2 cup urad dal</li>
								<li>salt as required</li>
								<li>water as required</li>
							</ul>
						<h4 class="pro-heading">PROCEDURE:--</h4>
							<ol>
								<li><b>Step 1 Soak the rice & dal and grind into a paste & combine</b>
									To prepare this popular South Indian recipe, wash rice and urad dal separately until the water runs
									clean and add fenugreek seeds to the rice. Soak it in water for 4-6 hours. Soak the urad dal too for
									the same amount of time. Drain all the water from the urad dal and grind it to a fine paste. Add
									water accordingly. Grind the rice to a coarse paste (add water as needed) and then mix both the
									pastes together in a large bowl and whisk them well. Make sure that the consistency is thick.
								<li><b>Step 2 Let the batter ferment, then add salt</b>
									Now, the idli batter needs to be well-fermented. This step is very important to get soft and fluffy
									idlis. Keep the batter in a warm place to ferment. Once the batter has risen, add salt to it and whisk
									to mix it well.</li>
								<li><b>Step 3 Transfer the idli batter in the idli stand</b>
									Grease the idli stand with oil and take a ladleful of batter and fill the idli mould. Add ½ cup of water
									in the idli steamer and let it boil. Put the idli stand inside and close the lid. Let the steam build for 8-10 minutes before switching off the gas.</li>
								<li><b>Step 4 Wait for the utensil to cool a bit before scooping the idlis out</b>
									If you are using a cooker, use it without a vent and steam it for 10 minutes and then switch the gas
									off. In both cases, wait till the steam is released before you take the idli stand out. Wait for another5
									minutes and then use a sharp knife to scoop the idlis out. Serve warm with coconut chutney and
									sambhar.</li>
							</ol>

					</div>
					<div id="four" class="collapse" data-bs-parent="#par">
						<h2 class="heading">PONGAL</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
							<ul type="disk">
								<li>1 cup rice</li>
								<li>2 tablespoon ghee</li>
								<li>1 pinches asafoetida</li>
								<li>1 handful curry leaves</li>
								<li>5 cashews</li>
								<li>water as required</li>
								<li>1/2 teaspoon turmeric</li>
								<li>1/2 teaspoon black pepper</li>
								<li>1 teaspoon cumin seeds</li>
								<li>2 teaspoon ginger paste</li>
								<li>1 cup moong dal</li>
							</ul>
						<h4 class="pro-heading">PROCEDURE:--</h4>
							<ol>
								<li><b>Step 1 Dry roast the moong dal & cook with rice</b>
									Here's how you can prepare this delicious recipe at home: Take a pan and add
									moong dal in it. Dry roast till it turns golden and aromatic. Wash the same
									under running water and transfer it in a deep pan along with rice and enough
									water to submerge both. Bring it to a boil and turn off the flame, once well-
									cooked. Add salt according to your taste and keep aside.</li>
								<li>S<b>tep 2 Saute ginger with spices & add the dal-rice mixture</b>
									Next, place a pan on medium flame and pour ghee. Once heated, add cashews
									and fry until they change their colour to a golden brown. Once done, take out
									and keep aside and warm. Now, add ginger in the pan and fry for a minute or
									two. Put cumin seeds, ginger paste, curry leaves and black pepper along with
									turmeric powder and asafoetida. Add the dal-rice mixture and stir well for about
									5 minutes.</li>
								<li><b>Step 3 Let it simmer, then garnish with cashews</b>
									Then simmer for about 3-4 minutes on medium flame. Lastly, turn off the flame
									and transfer to a serving dish. Garnish with cashews. To make it look even more
									eye-grabbing, you can serve it with some slightly fried coconut slices, dry curry
									leaves and some roasted red chillies to spice up this traditional South Indian
									recipe.</li>
							</ol>
					</div>
					<div id="five" class="collapse" data-bs-parent="#par">
						<h2 class="heading">CHAPATHI</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
							<ul type="disk">
								<li>2 1/2 cup whole wheat flour</li>
								<li>salt as required</li>
								<li>water as required</li>
								<li>1 tablespoon ghee</li>
								<li>oil</li>
							</ul>
						<h4 class="pro-heading">PROCEDURE:--</h4>
							<ol>
								<li><b>Step 1 Knead a smooth dough</b>
								To begin with, take a large-sized bowl. Put two cups of flour along with a cup of
								water, salt and ghee in it. Mix well and start kneading a dough. Make sure that
								the dough is not too thick nor too thin. It has to be of a soft and pliable
								consistency. Add water to get the consistency right. Keep kneading for a while.</li>
								<li><b>Step 2 Flatten the dough balls</b>
								Now roll out few balls from the prepared dough. Place them on a flat surface, flatten them further
								with the help of a rolling pin. Keep using the flour in order to prevent the rolls from sticking to the
								surface. Once the chapatis get the perfect round shape, place a pan on medium flame.</li>
								<li><b>Step 3 Cook the chapati</b>
								Once heated enough, put the chapati on the pan and cook from both sides. Use
								a pair of tongs to flip over to the other side. Keep the flame to medium as too
								much heat might burn the chapati. Check for the little brown spots. Once they
								start appearing, the chapati will start to puff, indicating that it's completely
								cooked. Once done, transfer in a kitchen towel to keep them warm. Serve along
								any gravy or curry of your choice.</li>
								<li><b>Step 4 Note</b>
								If you are someone who loves the richness of Ghee, then you can add some
								ghee while kneading the dough and with a pinch of salt this adds a nice aroma
								and taste to the Chapatis.</li>
							</ol>
					</div>
					<div id="six" class="collapse" data-bs-parent="#par">
						<h2 class="heading">VADA(GARELU)</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>1 cups of urad dal or uddina bele</li>
							<li>¼ cup of channa dal or kadle bele</li>
							<li>2 tsp of rice flour</li>
							<li>2 green chillies</li>
							<li>3 tbsp of dry chopped coconut</li>
							<li>few curry leaves</li>
							<li>1 tbsp coriander leaves (chopped)</li>
							<li>1 inch ginger (finely chopped))</li>
							<li>pinch of hing</li>
							<li>salt to taste</li>
							<li>oil to fry</li>
						</ul>
					<h4 class="pro-heading">PROCEDURE:--</h4>	
						<ol>
							<li>wash and soak dal in about 3 cups of water for about 2-3 hours.</li>
							<li>drain all the water from soaked dal. grind urad dal and channa dal
								together to smooth paste using very little water. i have used authentic
								grinding stone, for mixie, check out medu vada recipe in mixie.</li>
							<li>the batter should be thick and use very little water. the right
								consistency is very important or otherwise, you will not be able to get
								the vada shape.</li>
							<li>add coriander, green chilli, ginger and chopped dry coconut to the
								batter. mix it very well.</li>
							<li>add 2-3 tsp of rice flour. rice flour is added to make it crispy.</li>
							<li>also add pinch of hing to make it more digestible.</li>
							<li>heat the oil in a frying pan in medium flame. wet your palms and
								take a lemon size batter.</li>
							<li>make hole in the center and slide it into the hot oil.</li>
							<li>the vada should float on top of oil.</li>
							<li>10.make sure your oil is not too hot. otherwise the vadas would not
								cook evenly.</li>
							<li>fry on both sides till it becomes golden brown in colour.</li>
						</ol>	
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>