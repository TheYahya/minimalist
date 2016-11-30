 
<?php get_header(); ?>

		<div id="base-wrapper">
			<div id="posts">
				<?php if(have_posts()) while(have_posts()) { the_post(); ?>
					<article class="post">
						<header class="post-header">
							<h1 class="post-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
						</header>
						<div class="post-content">
							<?php the_content('ادامه', 'asdf');?>
						</div> 
						<span class="post-date"><?php the_date('l، j F Y')?></span>
						|
						<span class="categories"><?php the_category('، '); ?></span>
					</article>
				<?php } ?>
			</div>

			<div id="pagination">
				<h3 id="next"><?php next_posts_link('صفحه بعد');?></h3>
				<h3>&nbsp;</h3>
				<h3 id="previous"><?php previous_posts_link('صفحه قبل');?></h3>
			</div> 
		</div>


<?php get_footer(); ?>