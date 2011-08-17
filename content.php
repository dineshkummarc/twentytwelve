<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

  <h2>This is the <a href="http://weblog.bocoup.com">Bocoup web log</a> with posts from <a href="http://weblog.bocoup.com/author/alistair-macdonald">Al</a>, <a href="http://weblog.bocoup.com/author/boaz-sender">Boaz</a>, <a href="http://weblog.bocoup.com/author/rick-waldron">Rick</a>, <a href="http://weblog.bocoup.com/author/sam-clearman">Sam</a>, <a href="http://weblog.bocoup.com/author/nathaniel-tassinari">Nate</a>, <a href="http://weblog.bocoup.com/author/nick-cammarata">Nick</a>, <a href="http://weblog.bocoup.com/author/pete-karl">Pete</a>, <a href="http://weblog.bocoup.com/author/scott-fitchet">Scott</a>, <a href="http://weblog.bocoup.com/author/ben-alman">Ben</a>, <a href="http://weblog.bocoup.com/author/sam-bisbee">Brisbee</a>, <a href="http://weblog.bocoup.com/author/richard-worth">Richard</a>, <a href="http://weblog.bocoup.com/author/mike-pennisi">Mike</a>, <a href="http://weblog.bocoup.com/author/tim-branyen">Tim</a> <span class="fancy">&amp;</span> <a href="http://weblog.bocoup.com/announcing-new-game-conference">Darius</a>. You should also make sure to checkout <a href="http://code.bocoup.com">code.bocoup.com</a>, where we keep the finished versions of ideas we kick around here.</h2>
  
  <hr class="space clear">
  
  <h1>Weblog</h1>
  
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a> &rarr;</h2>
		<p class="entry-date fancy">
      <abbr class="published">
        <?php twentyeleven_posted_on(); ?>
      </abbr>
    </p>
	</article><!-- #post-<?php the_ID(); ?> -->
