<!-- <?echo basename(__FILE__); ?>  -->
<main>
	<!-- <h2>Welcome <3</h2>-->

		<section>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
						<?php //print_r($post);?>

				<h2><?php echo $post->post_title;?></h2>
				<div class="">
					<?php echo $post->post_content;?>
				</div>
				<br />
				<br />
				<br />


			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>


		</section>
			

</main>

<!-- <?php echo "END OF" . basename(__FILE__); ?>  -->
