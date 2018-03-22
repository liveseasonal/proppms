<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<?php $alba_redux_demo = get_option('redux_demo'); ?>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
    <link rel="shortcut icon" href="<?php if(isset($alba_redux_demo['favicon']['url'])){?><?php echo esc_url($alba_redux_demo['favicon']['url']); ?><?php }?>">
    <?php }?>
    <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="90" <?php body_class(); ?>>




    <!-- < NAVIGATION WITH BACKGROUND COLOR NAVBAR >............................................ -->
<nav class="navbar navbar-expand-md navigation sidebar-left">
    <div class="container">
    <button class="navbar-toggler" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
            <?php $alba_redux_demo = get_option('redux_demo');if(isset($alba_redux_demo['logo']['url'])){?>
            <?php  if($alba_redux_demo['logo']['url'] != ''){ ?>
        <img src="<?php echo esc_url($alba_redux_demo['logo']['url']); ?>" alt="Logo" class="logo">
            <?php }else{ ?>
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo" class="logo">
            <?php }?>
            <?php }else{ ?>
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo" class="logo">
            <?php } ?>
    </a>

    <div class="collapse navbar-collapse ml-auto" id="main-navbar">
        <div class="sidebar-brand">
            <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php $alba_redux_demo = get_option('redux_demo');if(isset($alba_redux_demo['logo']['url'])){?>
            <?php  if($alba_redux_demo['logo']['url'] != ''){ ?>
        <img src="<?php echo esc_url($alba_redux_demo['logo']['url']); ?>" alt="Logo" class="logo">
            <?php }else{ ?>
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo" class="logo">
            <?php }?>
            <?php }else{ ?>
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo" class="logo">
            <?php } ?>
    </a>
        </div>

        <?php 
                  wp_nav_menu( 
                  array( 
                        'theme_location' => 'primary',
                        'container' => '',
                        'menu_class' => '', 
                        'menu_id' => '',
                        'menu'            => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'echo'            => true,
                         'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                         'walker'            => new alba_wp_bootstrap_navwalker(),
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul  class="nav navbar-nav ml-auto  %2$s">%3$s</ul>',
                        'depth'           => 0,        
                    )
                 ); ?>
    </div>
</div>

</nav>