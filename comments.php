<?php
//git origin
/**
 * The template for displaying Comments.
 *
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<div id="comments" class="comments-area">
    <?php // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            if( 1 == get_comments_number() ) {
                printf( __ (' 1پست :'), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            }
            else {
                printf(__('تعداد پست'), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            }
            ?>
        </h2>
        <ol class="commentlist">
            <?php wp_list_comments( array( 'callback' => '', 'style' => 'ol' ) ); ?>
        </ol><!-- .commentlist -->
        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <ul class="default-wp-page clearfix">
                <h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'travelify' ); ?></h1>
                <li class="previous"><?php previous_comments_link( __( '&larr; Older Comments', 'travelify' ) ); ?></li>
                <li class="next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'travelify' ) ); ?></li>
            </ul>
        <?php endif; // check for comment navigation
    // If comments are closed and there are comments, let's leave a little note.

    elseif ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="nocomments"><?php _e( 'Comments are closed'); ?></p>
    <?php endif;
    $args = array(
        'label_submit'=>'ارسال',
        'class_submit'         => 'btn btn-primary',
        'fields' => apply_filters(
            'comment_form_default_fields', array(
                'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="" name="author" type="text" value="' .
                    esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                    '<label for="author">' . __( 'نام' ) . '</label> ' .
                    ( $req ? '<span class="required">*</span>' : '' )  .
                    '</p>'
            ,
                'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' />'  .
                    '<label for="email">' . __( 'پست الکترونیک' ) . '</label> ' .
                    ( $req ? '<span class="required">*</span>' : '' )
                    .
                    '</p>',
                'url'    => '<p class="comment-form-url">' .
                    '<input id="url" name="url" placeholder="" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
                    '<label for="url">' . __( 'وبسایت', 'domainreference' ) . '</label>' .
                    '</p>'
            )
        ),
        'comment_field' => '<p class="comment-form-comment">' .
            '<label for="comment">' . __( 'برای ما پیامی بفرستید' ) . '</label>' .
            '<textarea id="comment" name="comment" placeholder="" cols="45" rows="8" aria-required="true"></textarea>' .
            '</p>',
        'comment_notes_after' => '',
    );
    comment_form($args); ?>
</div><!-- #comments .comments-area -->