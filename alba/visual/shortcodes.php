<?php 
$textdoimain = 'alba';
$alba_redux_demo = get_option('redux_demo');
global $pre_text;

$pre_text = 'VG ';
//add

//Sention Hero
add_shortcode('header', 'header_func');
function header_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'link' => '',
        'textbutton' => '',
        'link2' => '',
        'textbutton2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?>
    <div class="header hd-1 section parallax image-background cover p100-bottom overlay overlay-3 alpha-9 color-1" style="background-image: url(<?php echo esc_url($images[0]);?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-7">
                <h1 class="font-lg color-1"><?php echo htmlspecialchars_decode(esc_attr($title));?></h1>
                <p class="lead"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                <nav class="nav mt-5">
                    <a href="<?php echo esc_url($link); ?>" class="nav-link p-3 mr-2 btn btn-rounded btn-success">
                        <?php echo htmlspecialchars_decode(esc_attr($textbutton));?>
                    </a>
                    <a href="<?php echo esc_url($link2); ?>" class="nav-link p-3 btn btn btn-rounded btn-1">
                        <?php echo htmlspecialchars_decode(esc_attr($textbutton2));?>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php  return ob_get_clean();
}  

add_shortcode('header2', 'header2_func');
function header2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'image2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?>
    <div class="fullscreen header hd-2 is-fixed-navbar image-background cover d-flex align-items-end overflow-hidden parallax overlay overlay-1 alpha-8 b-b" style="background-image: url(<?php echo esc_url($images[0]);?>);">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1 class="display-4"><?php echo htmlspecialchars_decode(esc_attr($title));?></h1>

                <p class="lead mb-5"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
            </div>

            <div class="col-12">
                <div class="mockup">
                    <img class="img-responsive shadow mt-5 mx-auto" src="<?php echo esc_url($images2[0]);?>" alt="..." data-aos="fade-up" data-aos-offset="0">
                </div>
            </div>
        </div>
    </div>
</div>
<?php  return ob_get_clean();
}  

add_shortcode('header4', 'header4_func');
function header4_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
        'image2' => '',
        'link' => '',
        'textbutton' => '',
        'link2' => '',
        'textbutton2' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    $images2 = wp_get_attachment_image_src($image2,''); 
    ?>
    <div class="header hd-4 section parallax image-background cover p100-bottom overlay overlay-3 alpha-9 color-1" style="background-image: url(<?php echo esc_url($images[0]);?>);">
    <div class="container overflow-hidden pb-md-0">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="font-md color-1"><?php echo htmlspecialchars_decode(esc_attr($title));?></h1>

                <div class="mockup absolute-md-up">
                    <img class="img-responsive shadow mt-5 mx-auto" src="<?php echo esc_url($images2[0]);?>" alt="..." data-aos="fade-left" data-aos-offset="0">
                </div>

                <div class="hero-text">
                    <p class="lead"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                    <nav class="nav mt-5">
                        <a href="<?php echo esc_url($link); ?>" class="nav-link p-3 mr-2 btn btn-rounded btn-success">
                        <?php echo htmlspecialchars_decode(esc_attr($textbutton));?>
                    </a>
                    <a href="<?php echo esc_url($link2); ?>" class="nav-link p-3 btn btn btn-rounded btn-1">
                        <?php echo htmlspecialchars_decode(esc_attr($textbutton2));?>
                    </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  return ob_get_clean();
}  

add_shortcode('gallery', 'gallery_func');
function gallery_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'post_gallery' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php $gallery = shortcode_atts( 
                    array(
                        'post_gallery'      =>  'post_gallery',
                    ), $atts );
        if($gallery !=''){ ?>
    <section class="integration bg-6 alpha-4 b-b">
    <div class="container d-flex flex-row align-items-center justify-content-between py-3">
    <?php 
        $image_ids=explode(',',$gallery['post_gallery']);
        $sigle_img = wp_get_attachment_image_src($image_ids[0], ""); ?>
        <img src="<?php echo esc_url($sigle_img[0]);?>" alt="">
        <?php
        for($i=1;$i<=99;$i++)
        {
         if($image_ids[$i]!="")
          {
          $imgs = wp_get_attachment_image_src($image_ids[$i], ""); ?>
        <img src="<?php echo esc_url($imgs[0]);?>" alt="">
        <?php
          }
        } ?>
    </div>
    </section>
    <?php } ?>
<?php  return ob_get_clean();
}  

