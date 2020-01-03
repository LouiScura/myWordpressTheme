<?php /*
@package miPrimerTematheme
*/
if(!is_active_sidebar('luis-sidebar')){  
    echo 'There are not any widgets ';
}
?>
<section class="sidebar col-12 col-md-10 customSidebar">
    <?php dynamic_sidebar('luis-sidebar'); ?>
</section>
