<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package auxe
 */
?>


<?php get_template_part('widget-templates/footerfull'); ?>
<?php get_template_part('widget-templates/footer-widgets'); ?>
<div class="wrapper " id="wrapper-footer">
    <a href="#" class="scrollToTop">
      <i class="totop-icon-size fa fa-arrow-circle-up">
      </i></a>
      <?php get_template_part('widget-templates/footer2-widgets'); ?>
</div><!-- wrapper end -->
<?php get_template_part('widget-templates/footer3-widgets'); ?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
