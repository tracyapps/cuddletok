<?php get_header(); ?>

<main id="page_main" class="daytime_nightime_container two_column_container">
	<?php
	$daytime_posts = new WP_Query(
			array(
					'category_name'		=> 'daytime',
					'nopaging' 			=> true,
			)
	);
	$nightime_posts = new WP_Query(
		array(
			'category_name'		=> 'nightime',
			'nopaging' 			=> true,
		)
	);
	wp_reset_postdata();
	?>
	<section id="daytime_posts" class="daytime column">
		<?php if( $daytime_posts->have_posts() ) : while( $daytime_posts->have_posts() ) : $daytime_posts->the_post(); ?>
		<h2 class="column_header">daytime</h2>
		<div class="post_container padding">
			<h3 class="front_page_title"><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>
	<section id="nightime_posts" class="nightime column">
		<?php if( $nightime_posts->have_posts() ) : while( $nightime_posts->have_posts() ) : $nightime_posts->the_post(); ?>

			<h2 class="column_header">nighttime</h2>
			<div class="post_container padding">
				<h3 class="front_page_title"><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>
	</section>

</main>
<?php get_footer(); ?>