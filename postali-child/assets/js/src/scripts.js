/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

// Navigation Desktop / Mobile Selector
jQuery(function ($) {
	"use strict";

	$("a#menu-icon").click(function() {
		$("#menu-primary-navigation").toggleClass("open");
		$("a#menu-icon").toggleClass("closed");
	});
});


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("open");
    var panel = this.nextElementChild;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}


// FIRST WORD WRAP

// NATIVE JAVASCRIPT
// check document is ready
var domReady = function (callback) {
	if (document.readyState === "interactive" || document.readyState === "complete") {
		callback();
	} else {
		document.addEventListener("DOMContentLoaded", callback);
	}
};

// on document ready 
domReady(function () {
	// run firstWord function	
	firstWord();
});

// function to wrap first word of heading in <span> tags
function firstWord() {
	// get heading elements
	var $headings = document.querySelectorAll("#header-banner h1");

	// run through each heading tag and insert spans
	for (var i = 0, len = $headings.length; i < len; i++) {
		console.log($headings[i].children.length);
		// if has child or has class X
		if ($headings[i].children.length < 1 && !$headings[i].classList.contains("no-first-word")) {
			// set new text variable
			var niceText = $headings[i].textContent;

			// set opening / closing spans
			var openSpan = '<span>',
				closeSpan = '</span>';

			// make the sentence into an array
			niceText = niceText.split(' ');

			// add open span to the beginning of the array
			niceText.unshift(openSpan);

			// add closing span as the 3rd value in the array
			niceText.splice(2, 0, closeSpan);

			// turn it back into a string 
			niceText = niceText.join(' ');

			// append the new HTML to the header
			$headings[i].innerHTML = niceText;
		}
	}
}

//Prevent scroll when mobile menu is open
(function($) {
	let $body = $('body'),
	$menuButton = $('#menu-icon');

	$($menuButton).on('click', function(e) {
		let $openMenu = $('.menu.open')
		//at time of clicking menu if open does not exist then menu is being opened and we stop page scroll 
		if ($openMenu.length === 0) {
			$($body).css('overflow','hidden');
		} else {
			$($body).css('overflow','auto');
		}
	});

})(jQuery);
