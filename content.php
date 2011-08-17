<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
  <article id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a> &rarr;</h2>

  	<p class="entry-date fancy">
      Posted by
      <span class="author vcard">
        <?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?>
      </span>
      on
      <abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>">
        <?php twentyeleven_posted_on(); ?>
      </abbr>
    </p>
  </article><!-- .post -->