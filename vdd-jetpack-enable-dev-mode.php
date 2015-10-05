<?php
/*
Plugin Name: VDD: Jetpack Enable Development Mode
Plugin URI: https://github.com/rveitch/
Description: WordPress Plugin for enabling Development Mode on the Jetpack plugin for use in local dev environments.
Author: Ryan Veitch | Veitch Digital Design
Version: 1.0
Author URI: http://veitchdigital.com/
*/

/*
* NOTES:
* While in Development Mode, some features will not be available at all as
* they require a WordPress.com for all functionality—Related Posts, for example.
* Other features will have reduced functionality to give developers a good-faith
* representation of the feature. For example, Tiled Galleries requires the
* WordPress.com Photon CDN; however, in Development Mode, Jetpack provides a
* fallback so developers can have a similar experience during development
* and testing.
*/

/*
* Hide WPMU DEV plugin banner messages from WP Admin Dashboard
*/
add_filter( 'jetpack_development_mode', '__return_true' );

?>
