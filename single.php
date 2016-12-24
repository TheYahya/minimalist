<?php
if ('single.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
	die('Please do not load this page directly. Thanks! :)');
}

?>

<?php get_header();?>
	<?php if (have_posts()) {
	while (have_posts()) {the_post();?>
		<div id="base-wrapper">
					<article class="post">
						<header class="post-header">
							<h1 class="post-title"><?php the_title();?></h1>
						</header>
						<div class="post-content">
							<?php the_content();?>
						</div>
						<span class="post-date"><?php the_date('l، j F Y')?></span>
						|
						<span class="categories"><?php the_category('، ');?></span>
					</article>
					<p id="tags"><?php the_tags('<span>برچست‌ها:</span> ', ', ', '<br />');?></p>
					<?php comments_template();?>
		</div>
	<?php }
}
?>

<?php get_footer();?>