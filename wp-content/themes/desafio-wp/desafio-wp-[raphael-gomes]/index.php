<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="home" class="home" tabindex="-1" role="main">
		<?php
			$args = array(
				'post_type' => 'video',
				'posts_per_page' => 1,
				'meta_query' => array(
					array(
						'key' => 'destaque-banner',
						'value' => 'yes',
						'compare' => '=='            
					)
				)
			);
			$var = new WP_Query($args);
				if($var->have_posts()):
					while($var->have_posts()):
						$var->the_post(); ?>
						<?php
							$terms = wp_get_post_terms( $post->ID, 'categoria');								
						?>
						<section class="banner" style="background-image: url('<?php the_post_thumbnail_url();?>')">
							<article class="container">	
								<div class="descricoes">
									<div>
										<span class="ctg"><?php echo $terms[0]->name;?></span>
										<span class="tempo"><?php echo get_post_meta( $post->ID,'tempo', true ); ?>m</span>
									</div>									
									<h2><?php the_title(); ?></h2>
									<a href="<?php the_permalink()?>">Mais informações</a>	
								</div>													
								
							</article>
						</section>
						<?php
					endwhile;
				endif;
			wp_reset_postdata(); 
		?>	
		<section id="filmes" class="categorias">
			<article class="">
				<h2>Filmes</h2>
				<div class="swiper-container videos">
					<div class="swiper-wrapper">
						<?php						
							$args = array(
								'post_type' => 'video', 
								'posts_per_page' => -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'categoria',
										'field'    => 'slug',
										'terms'    => 'filmes',
									),
								),
							);
							$var = new WP_Query($args); ?>
								<?php	
								if($var->have_posts()):
									while($var->have_posts()):
										$var->the_post();?>	
											<a href="<?php the_permalink()?>" class="swiper-slide">
												<div class="imagem">
													<?php echo odin_thumbnail( 248, 387, true,true);?>
												</div>
												<span class="tempo"><?php echo get_post_meta( $post->ID,'tempo', true ); ?>m</span>
												<h3><?php the_title();?></h3>
											</a>
										<?php
								endwhile;
							endif;
						wp_reset_postdata(); ?>
					</div>
				</div>
			</article>
		</section>

		<section id="documentarios" class="categorias">
			<article class="">
				<h2>Documentário</h2>
				<div class="swiper-container videos">
					<div class="swiper-wrapper">
						<?php						
							$args = array(
								'post_type' => 'video', 
								'posts_per_page' => -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'categoria',
										'field'    => 'slug',
										'terms'    => 'documentarios',
									),
								),
							);
							$var = new WP_Query($args); ?>
								<?php	
								if($var->have_posts()):
									while($var->have_posts()):
										$var->the_post();?>	
											<a href="<?php the_permalink()?>" class="swiper-slide">
												<div class="imagem">
													<?php echo odin_thumbnail( 248, 387, true,true);?>
												</div>
												<span class="tempo"><?php echo get_post_meta( $post->ID,'tempo', true ); ?>m</span>
												<h3><?php the_title();?></h3>
											</a>
										<?php
								endwhile;
							endif;
						wp_reset_postdata(); ?>
					</div>
				</div>
			</article>
		</section>

		<section id="series" class="categorias">
			<article class="">
				<h2>Séries</h2>
				<div class="swiper-container videos">
					<div class="swiper-wrapper">
						<?php						
							$args = array(
								'post_type' => 'video', 
								'posts_per_page' => -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'categoria',
										'field'    => 'slug',
										'terms'    => 'series',
									),
								),
							);
							$var = new WP_Query($args); ?>
								<?php	
								if($var->have_posts()):
									while($var->have_posts()):
										$var->the_post();?>	
											<a href="<?php the_permalink()?>" class="swiper-slide">
												<div class="imagem">
													<?php echo odin_thumbnail( 248, 387, true,true);?>
												</div>
												<span class="tempo"><?php echo get_post_meta( $post->ID,'tempo', true ); ?>m</span>
												<h3><?php the_title();?></h3>
											</a>
										<?php
								endwhile;
							endif;
						wp_reset_postdata(); ?>
					</div>
				</div>
			</article>
		</section>
		
	</main><!-- #main -->

<?php
get_footer();
