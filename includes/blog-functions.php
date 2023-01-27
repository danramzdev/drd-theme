<?php

function blog_pagination($wp_query)
{
	if ($wp_query->max_num_pages <= 1) return;

	$big = 999999999; // need an unlikely integer

	$images = get_template_directory_uri() . '//img//blog';

	$pages = paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'type'  => 'array',
		'prev_text' => '<img src="' . $images . '/arrow-prev.svg" >',
		'next_text' => '<img src="' . $images . '/arrow-next.svg" >'
	));

	if (is_array($pages)) {
		$paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
		echo '<div class="pagination-wrapper"><ul class="pagination">';
		foreach ($pages as $page) {
			echo "<li>$page</li>";
		}
		echo '</ul></div>';
	}
}

function blog_custom_excerpt($length)
{
	return 20;
}
add_filter('excerpt_length', 'blog_custom_excerpt', 999);
