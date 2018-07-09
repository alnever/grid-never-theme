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

		<!-- posts links region - grid -->
		<div class="content-single">
	        <!-- the cycle -->
	        <?php if (have_posts()) : while(have_posts()): the_post(); ?>
	            <!-- start post record -->
	            <div class="article <?php // _e($styles[rand(0,3)]); ?>" id="article-<?php the_ID(); ?>">
	            	<div class="article-header">
		                <h2>
		                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		                        <?php the_title(); ?>
		                    </a>
		                </h2>
		                <div class="article-author">
		                    <p>
		                        <?php _e("Author", 'simple-never-theme'); _e(": ", 'simple-never-theme'); the_author_posts_link(); ?> 
		                        <?php the_date("Y-m-d","[", "]", true) ?>
		                    </p>
		                </div>
	                </div>
	                <?php the_content(); ?>
	                <div class="postmetadata">
	                    <p>
	                        <?php _e("Author", 'simple-never-theme'); _e(": ", 'simple-never-theme'); the_author_posts_link(); ?> 
	                        <?php the_date("Y-m-d","[", "]", true) ?>
	                    </p>
	                    <p>
	                        <?php 
	                            if (get_the_category_list(" | ")) {
	                                _e("Categories", 'simple-never-theme'); _e(": ",'simple-never-theme');
	                                _e(get_the_category_list(" | "), 'simplenevertheme'); 
	                            }
	                        ?>
	                    </p>
	                    <p>
	                        <?php if (get_the_tag_list()) {
	                                _e("Tags", 'simple-never-theme'); _e(": ", 'simple-never-theme');
	                                _e(get_the_tag_list("", " | "), 'simple-never-theme'); 
	                              }
	                        ?>
	                    </p>
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