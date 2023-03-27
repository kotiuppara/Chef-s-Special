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
					<a href="#" class="nav-link ms-3 ps-5 " role="button"><i><h4>NON-VEG</h4></i></a>
					<ul>
						<li><a class="text-decoration-none nav-link" href="#a"><b>CHICKEN-BIRYANI</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#b"><b>FISH-CURRY</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#c"><b>FISH-BIRYANI</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#d"><b>MUTTON-SPRING-ROLL</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#e"><b>ANDHRA-STYLE CHICKEN-CURRY</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#f"><b>CHARMINAR-BIRYANI</b></a></li>
					</ul>
				</li>
			</ul>
			</div> 
			</nav>
		</div>
		<div class="con3 me-0"  style="background-image: url('img/switzerland_alps_mountains_night_beautiful_landscape_99817_1920x1080.jpg')">
			<div class="box1">
				<div class="card-lg m-3 shadow shadow-lg" id="a">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#one"><img src="img/nv1.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>CHICKEN-BIRYANI</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="b">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#two"><img src="img/nv2k.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>FISH-CURRY</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="c">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#three"><img src="img/nv3.webp"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>FISH-BIRYANI</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="d">	
					<div class="c card-header"> 
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#four"><img src="img/nv4.png"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>MUTTON-SPRING-ROLL</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="e">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#five"><img src="img/nv5.webp"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>ANDHRA-STYLE CHICKEN-CURRY</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="f">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#six"><img src="img/nv6.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>CHARMINAR-BIRYANI</b></p></a>
					</div>
				</div>
			</div>
			<div class="box2" style="color: white;">
				<div id="par" class="accordion">
					<div id="o" class="collapse show" data-bs-parent="#par">
						<div class="middle">WELCOME TO CHEF'S SPECIAL</div>
					</div>
					<div id="one" class="collapse" data-bs-parent="#par">
						<h2 class="heading">CHICKEN-BIRYANI</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>1 cup boiled basmati rice</li>
							<li>1/2 teaspoon mint leaves</li>
							<li>salt as required</li>
							<li>2 tablespoon refined oil</li>
							<li>3 green cardamom</li>
							<li>2 clove</li>
							<li>2 onion</li>
							<li>1 teaspoon turmeric</li>
							<li>1 tablespoon garlic paste</li>
							<li>1 cup hung curd</li>
							<li>2 tablespoon coriander leaves</li>
							<li>water as required</li>
							<li>1 tablespoon ghee</li>
							<li>600 gm chicken</li>
							<li>tablespoon garam masala powder</li>
							<li>1 teaspoon saffron</li>
							<li>1 tablespoon bay leaf</li>
							<li>1 black cardamom</li>
							<li>1 teaspoon cumin seeds</li>
							<li>4 green chillies</li>
							<li>1 tablespoon ginger paste</li>
							<li>1 teaspoon red chilli powder</li>
							<li>1/2 tablespoon ginger</li>
							<li>2 drops kewra</li>
							<li>1 tablespoon rose water</li>
						</ul>

						<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>Prepare saffron-kewra water and chop veggies
								To make a delightful chicken biryani dish firstly soak saffron in water to prepare
								saffron water (One tsp saffron can be soaked in 1/4 cup water). Next, mixkewra drops in water and mix well to make kewra water. Set them aside for
								later usage. Now chop the onion and coriander leaves and keep them aside.</li>
							<li>Saute the onions
								Meanwhile, heat refined oil in a deep bottomed pan. Once the oil is hot enough,
								add cumin seeds, bay leaf, green cardamom, black cardamom, cloves in it, and
								saute for about a minute. Then, add chopped onion to it and saute until pink.
								Now, add chicken into it with slit green chillies, turmeric, salt to taste, ginger
								garlic paste, red chilli powder and green chilli paste. Mix well all the spices and
								cook for 2-3 minutes. Then, add hung curd into it and give a mix.</li>
							<li>Cook biryani on low heat for 5-6 minutes
								Turn the flame to medium again and add garam masala in it along with ginger
								julienned, coriander and mint leaves. Add kewra water, rose water and saffron
								water in it. Cook till the chicken is tender. Then add 1 cup cooked rice and
								spread evenly. Then add saffron water and pour ghee over it. You can now cook
								the dish without the lid or cover it with a lid to give a dum-effect due to the
								steam formation.</li>
							<li>Serve hot chicken biryani with your favourite chutney or raita
								Cook for 15-20 minutes with a closed lid and garnish with 1 tbsp fried onions
								and coriander leaves. Serve hot chicken biryani with raita of your choice. Enjoy!</li>
						</ol>
					</div>
					<div id="two" class="collapse" data-bs-parent="#par">
						<h2 class="heading">FISH-CURRY</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
							<ul type="disk">
								<li>2 teaspoons Dijon mustard</li>
								<li>1 teaspoon ground black pepper</li>
								<li>½ teaspoon salt</li>
								<li>2 tablespoons canola oil</li>
								<li>4 white fish fillets</li>
								<li>1 onion, coarsely chopped</li>
								<li>4 cloves garlic, roughly chopped</li>
								<li>1 (1 inch) piece fresh ginger root, peeled and chopped5 cashew halves</li>
								<li>1 tablespoon canola oil</li>
								<li>2 teaspoons cayenne pepper, or to taste</li>
								<li>½ teaspoon ground turmeric</li>
								<li>1 teaspoon ground cumin</li>
								<li>1 teaspoon ground coriander</li>
								<li>1 teaspoon white sugar</li>
								<li>½ cup chopped tomato</li>
								<li>¼ cup vegetable broth</li>
								<li>¼ cup chopped fresh cilantro</li>
						</ul>
						<h4 class="pro-heading">PROCEDURE:--</h4>
							<ol>
								<li>Mix the mustard, pepper, 1/2 teaspoon salt, and 2 tablespoons of canola oil in a shallow bowl.
									Add the fish fillets, turning to coat. Marinate the fish in the refrigerator for 30 minutes.</li>
								<li>Combine the onion, garlic, ginger, and cashews in a blender or food processor and pulse until
									the mixture forms a paste.</li>
								<li>Preheat an oven to 350 degrees F (175 degrees C).</li>
								<li>Heat 1 tablespoon of canola oil in a skillet over medium-low heat. Stir in the prepared paste;
									cook and stir for a minute or two. Add the cayenne pepper, turmeric, cumin, coriander, 1
									teaspoon salt, and sugar. Cook and stir for an additional five minutes. Stir in the chopped
									tomato and vegetable broth.</li>
								<li>Arrange the fish fillets in a baking dish, discarding any extra marinade. Top the fish with the
									sauce, cover the baking dish, and bake in the preheated oven until the fish flakes easily with a
									fork, about 30 minutes. Garnish with chopped cilantro.</li>
							</ol>
					</div>
					<div id="three" class="collapse" data-bs-parent="#par">
						<h2 class="heading">FISH-BIRYANI</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
							<ul type="disk">
								<li>250 gm fish fillets</li>
								<li>1 cinnamon stick</li>
								<li>3 green cardamom</li>
								<li>1 bay leaf</li>
								<li>1 teaspoon ginger paste</li>
								<li>1/2 cup coconut</li>
								<li>1/2 cup cashews</li>
								<li>1/4 cup ghee</li>
								<li>1 cup rice</li>
								<li>5 clove</li>
								<li>1 black cardamom</li>
								<li>1 green chilli</li>
								<li>1 teaspoon garlic paste</li>
								<li>1 teaspoon turmeric</li>
								<li>1 teaspoon garam masala powder</li>
								<li>salt as required</li>
							</ul>
						<h4 class="pro-heading">PROCEDURE:--</h4>
							<ol>
								<li>Boil the rice till it is almost done. Overboiling rice will make it squishy and the dish will lose
									its taste and beauty, so it should be cooked al dante. Drain away the water and spread the rice
									on a plate.</li>
								<li>Chop the fish fillets into bite sized pieces and keep aside. You can also keep them in a slightly
									bigger size if you prefer it this way.</li>
								<li>Take a deep bottomed pan and add ghee in it. Once it is heated, add the cardamoms, bay leaf,
									green chillies, cloves, cinnamon and chopped cashew nuts. After 2-3 minutes, add ginger-
									garlic paste, turmeric powder, salt and cook for another 2 minutes. Cook on low flame till the
									raw smell of spices goes away. Add the fish fillets and cook till they are nicely browned on
									both sides.</li>
								<li>Now add the rice, the grated coconut and gently mix. At this point mix in the garam masala
									powder. Sprinkle a little water. Cover and cook on low flame for 10 minutes. Serve hot with
									the raita and salad of your choice.</li>
							</ol>

					</div>
					<div id="four" class="collapse" data-bs-parent="#par">
						<h2 class="heading">MUTTON-SPRING-ROLL</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
							<ul type="disk">
								<li>1 Cups maida</li>
								<li>1 tsp salt</li>
								<li>1/2 cups oil</li>
								<li>Water as required</li>
								<li>1 cups minced mutton</li>
								<li>1/2 cups onions</li>
								<li>1 tbsp black pepper powder</li>
								<li>1 tbsp soy sauce</li>
								<li>1 tbsp ketchup</li>
								<li>1 tbsp garlic , chopped</li>
								<li>1 tbsp ginger , chopped</li>
								<li>Salt as required</li>
							</ul>
						<h4 class="pro-heading">PROCEDURE:--</h4>
							<ol>
								<li>In a bowl, add Maida, salt, sugar, half of the oil and water to knead soft dough. Pat the dough with
									more oil and let it rest for some time.</li>
								<li>In a pan add oil, chopped ginger and garlic, chopped onions, minced meat and soy sauce and
									ketchup. Add salt and black pepper and mix until cooked.</li>
								<li>Roll very thin roti out of the dough, put the filling in the middle and roll tightly. Use a Maida and
									water slurry to close the roll.</li>
								<li>Deep fry in hot oil until golden and crispy. Serve with a dip of your choice.</li>

							</ol>
					</div>
					<div id="five" class="collapse" data-bs-parent="#par">
						<h2 class="heading">ANDHRA-STYLE CHICKEN-CURRY</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
							<ul type="disk">
								<li>00 gms Chicken</li>
								<li>7-8 Curry Leaves</li>
								<li>1 Inch Cinnamon</li>
								<li>1 tbsp Lemon Juice</li>
								<li>1/2 tsp Black Pepper</li>
								<li>1 tbsp Ghee</li>
								<li>1/4 tsp Fennel Seeds</li>
								<li>3-4 Green Chillies (Slit)</li>
								<li>2 medium Onion (Sliced)</li>
								<li>1 tbsp Coriander Powder</li>
								<li>10 Cashews</li>
								<li>5 Cloves</li>
								<li>1/4 tsp Turmeric</li>
								<li>1 tbsp Ginger Garlic Paste</li>
								<li>1 tsp Red Chilli</li>
								<li>2 tbsp Curd</li>
							</ul>
						<h4 class="pro-heading">PROCEDURE:--</h4>
							<ol>
								<li>Firstly, you need to marinate the chicken with salt, red chili powder, ginger and garlic paste,
									turmeric and curd and keep aside for an hour.</li>
								<li>Now, slice onions. Also, chop the coriander leaves and squeeze lemon juice in a separate bowl.
									Then crush the cashews into powdered form and keep aside.</li>
								<li>Once the chicken is marinated, heat ghee in a large wok, cook onions on low flame till the onion
									turns translucent.</li>
								<li>Now, add marinated chicken in the wok and cook until the chicken turns tender and juicy.</li>
								<li>Meanwhile, heat oil in an other pan, heat oil and sautee green chillies and curry leaves.</li>
								<li>Now, add this tadka to the chicken wok along with powdered cashews, black pepper, salt, red chilli
									and salt to taste.</li>
								<li>Now fry the chicken for sometime. Keep stirring for about 5 minutes. At last, add chopped
									coriander leaves and lemon juice.</li>
								<li>Serve hot with roti or naan and rice.</li>
							</ol>
					</div>
					<div id="six" class="collapse" data-bs-parent="#par">
						<h2 class="heading">CHARMINAR-BIRANI</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<h6>For rice:--</h6>
							<li>2 cup long grain rice</li>
							<li>2-3 bay leaf</li>
							<li>2-3 cardamoms pods (bruised)</li>
							<li>2-3 cloves</li>
							<li>1 tsp ghee</li>
							<li>1/2 cup mint leaves</li>
							<li>1 star anise</li>
							<li>1-2 pcs cinnamon, small</li>
							<li>pieces Water as required</li>
							<li>Salt as per taste</li>
							<li>600 gms mutton</li>
							<li>2 Onion</li>
							<li>2 Tomato</li>
							<li>250 gms ghee</li>
							<li>2 Cloves</li>
							<li>2 Cardamom</li>
							<li>2 Cinnamon sticks</li>
							<li>Salt as per taste</li>
							<li>4-5 Cloves</li>
							<li>1-2 pcs cinnamon stick, small</li>
							<li>3-4 Cardamoms</li>
							<li>1 tsp shahi jeera</li>
							<li>12-14 Peppercorns (roast and grind to powder)</li>
							<h6>For meat marinade:--</h6>
							<li>Salt as per taste</li>
							<li>2 tbsp red chilli powder</li>
							<li>2 tbsp coriander powder</li>
							<li>1/2 tsp turmeric powder</li>
							<li>1/2 tsp garam masala</li>
							<li>1 cup curd</li>
							<li>1 tsp ginger paste</li>
							<li>1 tsp garlic paste</li>
							<li>2 green chilli (slit and deseeded)</li>
							<li>1/4 cup milk</li>
							<li>5-6 Saffron strands (add to the milk)</li>
							<li>1/2 cup mint</li>
							<li>2 tbsp lemon juice</li>
							<li>Salt as per taste</li>
							<h6>For layering:-</h6>
							<li>Browned onions</li>
							<li>Fried garlic</li>
							<li>1 cup saffron (soaked in milk)</li>
							<li>Coriander (chopped)</li>
							<li>1/2 cup ghee</li>
							<li>for garnishing fresh tomatoes, sliced</li>
							<li>for garnishing onions and garlic (caramelized)</li>
						</ul>
					<h4 class="pro-heading">PROCEDURE:--</h4>	
						<ol>
							<li>In a bowl add all the marinade ingredients and make a smooth paste.</li>
							<li>Apply this paste all over the meat. Cling wrap the meat and let sit in the refrigerator for 3-4 hours or
								overnight.</li>
							<li>While the marinated meat is in the fridge, prepare the long grain rice.</li>
							<li>Pre-soak the basmati rice in water for 10-15 minutes or follow the instructions mentioned on the
								cover.</li>
							<li>Cook the rice with all the condiments as well the saffron strands soaked in water.</li>
							<li>Once part cooked strain in a colander and keep aside giving a gentle stir ensuring it is only par
								boiled. Keep aside.</li>
							<li>In a heavy bottom wok add ghee and oil and heat. Add the onions and fry till brown, followed by
								cloves, cinnamon, cardamoms and continue to fry with onions.</li>
							<li>Now add the chopped tomato and fry till mashed. Reduce heat completely and add milk.</li>
							<li>Add the spice powders and stir well ensuring the milk is not curdled.</li>
							<li>Add the marinated meat to this masala and give a good stir to ensure the masala is well
								incorporated.</li>
							<li>Now add the biryani masala, cover and let it simmer.</li>
							<li>Ensure the meat is not completely cooked. It should be cooked medium rare. Once done half,
								remove from flame and keep aside.</li>
							<li>Take a broad mouthed vessel with heavy base to prepare biryani.</li>
							<li>Add a layer of ghee rice, followed by onion, coriander, ghee, and saffron milk, top it with the
								cooked meat.</li>
							<li>Repeat the process till all the rice and meat is well placed.</li>
							<li>Cover the vessel with a heavy lid or place a heavy object over the lid.</li>
							<li>Let it cook for 20-25 minutes over medium heat.</li>
							<li>Once done remove from heat but do not open the lid for at least 10 minutes.</li>
							<li>Break off the seal, gradually fold the rice ensuring you don't break the long grain.</li>
							<li>Garnish and serve with raita.</li>
						</ol>	
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>