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
				<section id="texte_accueil">
					Depuis 1997, <br />
					Avalone accompagne ses clients sur toute la vie d'un projet informatique, <br />
					de la défintion des besoins au développement, <br />
					de la mise en place à la formation, jusqu'au support.<br />
					Notre équipe possède une forte expertise dans le domaine ...<br /> 
				</section>
				<section>
					<div class="infobox infomultisupport">
						<header>... des interfaces et applications web</header>
						<div class="img"></div>
						<article>
							Conception d'applications métier multisupports (PC, tablettes, smartphones), de sites web, intranets, extranets, applications mobiles 
						</article>
						<div class="link"><div onclick="document.location.href='sitesinternet.php'">Lire la suite</div></div>
					</div>
					<div class="infobox infologiciels">
						<header>... des logiciels métiers et leurs sources de données</header>
						<div class="img"></div>
						<article>
							Conception ou adaptation de logiciels spécifiques, mise en production et exploitation des logiciels métiers, gestion des données
						</article>
						<div class="link"><div onclick="document.location.href='recherche_developpement.php'">Lire la suite</div></div>
					</div>
					<div class="infobox infoformation">
						<header>... l'accompagnement et la formation des utilisateurs</header>
						<div class="img"></div>
						<article>
							Formation aux utilisateurs, transfert de compétences, formations professionnelles, accompagnement des stagiaires
						</article>
						<div class="link"><div onclick="window.open('avaloneformation.php', '_blank');">Lire la suite</div></div>
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