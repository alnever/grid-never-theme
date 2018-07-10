<?php get_header(); ?>
<?php
	// commented text and style - for random box colors
	// $styles = array("","entry-dark-blue","entry-light-blue","entry-yellow");
?>

<div class="container">
	<!-- left/menu panel -->
	<?php
		get_template_part('left','panel');
	?>

	<!-- page content -->
	<?php
		get_template_part('single','content');
	?>
</div>


<?php get_footer(); ?>