<?php 
$textdoimain = 'alba';
global $pre_text;

$pre_text = 'VG ';


// add
if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Header", 'alba'),
   "base" => "header",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'alba' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'alba' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Button", 'alba'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Button", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button ", 'alba'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button ", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Button 2", 'alba'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link Button 2", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button 2", 'alba'),
      "param_name" => "textbutton2",
      "value" => "",
      "description" => __("Text Button 2", 'alba')
   ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Header 2", 'alba'),
   "base" => "header2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'alba' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'alba' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Content', 'alba' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image Content from media library to do your signature.', 'alba' )
      ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Header 4", 'alba'),
   "base" => "header4",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'alba' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'alba' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image Content', 'alba' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image Content from media library to do your signature.', 'alba' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Button", 'alba'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Button", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button ", 'alba'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button ", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Button 2", 'alba'),
      "param_name" => "link2",
      "value" => "",
      "description" => __("Link Button 2", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button 2", 'alba'),
      "param_name" => "textbutton2",
      "value" => "",
      "description" => __("Text Button 2", 'alba')
   ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Gallery", 'alba'),
   "base" => "gallery",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_images',
         'heading' => __( 'Gallery', 'alba' ),
         'param_name' => 'post_gallery',
         'value' => '',
         'description' => __( 'Select image Gallery from media library to do your signature.', 'alba' )
      ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Section", 'alba'),
   "base" => "section",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'alba'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'alba')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'alba' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'alba' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Button", 'alba'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Button", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button ", 'alba'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button ", 'alba')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Section', 'alba' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type1', 'alba' ) => 'type1',
            __( 'Type2', 'alba' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'alba' )
      ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial", 'alba'),
   "base" => "testimonial",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("description", 'alba'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("description", 'alba')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'alba' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'alba' )
      ), 
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial 2", 'alba'),
   "base" => "testimonial2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text testimonial", 'alba'),
      "param_name" => "testimonial",
      "value" => "",
      "description" => __("Text testimonial", 'alba')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'alba' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'alba' )
      ), 
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Feature", 'alba'),
   "base" => "feature",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'alba' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'alba' )
      ), 
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Tab Feature", 'alba'),
   "base" => "tab_feature",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("ID tab content", 'alba'),
      "param_name" => "id",
      "value" => "",
      "description" => __("ID tab content", 'alba')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Active', 'alba' ),
         'param_name' => 'active',
         'value' => array(
            __( 'No', 'alba' ) => 'de-active',
            __( 'Yes', 'alba' ) => 'active',
         ),
         'description' => __( 'Select field do you want Order.', 'alba' )
      ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Tab Content", 'alba'),
   "base" => "tab_content",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("ID tab content", 'alba'),
      "param_name" => "id",
      "value" => "",
      "description" => __("ID tab content", 'alba')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'alba' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'alba' )
      ), 
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Active', 'alba' ),
         'param_name' => 'active',
         'value' => array(
            __( 'No', 'alba' ) => 'de-active',
            __( 'Yes', 'alba' ) => 'active',
         ),
         'description' => __( 'Select field do you want Order.', 'alba' )
      ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."FAQ", 'alba'),
   "base" => "faq",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."List detail", 'alba'),
   "base" => "list",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'alba'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'alba')
   ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Slider section", 'alba'),
   "base" => "gallery2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_images',
         'heading' => __( 'Gallery Slider', 'alba' ),
         'param_name' => 'post_gallery',
         'value' => '',
         'description' => __( 'Select image Gallery from media library to do your signature.', 'alba' )
      ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."List Content", 'alba'),
   "base" => "list2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'alba' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'alba' )
      ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Pricing Text", 'alba'),
   "base" => "pricing1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'alba'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle 2", 'alba'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Button", 'alba'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Button", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button ", 'alba'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button ", 'alba')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Pricing Plan", 'alba'),
   "base" => "pricing2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Price", 'alba'),
      "param_name" => "price",
      "value" => "",
      "description" => __("Price", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Slide Price", 'alba'),
      "param_name" => "slider",
      "value" => "",
      "description" => __("Text Slide Price", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Details 1", 'alba'),
      "param_name" => "detail1",
      "value" => "",
      "description" => __("Text Details 1", 'alba')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Check Details 1", 'alba'),
      "param_name" => "check1",
      "value" => "",
      "description" => __("Check Details 1", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Details 2", 'alba'),
      "param_name" => "detail2",
      "value" => "",
      "description" => __("Text Details 2", 'alba')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Check Details 2", 'alba'),
      "param_name" => "check2",
      "value" => "",
      "description" => __("Check Details 2", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Details 3", 'alba'),
      "param_name" => "detail3",
      "value" => "",
      "description" => __("Text Details 3", 'alba')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Check Details 3", 'alba'),
      "param_name" => "check3",
      "value" => "",
      "description" => __("Check Details 3", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Details 4", 'alba'),
      "param_name" => "detail4",
      "value" => "",
      "description" => __("Text Details 4", 'alba')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Check Details 4", 'alba'),
      "param_name" => "check4",
      "value" => "",
      "description" => __("Check Details 4", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Details 5", 'alba'),
      "param_name" => "detail5",
      "value" => "",
      "description" => __("Text Details 5", 'alba')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Check Details 5", 'alba'),
      "param_name" => "check5",
      "value" => "",
      "description" => __("Check Details 5", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Button", 'alba'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Button", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button ", 'alba'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button ", 'alba')
   ),
   array(
      "type" => "checkbox",
      "holder" => "div",
      "class" => "",
      "heading" => __("Check Best Value", 'alba'),
      "param_name" => "best",
      "value" => "",
      "description" => __("Check Best Value", 'alba')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Pricing Section", 'alba'),
   "base" => "pricing3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'alba'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Details 1", 'alba'),
      "param_name" => "detail1",
      "value" => "",
      "description" => __("Text Details 1", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Details 2", 'alba'),
      "param_name" => "detail2",
      "value" => "",
      "description" => __("Text Details 2", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Details 3", 'alba'),
      "param_name" => "detail3",
      "value" => "",
      "description" => __("Text Details 3", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Details 4", 'alba'),
      "param_name" => "detail4",
      "value" => "",
      "description" => __("Text Details 4", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Details 5", 'alba'),
      "param_name" => "detail5",
      "value" => "",
      "description" => __("Text Details 5", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'alba'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Pricing", 'alba'),
      "param_name" => "price",
      "value" => "",
      "description" => __("Text Pricing", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Button", 'alba'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Button", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button ", 'alba'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button ", 'alba')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog", 'alba'),
   "base" => "blog",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'alba'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'alba')
   ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'alba'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'alba')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'alba' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'alba' ) => 'DESC',
            __( 'ASC : lowest to highest', 'alba' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'alba' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'alba' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'alba' ) => 'date',
            __( 'Title', 'alba' ) => 'title',
            __( 'Random', 'alba') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'alba' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Google Maps", 'alba'),
   "base" => "map",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'alba'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("address", 'alba'),
      "param_name" => "address",
      "value" => "",
      "description" => __("address", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("latitude", 'alba'),
      "param_name" => "lat",
      "value" => "",
      "description" => __("latitude", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("longitude", 'alba'),
      "param_name" => "long",
      "value" => "",
      "description" => __("longitude", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Zoom", 'alba'),
      "param_name" => "zoom",
      "value" => "",
      "description" => __("Zoom", 'alba')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Map Marker', 'alba' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'alba' )
      ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Contact Info", 'alba'),
   "base" => "contact",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'alba'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Content 1", 'alba'),
      "param_name" => "content1",
      "value" => "",
      "description" => __("Content 1", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'alba'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'alba')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Content 2", 'alba'),
      "param_name" => "content2",
      "value" => "",
      "description" => __("Content 2", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Button", 'alba'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link Button", 'alba')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button ", 'alba'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Button ", 'alba')
   ),
    )));
}