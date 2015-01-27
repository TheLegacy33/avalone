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
			<header id="pageheader">
				<div>
					<?php
						geneLogo();
						geneSearchForm();
						geneSocialLinks();
						genePhoneNumber();
						geneMenuTop();
					?>
				</div>
			</header>
			<section class="content_body">
				<header class="page_title">
					Plus de <?php print(intval(date('Y')) - 1997); ?> ans d'expérience ...
					<?php geneBreadcrumb(); ?>
				</header>
			</section>
			<footer class="page_footer">
				<div class="top">
					<p>
						Avalone, créée en 1997 par l'actuel responsable Daniel Porro et installée à Pessac, sur la périphérie de Bordeaux, a su conforter son expérience et son savoir-faire en ingénierie informatique 
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