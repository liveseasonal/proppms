<?php $alba_redux_demo = get_option('redux_demo');?> 
<footer class="site-footer section bg-5 color-smoke">
    <div class="container pb-3">
        <div class="row">
            <div class="col-12 col-md-5 mr-auto">
              <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-1' ); ?>
                        <?php endif; ?>
            </div>

            <div class="col-12 col-md-2">
                <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-2' ); ?>
                        <?php endif; ?>
            </div>

            <div class="col-12 col-md-4">
                <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-3' ); ?>
                        <?php endif; ?>
            </div>
        </div>

        <hr class="mt-5 bg-2 border-0">
        <div class="row footer-bottom small">
            <div class="col">
                <p class="mt-2 mb-0"><?php if(isset($alba_redux_demo['footer_text'])){?>
                        <?php echo htmlspecialchars_decode(esc_attr($alba_redux_demo['footer_text'])); ?>
                        <?php }else{?>
                        <?php echo esc_html__( 'Alba 2018 - All rights reserved.', 'alba' );
                        }
                        ?></p>
            </div>

            <div class="col-sm-6 col-md-auto">
                    <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-area-4' ); ?>
                        <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>