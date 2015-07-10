<?php
	
	include_once('menus.php');
	include_once('Mobile_Detect.php');

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
		$script = '<a id="logo" href="index.php">';
		$script .= '<p class="top"><span class="orange">AVA</span><span class="standard">LONE</span></p>';
		$script .= '<span>&copy;</span>';
		$script .= '<p class="bottom">Solutions de développement Web &amp; Applicatives</p>';	
		$script .= '</a>';
		print($script);
	}
	
	/**
	 * Génération du code pour le formulaire de recherche dans le header
	 */
	function geneSearchForm(){
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
		print($script);
	}
	
	/**
	 * Génération du code pour les liens avec les réseaux sociaux dans le header
	 */
	function geneSocialLinks(){
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
	function genePhoneNumber(){
		$script = '<div id="phonenumber">'."\r";
		$detect = new Mobile_Detect;
		if ($detect->isMobile()){
			$script .= '<div class="imgphone"><a href="tel:+33557267923">05 57 26 79 23</a></div>'."\r";	
		}else{
			$script .= '<div class="imgphone">05 57 26 79 23</div>'."\r";
		}
		
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