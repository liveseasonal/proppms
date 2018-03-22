<?php
/**
 * The Template for displaying all single posts
 */
 $alba_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
?>
<main>
    <?php if ( has_post_thumbnail() ) { ?>
    <header class="section color-1 blog-single-header image-background center-bottom" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>'); background-color: #2C3E50;">
    <?php }else{ ?>
    <header class="section color-1 blog-single-header image-background center-bottom pb-none" style=" background-color: #2C3E50;">
    <?php } ?>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 mx-md-auto">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <p class="color-1 alpha-5"><?php the_author(); ?> | <?php the_time(get_option( 'date_format' ));?></p>
            </div>
        </div>
    </div>
</header>
<section class="section blog single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 b-r">
                <div class="post-content pb-5">
                <div class="alba-post">
          <?php the_content(); ?>
          <?php wp_link_pages( array(
            'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'alba' ),
            'after'       => '</div>',
            'link_before' => '<span class="page-number">',
            'link_after'  => '</span>',
        ) ); ?>
                </div>

                </div>

                <?php           
                if ( comments_open() || get_comments_number() ) {
                  comments_template();
                }
                ?>   
            </div>

            <div class="col-lg-4">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</section>


</main>
<?php endwhile; ?>
   <?php
get_footer();
?>