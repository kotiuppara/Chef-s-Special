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
					<a href="#" class="nav-link ms-3 ps-5 " role="button"><i><h4>Sweets & Hots</h4></i></a>
					<ul>
						<li><a class="text-decoration-none nav-link" href="#a"><b>GULAB JAMUN</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#b"><b>PUTHAREKULU</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#c"><b>LADDU</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#d"><b>JILEBI</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#e"><b>ARISELU</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#f"><b>RAVVALADDU</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#g"><b>KAJJIKAYALU</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#h"><b>CHAKODI</b></a></li>
						<li><a class="text-decoration-none nav-link" href="#i"><b>KARALU</b></a></li>
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
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#one"><img src="img/s1.jpeg" class="card-img-top" height="40%" width="30%"><p style="color:chocolate;"><b>GULAB JAMUN</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="b">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#two"><img src="img/s2.webp"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>PUTHAREKULU</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="c">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#three"><img src="img/s3.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>LADDU</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="d">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#four"><img src="img/s4.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>JILEBI</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="e">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#five"><img src="img/S5.webp"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>ARISELU</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="f">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#six"><img src="img/s6.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>RAVVALADDU</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="h">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#seven"><img src="img/s7.jpg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>CHAKODI</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="g">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#eight"><img src="img/s8k.jpeg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>KAJJIKAYALU</b></p></a>
					</div>
				</div>
				<div class="card-lg m-3 shadow shadow-lg" id="i">	
					<div class="c card-header">
						<a class="btn" data-bs-toggle="collapse" data-bs-target="#nine"><img src="img/s9.jpeg"  class="card-img-top" height="80%" width="50%"><p style="color:chocolate;"><b>KARALU</b></p></a>
					</div>
				</div>
			</div>
			<div class="box2" style="color: white;">
				<div id="par" class="accordion">
					<div id="o" class="collapse show" data-bs-parent="#par">
						<div class="middle">WELCOME TO CHEF'S SPECIAL</div>
					</div>
					<div id="one" class="collapse" data-bs-parent="#par">
						<h2 class="heading">GULAB JAMUN</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<h5>For the syrup:--</h5>
							<li>4 green cardamom pods, lightly squashed with the side of a knife</li>
							<li>600g caster sugar</li>
							<li>few drops rosewater</li>
							<li>¼ tsp saffron strands, soaked in 2 tbsp warm water for 1 hr</li>
							<li>2 tsp chopped pistachios</li>
							<h5>For the gulab jamun:--</h5>
							<li>6 green cardamom pods, seeds removed</li>
							<li>1 tsp caster sugar</li>
							<li>100g full-cream milk powder</li>
							<li>40g plain flour</li>
							<li>½ tsp baking powder</li>
							<li>50g ghee or softened unsalted butter plus 1kg ghee, for frying</li>
							<li>1 tbsp natural yogurt</li>
							<li>squeeze of lemon juice</li>
							<li>4-5 tbsp whole milk</li>
							<li>sunflower oil</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>To make the syrup, gently heat the cardamom, sugar and 500ml water in a
								saucepan. Don't let the water boil before the sugar has dissolved. Simmer for
								10 mins, then cool.</li>
							<li>Gradually add the rosewater, saffron and a little of its soaking liquid until you
								have a subtly flavoured syrup. Set aside.</li>
							<li>To make the gulab jamun, use a pestle and mortar to grind together the
								cardamom and sugar until fine.</li>
							<li>Sieve the milk powder, flour and baking powder into a mixing bowl and stir in
								the cardamom and sugar mixture. Rub in the 50g ghee or butter using your
								fingertips until the mixture resembles coarse crumbs.</li>
							<li>Add the yogurt, lemon juice and enough milk to form a soft dough, taking care
								not to overwork the mixture.</li>
							<li>Oil your hands with a little sunflower oil and shape small portions of the dough
								into walnut-sized balls, about 3cm in diameter and 20g each. Make sure the
								dumplings are smooth and have no cracks or folds.</li>
							<li>Reheat the syrup until it comes to the boil, then turn off the heat and cover
								with a lid.</li>
							<li>Heat the 1kg ghee in a wok or karahi to 130C or until a small piece of dough
								dropped in turns golden in 40 seconds. Fry the balls, in batches, over a medium
								heat for 5-7 mins, moving them around until they are an even, deep brown.
								Remove from the saucepan using a slotted spoon, then drain on kitchen paper.
								Add to the warm syrup, leaving them to soak for 2-3 hrs or preferably
								overnight.</li>
							<li>When ready to eat, warm the gulab jamun through in a wide saucepan,
								spooning over the syrup. Serve piping hot with the pistachios scattered over.</li>
						</ol>
							</div>
					<div id="two" class="collapse" data-bs-parent="#par">
						<h2 class="heading">PUTHAREKULU</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>Paper-rice</li>
							<li>Desi Ghee</li>
							<li>Jaggery (or sugar)</li>
							<li>Broken cashew nut (or other dry fruits)</li>
							<li>Lots of skill and love</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
					<ol>
						<li>Take three layers of the rice paper, the bottom layer is a complete one
							while the others on top are more like broken pieces and put them on a small
							wooden table in front of you.</li>
						<li>Put a few drops of desi ghee, jaggery and broken cashew nut on it.
							Ghee makes the rice paper a little soft which allows it to be folded easily</li>
						<li>Make two folds and put some more ghee, jaggery and broken cashew
							nut.</li>
						<li>Make more folds and the sweet is ready to be eaten or packed!</li>
						<li>Pack into plastic wraps and then in a carton box to be sent to homes or
							shop for sale. The plastic wrapper is used for holding it so that your hands do
							not get oily.</li>
						<li>It’s best served fresh and warm. However, if you eating it later, you
							can cool it down a little bit and that makes the roll a little less oily.</li>
					</ol>
					</div>
					<div id="three" class="collapse" data-bs-parent="#par">
						<h2 class="heading">LADDU</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>Kadalai mavu /Bengal gram flour – 1/2 kg (500 grams)</li>
							<li>Rice flour – 1/4 cup</li>
							<li>Cooking soda – 1/4 tsp and a pinch</li>
							<li>Lemon Yellow food color – a pinch</li>
							<li>Ghee – 1 1/2 tbsp</li>
							<li>For the sugar syrupSugar – 3/4 kg ( 750 grams )</li>
							<li>Water – 2 cups</li>
							<li>Milk – 1/4 cup to remove impurities from sugar</li>
							<li>Cardamom powder – 1/4 tsp</li>
							<li>Pachai karpuram/Edible camphor- a generous pinch</li>
							<li>Cashew nuts -25 grams (break it )</li>
							<li>Raisins -50 grams</li>
							<li>Cloves – 5-6</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>Sieve both bengal gram flour and rice flour separately.</li>
							<li>Fry cashew nuts, raisin and cloves in ghee separately and keep it
							aside.</li>
						</ol>
						<ol>
							<h5>Method:--</h5>
							<li>First you have to prepare the sugar syrup and keep it ready.
							Take a pan, add water and sugar, mix well first. Then bring it to boil.
							Add 1/4 cup of milk to it, all the impurities in sugar will come to the
							surface. Remove it with a ladle.</li>
							</li>Boil sugar syrup till you get a one string consistency.</li>
						</ol>
							<ol>
							<h5>How to find one string consistency?</h5>
							<li>When you pour a little sugar syrup in a cup filled with little water, it
								should not dissolve.</li>
							<li>When you touch it between your index finger and thumb and pull it
								apart, it should form a string.</li>
							<li>Or just lift the ladle from the sugar syrup and wait for a few
								seconds- it will form a string. (in the pic above- the string is not clear
								but hold the ladle like that and see if it forms a string – that is right
								stage). Switch off the flame.</li>
							<li>Add cardamom powder, pachai karpuram, fried cashew nuts, raisins
								and cloves to the sugar syrup.</li>
						</ol>
						<ol>
							<h5>For Making boondi:--</h5>
							<li>I have already made a detailed post on how to make Kara boondi. The
								method is the same but the measurements are different.Mix both bengal gram flour and rice flour, add cooking soda and a pinch of yellow color.</li>
							<li>Add water and make a batter. I addearound 2 cups + 1/3 cup of
								water and it was perfect for me. You add water little by little carefully
								to get the batter consistency (see picture above). It should neither be
								too thin nor thick.</
							<li>Heat oil and pour a little batter on the boondi ladle and gently tap it.
								Tiny droplets of batter will fall into the hot oil. Fry till golden brown.
								Keep aside. Note – Do not fry it too crisp as for South Indian
								mixture or kara boondi. Remove it from oil a stage before that.</li>
							<li>Repeat the process for the rest of the batter.
								After the boondi cools a little, add half of it to the sugar syrup.
								Put the rest of the boondi in a blender and grind it a little. Take a
								small mixie jar and blend it little by little only for a few seconds. (Do
								not make it a paste- see the second picture above)
								Now add this also to the sugar syrup. Mix both well together.
								Add a tbsp of ghee and make balls out of it. Yummm…. !!!!!!!! Boondi</li>
								Laddus are ready.
						</ol>
						</ol>
					</div>
					<div id="four" class="collapse" data-bs-parent="#par">
						<h2 class="heading">JILEBI</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<h5>FOR JALEBI BATTER:--</h5>
							<li>1/2 cup maida/all purpose flour</li>
							<li>1/2 cup 1 day old curd/dahi</li>
							<li>Water as required</li>
							<li>2-3 pinch saffron yellow food colour</li>
							<li>1/8 tsp baking soda</li>
						</ul>
						<ul type="disk">
							<h5>FOR SYRUP:--</h5>
							<li>1 cup sugar</li>
							<li>3/4 cup water</li>
							<li>1/8 tsp cardamom powder</li>
							<li>2-3 pinch saffron yellow food colour</li>
							<li>Ghee/Oil for frying</li>
							<li>Pistachio clippings & rose petals for garnish</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<h5>MAKING JALEBI BATTER:--</h5>
							<li>In a large bowl take maida/all purpose flour & slowly add curd/dahi & mix.</li>
							<li>Use water as required & prepare thick dosa like batter.</li>
							<li>Cover & keep it in warm place to ferment for 2-3 hours.</li>
						</ol>
						<ol>
							<h5>MAKING SYRUP:--</h5>
							<li>In a pan boil water & sugar.</li>
							<li>Once it boils cook for 3-4 min till it becomes little thick - there is no need to
								check any string consistency.</li>
							<li>Switch off flame & add cardamom powder & saffron yellow food colour &
								mix.</li>
						</ol>
						<ol>
							<h5>MAKING JALEBIS:--</h5>
							<li>Beat the jalebi batter for 2-3 min.</li>
							<li>Add saffron yellow food colour & mix.</li>
							<li>Just before frying add 1/8 tsp baking soda & mix.</li>
							<li>Pour it in piping bag/jalebi maker & cut piping bag as thick as desired.</li>
							<li>Pour jalebi batter in concentric circles in hot oil/ghee. Keep flame low.</li>
							<li> Fry till crispy on both sides on low-med flame.</li>
							<li>Once done transfer it to syrup.</li>
							<li>Lightly press jalebi in syrup keeping it in for 30-60 sec.</li>
							<li>Take out jalebis from syrup on to plate.</li>
							<li>Prepare all jalebis in same way.</li>
							<li>Serve crispy, juicy & hot jalebis gawith pistachio clippings & rose
								petals.
						</ol>
					</div>
					<div id="five" class="collapse" data-bs-parent="#par">
						<h2 class="heading">ARISELU</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>1/2 Cup rice</li>
							<li>1/2 cup jaggery</li>
							<li>1 cup water</li>
							<li>1 tsp cardamom powder</li>
							<li>1 tbsp ghee</li>
							<li>Oil (to deep fry)</li>
							<li>for garnishing sesame seeds</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<h5>Soaking & Grinding:-</h5>
							1.
							<li>Soak the rice overnight.</li>
							2.
							<li>Rinse for 2 to 3 times and strain out the water.</li>
							3.
							<li>Leave the rice on the strainer for around 10 to 15 minutes.</li>
							4.
							<li>Grind the rice in batches into a very fine flour and keep aside.</li>
						</ol>
						<ol>
							<h5>Prepare jaggery syrup:-</h5>
							<li>Put jaggery in a deep pan and add 40 to 50 ml water so the jaggery melts very fast.</li>
							<li>Boil until the syrup starts bubbling. When the syrup starts to bubble, take a small spoonful of syrup
								and put it in a small cup of water. If the syrup doesn’t dissolve or if it turns into a ball when pressed
								with fingers then the syrup is ready.</li>
							<li>Add ghee, cardamom powder, and mix well.</li>
							<li>Turn off the flame and keep it aside.</li>
						</ol>
						<ol>
							<h5>Prepare the dough:-</h5>
							<li>Add the rice flour little by little through the sieve to the jaggery syrup. Keep stirring and keep
								adding the rice flour until the dough turns hard like chapati dough.</li>
							<li>Heat oil for deep-frying on a medium flame.</li>
							<li>Take Arise sized lid with a plastic sheet placed on it.</li>
							<li>Grease your fingers and the plastic sheet with ghee.</li>
							<li>Take a fistful of dough and make it into a round ball. Pat it into a round flat shape until it covers the
								lid size.</li>
							<li>You need to dip each dough ball in sesame seeds before patting if you want sesame seed Ariselu.</li>
							<li>Drop it into oil carefully and wait until the Arise floats to the top.</li>
							<li>Fry for a minute and flip it over to the other side. Fry until it turns to a nice golden brown color.</li>
							<li>Take out the Arise from oil and press it hard with two turner spoons until all the excess oil comes
								out.</li>
							<li>Serve Telangana's traditional sweet garnish with sesame seed and few drop of ghee.</li>
						</ol>
					</div>
					<div id="six" class="collapse" data-bs-parent="#par">
						<h2 class="heading">RAVVALADDU</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>1 cup semolina flour (sooji or rava)</li>
							<li>3/4 cup sugar</li>
							<li>2 tablespoons ghee or melted butter</li>
							<li>1/4 cup warm milk or little more as needed</li>
							<li>cardamom powder a pinch</li>
						</ul>
						<ul>
							<h5>Optional Ingredients:-</h5>
							<li>cloves a few, leave out if you don't like the flavor</li>
							<li>2 tablespoons cashew nuts</li>
							<li>1 tablespoon raisins</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>Heat ghee or melted butter in a pan and roast the rava for about 3 to 4 minutes until
								the rava is roasted and raw flavor is gone. Rava (sooji) should not change the colour.</li>
							<li>Add the sugar, cardamom powder (and cloves if using), stir well and cook in low heat
								until the sugar starts to melt. This takes a few minutes like another 4 to 5 minutes in
								low heat. This is the only cooking we do in this recipe, so make sure the rava or sooji
								flour mixture is roasted enough until its not sticky anymore.</li>
							<li>Transfer the hot rava ladoo mixture to a flat surface or a large plate and press the
								mixture (using a spoon or spatula) in a layer so the heat is distributed evenly and it
								helps with the rest of the process. This step is important and so make sure to use a
								flat surface or large plate itself (do not transfer to a bowl as it makes the process
								difficult).</li>
							<li>Sprinkle the warm milk over the mixture little by little and mix well. If the mixture is
								still dry, you may add a little more amount of milk, but make sure you only sprinkle
								the milk as needed and not add them all together in order to avoid the mixture
								becoming soggy from too much moisture. Just use an extra tablespoon of milk at a
								time as you need.</li>
							<li>Make small balls or ladoos out of the mixture while it is still warm. You can wait if the
								mixture is too hot, but you should make the balls while the mixture is still warm, or it
								will be difficult to form the balls.</li>
							<li>If you wish to add the nuts and raisins, you may also fry the cashew nuts and raisins
								in little ghee and add them to the mixture before making the balls.</li>
							<li>You may grease your palms with ghee or dip your hands in cold water or before
								making the balls, as this will help you to do the job more easily. If the mixture is still
								dry for making the ladoos and if its not holding together or if the mixture is still very
								hot for you to handle, you may use a little chilled milk which can be sprinkled as
								needed which will help you to make the balls easily.</li>
							<li>Allow the rava ladoos to cool down before serving, as they will hold better once they
								are cooled. Transfer the rava ladoos to any air tight containers and if you are not using
								the same day, store them in refrigerator for few more days.</li>
						</ol>
					</div>
					<div id="seven" class="collapse" data-bs-parent="#par">
						<h2 class="heading">CHAKODI</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>250 ml Water</li>
							<li>1 tbsp Ghee/Dalda</li>
							<li>1 tsp Ajwain/Carom Seeds</li>
							<li>1 tsp Sesame Seeds</li>
							<li>1/2 tsp Turmeric</li>
							<li>Salt</li>
							<li>250 gms Maida</li>
							<li>Oil – Enough to fry</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>Boil Water. Add everything except Maida and let them boil.</li>
							<li>Add Maida to the boiling water, switch off the stove and mix well.</li>
							<li>Knead the Flour well while it is still hot or the Chegodis will crumble.</li>
							<li>Spread a wet cotton cloth on the hot dough and knead along with the fabric. This step
								makes it easier to roll while the dough is hot.</li>
							<li>After the dough is kneaded well, take the Murukku maker, insert the mould with big holes.
								Apply some Ghee inside the mould and put the dough over it and press it over a plate or
								onto a table.</li>
							<li>Now take the cords and twine them into loops, sealing the edges and making small rings.
								Let them dry in the air for 30 mins.</li>
							<li>Prepare all the rings. In case you do not have a mould, make cords with the hand and then
								twine them into loops.</li>
							<li>Heat the oil, take a slotted spoon, put some Chegodi rings into the Oil and fry them well.</li>
							<li>Keep the spoon for a minute in the Oil and let them fry on a high flame. (Follow the tips on
								frying)</li>
							<li>Remove the spoon and let the Chegodi rings on a high flame for 3-4 minutes.</li>
							<li>Once they are fried well, remove them into a basket or spread them on a tissue. After fully
								cool, store them in a container.</li>
						</ol>
					</div>
					<div id="eight" class="collapse" data-bs-parent="#par">
						<h2 class="heading">KAJJIKAYALU</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>500 gms maida (all-purpose flour)</li>
							<li>4-5 tbsps ghee</li>
							<li>enough water to knead the maida</li>
							<li>salt to taste</li>
							<li>oil for deep frying</li>
						</ul>
						<ul>
							<h5>For the filling:-</h5>
							<li>1/4 dry coconut finely grated</li>
							<li>1 cup sooji/semolina (you can use putnala pappu/roasted chick peas or khus-</li>
							<li>khus/poppy seeds in place of sooji)</li>
							<li>1 cup sugar</li>
							<li>1 tsp cardamom pwd</li>
							<li>3 tbsps finely chopped cashewnuts</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>Mix the maida with salt, 2-3 tbsps ghee and enough water to make a pliable
								dough, not too soft. Divide the dough and shape into small balls as shown in
								the picture. Keep aside covered for half an hour.</li>
							<li>Meanwhile, heat a pan, add 1 tbsp ghee and add the grated coconut and roast
								over medium flame for a few minutes, approx 3-4 mts. Remove and keep aside.
								If using fresh coconut, roast the coconut till golden brown. Ensure that its well
								roasted, it takes longer time to roast than dry coconut.</li>
							<li>In the same pan, add 1 tbsp ghee and add the sooji and roast over medium
								flame till it turns light pink, approx 7-8 mts. Remove, cool and keep aside.</li>
							<li>Powder the sugar and mix with the roasted sooji, grated coconut, cardamom
								powder and cashewnuts. The filling is ready. Keep aside.</li>
							<li>Now, roll each ball with the rolling pin into a thin puri.</li>
							<li>Spread a tablespoon of the filling on one half of the rolled out dough. Wet
								your finger and run it along the edges of the spread out dough with water and
								fold over to the opposite end, enclosing the stuffing to form a semi-circle
								shaped kajjikaya. Press the ends firmly so that the filling doesnt come out
								during the deep frying process and twist the edges around the kajjikaya as
								shown in the picture.</li>
							<li>Heat enough oil in a wide vessel to deep fry the stuffed kajjikayalu. Drop 3-4
								kajjikayalu into the oil slowly and deep fry them till golden brown, turning them
								carefully to the other side so that it cooks on all sides. Deep fry on medium
								heat and not piping hot oil.</li>
							<li>Cool and store in air tight containers. Kajjikayalu remain fresh for atleast a
								week and can be stored for 3-4 weeks.</li>
						</ol>
					</div>
					<div id="nine" class="collapse" data-bs-parent="#par">
						<h2 class="heading">KARALU</h2>
						<h4 class="i-heading">INGRIDIENTS:--</h4>
						<ul type="disk">
							<li>rice flour – 1 cup</li>
							<li>chick pea flour/besan – 1 cup</li>
							<li>red chilli powder – 1 tsp</li>
							<li>salt – 1/2 tsp</li>
							<li>cumin/jeera powder – 2 tsp</li>
							<li>hot oil/ghee/butter – 3 tbsp</li>
						</ul>
					<h3 class="pro-heading">PROCEDURE:--</h3>
						<ol>
							<li>Add rice flour, besan, red chilly powder, salt and cumin powder in a mixing bowl or
								a deep plate. Mix everything well.</li>
							<li>Heat 3 tbsp of oil and add it to the flour mixture. Carefully mix everything again.</li>
							<li>Add water little by little to make a stiff and non-sticky dough.</li>
							<li>Heat the oil in a kadai on medium heat.</li>
							<li>Take the karala pavu or chakli maker. Insert ribbon pakoda plate in it.</li>
							<li>Now make a cylindrical shape out of dough and fill the chakli maker and close the
								lid.</li>
							<li>Check the oil temperature by adding a small piece of dough. If it comes up
								gradually and steadily on top, then the oil is ready. If it settles down at bottom of
								kadai or comes up very slowly, the oil is not hot enough.</li>
							<li>Dispense the dough from the chakli maker into hot oil, by rotating the handle on the
								top of the chakli maker and moving your hand in circular motion from center to
								outwards. Do not overcrowd the kadai.</li>
							<li>Make just 1 pakoda each time.</li>
							<li>Flip the pakoda and fry till they turn golden brown and crispy from both sides or till
								the oil stops sizzling. It means the pakoda is fried..</li>
							<li>Transfer the pakoda onto a paper towel, to drain the excess oil.</li>
							<li>When they are cooled, then place them in an air-tight container or box.</li>
							</li><li>Serve ribbon pakoda / ribbon murukku as a tea time snack.</li>
						</ol>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>