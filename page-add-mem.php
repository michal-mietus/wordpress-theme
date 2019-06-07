<?php

  $title = $_POST['title'];
  $description = $_POST['description'];
  $image = $_POST['image'];
  $video = $_POST['video'];

  echo $title . ' ' . $description . ' ' . $image;

?>

<?php get_header(); ?>

<?php get_template_part('information', 'special') ?>

<style type="text/css">
  .error{
    padding: 5px 9px;
    border: 1px solid red;
    color: red;
    border-radius: 3px;
  }
 
  .success{
    padding: 5px 9px;
    border: 1px solid green;
    color: green;
    border-radius: 3px;
  }
 
  form span{
    color: red;
  }
</style>
 
<div id="respond">
  <?php echo $response; ?>
  <form action="<?php the_permalink(); ?>" method="post">
    <label for="title">Title <span>*</span> 
      <input type="text" name="title" value="<?php echo esc_attr($_POST['description']); ?>">
    </label>
    <label for="description">Description:
      <textarea type="text" name="description"><?php echo esc_textarea($_POST['description']); ?></textarea>
    </label>
    <label for="image">
      <input type="file" name="image" accept="image/*">
    </label>
    <label for="video">
      <input type="file" name="video" accept="video/*">
    </label>
    
    <input type="submit">
  </form>
</div>

<?php get_footer(); ?>
