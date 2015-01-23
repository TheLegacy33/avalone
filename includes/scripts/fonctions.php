<?php
	
	include_once('menus.php');

	/**
	* Scripts des fonctions internes
	**/
	
	
	function geneLogo(){
		$script = '<a id="logo" href="index.php">'."\r";
		$script .= '<p class="top"><span class="orange">AVA</span><span class="standard">LONE</span></p>'."\r";
		$script .= '<p class="bottom">Solutions de développement Web &amp; Applicatives</p>'."\r";	
		$script .= '</a>'."\r";
		print($script);
	}
	
	function geneSeachForm(){
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
	
	function geneSocialLinks(){
		$script = '<div id="socials">'."\r";
		$script .= '<a href="https://www.facebook.com/SarlAvalone" title="Follow us on Facebook !" target="_blank"><span class="facebook"></span></a>'."\r";
		$script .= '<a href="http://www.twitter.com" title="Follow us on Twitter !" target="_blank"><span class="twitter"></span></a>'."\r";
		$script .= '<a href="https://plus.google.com/+SarlAvalonePessac" title="Follow us on Google+ !" target="_blank"><span class="googleplus"></span></a>'."\r";
		$script .= '<a href="contactus.php" title="Email us !" target="_blank"><span class="mail"></span></a>'."\r";
		$script .= '</div>'."\r";
		print($script);
	}
	
	function genePhoneNumber(){
		$script = '<div id="phonenumber">'."\r";
		$script .= '<div class="imgphone"></div>'."\r";
		$script .= '<div class="imgnumber"></div>'."\r";
		$script .= '</div>'."\r";
		print($script);
	}
?>