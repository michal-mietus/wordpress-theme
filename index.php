<?php get_header(); ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) { ?>
  <h2><?php echo the_post();?><h2>
  
  <?php
	}
}
?>
<?php  get_footer(); ?>