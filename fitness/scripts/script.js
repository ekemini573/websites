/* 
	Students Name: Ekemini Godwin
	File Name: script.js
	Date: 30-4-2023
*/

// Hamburger menu function

'use strict';

function hamburger(){
	var menu = document.getElementById("menu-links");
	var logo = document.getElementById("ffc-logo");

	if (menu.style.display === "block" && logo.style.display === "none") {
			menu.style.display = "none";
			logo.style.display = "block";
	}else{
		menu.style.display = "block";
		logo.style.display = "none"; 
	}
}