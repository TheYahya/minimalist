<?php
	if('header.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks! :)');
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="content-language" content="fa">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '&raquo;', true, '' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/font/fontello/css/fontello.css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('title') ?>" href="<?php bloginfo('url') ?>/feed/" />
    <?php wp_head();?> 
<head>
<body dir="rtl">
	<div id="slide-menu">
		<div id="slide-menu-wrapper">
			<div class="header">
				<h3 class="title"><a href="<?php echo bloginfo('url');?>"><?php echo bloginfo('title') ?></a></h3>
				<h4 class="desc"><?php echo bloginfo('description');?></h4>
			</div> 
			<?php $pages = get_pages(array(
				'sort_order'=>'ASC',
				'post_type'=>'page',
				'post_status'=>'publish',
			));?>
			<h5 class="sub-title">برگه‌ها</h5>
			<ul class="categories"> 
			  <?php foreach ($pages as $page) {?>
			  	<li><h3><a href="<?php echo get_page_link($page->ID); ?>"><?php echo $page->post_title; ?></a></h3></li>
			  <? } ?>
			</ul> 
			<?php $categories = get_categories();?>
			<h5 class="sub-title">دسته‌ها</h5>
			<ul class="categories"> 
			  <?php foreach ($categories as $category) {?>
			  	<li><h3><a href="<?php echo get_category_link($category); ?>"><?php echo $category->name; ?></a></h3></li>
			  <? } ?>
			</ul>
			<h5 class="sub-title">تگ‌ها</h5>
			<div class="tags-cloud">
				<?php wp_tag_cloud( $args ); ?>
			</div>
 
		</div>
  </div>
	<div id="main">
		<form id="search-form"> 
			<input type="search" name="s" placeholder="جستجو..." autocomplete="off">
		</form>
		<header id="header">
			<span class="btn-icon" id="btn-search"><i class="icon-search"></i></span>
			<span class="btn-icon" id="btn-slide-menu"><i class="icon-menu"></i></span>
			<div id="banner">
				<h1 id="title"><a href="<?php echo bloginfo('url');?>"><?php echo bloginfo('title');?></a></h1>
				<h2 id="desc"><?php echo bloginfo('description');?></h2>
			</div>
		</header>