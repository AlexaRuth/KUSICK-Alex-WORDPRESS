
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

<a href="<?php the_permalink($the_title); ?>">

	<article class="post"><?php the_title('<h2>','</h2>');?></a>
	<div class=""><?php echo $post->post_content;?></div>
	<br />


<?php $pfx_date = get_the_date( $format, $post_id ); ?> 

<?php the_category( $separator, $parents, $post_id ); ?>

<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>




