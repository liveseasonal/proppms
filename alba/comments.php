<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<?php if ( have_comments() ) : ?>
<div class="post-comments p-4 bg-6 arrow top">              
        <div class="media-list color-5 alpha-5">
          <?php wp_list_comments('callback=alba_theme_comment'); ?>
          <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
            <div class="text-center">
              <ul class="pagination">
                <li>
                  <?php //Create pagination links for the comments on the current post, with single arrow heads for previous/next
                  paginate_comments_links( array('prev_text' => '<i class="fa fa-angle-left"></i>', 'next_text' => '<i class="fa fa-angle-right"></i>'));  ?>
                </li> 
              </ul>
            </div>
<?php endif; // Check for comment navigation ?>
<?php if ( ! comments_open() && get_comments_number() ) : ?>
                    <p class="no-comments"><?php echo esc_html__( 'Comments are closed.' , 'alba' ); ?></p>
                <?php endif; ?> 
        </div><!-- End Comments -->
    </div>
<?php endif; ?>
<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => '',        
                'class_form' => 'comments-form',                         
                'title_reply'=> esc_html__( 'Leave a comment', 'alba' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="row">
        <div class="form-group col-12 col-md-6">
            <input class="form-control" type="text" placeholder="'.esc_html__('Name', 'alba').'">
        </div>',
                    'email' => '<div class="form-group col-12 col-md-6">
            <input class="form-control" type="text" placeholder="'.esc_html__('Email', 'alba').'">
        </div>
    </div>'  ,                                                                                 
                ) ),   
                'comment_field' => '<div class="form-group">
            <textarea name="comment"'.$aria_req.' placeholder="'.esc_html__('Comments', 'alba').'" class="form-control" rows="4"></textarea>
          </div>',                    
                 'label_submit' => esc_html__( 'Post your comment', 'alba' ),
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>
    <?php if ( comments_open() ) : ?>
    <?php comment_form($comment_args); ?>

<?php endif; ?> 