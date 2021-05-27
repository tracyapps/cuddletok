<?php get_header();

	$intro_post = new WP_Query(
		array(
			'category_name'		=> 'intro',
			'posts_per_page' 	=> 1,
		)
	);
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
	$house_rules = new WP_Query(
		array(
			'category_name'		=> 'rules',
			'posts_per_page' 	=> 1,
		)
	);
	wp_reset_postdata(); ?>

<header id="home_introduction" class="drawer_container">
	<?php if( $intro_post->have_posts() ) : while( $intro_post->have_posts() ) : $intro_post->the_post(); ?>

	<a id="drawer_open_close_button" class="drawer_button" href="#">What is this?</a>
	<div id="intro_content" class="drawer closed">
		<div class="padding">
			<h3 class="front_page_title"><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div>
	</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>
</header>
<main id="page_main" class="daytime_nightime_container two_column_container">


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
<aside class="popup">
	<div class="pull-tab opened">
		House Rules
	</div>
	<div id="drawer-content" class="bottom-drawer">
		<?php if( $house_rules->have_posts() ) : while( $house_rules->have_posts() ) : $house_rules->the_post(); ?>
			<div class="padding">
				<?php the_content(); ?>
			</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>
</aside>
<?php get_footer(); ?>