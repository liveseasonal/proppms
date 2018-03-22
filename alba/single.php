<?php
/**
 * The Template for displaying all single posts
 */
 $alba_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
$author_img = get_post_meta(get_the_ID(),'_cmb_author_img', true);
$author_title = get_post_meta(get_the_ID(),'_cmb_author_title', true);
$author_desc = get_post_meta(get_the_ID(),'_cmb_author_desc', true);
$post_twitter = get_post_meta(get_the_ID(),'_cmb_post_twitter', true);
$post_facebook = get_post_meta(get_the_ID(),'_cmb_post_facebook', true);
$post_google = get_post_meta(get_the_ID(),'_cmb_post_google', true);
$sidebar_post = get_post_meta(get_the_ID(),'_cmb_sidebar_post', true);
?>
<main>
    <header class="section color-1 blog-single-header image-background center-bottom pb-none" style=" background-color: #2C3E50;">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 mx-md-auto">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <p class="color-1 alpha-5"><?php the_author(); ?> | <?php the_time(get_option( 'date_format' ));?></p>
            </div>
        </div>
    </div>
</header>

<?php if($sidebar_post =='without'){ ?>

<section class="post-content">
    <div class="container">
<div class="alba-post">
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
</div>
    </div>
</section>

<?php if($author_img){ ?>
<section class="post-author">
    <div class="container py-5 b-t b-2x">
        <div class="media align-items-center">
    <img class="d-flex mr-3 rounded-circle shadow" src="<?php echo esc_url($author_img) ?>" alt="...">
    <div class="media-body">
        <h5 class="mt-0 bold"><?php echo htmlspecialchars_decode( esc_attr($author_title)); ?></h5>
        <small class="text-muted"><?php echo htmlspecialchars_decode( esc_attr($author_desc)); ?></small>
    </div>
</div>
    </div>
</section>
<?php } ?>

<section class="post-details">
    <div class="container py-5 b-t">
        <div class="tags">
    <ul class="list-unstyled d-flex flex-wrap flex-row single-tags">
        <?php the_tags('Tags:',''); ?>
    </ul>
</div>

<?php if($post_twitter || $post_facebook || $post_google){ ?>
<ul class="list-unstyled d-flex flex-wrap flex-row align-items-center">
    <li class="mr-4"><?php if(isset($alba_redux_demo['blog_share'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($alba_redux_demo['blog_share']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Share:', 'alba' );
                                    }
                                    ?></li>
    <li>
        <a href="<?php echo esc_url($post_twitter); ?>" class="twitter">
            <i class="icon icon-md circle fa-twitter"></i>
        </a>
    </li>
    <li>
        <a href="<?php echo esc_url($post_facebook); ?>" class="facebook">
            <i class="icon icon-md circle fa-facebook"></i>
        </a>
    </li>
    <li>
        <a href="<?php echo esc_url($post_google); ?>" class="googlePlus">
            <i class="icon icon-md circle fa-google-plus"></i>
        </a>
    </li>
</ul>
<?php } ?>
    </div>
</section>
<section class="post-comments bg-6 ">
    <div class="container no-sidebar">
        <div class="row">
            <div class="col-lg-8 mx-lg-auto">
              <?php comments_template();?> 
            </div>
        </div>
    </div>
</section>

<?php }else{ ?>
    <section class="section blog single">
    <div class="container">
        <div class="row">
        <?php if($sidebar_post =='left'){ ?>
        <div class="col-lg-8 b-l order-lg-2"><?php }else{ ?>
            <div class="col-lg-8 b-r">
            <?php } ?>
                <div class="post-content pb-5">
<div class="alba-post">
    <?php if ( has_post_thumbnail() ) { ?>
    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"   class="img-responsive single-image">
            <?php } ?>
            <?php if ( is_sticky() )
     echo '<span class="featured-post">' . esc_html__( 'Sticky', 'alba' ) . '</span>';
     ?>
          <?php the_content(); ?>
          <?php wp_link_pages(); ?>
</div>

                </div>
<?php if($author_img){ ?>
                <div class="post-author py-5 b-t b-2x">
                    <div class="media align-items-center">
    <img class="d-flex mr-3 rounded-circle shadow" src="<?php echo esc_url($author_img) ?>" alt="...">
    <div class="media-body">
        <h5 class="mt-0 bold"><?php echo htmlspecialchars_decode( esc_attr($author_title)); ?></h5>
        <small class="text-muted"><?php echo htmlspecialchars_decode( esc_attr($author_desc)); ?></small>
    </div>
</div>
                </div>
<?php } ?>
                <div class="post-details py-5 b-t post-tags">
                    <div class="tags">
    <ul class="list-unstyled d-flex flex-wrap flex-row single-tags">
    <?php the_tags('Tags:',''); ?>
    </ul>
</div>
<?php if($post_twitter || $post_facebook || $post_google){ ?>
<ul class="list-unstyled d-flex flex-wrap flex-row align-items-center">
    <li class="mr-4"><?php if(isset($alba_redux_demo['blog_share'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($alba_redux_demo['blog_share']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Share:', 'alba' );
                                    }
                                    ?></li>
    <li>
        <a href="<?php echo esc_url($post_twitter); ?>" class="twitter">
            <i class="icon icon-md circle fa-twitter"></i>
        </a>
    </li>
    <li>
        <a href="<?php echo esc_url($post_facebook); ?>" class="facebook">
            <i class="icon icon-md circle fa-facebook"></i>
        </a>
    </li>
    <li>
        <a href="<?php echo esc_url($post_google); ?>" class="googlePlus">
            <i class="icon icon-md circle fa-google-plus"></i>
        </a>
    </li>
</ul>
<?php } ?>
                </div>

                <?php comments_template();?>  
            </div>

            <div class="col-lg-4">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</section>
<?php } ?>


</main>
<?php endwhile; ?>
   <?php
get_footer();
?>