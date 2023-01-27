<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=1">

	<?php wp_head(); ?>
</head>

<?php
global $post;

if (is_home() || is_category()) :
	$post_slug = "blog";
elseif (is_singular("post")) :
	$post_slug = "post";
else :
	$post_slug = $post->post_name;
endif;
?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="global__site" id="page" data-namespace="<?php echo $post_slug; ?>">
		<main class="global__content" id="main" role="main">
