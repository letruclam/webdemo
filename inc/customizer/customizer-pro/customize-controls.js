( function( api ) {

	// Extends our custom "royal-watch-store" section.
	api.sectionConstructor['royal-watch-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );