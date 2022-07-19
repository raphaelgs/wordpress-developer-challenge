<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="video" class="video" tabindex="-1" role="main">
		<article class="container">
			<div class="descricoes">
				<div>
					<?php
						$terms = wp_get_post_terms( $post->ID, 'categoria');								
					?>
					<span class="ctg"><?php echo $terms[0]->name;?></span>
					<span class="tempo"><?php echo get_post_meta( $post->ID,'tempo', true ); ?>m</span>
				</div>									
				<h2><?php the_title(); ?></h2>					
			</div>
			<div class="embed">
				<iframe width="100%" height="940" src="<?php echo get_post_meta( $post->ID,'url', true ); ?>"></iframe>
			</div>
			<div class="texto">
				<?php the_content();?>
				<p><?php echo get_post_meta( $post->ID,'sinopse', true ); ?></p>
			</div>
		</article>
	</main><!-- #main -->

<?php
get_footer();
