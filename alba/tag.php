<?php
 $alba_redux_demo = get_option('redux_demo');
get_header(); ?>
<main>
    
    <header class="section bg-3 color-1">
    <div class="container text-center">
        <h1 class="font-lg"><?php printf( esc_html__( 'Tag Archives: %s', 'alba' ), single_tag_title( '', false ) ); ?></h1>
    </div>
</header>


    <section class="section blog one-column classic">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 b-r">
            <?php 
                        while (have_posts()): the_post(); 
                    ?>
                <div class="card card-light mb-40">
                        <?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink();?>">
    <?php the_post_thumbnail(); ?>  </a>
                        <?php } ?>

    <div class="card-body">
        <h4 class="card-title regular">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h4>
        <p class="card-text"><?php if(isset($alba_redux_demo['blog_excerpt'])){?>
                                <?php echo esc_attr(alba_excerpt($alba_redux_demo['blog_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(alba_excerpt(30)); 
                                }
                                ?></p>

        <hr>
        <footer class="small text-muted d-flex justify-content-between">
                    <span class="author">
                        <?php if(isset($alba_redux_demo['blog_by'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($alba_redux_demo['blog_by']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'by', 'alba' );
                                    }
                                    ?> <?php the_author_posts_link(); ?>
                    </span>

            <span><?php the_time(get_option( 'date_format' ));?></span>
        </footer>
    </div>
</div>

<?php endwhile; ?>
<nav class="nav justify-content-between mt-5">
                    <?php alba_pagination();?>
                </nav>
            </div>

            <div class="col-lg-4">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</section>


</main>
    <?php
get_footer();
?>