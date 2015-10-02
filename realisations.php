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
				<section class="ligne full">
					<div class="image gauche" style="margin-top: 0px; width: 200px; margin-left: 7%">
						<img src="includes/images/satisfaction.png" title="Nos solutions" alt="Nos solutions" style="width: 140px;"/>
					</div>
					<article class="texte droite">
						<header class="titre"></header>
						<p>
							Notre écoute, nos compétences, la qualité de nos échanges avec nos clients et le respect de nos relations ont permis
							a nos clients de mener à bien les projets pour lesquels ils ont fait appel à notre expertise.
						</p>
					</article>
					<article class="texte">
						<p>
							Tout en restant une entreprise à taille humaine, nous nous sommes vus confier des projets de toutes envergures, 
							allant d'une simple application de gestion pour un ascensoriste local à la réalisation d'une gestion de production pour une grande manufacture 
							oeuvrant dans le domaine de la maroquinerie, en passant par l'évolution du système d'informations de l'une des six agences de l'eau française,
							ou encore la réalisation de plusieurs applications, locales et nationales, intégrées dans le workflow d'un des 3 plus grands ascensoristes nationaux, 
							sans oublier un outil de gestion de commandes et de pièces détachées pour un constructeur de voitures sans permis ainsi qu'un outil de gestion des
							dossiers de mise en conformité des portes et ascenseurs pour un cabinet d'expertise en ascensoristes...
						</p>
					</article>
					<article class="texte droite">
						<header class="titre"></header>
						<p>
							Tous ces projets nous ont permis de mettre à profit nos compétences et de faire évoluer notre expertise au point de pouvoir proposer à nos clients
							un savoir-faire et une approche unique, des techniques éprouvées et fiables, une motivation et une envie collective de réussir toujours plus fortes.
						</p>
					</article>
					<div class="image gauche" style="margin-top: 0px; width: 200px; margin-left: 7%">
						<img src="includes/images/equipe.png" title="Nos solutions" alt="Nos solutions" style="width: 140px;"/>
					</div>
				</section>
			</section>
			<footer class="page_footer">
				<?php geneTextBottom(); ?>
			</footer>
		</div>
	</body>
	<?php geneJavascript(); ?>
</html>