add_shortcode('section', 'section_func');
function section_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
        'link' => '',
        'textbutton' => '',
        'type' => 'type1',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php if($type == 'type2'){ ?>
    <section class="section">
    <div class="container-wide">
        <div class="row align-items-center text-center text-lg-left">
            <div class="col-10 col-lg-4 mx-auto order-md-2">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>

                <a href="<?php echo esc_url($link); ?>" class="btn btn-rounded"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
            </div>

            <div class="col-12 col-lg-6 pr-0 order-md-1">
                <img src="<?php echo esc_url($images[0]);?>" alt="" class="img-responsive shadow" data-aos="fade-right">
            </div>
        </div>
    </div>
</section>
<?php }else{ ?>
<section class="section">
    <div class="container-wide">
        <div class="row align-items-center text-center text-lg-left">
            <div class="col-10 col-lg-4 mx-auto">
                <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>

                <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                <p><?php echo htmlspecialchars_decode(esc_attr($desc));?></p>

                <a href="<?php echo esc_url($link); ?>" class="btn btn-rounded"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
            </div>

            <div class="col-12 col-lg-6 pr-0">
                <img src="<?php echo esc_url($images[0]);?>" alt="" class="img-responsive shadow" data-aos="fade-left">
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php  return ob_get_clean();
}  

add_shortcode('testimonial', 'testimonial_func');
function testimonial_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'desc' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <section class="singl-testimonial testimonial-1">
    <div class="container-fluid py-0">
        <div class="row align-items-center bg-4 alpha-6 color-1">
            <div class="col-10 col-md-3 text">
                <p class="text-uppercase mb-0"><?php echo htmlspecialchars_decode(esc_attr($title));?></p>

                <p class="font-md bold mt-1 color-1">
                    <?php echo htmlspecialchars_decode(esc_attr($subtitle));?>
                </p>

                <hr class="my-4">
                <cite class="small bold">
                    <span class="color-1"><?php echo htmlspecialchars_decode(esc_attr($desc));?>
                </cite>
            </div>

            <div class="col-12 col-md-7 image-background cover" style="background-image: url(<?php echo esc_url($images[0]);?>);"></div>
        </div>
    </div>
    </section>
<?php  return ob_get_clean();
}  

add_shortcode('testimonial2', 'testimonial2_func');
function testimonial2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'testimonial' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <section class="singl-testimonial testimonial-2">
    <div class="container-fluid py-0">
        <div class="row align-items-center bg-3 alpha-6 color-1">
            <div class="col-12 col-md-7 image-background cover" style="background-image: url(<?php echo esc_url($images[0]);?>);"></div>

            <div class="col-10 col-md-3 text">
                <blockquote class="bold mt-1 color-1">
                    <?php echo htmlspecialchars_decode(esc_attr($testimonial));?>
                </blockquote>

                <hr class="my-4">
                <cite class="small bold">
                    <span class="color-1"><?php echo htmlspecialchars_decode(esc_attr($title));?>
                </cite>
            </div>
        </div>
    </div>
</section>
<?php  return ob_get_clean();
}  

add_shortcode('feature', 'feature_func');
function feature_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <img src="<?php echo esc_url($images[0]);?>" class="icon m-0" alt="">
    <h5 class="regular accent my-3"><?php echo htmlspecialchars_decode(esc_attr($title));?></h5>
    <p class="my-0"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
<?php  return ob_get_clean();
}  

add_shortcode('tab_feature', 'tab_feature_func');
function tab_feature_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'id' => '',
        'active' => 'no',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <a class="nav-item text-left nav-link py-3 my-3 <?php echo esc_attr($active); ?>" data-toggle="tab" href="#<?php echo esc_attr($id); ?>">
        <h4 class="bold"><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
        <p class="my-0 d-none d-md-block"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
    </a>
<?php  return ob_get_clean();
} 

add_shortcode('tab_content', 'tab_content_func');
function tab_content_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'id' => '',
        'image' => '',
        'active' => 'no',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <div class="tab-pane fade show <?php echo esc_attr($active); ?>" id="<?php echo esc_attr($id); ?>">
        <img class="img-responsive p-4" src="<?php echo esc_url($images[0]);?>" alt="">
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('faq', 'faq_func');
function faq_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <li>
        <h5 class="bold"><?php echo htmlspecialchars_decode(esc_attr($title));?></h5>
        <p class="mt-1"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
    </li>
<?php  return ob_get_clean();
} 

add_shortcode('list', 'list_func');
function list_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'icon' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <li class="py-2">
        <i class="<?php echo esc_attr($icon); ?>"></i>
        <span><?php echo htmlspecialchars_decode(esc_attr($title));?></span>
    </li>
<?php  return ob_get_clean();
} 

