<!-- <?echo basename(__FILE__); ?>  -->

<?php 

//get_header(); 
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
get_template_part('main');
get_footer(); 

?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->

