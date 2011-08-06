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
				# get_sidebar( 'footer' );
			?>

    	<div class="container">	
    		<div class="one-third column">
    		  <h3>Bocoup</h3>
    		  <ul>
    		    <li>Email: admin@bocoup.com</li>
    		    <li>Call: 617-379-2752</li>
    		    <li>Visit: 355 Congress St, Boston</li>
    		  </ul>
    		  
    		  <hr>
    		  
    		  <p>
    		    All code on this website is <a href="http://code.bocoup.com/license/">Open Source</a>. Want to work at Bocoup? <a href="http://workat.bocoup.com/#apply">Then Apply</a>.
    		  </p>

    		</div>
    		<div class="one-third column">

    		</div>
    		<div class="one-third column">

    		</div>

        <hr>
        
    		<div class="sixteen columns">
          <a class="center html5" href="http://www.w3.org/html/logo/">
            <img src="http://www.w3.org/html/logo/downloads/HTML5_Logo_64.png" height="64" alt="HTML5 Powered with Connectivity / Realtime, CSS3 / Styling, Device Access, Graphics, 3D &amp; Effects, Multimedia, Performance &amp; Integration, Semantics, and Offline &amp; Storage" title="HTML5 Powered with Connectivity / Realtime, CSS3 / Styling, Device Access, Graphics, 3D &amp; Effects, Multimedia, Performance &amp; Integration, Semantics, and Offline &amp; Storage">
          </a>
          <a href="http://bostonbuilt.org"><img height="54" src="http://bostonbuilt.org/icon.php?q=built_in_boston_color_fancy.png&amp;u=www.bocoup.com"></a>
    		</div>
    	</div><!-- container -->

      
      
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>