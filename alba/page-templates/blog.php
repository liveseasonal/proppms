<?php
/*
 * Template Name: Blog Template
 * Description: A Page Template with a Page Builder design.
 */
 $alba_redux_demo = get_option('redux_demo');
$sidebar_page = get_post_meta(get_the_ID(),'_cmb_sidebar_page', true);
get_header(); ?>
<main>
    
    <header class="section bg-3 color-1">
    <div class="container text-center">
        <h1 class="font-lg"><?php if(isset($alba_redux_demo['blog_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($alba_redux_demo['blog_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Read the most recent articles', 'alba' );
                                    }
                                    ?></h1>
        <p class="lead color-1 alpha-5"><?php if(isset($alba_redux_demo['blog_subtitle'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($alba_redux_demo['blog_subtitle']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '...from our amazing community', 'alba' );
                                    }
                                    ?></p>
    </div>
</header>
<?php if($sidebar_page =='without'){ ?>
<section class="section blog one-column classic">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-lg-auto">
            <?php $args = array(    
                            'paged' => $paged,
                            'post_type' => 'post',
                            );
                        $wp_query = new WP_Query($args);
                        while (have_posts()): the_post(); 
                    ?>
                <div class="card card-light mb-40">
                <?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink();?>" class="image-background cover card-img-top" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>')"></a>
    <?php } ?>

    <div class="card-body">
        <h4 class="card-title regular">
            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
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
        </div>
    </div>
</section>
<?php }elseif($sidebar_page =='grid' || $sidebar_page =='grid-2'){ ?>
<section class="section blog classic <?php if($sidebar_page =='grid-2'){echo esc_html__('blog-inversed','alba');} ?>">
    <div class="container">
        <div class="row">
        <?php $args = array(    
                            'paged' => $paged,
                            'post_type' => 'post',
                            );
                        $wp_query = new WP_Query($args);
                        while (have_posts()): the_post(); 
                    ?>
            <div class="col-12 col-md-6 col-lg-4">
    <div class="card card-light">
    <?php if ( has_post_thumbnail() ) { ?>
        <a href="<?php the_permalink();?>" class="image-background cover card-img-top" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>'); background-color: #2c3e50;"></a>
        <?php } ?>

        <div class="card-body">
            <h4 class="card-title regular">
                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
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
</div>

<?php endwhile; ?>
        </div>

        <nav class="nav justify-content-between mt-5">
            <?php alba_pagination();?>
        </nav>
    </div>
</section>
<?php }else{ ?>

    <section class="section blog one-column classic">
    <div class="container">
        <div class="row">
            <?php if($sidebar_page =='left'){ ?>
        <div class="col-lg-8 b-l order-lg-2"><?php }else{ ?>
            <div class="col-lg-8 b-r">
            <?php } ?>
            <?php $args = array(    
                            'paged' => $paged,
                            'post_type' => 'post',
                            );
                        $wp_query = new WP_Query($args);
                        while (have_posts()): the_post(); 
                    ?>
                <div class="card card-light mb-40">
                        <?php if ( has_post_thumbnail() ) { ?>
    <a href="<?php the_permalink();?>" class="image-background cover card-img-top" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>')"></a>
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
<?php } ?>

</main>
    <?php
get_footer();
?>