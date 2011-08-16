<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
 <!DOCTYPE html>
 <html>
 <head> 
   <meta charset="utf-8">
   <!--

      bbbbbbbb                                                                                                       
      b::::::b                                                                                                       
      b::::::b                                                                                                       
      b::::::b                                                                                                       
       b:::::b                                                                                                       
       b:::::bbbbbbbbb       ooooooooooo       cccccccccccccccc   ooooooooooo   uuuuuu    uuuuuu ppppp   ppppppppp   
       b::::::::::::::bb   oo:::::::::::oo   cc:::::::::::::::c oo:::::::::::oo u::::u    u::::u p::::ppp:::::::::p  
       b::::::::::::::::b o:::::::::::::::o c:::::::::::::::::co:::::::::::::::ou::::u    u::::u p:::::::::::::::::p 
       b:::::bbbbb:::::::bo:::::ooooo:::::oc:::::::cccccc:::::co:::::ooooo:::::ou::::u    u::::u pp::::::ppppp::::::p
       b:::::b    b::::::bo::::o     o::::oc::::::c     ccccccco::::o     o::::ou::::u    u::::u  p:::::p     p:::::p
       b:::::b     b:::::bo::::o     o::::oc:::::c             o::::o     o::::ou::::u    u::::u  p:::::p     p:::::p
       b:::::b     b:::::bo::::o     o::::oc:::::c             o::::o     o::::ou::::u    u::::u  p:::::p     p:::::p
       b:::::b     b:::::bo::::o     o::::oc::::::c     ccccccco::::o     o::::ou:::::uuuu:::::u  p:::::p    p::::::p
       b:::::bbbbbb::::::bo:::::ooooo:::::oc:::::::cccccc:::::co:::::ooooo:::::ou:::::::::::::::uup:::::ppppp:::::::p
       b::::::::::::::::b o:::::::::::::::o c:::::::::::::::::co:::::::::::::::o u:::::::::::::::up::::::::::::::::p 
       b:::::::::::::::b   oo:::::::::::oo   cc:::::::::::::::c oo:::::::::::oo   uu::::::::uu:::up::::::::::::::pp  
       bbbbbbbbbbbbbbbb      ooooooooooo       cccccccccccccccc   ooooooooooo       uuuuuuuu  uuuup::::::pppppppp    
                                                                                                   p:::::p                                                                                                            
                          ______                                                                   p:::::p    
                         (  / /                      _/_                          _/_             p:::::::p   
                           / /_  _    _ _ _   __ (   /     _,  __,  _ _   _,  (   /  _  _         p:::::::p   
                         _/ / /_(/_  / / / /_(_)/_)_(__   (_)_(_/(_/ / /_(_)_/_)_(__(/_/ (_       p:::::::p   
                                                           /|             /|                      ppppppppp
                                                          (/             (/                    
             ___               __,                    
            ( /               (           o       _/_ 
             / __,  _  ,___,   `.  _, _  ,   ,_   /    _, __ _ _ _    ,_   __,  _ _   __  ,
           _/_(_/(_/ |/ (_/(_(___)(__/ (_(__/|_)_(__  (__(_)/ / / /__/|_)_(_/(_/ / /_/ (_/_
          //                                /|                       /|                 /  o
         (/                                (/                       (/                 '

   -->

<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

  ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!-- <link href="http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT" rel="stylesheet" type="text/css"> -->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
  /* We add some JavaScript to pages with the comment form
   * to support sites with threaded comments (when in use).
   */
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );

  /* Always have wp_head() just before the closing </head>
   * tag of your theme, or you will break many plugins, which
   * generally use this hook to add elements to <head> such
   * as styles, scripts, and meta tags.
   */
  wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
  <header id="branding" role="banner">
<!--
      <hgroup>
        <h1 id="site-title">
          <span>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
          </span>
        </h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
				<div class="bob"></div>
      </hgroup>
-->
      <nav id="access" role="navigation">
        <h3 class="assistive-text">Main menu</h3>
        <div class="skip-link"><a class="assistive-text" href="#content" title="Skip to primary content">Skip to primary content</a></div>
        <div class="skip-link"><a class="assistive-text" href="#secondary" title="Skip to secondary content">Skip to secondary content</a></div>
        <div>
          <ul>
            <li id="menu-item-14" class=""><a href="http://bocoop.com">Home</a></li>
            <li id="menu-item-4" class=""><a href="http://training.bocoop.com">Training</a></li>
            <li id="menu-item-5" class=""><a href="http://weblog.bocoop.com">Web Log</a></li>
            <li id="menu-item-6" class=""><a href="http://about.bocoop.com">About</a></li>
            <li id="menu-item-7" class=""><a href="http://code.bocoop.com">Code</a></li>
            <li id="menu-item-8" class=""><a href="http://hello.bocoop.com">RFP</a></li>
            <li id="menu-item-9" class=""><a href="http://loft.bocoop.com">The Loft</a></li>
          </ul>
        </div>
      </nav>
  </header>
  <div id="main">