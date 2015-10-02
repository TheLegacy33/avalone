<?php

include_once ('menus.php');
include_once ('Mobile_Detect.php');

/**
 * @author Michel GILLET
 * @version 0.1
 *
 * Scripts des fonctions internes
 */

/**
 * Génération du code pour l'écriture du logo dans le header
 */
function geneLogo() {
	$script = '<a id="logo" href="index.php">';
	$script .= '<p class="top"><span class="orange">AVA</span><span class="standard">LONE</span></p>';
	$script .= '<span>&copy;</span>';
	$script .= '<p class="bottom">Développement de solutions Web &amp; Applicatives</p>';
	$script .= '</a>';
	print($script);
}

/**
 * Génération du code pour le formulaire de recherche dans le header
 */
function geneSearchForm() {
	$script = '<div id="search">';
	$script .= '<form id="search-box" method="get" action="" name="search">';
	$script .= '<div class="query">';
	$script .= '<input type="text" value="Rechercher..." name="q" onclick="this.value=\'\'">';
	$script .= '</div>';
	$script .= '<div class="submit">';
	$script .= '<input type="submit" alt="Rechercher" value="">';
	$script .= '</div>';
	$script .= '</form>';
	$script .= '</div>';
	$script = '';
	print($script);
}

/**
 * Génération du code pour les liens avec les réseaux sociaux dans le header
 */
function geneSocialLinks() {
	$script = '<div id="socials">';
	$script .= '<a href="https://www.facebook.com/SarlAvalone" title="Follow us on Facebook !" target="_blank"><span class="facebook"></span></a>';
	$script .= '<a href="http://www.twitter.com" title="Follow us on Twitter !" target="_blank"><span class="twitter"></span></a>';
	$script .= '<a href="https://plus.google.com/+SarlAvalonePessac" title="Follow us on Google+ !" target="_blank"><span class="googleplus"></span></a>';
	$script .= '<a href="contactus.php" title="Email us !"><span class="mail"></span></a>';
	$script .= '</div>';
	print($script);
}

/**
 * Génération du code de positionnement du numéro de téléphone dans le header
 */
function genePhoneNumber() {
	$script = '<div id="phonenumber">';
	$detect = new Mobile_Detect;
	if ($detect -> isMobile()) {
		$script .= '<div class="imgphone"><a href="tel:+33557267923">05 57 26 79 23</a></div>';
	} else {
		$script .= '<div class="imgphone">05 57 26 79 23</div>';
	}

	$script .= '</div>';
	print($script);
}

/**
 * Fonction permettant la génération du fil d'ariane
 */
function geneBreadcrumb() {
	global $navigateur;	
	$script = '<section class="ariane">';
	$script .= $navigateur->getActiveBreadCrumb();
	$script .= '</section>';

	print($script);
}

/**
 * Fonction permettant de générer le bas de page
 */
function geneTextBottom() {
	$script = '<div class="top">';
	$script .= '<p>';
	$script .= 'Avalone, créée en 1997 par Daniel Porro et installée à Pessac, sur la périphérie de Bordeaux, a su conforter son expérience et son savoir-faire en ingénierie informatique ';
	$script .= 'et sur la gestion des systèmes d\'information de ses clients. Définir, concevoir, développer, exploiter, supporter et maintenir des applications web ou des logiciels spécifiques sont les ';
	$script .= 'maitres-mots d\'Avalone. La société possède une expertise sur plusieurs corps de métier: les interfaces web (le développement de sites internet, les intranets), les applications pour ';
	$script .= 'smartphone ou tablette, les application métiers, la création de logiciels spécifiques, avec des fonctionnalités sur-mesures, pour un métier précis. ';
	$script .= 'La gestion des base de données du marché telles que PostgrSQL, Oracle, SQL Server, MySQL, Access et enfin la liaison entre des applications, des sites, des plateformes, des logiciels. ';
	$script .= 'L\'équipe est composée d\'ingenieurs développeurs, de chefs de projets et de partenaires.';
	$script .= '</p>';
	$script .= '</div>';
	$script .= '<div class="bottom">';
	$script .= '&copy; Copyright Avalone';
	$script .= '</div>';

	print($script);
}

/**
 * Fonction permettant de générer les includes Javascript
 */
function geneJavascript(){
	$script = '<script src="includes/scripts/browserDetect.js" type="text/javascript"></script>';
	$script .= '<script src="includes/scripts/dynMenu.js" type="text/javascript"></script>';
	
	print($script);
}
?>