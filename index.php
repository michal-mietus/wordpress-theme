<?php get_header(); ?>

<?php get_template_part('information', 'special') ?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) { 
    the_post();?>

    <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
    <p><?php the_content(); ?></p>
    <hr>

  <?php
	}
}
?>
<?php  get_footer(); ?>
