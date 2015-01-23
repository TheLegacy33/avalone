/**
 * Fonctions de mise en place du menu dynamique
 */

var menu = null;

if (browser.isIE()){
	docuemnt.attachEvent("onreadystatechange", initMenu('menutop'));
}else{
	document.addEventListener('DOMContentLoaded', initMenu('menutop'), true);
}

function initMenu(idMenu){
	menu = document.getElementById(idMenu);
	
	//Parcours de tous les li du menu principal pour y affecter l'event qui appelera l'affichage du sous menu
	var elementMenu = null;
	for (var i = 0; i < menu.children.length; i++){
		elementMenu = menu.children[i];
		if (elementMenu.children.length > 1 && elementMenu.getElementsByTagName('ul').length > 0){
			addAnEvent(elementMenu, 'mouseover', show);
			addAnEvent(elementMenu, 'focus', show);
			addAnEvent(elementMenu, 'mouseout', hide);
			addAnEvent(elementMenu, 'blur', hide);
		}
	}
}

function show(){
	var ssMenu = this.getElementsByTagName('ul')[0];
	ssMenu.style.left = ((this.offsetLeft + (this.offsetWidth / 2)) - (ssMenu.offsetWidth / 2)) + "px";
	ssMenu.style.left = ((this.offsetLeft + (this.offsetWidth / 2)) - (ssMenu.offsetWidth / 2)) + "px";
	//ssMenu.style.width = ssMenu.offsetWidth + "px";
	ssMenu.style['visibility'] = 'visible';
}

function hide(){
	var ssMenu = this.getElementsByTagName('ul')[0];
	ssMenu.style['visibility'] = 'hidden';
}

function addAnEvent(target, eventName, functionName) {
	if (browser.isIE()) {
		eval('target.on' + eventName + '=functionName');
	} else {
		target.addEventListener(eventName, functionName, true);
	}
}