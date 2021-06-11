(function() {
	const onelinerEl = document.querySelector('#oneliner');
	if (onelinerEl) {
		console.log("Found oneliner-element, firing away request 🚀");

		// fire away request
		fetch(wcmol_settings.ajax_url + '?action=wcmol_get_oneliner')
			.then(res => res.json())
			.then(res => {
				console.log("Yay, got a response:", res);

				// get oneliner-element and replace content with oneliner in response
				onelinerEl.innerHTML = "<p>" + res.oneliner + "</p>";
			})
	} else {
		console.log("No boom, no oneliner-element found 😢");
	}
})();
