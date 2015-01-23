<?php
	include_once('includes/scripts/fonctions.php');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>AVALONE, développements Web et Appli à Pessac</title>
		<meta name="description" content="AVALONE, société informatique spécialisée dans le développement d'applications web et applicatives" />
		<meta name="author" content="Michel GILLET" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="stylesheet" href="includes/styles/styles.css" />
	</head>
	<body>
		<div>
			<header>
				<div>
					<?php
						geneLogo();
						geneSeachForm();
						geneSocialLinks();
						genePhoneNumber();
						geneMenuTop();
					?>
				</div>
			</header>
			<section class="content_body">
				<header class="page_title">
					Page en cours de création ...
					<section class="ariane">
						Accueil
					</section>
				</header>
				<article>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc molestie egestas urna, ac egestas leo laoreet at. Mauris ac orci elit. Mauris ut erat sodales, semper nisl vel, elementum sapien. Praesent turpis justo, tempor in hendrerit vitae, feugiat vel eros. Integer id enim nulla. Suspendisse placerat gravida justo, et faucibus risus dapibus sed. Etiam quis lectus nec ante dignissim dictum et ut nisl. Aliquam et urna efficitur, dapibus nulla eu, faucibus ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin enim lacus, fringilla id volutpat non, lacinia vel tellus. Proin eget pulvinar tortor. Pellentesque ut mollis justo.
					</p>
					<p>
						Fusce dapibus lacus justo, eget volutpat orci tincidunt vitae. Fusce posuere lorem nec purus vestibulum sagittis. Pellentesque efficitur sollicitudin rhoncus. Donec tempus dui sed dolor hendrerit, et rutrum leo ornare. Sed lectus massa, consectetur eget pretium non, tempor ac metus. Curabitur eu laoreet ex. Aenean mattis sapien orci, ac convallis diam aliquet ac. Sed vehicula felis eget leo molestie fringilla. Donec eu justo sed nisi volutpat iaculis.
					</p>
					<p>
						Quisque rhoncus pellentesque egestas. Duis fermentum rutrum elit feugiat scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris viverra sapien ut urna iaculis, vitae fermentum turpis molestie. Nam dignissim dolor sit amet lacus tempor blandit. Quisque suscipit enim consectetur sodales tempor. Quisque ante neque, laoreet ac ex nec, gravida imperdiet nisi. Donec vestibulum facilisis ex in accumsan. Quisque consectetur et ante eu lobortis. Integer sit amet suscipit mi. Aliquam ante mi, interdum ac tortor sed, dictum dignissim augue. Vestibulum rutrum velit purus, id posuere est placerat a. Nulla venenatis urna ac mauris lacinia finibus. Curabitur hendrerit lobortis mi.
					</p>
					<p>
						Sed sed libero ut augue placerat accumsan eu at neque. Suspendisse non pulvinar sapien, in vehicula tellus. Quisque turpis augue, posuere vel aliquet porta, interdum eget dui. In hendrerit orci lorem, sed laoreet tellus commodo a. Nam sit amet laoreet neque. Aliquam non gravida ante. Aenean malesuada, orci sed eleifend rhoncus, mi odio euismod nunc, sed auctor nisi massa in turpis. Cras posuere tristique massa, et auctor lorem rhoncus ac. Vestibulum id iaculis tellus, sed tempor libero. Donec eget est a lectus ornare faucibus. Maecenas tempus, elit eget scelerisque rhoncus, nibh mauris bibendum lorem, id faucibus elit enim at arcu.
					</p>
					<p>
						Morbi ultrices lacus et ante mollis, hendrerit aliquam orci sodales. Pellentesque vestibulum enim vitae tortor sagittis, sed feugiat dolor sollicitudin. Aliquam molestie rutrum euismod. Ut vestibulum at enim a vehicula. Vestibulum vitae tempus arcu. Donec cursus orci eu lorem hendrerit volutpat. Mauris finibus erat sed mauris sollicitudin semper. Morbi quis vestibulum nisl. Aliquam aliquam diam nec dolor auctor porta. Curabitur ullamcorper, massa ut condimentum dapibus, dolor elit malesuada nibh, a auctor nibh nibh at ex. Suspendisse orci sapien, molestie et dignissim sed, placerat eget eros. Curabitur faucibus mi massa, rhoncus malesuada enim dignissim ut.
					</p> 
				</article>
			</section>
			<footer class="page_footer">
				<div class="top">
					<p>
						Avalone, crée en 1997 par l'actuel responsable Daniel Porro et installée à Pessac, sur la périphérie de Bordeaux, a su conforter son expérience et son savoir-faire en ingénierie informatique 
						et sur la gestion des systèmes d'information de ses clients. Définir, concevoir, développer, exploiter, supporter et maintenir des applications web ou des logiciels spécifiques sont les 
						maitres-mots d'Avalone.La société possède une expertise sur 4 corps de métier: les interfaces web (l'hébergement, et le développement de sites internet, les intranets, les applications pour 
						smartphone ou tablette, les application métiers); la création de logiciels spécifiques, avec des fonctionnalités sur-mesures, pour un métier précis. 
						La gestion des base de données du marché telles que PostgrSQL, Oracle, SQL Server, MySQL, Access; et enfin la liaison entre des applications, des sites, des plateformes, des logiciels. 
						L'équipe est composée d'ingenieurs développeurs, de chefs de projets et de partenaires.
					</p>
				</div>
				<div class="bottom">
					&copy; Copyright Avalone
				</div>
			</footer>
		</div>
		<script src="includes/scripts/browserDetect.js" type="text/javascript"></script>
		<script src="includes/scripts/dynMenu.js" type="text/javascript"></script>
	</body>
</html>