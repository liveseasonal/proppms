<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
 $alba_redux_demo = get_option('redux_demo');
get_header(); ?> 
<section class="section contact section-404">
    <div class="container">
        <div class="section-heading text-center">
            <h1 class="title-404"><?php if(isset($alba_redux_demo['404_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($alba_redux_demo['404_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '404 Page', 'alba' );
                                    }
                                    ?></h1>
            <p class="lead desc-404"><?php if(isset($alba_redux_demo['404_subtitle'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($alba_redux_demo['404_subtitle']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'This Server Page not be found!!!', 'alba' );
                                    }
                                    ?></p>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary px-5 py-3">
            <?php if(isset($redux_demo['404_text'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($redux_demo['404_text']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Back To Home page', 'alba' );
                                    }
                                    ?>
        </a>
        </div>

    </div>
</section>
  <?php get_footer(); ?>