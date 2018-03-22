<?php
/*
 * Template Name: Canvas Home 3
 * Description: A Page Template with a Page Builder design.
 */
 $alba_redux_demo = get_option('redux_demo');
get_header('home3'); ?>
<main>
<?php if (have_posts()){ ?>
	
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	
	<?php }else {
		echo esc_html__( 'Page Canvas For Page Builder', 'alba' );
	}?>
</main>
<?php get_footer(); ?>