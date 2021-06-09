(function() {
	console.log("URL:", wcmol_settings.ajax_url);

	// fire away request
	fetch(wcmol_settings.ajax_url + '?action=wcmol_get_oneliner')
		.then(res => res.json())
		.then(res => {
			console.log("Yay, got a response:", res);

			// get oneliner-element and replace content with oneliner in response
			document.querySelector('#oneliner').innerHTML = "<p>" + res.oneliner + "</p>";
		})
})();
