<?php
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
?>
<div id="comments">



 
<?php 

	$comments = get_comments(array(
		'post_id'=>get_the_ID(), 
		'order'=>'ASC',
	));
?>
<?php foreach($comments as $comment){?>
	<!--<div class="comment">
		<div class="head">
		<?php echo get_avatar( $comment, 32 ); ?>
		<?php if($comment->comment_author_url != null){?>
			<span class="comment-author"><a href="<?php echo $comment->comment_author_url ?>"><?php echo($comment->comment_author);?></a></span>
		<?php } else {?>
			<span class="comment-author"><?php echo($comment->comment_author);?></span>
		<?php } ?>
		<?php $commentedUserInfo = get_user_by('id' ,$comment->user_id); ?>
		<?php if($commentedUserInfo->caps['administrator']){ echo '<span class="admin-label">admin</span>';} ?>
		</div>
		<div class="content">
			<?php echo $comment->comment_content; ?>
		</div>
	</div>-->  
<?}?> 







<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
 
	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'یک اظهارنظر', ' ', ' ' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s اظهارنظر',
							'%1$s اظهارنظر',
							$comments_number,
							' ',
							' '
						),
						number_format_i18n( $comments_number ),
						' '
					);
				}
			?>
		</h2>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 32,
					'style'       => 'ul',
					'short_ping'  => true,
					'reply_text'  => 'پاسخ',
				));
			?>
		</ul>

		<?php the_comments_pagination( array(
			'prev_text' => '<' . '<span class="screen-reader-text">' . __( 'Previous', 'twentyseventeen' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'twentyseventeen' ) . '</span>' . '>',
		));
	endif; // Check for have_comments().
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyseventeen' ); ?></p>
	<?php
	endif;
	 
	?> 





<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php if ($user_ID){ ?>
		<p>نام کاربری شما: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout">خروج »</a></p>
	<?php }else{ ?> 
		<input type="text" name="author" value="<?php echo $comment_author; ?>" placeholder="نام (لازم)"> 
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" placeholder="ایمیل (لازم)"> 
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" placeholder="آدرس اینترنتی">
	<?php } ?>

	<textarea name="comment" id="comment"   rows="4" tabindex="4" placeholder="متن نظر..."></textarea>
	<div id="send-button-wrapper">
		<input name="submit" type="submit" id="submit" tabindex="5" value="ارسال نظر" />
	</div>
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p> 
</form>


</div>


<?php
//echo '<pre>';
//print_r($comments);
//echo '</pre>';
?>

