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
				<?php geneTextBottom(); ?>
			</footer>
		</div>
	</body>
	<?php geneJavascript(); ?>
</html>