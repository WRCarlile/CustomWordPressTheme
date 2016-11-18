<?php
/**
* index.php
*
* The main template file.
*/
 ?>

<?php if ( have_posts()) : while( have_posts() ) : the_post(); ?>
hello
<?php endwhile;  ?>
<?php endif; ?>
