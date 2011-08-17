<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				 
				global $wpdb;
        $current_blogid = $wpdb->blogid;
        $wpdb->set_blog_id(1);
        wp_cache_reset();
        get_sidebar( 'footer' );
        $wpdb->set_blog_id($current_blogid);
        wp_cache_reset();
        unset($current_blogid);
        
				
			?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

