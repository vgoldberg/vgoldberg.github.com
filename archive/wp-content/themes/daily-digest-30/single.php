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
							  
                           
	
				<p class="singleinfo">
					<small>
						This entry was posted
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?> 
						on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
						and is filed under <?php the_category(', ') ?>.
						You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed. 
						
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.
						
						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.
						
						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.
			
						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.			
						
						<?php } edit_post_link('Edit this entry.','',''); ?>
						
					</small>
				</p>
							</div><!--end entry body, inner-->
						</div>	
						
						
						<!--footer -->
						<div class="entryfoot">
						
						<div class="entrymcomm">
						<div class="entrymcommtxt">
						<?php comments_popup_link('(no comments yet)', '1 comment', '% Comments'); ?>
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