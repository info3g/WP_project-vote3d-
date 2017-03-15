<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Kleo
 * @since Kleo 1.0
 */
?>

			<?php
			/**
			 * After main part - action
			 */
			do_action('kleo_after_main');
			?>

		</div><!-- #main -->

		<?php get_sidebar('footer');?>
	
		<?php 
		/**
		 * After footer hook
		 * @hooked kleo_go_up
		 * @hooked kleo_show_contact_form
		 */
		do_action('kleo_after_footer');
		?>

	</div><!-- #page -->

    <?php
    /**
     * After page hook
     * @hooked kleo_show_side_menu 10
     */
    do_action('kleo_after_page');
    ?>

	<!-- Analytics -->
	<?php echo sq_option('analytics', ''); ?>

	<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($){
	var styles = {
      border : "1px solid #ddd",
      marginRight : "-20px",
      padding : "20px",
      marginLeft: "-20px"
    };
	$('#bp_core_login_widget-2').css(styles);
});

</script>


<script>
jQuery(document).ready(function($){  
    $("#rtmediagallerywidget-3 .widget-title").after( "<h5 class='widget__title'>Click on the images you like to rate them</h5>" );
});
</script>
</body>
</html>