<!DOCTYPE html>
<html>
	<head>	
		<title>Food</title>
		<?php
			$places = array(
					"Arby's",
					"Bagels",
					"Carls Jr.",
					"Corner Bakery",
					"Costco",
					"Chick-Fil-A",
					"Del Taco",
					"Dominos",
					"El Pollo Loco",
					"Fud Ruckers",
					"Genkiyaki",
					"Green Burrito",
					"Halal Guys",
					"Hot Dog on a Stick",
					"In-N-Out",
					"Italian Deli",
					"Jack",
					"Jamba Juice",
					"KFC",
					"Kogi BBQ",
					"Kyon Chon",
					"L&L's",
					"Lee's Sandwiches",
					"Little Caesars",
					"McDonald's",
					"Omega Burgers",
					"Panda Express",
					"Papa Johns",
					"Philly's Best",
					"Pieology",
					"Quiznos",
					"Souplantation",
					"Subway",
					"Taco Bell",
					"Tommy's",
					"Wasabi Grill",
					"Weinershnitzel",
					"Which Wich",
					"Wing Stop",
					"Yoshinoya",

					"Ajito",
					"Buffalo Wild Wings",
					"California Pizza Kitchen",
					"Dim Sum",
					"Gatten Sushi",
					"Guppy's",
					"Hawaiian Loft",
					"Ma Dang Sae",
					"Outback",
					"Pho Tasty",
					"Thai BBQ",
					"Wood Ranch BBQ",
					"Yojie Shabu Shabu",

					"Portillo's",
					"Shakas",
					"Veggie Grill",
					"Zankou",
					"zPizza"
			);
		?>

		<script>
			function uncheck(index) {
				var like_list = document.getElementById('like_list').getElementsByTagName('li');
				var dislike_list = document.getElementById('dislike_list').getElementsByTagName('li');
				like_list[index].style.display = '';
				dislike_list[index].style.display = 'none';
				dislike_list[index].childNodes[0].checked = true;
			}
			function check(index) {
				var like_list = document.getElementById('like_list').getElementsByTagName('li');
				var dislike_list = document.getElementById('dislike_list').getElementsByTagName('li');
				like_list[index].style.display = 'none';
				like_list[index].childNodes[0].checked = false;
				dislike_list[index].style.display = '';
			}
		</script>

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<style>
			*, 
			*:before,
			*:after { box-sizing: border-box; }
			body { 
				font-family: helvetica; font-size: 18px; 
				margin: 0; 
				overflow-x: hidden; 
			}
			ul { 
				list-style: none; 
				margin: 0; padding: 0; 
			}
			ul li:active { background: #5371F5; }
			ul li label { 
				display: block; 
				padding: 10px; width: 100%; 
				border-bottom: 1px solid #E5E5E5; 
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<div id="pagebody">
			<?php
				print "<ul id='like_list'>\n";
				foreach($places AS $index => $place) {
						print "<li><label onclick='this.firstChild.checked = true;'><input type='checkbox' onclick=\"check('$index'); \"> $place</label></li>\n";
				}
				print "</ul>\n";
				print "<ul id='dislike_list'>\n";
				foreach($places AS $index => $place) {
						print "<li style='display: none'><label onclick='this.firstChild.checked = false;'><input type='checkbox' checked onclick=\"uncheck('$index');\"> $place</label></li>\n";
				}
				print "</ul>\n";
			?>
		</div><!-- END #pagebody -->
	</body>
</html>
