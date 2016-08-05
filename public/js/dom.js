'use strictly';

var navbarLinkElements=document.getElementsByTagName('a');

console.log(navbarLinkElements)


var delay = 5000;

var timeoutId = setTimeout(function () {
	for (var i=0; i<navbarLinkElements.length; i++){
		console.log	(navbarLinkElements[i]);
		var link="http://mylittlepony.com"
		navbarLinkElements[i].setAttribute("href", link);
	}
	
	// navbarLinkElements.forEach(function(elements){

	// 	console.log(elements)
	// })
}, delay);

