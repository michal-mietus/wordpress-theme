<?php get_header(); ?>

<?php get_template_part('information', 'special') ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) { 
    the_post();?>

    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?></p>
    <hr>

  <?php
	}
}
?>
<?php  get_footer(); ?>
