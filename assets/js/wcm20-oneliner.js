(function() {

	// get all oneliner elements and fetch a oneliner for each of them
	document.querySelectorAll('.oneliner').forEach(onelinerEl => {
		console.log("Found a oneliner-element, firing away request for this element 🚀", onelinerEl);

		// fire away request
		fetch(wcmol_settings.ajax_url + '?action=wcmol_get_oneliner')
			.then(res => res.json())
			.then(res => {
				console.log("Got a response!", res, onelinerEl);

				// Replace content in _this_ onelinerEl with response
				if (res.success) {
					onelinerEl.innerHTML = "<p>" + res.data.oneliner + "</p>";
				} else {
					onelinerEl.innerHTML = "<p><em>Sorry, could not get oneliner.</em></p>";
				}
			});
	});

})();
