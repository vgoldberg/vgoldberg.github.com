	<!-- start of Sidebar left -->
	<div id="sidebar-area-left">
	<div id="sidebar-left">
	  <ul>
	  <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(1) ) : ?>

	  <li id="pages">
	  <h2>Navigation</h2>
	  <ul><li><a href="<?php echo get_settings('home'); ?>/">Home</a></li>
			<?php wp_list_pages('title_li='); ?>
	  </ul>
	  </li>
	   
	<li id="archives">
		<h2><?php _e('Archives'); ?></h2>
		<ul>
		<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>
 
	<li id="categories">
		<h2><?php _e('Categories'); ?></h2>
		<ul>
		<?php wp_list_cats(); ?> 
		</ul>
	</li>	
	<?php if (is_home()) { get_links_list(); } ?>
	
<?php if (function_exists('get_recent_comments')) { ?>
   <li><h2><?php _e('Recent Comments'); ?></h2>
        <ul>
		<div class="credits">
        <?php get_recent_comments(); ?>
		</div>
		</ul>
   </li>
   
   <?php } ?>   
 
	
		
<?php endif; ?>
      </ul>       
</div>
</div>

	
	
	<!-- end of Sidebar left -->
