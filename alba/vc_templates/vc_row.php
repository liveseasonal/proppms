<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';
extract(shortcode_atts(array(
    'el_class'        => '',
    'bg_image'        => '',
    'bg_image_repeat' => '',
    'padding'         => '',
    'margin_bottom'   => '',
    'css' => '',
    'wrap_class'=>'',
    'ses_title'=>'',
    'el_id'=>'',
    'type_row' => '',
    'ses_subtitle' => '',
    'ses_desc' => '',
    'ses_image' => '', 
), $atts));

wp_enqueue_script( 'wpb_composer_front_js' );

$el_class = $this->getExtraClass($el_class);
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);
$images = wp_get_attachment_image_src($ses_image,'');
if($type_row == 'type2'){
    $output .= wpb_js_remove_wpautop($content);
    $output .= $this->endBlockComment('row');

}elseif($type_row == 'features'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="section features reasons bg-6 alpha-6">
    <div class="container">
        <div class="section-heading text-center">
            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>
        </div>

        <div class="row text-center">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
    </div>
</section>';

}elseif($type_row == 'choose'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="section b-b">
    <div class="container">
        <div class="text-center">
            <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>
            <p class="lead mb-5">'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>
        </div>

        <div class="row align-items-center">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
    </div>
</section>';

}elseif($type_row == 'faqs'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="section faqs bold-text">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>

                <p class="lead">'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                <p class="text-muted">'.htmlspecialchars_decode(esc_attr($ses_desc)).'</p>
            </div>

            <div class="col-12 col-md-8">
                <ul class="list list-unstyled">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</ul>
            </div>
        </div>
    </div>
</section>';

}elseif($type_row == 'form'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="section sign-up bg-6 alpha-7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-4 ml-auto d-flex order-md-2">
                <p class="handwritten m-auto dis-block">'.htmlspecialchars_decode(esc_attr($ses_desc)).'</p>
            </div>

            <div class="col-12 col-md-8 order-md-1 bold-text">
                <h2>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h2>
                <p>'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

                <div class="form-wrap">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </div>
    </div>
</section>';

}elseif($type_row == 'section'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="section bg-6 alpha-6">
    <div class="container">
        <div class="row align-items-center">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
    </div>
</section>';

}elseif($type_row == 'section2'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="section">
    <div class="container-wide">
        <div class="row align-items-center text-center text-lg-left">
            <div class="col-10 col-lg-4 mx-auto">
                <div class="section-heading">
                    <h4>'.htmlspecialchars_decode(esc_attr($ses_title)).'</h4>
                </div>

                <ul class="list-unstyled">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</ul>
            </div>

            <div class="col-12 col-lg-6 pr-0">
                <img src="'.esc_url($images[0]).'" alt="" class="img-responsive shadow" data-aos="fade-left">
            </div>
        </div>
    </div>
</section>';

}elseif($type_row == 'form2'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="fullscreen header hd-3 d-flex align-items-center is-fixed-navbar image-background cover parallax overlay overlay-5 alpha-7" style="background-image: url('.esc_url($images[0]).')">
    <div class="container color-1">
        <h1 class="display-4">'.htmlspecialchars_decode(esc_attr($ses_title)).'</h1>

        <p class="lead">'.htmlspecialchars_decode(esc_attr($ses_subtitle)).'</p>

        <br>
        <div class="form-wrap mt-5">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
    </div>
</div>';

}elseif($type_row == 'pricing'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="section pricing">
    <div class="container">
        <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
    </div>
</section>';

}else{
    $output .= wpb_js_remove_wpautop($content);
    $output .= $this->endBlockComment('row');

}
echo $output; 