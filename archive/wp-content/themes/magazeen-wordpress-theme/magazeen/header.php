<?php
/**
 * @package WordPress
 * @subpackage Magazeen_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

<link href="http://twodee.com/wp-content/themes/magazeen-wordpress-theme/magazeen/favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>
<body>


	<div id="header">
		
		<div class="container clearfix">
		
			<div id="logo">
		
					<h1><span></span><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php echo strtolower( get_settings( 'blogname' ) ); ?></a></h1>

			

				<h2><span class="title"><?php bloginfo( 'description' ); ?></span></h2>

			</div><!-- End logo -->
			

		
		</div><!-- End Container -->
		
	</div><!-- End header -->


<div id="navbox">	
	<div id="navigation">
	
		<div class="container clearfix">
	
			<ul class="pages">
				<li<?php if( is_home() ) : ?> class="current_page_item"<?php endif; ?>><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'title' ); ?>">About</a></li>
				<?php wp_list_pages( 'title_li=&depth=1' ); ?>
			</ul>
			
			
		</div><!-- End container -->
		
	</div><!-- End navigation -->
</div> <!-- End Navbox -->	

	