<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
			<footer>
				<p>
					<?php bloginfo('name'); ?> is proudly powered by
					<a href="http://wordpress.org/">WordPress</a>, and built using the <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a>.
					<br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
					and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
					<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
				</p>
			</footer>
		</div> <!--! end of #container -->
		
		<!-- Javascript that is non-plugin related at the bottom for fast page loading -->
		<script defer src="<?php bloginfo('template_url') ?>/js/plugins.js"></script>
		<script defer src="<?php bloginfo('template_url') ?>/js/script.js"></script>
		<!-- end scripts-->
		
		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
			chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<?php wp_footer(); ?>
	</body>
</html>
