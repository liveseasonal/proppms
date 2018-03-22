<?php
$output = $el_class = $width = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'width' => '1/1',
    'wap_class' => '',
	'column_id' => '',
	'title' =>'',
	'subtitle' =>'',
	'type' => '',
    'image' => '',
), $atts));

if($type == 'column'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="'.$css_class.'  '.$wap_class.'" id="'.$column_id.'" >';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'choose'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-12 col-md-5 col-lg-5 ml-lg-auto order-md-2">
                <nav class="nav flex-md-column nav-pills nav-fill">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</nav> </div>'.$this->endBlockComment($el_class) . "\n";

}elseif($type == 'tab-content'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-12 col-md-7 col-lg-5 order-md-1">
                <div class="tab-content" id="myTabContent">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> </div>'.$this->endBlockComment($el_class) . "\n";

}elseif($type == 'unstyled'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-12 col-lg-5 '.$wap_class.'">
                <h2 class="regular">'.htmlspecialchars_decode(esc_attr($title)).'</h2>
                <p class="lead">'.htmlspecialchars_decode(esc_attr($subtitle)).'</p>

                <br>
                <ul class="list list-unstyled">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</ul>
            </div>'.$this->endBlockComment($el_class) . "\n";

}else{
	$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

}
echo $output;