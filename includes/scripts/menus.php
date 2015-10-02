<?php
	/**
	 * Fichier spécifique à la gestion et la génération des menus
	 * 
	 */
	
	class Menu{
		private $caption, $title, $href, $pageActive, $linkEnabled, $menuParent;
		private $ssMenus = array();
	
		function Menu($pCaption, $pTitle, $pLink, $pEnabled = true){
			$this->pageActive = false;
			$this->linkEnabled = $pEnabled;
			$this->caption = $pCaption;
			$this->title = $pTitle;
			$this->href = $pLink;
			if (strtolower(basename($_SERVER['SCRIPT_FILENAME'])) == strtolower(basename($this->href))){
				$this->pageActive = true;
				global $navigateur;
				$navigateur->setActiveMenu($this);
			}
			
		}
		
		function getParent(){
			return $this->menuParent;
		}
		
		function setParent($pMenuParent){
			$this->menuParent = $pMenuParent;
		}
		
		function getCaption(){
			return $this->caption;
		}
		
		function getHref(){
			return $this->href;
		}
		
		function isActivePage(){
			return $this->pageActive;
		}
		
		function isEnabled(){
			return $this->linkEnabled;
		}
		
		function getLink(){
			return '<a href="'.$this->href.'" title="'.$this->title.'">'.$this->caption.'</a>';
		}
		
		function getBreadCrumb(){
			$script = '';
			if (is_null($this->menuParent)){
				$script = $this->getLink();
			}else{
				$script = $this->menuParent->getBreadCrumb().' <span class="sep">></span> '.$this->getLink();
			}
			return $script;
		}
		
		function addSousMenu($pMenu, $index = null){
			$pMenu->setParent($this);
			if (is_null($index)){
				$index = count($this->ssMenus);
			}
			$this->ssMenus[$index] = $pMenu;
		}
		
		function toString(){
			if (!$this->isEnabled()){
				$script = '';
			}else{
				$script = '<li><a href="'.$this->href.'" title="'.$this->title.'">'.$this->caption.'</a>';
				if (!empty($this->ssMenus) AND count($this->ssMenus) > 0 AND !is_null($this->ssMenus)){
					$script .= '<ul>';	
					foreach ($this->ssMenus as $sousMenu) {
						$script .= $sousMenu->toString();
					}
					$script .= '</ul>';	
				}
				$script .= '</li>';
			}
			return $script;
		}
	}
	
	class Navigateur{
		private $menus = array();
		private $id, $activeMenu;
		
		function Navigateur($pId){
			$this->id = $pId;
			$this->activeMenu = null;
		}
		
		function setId($pId){
			$this->id = $pId;
		}
		
		function setActiveMenu($pActiveMenu){
			$this->activeMenu = $pActiveMenu;
		}
		
		function getActiveBreadCrumb(){
			if (strtolower(basename($_SERVER['SCRIPT_FILENAME'])) == strtolower(basename($this->menus[0]->getHref()))){
				return '';
			}else{
				return $this->menus[0]->getLink().' <span class="sep">></span> '.$this->activeMenu->getBreadCrumb();
			}
		}
		
		function addMenu($pMenu, $index = null){
			if (is_null($index)){
				$index = count($this->menus);
			}
			$this->menus[$index] = $pMenu;
		}
		
		function toString(){
			$script = '<nav><ul id="'.$this->id.'">';
			if (!empty($this->menus) AND count($this->menus) > 0 AND !is_null($this->menus)){
				foreach ($this->menus as $Menu) {
					$script .= $Menu->toString();
				}
			}
			$script .= '</ul></nav>';
			return $script;
		}
	}
	
	/**
	 * Fonction permettant de générer les menus dans la zone de nav horizontale du header
	 */
	function geneMenuTop(){
		global $navigateur;
		$navigateur = new Navigateur("menutop");
		
		$menuaccueil = new Menu('Accueil', 'Accueil', 'index.php');
		
		$menusociete = new Menu('La société', 'Qui sommes nous', 'quisommesnous.php', true);
		$menusociete->addSousMenu(new Menu('Qui sommes nous', 'Qui sommes nous', 'quisommesnous.php', true));
		$menusociete->addSousMenu(new Menu('Nos atouts', 'Les atouts d\'Avalone', 'atouts.php', true));
		$menusociete->addSousMenu(new Menu('Nos réalisations', 'Ils nous font confiance', 'realisations.php', true));
		$menusociete->addSousMenu(new Menu('Nous contacter', 'Contactez nous', 'contactus.php', true));
		
		$menuapplis = new Menu('Les applis', 'Prestations développement', 'recherche_developpement.php', true);
		$menuapplis->addSousMenu(new Menu('Logiciels sur mesure', 'Des solutions adaptées', 'developpementsurmesure.php', false));
		$menuapplis->addSousMenu(new Menu('Langages utilisés', 'Les langages pour les applications', 'langagesutilisesapplis.php', false));
		$menuapplis->addSousMenu(new Menu('Bases de données', 'Nos prestations associées à vos données', 'basesdedonnees.php', false));
		$menuapplis->addSousMenu(new Menu('Applications métiers', 'Les applications adaptées à votre métier', 'applicationsmetiers.php', false));
		
		$menuweb = new Menu('Le web', 'Prestations web', 'sitesinternet.php', true);
		$menuweb->addSousMenu(new Menu('Langages utilisés', 'Les langages pour le web', 'langagesutilisesweb.php', false));
		$menuweb->addSousMenu(new Menu('Les supports média', 'Un site web adaptif', 'supportsmediasweb.php', false));
		$menuweb->addSousMenu(new Menu('Hébergement', 'Des solutions pour héberger votre site', 'hebergementweb.php', false));
		
		$menuadministration = new Menu('L\'administration', 'Prestations administration', 'prestaadministration.php', true);
		$menuadministration->addSousMenu(new Menu('Technologies utilisées', 'Les technologies au coeur de votre système d\'information', 'technologies.php', false));
		$menuadministration->addSousMenu(new Menu('Le réseau', 'Votre réseau informatique', 'reseau.php', false));
		$menuadministration->addSousMenu(new Menu('Les systèmes', 'Les systèmes paramétrés sur vos postes et terminaux', 'systeme.php', false));
		$menuadministration->addSousMenu(new Menu('La maintenance', 'La maintenance de votre réseau', 'servicemaintenance.php', false));
		
		$menuformation = new Menu('La formation', 'Notre centre de formation', 'avaloneformation.php', true);
		
		$menucontact = new Menu('Contact', 'Contactez nous', 'contactus.php', true);
		$menucontact->addSousMenu(new Menu('Plan d\'accès', 'Venez nous voir', 'planacces.php', true));
		$menucontact->addSousMenu(new Menu('Nous contacter', 'Contactez nous', 'contactus.php', true));
		$menucontact->addSousMenu(new Menu('Offres', 'Nos offres d\'emplois et de stages', 'stagesemplois.php', false));
		$menucontact->addSousMenu(new Menu('Candidatures', 'Proposez votre candidature', 'candidatures.php', false));
		
		$navigateur->addMenu($menuaccueil);
		$navigateur->addMenu($menusociete);
		$navigateur->addMenu($menuapplis);
		$navigateur->addMenu($menuweb);
		$navigateur->addMenu($menuadministration);
		$navigateur->addMenu($menuformation);
		$navigateur->addMenu($menucontact);
		
		print($navigateur->toString());
	}
 
?>