/*
Author   : bieler batiste
Company  : doSimple : http://www.dosimple.ch
send me a mail for more informations : faden@PASDEPOURRIELaltern.org - remove ( PASDEPOURRIEL )

Short javascript function to create and handle a CSS navigation menu

Copyright (C) 2004  Bieler Batiste

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU Lesser General Public
License as published by the Free Software Foundation; either
version 2.1 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
Lesser General Public License for more details.

You should have received a copy of the GNU Lesser General Public
License along with this library; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

// the timeout for the menu
var timeout = 250;
var menu = null;
var limit = -1;

// not very clean but simple
// the function can be run in the HTML for faster display
// window.onload=initMenu;

// this fonction apply the CSS style and the event
function initMenu(label) {
	initMenuJS(label, false);
}

function initMenuJS(label, onclick, maxlevel) {
	// create timeout variables for list item
	// it's for avoid some warning with IE
	for (var i = 0; i < 100; i++) {
		eval("window.timeout" + label + "li" + i + " = false;");
	}

	if (maxlevel)
		limit = maxlevel;

	// a test to avoid some browser like IE4, Opera 6, and IE Mac
	if (browser.isDOM1 && !(browser.isMac && browser.isIE ) && !(browser.isOpera && browser.versionMajor < 7 ) && !(browser.isIE && browser.versionMajor < 5 )) {
		// get some element

		menu = document.getElementById(label);
		// the root element
		// change the class name of the menu,
		// it's usefull for compatibility with old browser
		var menuclass = menu.className;
		menuclass = menuclass + ' ' + label;
		menu.className = menuclass;

		var lis = menu.getElementsByTagName('li');
		// all the li

		// i am searching for ul element in li element
		for (var i = 0; i < lis.length; i++) {

			// is there a ul element ?

			if (lis.item(i).getElementsByTagName('ul').length > 0) {
				var thisElt = lis.item(i);
				var levelul = 0;
				while (thisElt && thisElt.parentNode != menu) {
					thisElt = thisElt.parentNode;
					if (thisElt && thisElt.nodeName == 'UL') {
						levelul++;
					}
				}

				if ((limit != -1 && levelul < limit) || limit == -1) {
					// improve IE key navigation
					if (browser.isIE) {
						if (onclick)
							addAnEvent(lis.item(i), 'keypress', display);
						else
							addAnEvent(lis.item(i), 'keyup', show);
					}
					// link events to list item
					if (onclick)
						addAnEvent(lis.item(i), 'click', display);
					else {
						addAnEvent(lis.item(i), 'mouseover', show);
						addAnEvent(lis.item(i), 'mouseout', timeoutHide);
						addAnEvent(lis.item(i), 'blur', timeoutHide);
						addAnEvent(lis.item(i), 'focus', show);
					}
				}
			} else {
				if (!onclick) {
					addAnEvent(lis.item(i), 'mouseover', show);
					addAnEvent(lis.item(i), 'mouseout', timeoutHide);
					addAnEvent(lis.item(i), 'blur', timeoutHide);
					addAnEvent(lis.item(i), 'focus', show);

				}
			}
			lis.item(i).setAttribute('id', label + "li" + i);
		}
	}
}

function addAnEvent(target, eventName, functionName) {
	// apply the method to IE
	if (browser.isIE) {
		//attachEvent dont work properly with this
		eval('target.on' + eventName + '=functionName');
	}
	// apply the method to DOM compliant browsers
	else {
		target.addEventListener(eventName, functionName, true);
		// true is important for Opera7
	}
}

// hide the first ul element of the current element
function timeoutHide() {
	// start the timeout
	eval("timeout" + this.id + " = window.setTimeout('hideUlUnder( \"" + this.id + "\" )', " + timeout + " );");
}

// hide the ul elements under the element identified by id
function hideUlUnder(id) {
	if (document.getElementById(id) && document.getElementById(id).getElementsByTagName('ul').length > 0) {
		var thisElt = document.getElementById(id).getElementsByTagName('ul')[0];
		var levelul = 0;
		if (thisElt.nodeName == 'UL')
			levelul++;
		while (thisElt && thisElt.parentNode != menu) {
			thisElt = thisElt.parentNode;
			if (thisElt && thisElt.nodeName == 'UL') {
				levelul++;
			}
		}
		if ((limit != -1 && levelul < limit) || limit == -1) {
			document.getElementById(id).getElementsByTagName('ul')[0].style['visibility'] = 'hidden';
		}
	}
}

// show the first ul element found under this element
function show() {
	// show the sub menu
	if (this.getElementsByTagName('ul').length > 0) {
		var thisElt = this.getElementsByTagName('ul')[0];
		var levelul = 0;
		if (thisElt.nodeName == 'UL')
			levelul++;
		while (thisElt && thisElt.parentNode != menu) {
			thisElt = thisElt.parentNode;
			if (thisElt && thisElt.nodeName == 'UL') {
				levelul++;
			}
		}
		if ((limit != -1 && levelul < limit) || limit == -1) {
			this.getElementsByTagName('ul')[0].style['visibility'] = 'visible';
		}
	}
	var currentNode = this;
	while (currentNode) {
		if (currentNode.nodeName == 'LI') {
			if (currentNode.className.indexOf('listOver') == -1)
				currentNode.className += ' listOver';
			currentNode.getElementsByTagName('a')[0].className = 'linkOver';
		}
		currentNode = currentNode.parentNode;
	}
	// clear the timeout
	eval("clearTimeout( timeout" + this.id + ");");
	hideAllOthersUls(this);
}

function display() {
	// show the sub menu
	displayNoneAllOthersUls(this);
	this.getElementsByTagName('ul')[0].style['display'] = 'block';
}

// hide all ul on the same level of  this list item
function hideAllOthersUls(currentLi) {
	var lis = currentLi.parentNode;
	for (var i = 0; i < lis.childNodes.length; i++) {
		if (lis.childNodes[i].nodeName == 'LI' && lis.childNodes[i].id != currentLi.id) {
			hideUlUnderLi(lis.childNodes[i]);
		}
	}
}

// hide all ul on the same level of  this list item
function displayNoneAllOthersUls(currentLi) {
	var lis = currentLi.parentNode;
	for (var i = 0; i < lis.childNodes.length; i++) {
		if (lis.childNodes[i].nodeName == 'LI' && lis.childNodes[i].id != currentLi.id) {
			displayNoneUlUnderLi(lis.childNodes[i]);
		}
	}
}

// hide all the ul wich are in the li element
function hideUlUnderLi(li) {
	li.className = li.className.replace(/ listOver/g, "");
	var as = li.getElementsByTagName('a');
	for (var i = 0; i < as.length; i++) {
		as.item(i).className = "";
	}
	var uls = li.getElementsByTagName('ul');
	for (var i = 0; i < uls.length; i++) {
		var thisElt = uls.item(i);
		var levelul = 0;
		if (thisElt.nodeName == 'UL')
			levelul++;
		while (thisElt && thisElt.parentNode != menu) {
			thisElt = thisElt.parentNode;
			if (thisElt && thisElt.nodeName == 'UL') {
				levelul++;
			}
		}

		if ((limit != -1 && levelul < limit) || limit == -1) {
			uls.item(i).style['visibility'] = 'hidden';
		}
	}
}

// hide all the ul wich are in the li element
function displayNoneUlUnderLi(li) {
	var uls = li.getElementsByTagName('ul');
	for (var i = 0; i < uls.length; i++) {
		uls.item(i).style['display'] = 'none';
	}
}
