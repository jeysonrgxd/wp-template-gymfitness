<?php get_header() ?>

<!-- estos son conocidos como los templates tags -->
<?php
   while(have_posts()):
      the_post();
 ?>  
   <h1><?= the_title();?></h1>

   <?= the_content()?>   

   <p>Escrito por <?= the_author() ?></p>
   <p>Fecha <?= the_date() ?></p>
<?php
   endwhile;
?>

<?= get_footer()?>
