	<!-- menu panel -->
	<div class="left-panel"> 
		<div class="main-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
		
        <div class="mobile-main-menu">
            <span class="mobile-menu-start">
                &equiv;&nbsp;<?php _e("Menu",'grid-never-theme'); ?>
            </span>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
	</div>