add_shortcode('gallery2', 'gallery2_func');
function gallery2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'post_gallery' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php $gallery = shortcode_atts( 
                    array(
                        'post_gallery'      =>  'post_gallery',
                    ), $atts );
        if($gallery !=''){ ?>
    <div class="col-12 col-lg-7 order-md-1">
        <div class="swiper-container pagination-out shadow">
            <div class="swiper-wrapper">
            <?php 
        $image_ids=explode(',',$gallery['post_gallery']);
        $sigle_img = wp_get_attachment_image_src($image_ids[0], ""); ?>
                <div class="swiper-slide"><img class="img-responsive" src="<?php echo esc_url($sigle_img[0]);?>" alt="..."></div>
                <?php
        for($i=1;$i<=99;$i++)
        {
         if($image_ids[$i]!="")
          {
          $imgs = wp_get_attachment_image_src($image_ids[$i], ""); ?>
                <div class="swiper-slide"><img class="img-responsive" src="<?php echo esc_url($imgs[0]);?>" alt="..."></div>
                <?php
          }
        } ?>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
<?php } ?>
<?php  return ob_get_clean();
} 

add_shortcode('list2', 'list2_func');
function list2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'image' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <li class="media marb-30">
        <img class="d-flex mr-3 icon icon-lg" src="<?php echo esc_url($images[0]);?>" alt="">

        <div class="media-body">
            <h5 class="bold mt-0 mb-1"><?php echo htmlspecialchars_decode(esc_attr($title));?></h5>
            <p class="m-0"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>
        </div>
    </li>
<?php  return ob_get_clean();
} 

add_shortcode('pricing1', 'pricing1_func');
function pricing1_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'title2' => '',
        'subtitle2' => '',
        'link' => '',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <h4 class="bold_block"><?php echo htmlspecialchars_decode(esc_attr($title));?></h4>
        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

        <hr class="my-5">
        <p class="handwritten font-md"><?php echo htmlspecialchars_decode(esc_attr($title2));?></p>
        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle2));?></p>
        <a class="btn btn-outline-4 btn-rounded p-3 ml-0" href="<?php echo esc_url($link); ?>"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
<?php  return ob_get_clean();
} 

add_shortcode('pricing2', 'pricing2_func');
function pricing2_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'subtitle' => '',
        'price' => '',
        'slider' => '',
        'detail1' => '',
        'check1' => '',
        'detail2' => '',
        'check2' => '',
        'detail3' => '',
        'check3' => '',
        'detail4' => '',
        'check4' => '',
        'detail5' => '',
        'check5' => '',
        'link' => '',
        'textbutton' => '',
        'best' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <?php if($best){ ?>
    <div class="pricing-plan best-value">
                    <!-- <i class="icon fa-building accent"></i> -->
                    <h2 class="accent bold_block"><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
                    <p class="bold italic bg-3 color-1"><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

                    <div class="pricing-details text-center">
                        <span class="pricing-value">
                            <span class="price"><?php echo htmlspecialchars_decode(esc_attr($price));?></span>
                        </span>

                        <div class="slider-price">
                            <p class="small"><span class="bold value"></span> <?php echo htmlspecialchars_decode(esc_attr($slider));?></p>

                            <input type="text"
                                   data-toggle="slider"
                                   data-slider-min="21"
                                   data-slider-max="99"
                                   data-slider-step="1"
                                   data-slider-value="50"
                                   data-slider-tooltip="hide"/>
                        </div>

                        <ul class="list list-unstyled list-features">
                            <?php if($detail1){ ?>
                <li class="<?php if($check1 ==''){echo esc_html__('strike','alba');} ?> "><?php echo htmlspecialchars_decode(esc_attr($detail1));?></li>
                <?php } ?>
            <?php if($detail2){ ?>
                <li class="<?php if($check2 ==''){echo esc_html__('strike','alba');} ?> "><?php echo htmlspecialchars_decode(esc_attr($detail2));?></li>
                <?php } ?>
            <?php if($detail3){ ?>
                <li class="<?php if($check3 ==''){echo esc_html__('strike','alba');} ?> "><?php echo htmlspecialchars_decode(esc_attr($detail3));?></li>
                <?php } ?>
            <?php if($detail4){ ?>
                <li class="<?php if($check4 ==''){echo esc_html__('strike','alba');} ?> "><?php echo htmlspecialchars_decode(esc_attr($detail4));?></li>
                <?php } ?>
            <?php if($detail5){ ?>
                <li class="<?php if($check5 ==''){echo esc_html__('strike','alba');} ?> "><?php echo htmlspecialchars_decode(esc_attr($detail5));?></li>
                <?php } ?>
                        </ul>

                        <a href="<?php echo esc_url($link); ?>" class="btn btn-rounded btn-accent py-3 px-5"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
                    </div>
                </div>
<?php }else{ ?>

    <div class="pricing-plan">
        <!-- <i class="icon fa-user"></i> -->
        <h2 class="bold_block"><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
        <p><?php echo htmlspecialchars_decode(esc_attr($subtitle));?></p>

        <div class="pricing-details text-center">
            <span class="pricing-value">
                <span class="price"><?php echo htmlspecialchars_decode(esc_attr($price));?></span>
            </span>

            <div class="slider-price">
                <p class="small"><span class="bold value"></span> <?php echo htmlspecialchars_decode(esc_attr($slider));?></p>

                <input type="text"
                       data-toggle="slider"
                       data-slider-min="1"
                       data-slider-max="20"
                       data-slider-step="1"
                       data-slider-value="10"
                       data-slider-tooltip="hide"/>
            </div>

            <ul class="list list-unstyled list-features">
            <?php if($detail1){ ?>
                <li class="<?php if($check1 ==''){echo esc_html__('strike','alba');} ?> "><?php echo htmlspecialchars_decode(esc_attr($detail1));?></li>
                <?php } ?>
            <?php if($detail2){ ?>
                <li class="<?php if($check2 ==''){echo esc_html__('strike','alba');} ?> "><?php echo htmlspecialchars_decode(esc_attr($detail2));?></li>
                <?php } ?>
            <?php if($detail3){ ?>
                <li class="<?php if($check3 ==''){echo esc_html__('strike','alba');} ?> "><?php echo htmlspecialchars_decode(esc_attr($detail3));?></li>
                <?php } ?>
            <?php if($detail4){ ?>
                <li class="<?php if($check4 ==''){echo esc_html__('strike','alba');} ?> "><?php echo htmlspecialchars_decode(esc_attr($detail4));?></li>
                <?php } ?>
            <?php if($detail5){ ?>
                <li class="<?php if($check5 ==''){echo esc_html__('strike','alba');} ?> "><?php echo htmlspecialchars_decode(esc_attr($detail5));?></li>
                <?php } ?>
            </ul>

            <a href="<?php echo esc_url($link); ?>" class="btn btn-rounded btn-outline-3 py-3 px-5"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
        </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
} 

