<?php
/**
 * Template Name: Front Page Template.
 */
get_header(); ?>

<?php get_template_part('widget-templates/top-widgets'); ?>

<?php
$activeSidebarA;
$activeSidebarB;
 ?>



<?php get_template_part('hero'); ?>

<?php /*get_template_part('sticky'); */?>





    <div class="wrapper" id="page-wrapper">


	   <div class="container">
       <?php if (!is_active_sidebar('sidebar-a') &  !is_active_sidebar('sidebar-b')) {
    ?>
         <div id="primary" class="col-md-12 content-area columns">
       <?php
} elseif (!is_active_sidebar('sidebar-a') &  is_active_sidebar('sidebar-b')) {
    ?>
          <div id="primary" class="col-md-8 content-area columns">
            <?php $activeSidebarB = true;
} elseif (is_active_sidebar('sidebar-a') &  !is_active_sidebar('sidebar-b')) {
    ?>
               <div id="primary" class="col-md-8 content-area columns">
                 <?php $activeSidebarA = true;
} elseif (is_active_sidebar('sidebar-a') &  is_active_sidebar('sidebar-b')) {
    ?>
                      <div id="primary" class="col-md-6 content-area columns">
                        <?php $activeSidebarA = true;
    $activeSidebarB = true;
}?>




                <main id="main" class="site-main" role="main">

                  <?php if ( have_posts() ) : ?>

                      <?php /* Start the Loop */ ?>

                      <?php while ( have_posts() ) : the_post(); ?>

                              <?php
                                  /* Include the Post-Format-specific template for the content.
                                   * If you want to override this in a child theme, then include a file
                                   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                   */
                                  get_template_part( 'loop-templates/content', get_post_format() );
                              ?>

                      <?php endwhile; ?>

                      <?php auxe_paging_nav(); ?>

                  <?php else : ?>

                      <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                  <?php endif; ?>

                </main><!-- #main -->

	       </div><!-- #primary -->


           <?php if (($activeSidebarB && !$activeSidebarA)) {
    ?>
             <div class="col-sm-4 col-md-4 columns animation-element">
     					<div class="tk-block">
               <?php dynamic_sidebar('sidebar-b');
    ?>
     				  </div>
     				</div>
             <?php
} elseif (($activeSidebarA && !$activeSidebarB)) {
    ?>
               <div class="col-sm-4 col-md-4 columns box2 animation-element">
       					<div class="tk-block">
                 <?php dynamic_sidebar('sidebar-a');
    ?>
       				  </div>
       				</div>
             <?php
} elseif (($activeSidebarA && $activeSidebarB)) {
    ?>
               <div class="col-sm-6 col-md-3 columns box2 animation-element">
       					<div class="tk-block">
                 <?php dynamic_sidebar('sidebar-a');
    ?>
       				  </div>
       				</div>
               <div class="col-sm-6 col-md-3 columns animation-element">
       					<div class="tk-block ">
                 <?php dynamic_sidebar('sidebar-b');
    ?>
       				  </div>
       				</div>
             <?php
} ?>


</div>

       </div><!-- Container end -->

<?php get_template_part('widget-templates/middle-widgets'); ?>

    </div><!-- Wrapper end -->

<?php get_footer(); ?>
