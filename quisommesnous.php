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
					<div class="image gauche">
						<img src="includes/images/team.png" title="Toute notre expérience" alt="Toute notre expérience" />
					</div>
					<article class="texte droite">
						<header class="titre">L'équipe Avalone </header>
						<p>
							Fondée en 1997, par Mr PORRO, Avalone a acquis une grande expérience dans le <strong>développement informatique</strong> au service d'entreprises de tous secteurs, 
							d'institutions et de prestataires de services (service après ventes, production, etc), et propose son <strong>expertise</strong> en <strong>ingénierie informatique</strong>
							et en <strong>technologie web</strong>. 
						</p>
						<p>
							Une forte implication de son équipe dans le cadre de la formation a permis à Avalone de composer avec ses compétences et de former l'entité
							<a href="http://www.avalone-formation.com/" target="_blank" title="Avalone Formation">Avalone Formation</a> destinée à répondre aux besoins en formations diverses de ses clients et de ses partenaires.
						</p>
						<p>
							Aujourd'hui, Avalone est composée de ses dirigeants, d'une commerciale et chargée de formations, d'un ingénieur système et réseau, de développeurs qui mènent 
							pour cela une <strong>veille technologique</strong> continuelle.
						</p>
						<p>
							Toute l'expérience de l'équipe est à votre disposition pour l'<strong>étude</strong>, la <strong>réalisation</strong> et le <strong>suivi</strong> de vos <strong>projets</strong>.
						</p>
					</article>
				</section>
				<section class="ligne full">
					<article class="texte gauche">
						<header class="titre">Nos solutions</header>
						<p>
							Avalone est spécialiste des <strong>interfaces</strong> (Applications, Web, Intranet, Extranet, Mobile), des <strong>échanges</strong> de données entre applications 
							et serveurs (Oracle, SAP, Sage, ...) ainsi que les outils de <strong>suivi et de gestion de production</strong>.
						</p>
						<p>
							Aujourd'hui, Avalone apporte son expérience en <strong>conduite de projet</strong> et en <strong>développement</strong> ainsi que son expertise en <strong>formation</strong> 
							pour proposer des solutions adaptées et répondant à vos besoins
						</p>
						<p>
							<h4>Le développement d'applicatifs informatiques</h4>
							Nos prestations en développement d'applicatifs couvrent un large panel de ce que l'on peut attendre d'une société de service en ingénierie informatique.
							De l'<strong>expression des besoins</strong> à l'<strong>analyse du cahier des charges</strong>, de la définition des règles à la réalisation du développement,
							des tests à la <strong>mise en production</strong>
							sans oublier la <strong>maintenance</strong> corrective et évolutive, Avalone vous fournit une <strong>solution</strong> complète, performante et fiable.
						</p>
						<p>
							<h4>Le développement web et mobile</h4>
							Quelle que soit la <strong>technologie</strong>, quel que soit le <strong>support</strong> Avalone met à votre disposition toutes ses compétences en développement de 
							<strong>sites internets</strong>, <strong>intranets</strong> et <strong>applications mobiles</strong>.
							Notre équipe vous prend en charge du début du projet jusqu'à sa <strong>mise en ligne</strong>, et ne vous laisse pas tomber ensuite !
						</p>
						<p>
							<h4>La formation</h4>
							Forts de nos expériences sur le <strong>terrain</strong>, nous amenons cette touche experte au sein des <strong>formations</strong> que nous délivrons pour transmettre 
							de la manière la plus <strong>réaliste</strong> possible des informations adaptées aux besoins et surtout au terrain.
							Retrouvez nos programmes de formations sur <a href="http://www.avalone-formation.com/" target="_blank" title="Avalone Formation">Avalone Formation</a>.
						</p>
					</article>
					<div class="image droite" style="margin-top: 125px;">
						<img src="includes/images/solutions.png" title="Nos solutions" alt="Nos solutions" />
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