add_shortcode('pricing3', 'pricing3_func');
function pricing3_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'title' => '',
        'title1' => '',
        'detail1' => '',
        'detail2' => '',
        'detail3' => '',
        'detail4' => '',
        'detail5' => '',
        'title2' => '',
        'price' => '',
        'link' => '',
        'textbutton' => '',
    ), $atts));
    ob_start(); 
    $images = wp_get_attachment_image_src($image,''); 
    ?> 
    <section class="pricing">
    <div class="container">
        <div class="section-heading text-center">
            <h2><?php echo htmlspecialchars_decode(esc_attr($title));?></h2>
        </div>

        <div class="border">
            <div class="row py-5">
                <div class="col-sm-5 m-auto">
                    <h4><?php echo htmlspecialchars_decode(esc_attr($title1));?></h4>

                    <ul class="list list-unstyled list-features">
                        <?php if($detail1){ ?>
                        <li><i class="font-regular icon lnr-magic-wand"></i><?php echo htmlspecialchars_decode(esc_attr($detail1));?></li>
                        <?php } ?>
                        <?php if($detail2){ ?>
                        <li><i class="font-regular icon lnr-magic-wand"></i><?php echo htmlspecialchars_decode(esc_attr($detail2));?></li>
                        <?php } ?>
                        <?php if($detail3){ ?>
                        <li><i class="font-regular icon lnr-magic-wand"></i><?php echo htmlspecialchars_decode(esc_attr($detail3));?></li>
                        <?php } ?>
                        <?php if($detail4){ ?>
                        <li><i class="font-regular icon lnr-magic-wand"></i><?php echo htmlspecialchars_decode(esc_attr($detail4));?></li>
                        <?php } ?>
                        <?php if($detail5){ ?>
                        <li><i class="font-regular icon lnr-magic-wand"></i><?php echo htmlspecialchars_decode(esc_attr($detail5));?></li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="col-sm-5 m-auto text-center">
                    <h4><?php echo htmlspecialchars_decode(esc_attr($title2));?></h4>

                    <p class="pricing-value">
                        <span class="price font-xl"><?php echo htmlspecialchars_decode(esc_attr($price));?></span>
                    </p>

                    <!-- <a class="btn btn-lg btn-success">Get started NOW</a> -->
                    <a href="<?php echo esc_url($link); ?>" class="btn btn-rounded btn-accent py-3 px-5"><?php echo htmlspecialchars_decode(esc_attr($textbutton));?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php  return ob_get_clean();
} 