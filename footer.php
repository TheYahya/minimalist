<?php
if ('footer.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
	die('Please do not load this page directly. Thanks! :)');
}
?>
	<div id="footer">
		<p>The <a target="blank" href="https://github.com/ysarbabi/minimalist">Minimalist</a> theme (v=0.5), design and develop by <a href="http://ysarbabi.ir/">@ysarbabi</a></p>
	</div>
</div>
<?php wp_footer();?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/base.js"></script>
</body>
</html>