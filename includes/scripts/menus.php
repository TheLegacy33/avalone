<?php
	/**
	 * Fichier spécifique à la gestion et la génération des menus
	 * 
	 */
	
	class Menu{
		private $caption, $title, $href, $pageActive;
		private $ssMenus = array();
	
		function Menu($pCaption, $pTitle, $pLink){
			$this->pageActive = false;
			$this->caption = $pCaption;
			$this->title = $pTitle;
			$this->href = $pLink;
		}
		
		function addSousMenu($pMenu, $index = null){
			if (is_null($index)){
				$index = count($this->ssMenus);
			}
			$this->ssMenus[$index] = $pMenu;
		}
		
		function setSousMenus($pTabSsMenus){
			$this->ssMenus = $pTabSsMenus;
		}
		
		function toString(){
			$script = '<li><a href="'.$this->href.'" title="'.$this->title.'">'.$this->caption.'</a>';
			if (!empty($this->ssMenus) AND count($this->ssMenus) > 0 AND !is_null($this->ssMenus)){
				$script .= '<ul>';	
				foreach ($this->ssMenus as $sousMenu) {
					$script .= $sousMenu->toString();
				}
				$script .= '</ul>';	
			}
			$script .= '</li>';
			return $script;
		}
	}
	
	/**
	 * Fonction permettant de générer les menus dans la zone de nav horizontale du header
	 */
	function geneMenuTop(){
		$menuaccueil = new Menu('Accueil', 'Accueil', 'index.php');
		
		$menusociete = new Menu('La société', 'Qui sommes nous', 'quisommesnous.php');
		$menusociete->addSousMenu(new Menu('Qui sommes nous', 'Qui sommes nous', 'quisommesnous.php'));
		$menusociete->addSousMenu(new Menu('Nos valeurs', 'Les valeurs d\'Avalone', 'nosvaleurs.php'));
		$menusociete->addSousMenu(new Menu('Nos partenaires', 'Les partenaires d\'Avalone', 'nospartenaires.php'));
		$menusociete->addSousMenu(new Menu('Nous contacter', 'Contactez nous', 'contactus.php'));
		
		$menuapplis = new Menu('Les applis', 'Prestations développement', 'recherche_developpement.php');
		$menuapplis->addSousMenu(new Menu('Logiciels sur mesure', 'Des solutions adaptées', 'developpementsurmesure.php'));
		$menuapplis->addSousMenu(new Menu('Langages utilisés', 'Les langages pour les applications', 'langagesutilisesapplis.php'));
		$menuapplis->addSousMenu(new Menu('Bases de données', 'Nos prestations associées à vos données', 'basesdedonnees.php'));
		$menuapplis->addSousMenu(new Menu('Applications métiers', 'Les applications adaptées à votre métier', 'applicationsmetiers.php'));
		
		$menuweb = new Menu('Le web', 'Prestations web', 'sitesinternet.php');
		$menuweb->addSousMenu(new Menu('Langages utilisés', 'Les langages pour le web', 'langagesutilisesweb.php'));
		$menuweb->addSousMenu(new Menu('Les supports média', 'Un site web adaptif', 'supportsmediasweb.php'));
		$menuweb->addSousMenu(new Menu('Hébergement', 'Des solutions pour héberger votre site', 'hebergementweb.php'));
		
		$menuadministration = new Menu('L\'administration', 'Prestations administration', 'prestaadministration.php');
		$menuadministration->addSousMenu(new Menu('Technologies utilisées', 'Les technologies au coeur de votre système d\'information', 'technologies.php'));
		$menuadministration->addSousMenu(new Menu('Le réseau', 'Votre réseau informatique', 'reseau.php'));
		$menuadministration->addSousMenu(new Menu('Les systèmes', 'Les systèmes paramétrés sur vos postes et terminaux', 'systeme.php'));
		$menuadministration->addSousMenu(new Menu('La maintenance', 'La maintenance de votre réseau', 'servicemaintenance.php'));
		
		$menuformation = new Menu('La formation', 'Notre centre de formation', 'avaloneformation.php');
		
		$menucontact = new Menu('Contact', 'Contactez nous', 'contactus.php');
		$menucontact->addSousMenu(new Menu('Nous contacter', 'Contactez nous', 'contactus.php'));
		$menucontact->addSousMenu(new Menu('Offres', 'Nos offres d\'emplois et de stages', 'stagesemplois.php'));
		$menucontact->addSousMenu(new Menu('Candidatures', 'Proposez votre candidature', 'candidatures.php'));
		
		$script = '<nav><ul id="menutop">';
		$script .= $menuaccueil->toString();
		$script .= $menusociete->toString();
		$script .= $menuapplis->toString();
		$script .= $menuweb->toString();
		$script .= $menuadministration->toString();
		$script .= $menuformation->toString();
		$script .= $menucontact->toString();
		$script .= '</ul></nav>';
		
		print($script);
	}
 
?>