<?php get_header(); ?>
<?php
	// commented text and style - for random box colors
	// $styles = array("","entry-dark-blue","entry-light-blue","entry-yellow");
?>

<div class="container">
	<!-- menu panel -->
	<div class="left-panel"> 
		<div class="main-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</div>

	<!-- content panel -->
	<div class="content">
		<!-- header of the site -->
		<div class="content-header">
		</div>

		<!-- posts links region - grid -->
		<div class="content-grid">
	        <!-- the cycle -->
	        <?php if (have_posts()) : while(have_posts()): the_post(); ?>
	            <!-- start post record -->
	            <div class="entry <?php // _e($styles[rand(0,3)]); ?>" id="entry-<?php the_ID(); ?>">
	                <h2>
	                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	                        <?php the_title(); ?>
	                    </a>
	                </h2>
	                <div class="postmetadata">
	                    <p><?php _e("Author", 'grid-never-theme'); _e(": "); the_author_posts_link(); ?> <?php the_date("Y-m-d","[", "]", true) ?></p>
	                </div>
	            </div>
	            <!-- end post -->
	        <?php endwhile; ?>
	        <div class="navigation">
	                <p>
	                	<?php 
	                		posts_nav_link('<br/>', 
	                			__('previous page','grid-never-theme'), 
	                			__('next page','grid-never-theme')
	                		); 
	                	?>
                	</p>
	        </div>
	        <?php endif; ?>

		</div> <!-- end of grid -->
	</div>
</div>


<?php get_footer(); ?>