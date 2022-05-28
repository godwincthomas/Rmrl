<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="container-inner">
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * rmrl_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>


<link rel="shortcut icon" href="http://www.rmrl.in/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="http://www.rmrl.in/wp-content/themes/rmrl/style.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<script type="text/javascript" src="http://www.rmrl.in/wp-content/themes/rmrl/scripts/crawler.js">

/* Text and/or Image Crawler Script v1.5 (c)2009-2011 John Davenport Scheuer

   as first seen in http://www.dynamicdrive.com/forums/

   username: jscheuer1 - This Notice Must Remain for Legal Use

   updated: 4/2011 for random order option, more (see below)

*/



</script>

<script src="http://www.rmrl.in/wp-content/themes/rmrl/scripts/cufon-yui.js" type="text/javascript"></script>
		<script src="http://www.rmrl.in/wp-content/themes/rmrl/scripts/Helvetica_Neue_LT_Std_500-Helvetica_Neue_LT_Std_750.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('.menubar a', { hover: true });
			Cufon.replace('.slideinner p');
			Cufon.replace('h2');
			Cufon.replace('h1');
		</script>
	<script type="text/javascript" src="http://www.rmrl.in/wp-content/themes/rmrl/scripts/script.js"></script>

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


<!--[if lte IE 6]>

<style>
	
form#searchform input#s {
	margin-top:7px;
}

</style>

<![endif]-->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39192431-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>

<body <?php body_class(); ?>>

  <div class="header">
    <a href="/wp-content/uploads/2014/01/index.html"></a>
  	<div class="headerinner"><a href="http://www.rmrl.in/" class="logo">Roja Muthiah Research Library</a></div>
  
  <!-- end .header --></div>
    
    <div class="menubar">
        
    	<div class="menuinner">
    	
            <div class="searchlink">
                <?php get_search_form(); ?>
            </div>
        
        	<?php wp_nav_menu( array('menu' => 'Top Menu' )); ?>
            
        </div>

    </div>