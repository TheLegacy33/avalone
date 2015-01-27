<?php
	
	include_once('menus.php');

	/**
	 * @author Michel GILLET
	 * @version 0.1
	 * 
	 * Scripts des fonctions internes
	 */
	
	
	/**
	 * Génération du code pour l'écriture du logo dans le header
	 */
	function geneLogo(){
		$script = '<a id="logo" href="index.php">'."\r";
		$script .= '<p class="top"><span class="orange">AVA</span><span class="standard">LONE</span></p>'."\r";
		$script .= '<span>&copy;</span>'."\r";
		$script .= '<p class="bottom">Solutions de développement Web &amp; Applicatives</p>'."\r";	
		$script .= '</a>'."\r";
		print($script);
	}
	
	/**
	 * Génération du code pour le formulaire de recherche dans le header
	 */
	function geneSearchForm(){
		$script = '<div id="search">'."\r";
		$script .= '<form id="search-box" method="get" action="" name="search">'."\r";
		$script .= '<div class="query">'."\r";
		$script .= '<input type="text" value="Rechercher..." name="q" onclick="this.value=\'\'">'."\r";
		$script .= '</div>'."\r";
		$script .= '<div class="submit">'."\r";
		$script .= '<input type="submit" alt="Rechercher" value="">'."\r";
		$script .= '</div>'."\r";
		$script .= '</form>'."\r";
		$script .= '</div>'."\r";
		print($script);
	}
	
	/**
	 * Génération du code pour les liens avec les réseaux sociaux dans le header
	 */
	function geneSocialLinks(){
		$script = '<div id="socials">'."\r";
		$script .= '<a href="https://www.facebook.com/SarlAvalone" title="Follow us on Facebook !" target="_blank"><span class="facebook"></span></a>'."\r";
		$script .= '<a href="http://www.twitter.com" title="Follow us on Twitter !" target="_blank"><span class="twitter"></span></a>'."\r";
		$script .= '<a href="https://plus.google.com/+SarlAvalonePessac" title="Follow us on Google+ !" target="_blank"><span class="googleplus"></span></a>'."\r";
		$script .= '<a href="contactus.php" title="Email us !" target="_blank"><span class="mail"></span></a>'."\r";
		$script .= '</div>'."\r";
		print($script);
	}
	
	/**
	 * Génération du code de positionnement du numéro de téléphone dans le header
	 */
	function genePhoneNumber(){
		$script = '<div id="phonenumber">'."\r";
		$script .= '<div class="imgphone">05 57 26 79 23</div>'."\r";
		$script .= '</div>'."\r";
		print($script);
	}
	
	/**
	 * Fonction permettant la génération du fil d'ariane
	 */
	function geneBreadcrumb(){
		$script = '<section class="ariane">'."\r";
		$script .= 'Accueil';
		$script .= '</section>';
		
		print($script);
	}
?>