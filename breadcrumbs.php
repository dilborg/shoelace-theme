<?php if ( current_theme_supports( 'breadcrumb-trail' ) ) {

	breadcrumb_trail(
		array( 
			'container' => 'nav', 
			'separator' => '/', 
			'labels'    => array( 
				'browse' => __( '', 'hybrid-base' ) 
			) 
		) 
	);

} ?>