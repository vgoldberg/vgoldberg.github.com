<?php get_header(); ?>
<?php include(TEMPLATEPATH."/sidebar-left.php");?>
	<div class="content-area">
	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="entry">
        <div class="entryin">
		
							<!--header-->
                        <div class="entryhead"> 
							
                            <!--title-->
							<div class="entrytitle">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></div>
							<!--time-->
							<div class="entrytime">
							By <?php the_author() ?> | <?php the_date('F j, Y') ?> - <?php the_time('g:i a'); ?> - Posted in        				   <?php the_category(', ') ?> <?php edit_post_link(__('Edit'), ''); ?>
							</div>
								
                       </div><!--end header-->
					  
						
                       <!--entry -->
					   <div class="entrybody">
                            <div class="entryinbody">
							  <?php the_content('Read The Full Story... '); ?>
							  
                            
							</div><!--end entry body, inner-->
		  </div>	
						
						
						<!--footer -->
						<div class="entryfoot">
						
						<div class="entrymcomm">
						<div class="entrymcommtxt">
						<?php comments_popup_link('(Be the first to comment)', '1 Comment', '% Comments'); ?>
                        </div>
						</div><!-- end comments-->
						
						
                    </div><!-- end entry footer -->
					
		  </div></div><!-- end entry,entry-inner -->


<div class="spaceforentry"></div> 


<a name="comments"></a>
			<?php comments_template(); ?>
			
			<!--
			<?php trackback_rdf(); ?>
			-->
			
		<?php endwhile; ?>
		
		
					
        <div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
					  
						
                       
				
					
				
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
		
	<?php endif; ?>
	</div>
<?php include(TEMPLATEPATH."/sidebar-right.php");?>
</div>
<?php get_footer(); ?>