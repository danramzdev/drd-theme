<?php

/**
 * The template for displaying all single posts
 */

get_header();

while (have_posts()) :
	the_post();
?>

	<header class="relative flex items-center justify-center pt-40 pb-20">
		<?php the_post_thumbnail('full', array(
			'class' => 'absolute top-0 left-0 w-full h-full object-cover -z-10',
		)); ?>

		<div class="container mx-auto px-4 text-center">
			<h1><?php the_title(); ?></h1>

			<div class="flex flex-wrap gap-4 justify-center">
				<div><?php the_date(); ?></div>
				<div class="border-l border-black"></div>
				<div><?php the_author(); ?></div>
			</div>
		</div>
	</header>

	<article class="article | py-20">
		<div class="container mx-auto px-0">
			<div class="grid grid-cols-12">
				<div class="col-start-1 col-end-13 md:col-start-3 md:col-end-11">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</article>

<?php

endwhile;

get_footer();
