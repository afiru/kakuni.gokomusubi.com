<?php get_template_part('include/common/header/header'); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>
<?php 
if ( in_category(1) || post_is_in_descendant_category(1)){
    get_template_part('include/single/singleCatName/00_singleCatName');
}
?>
<?php get_template_part('include/common/footer/footer'); ?>