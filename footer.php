<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Interview_Test
 */

?>

	<footer>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>&copy; Copyright <?php echo date("Y"); ?> Company Name.</p>
      </div>
    </div>
  </div>
		
	</footer>

  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
