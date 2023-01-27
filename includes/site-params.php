<?php

function add_site_parameters_script()
{
	// Import product varitions
	$site_parameters = array(
		"site_url" => get_site_url(),
		"theme_url" => get_template_directory_uri()
	);

	wp_localize_script('main', 'site_parameters', $site_parameters);
	wp_enqueue_script("main");
}

add_site_parameters_script();
