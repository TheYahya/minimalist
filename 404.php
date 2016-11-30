<?php
	if('single.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks! :)');
?>

<?php get_header(); ?> 
		<div id="base-wrapper"> 
			<article class="post">
				<h1>خطای 404</h1>
				<h3>صفحه‌ی مورد نظر یافت نشد! <a href="<?php bloginfo('url'); ?>">_ بازگشت به صفحه اصلی _</a></h3>
			</article>  
		</div>  

<?php get_footer(); ?>