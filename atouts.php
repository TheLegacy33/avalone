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
					<article class="texte gauche">
						<header class="titre">Nos atouts</header>
						<p>
							Nous attachons une importance forte à ce que notre équipe soit la plus <strong>flexible et réactive</strong> possible tout en 
							privilégiant la q<strong>ualité</strong> des réalisations et les <strong>compétences</strong> de nos collaborateurs dans les <strong>technologies actuelles</strong>.<br />
							Les collaborateurs d'Avalone sont <strong>impliqués</strong> dans la totalité du processus de la <strong>relation
							avec les clients</strong>, y compris dans la production des travaux.<br />
							Nos clients bénéficient d'un <strong>contact rigoureux</strong> et efficace, un <strong>interlocuteur unique</strong> tout au long du projet.<br />
						</p>
						<p>
							La curiosité et l'adaptation sont des éléments essentiels à <strong>l'innovation</strong> et au maintien de <strong>l'aspect compétitif</strong> de nos collaborateurs.<br />
							Nous sommes capables de répondre à toutes les demandes en terme de développement et savons nous entourer de <strong>valeurs fiables</strong> et sûres 
							pour mener à bien les opportunités qui nous sont données.<br />
						</p>
						<p>
							Nous apportons une touche <strong>professionnelle</strong> et <strong>qualitative</strong> à l'exécution de tâches et maintenons
							une gestion et un suivi de projet <strong>au plus prêt des besoins</strong> de nos clients.<br />
							Tous les moyens nécessaires sont mis en oeuvre pour <strong>atteindre les objectifs</strong> et <strong>booster notre capacité collective de réussir</strong>.
						</p>
						<p>
							Nous nous appliquons à <strong>respecter les exigences</strong> de nos clients, les <strong>contraintes techniques</strong> et temporelles et 
							agissons en prestataires <strong>responsables</strong> tout en respectant notre position de conseil et de proposition en toute <strong>transparence</strong>.
						</p>
						<p>
							<u><i>Mais surtout, nous restons à l'écoute et favorisons les échanges dans le but de maintenir 
							un haut niveau qualitatif et établir un climat de confiance inébranlable, même au-delà du projet qui nous lie à nos clients.</i></u>
						</p>
					</article>
					<div class="image droite" style="margin-top: 125px;">
						<img src="includes/images/atouts.png" title="Nos atouts" alt="Nos atouts" />
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