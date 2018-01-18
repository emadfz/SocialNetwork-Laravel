/* -----------------------
 * Fixed Header
 * --------------------- */


$(document).ready(function () {
	var $header = $('#header--standard');

	if ($header.length) {
		$header.headroom(
			{
				"offset": 250,
				"tolerance": 5,
				"classes": {
					"initial": "animated",
					"pinned": "slideDown",
					"unpinned": "slideUp"
				}
			}
		);
	}
});
