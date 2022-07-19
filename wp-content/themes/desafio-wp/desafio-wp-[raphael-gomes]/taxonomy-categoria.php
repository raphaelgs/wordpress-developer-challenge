<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();  ?>
	<main id="categoria" class="categoria" tabindex="-1" role="main">	
        <div class="container">            
            <aside>                    
                <h1><?php single_cat_title(); ?></h1>
                <?php echo category_description(); ?>               
            </aside>
            <article>
        		<?php if ( have_posts() ):
					while ( have_posts() ) : the_post();
						$terms = wp_get_post_terms( $post->ID, 'categoria');?>
							<a href="<?php the_permalink()?>" class="card">
                                <div class="imagem">
                                    <?php echo odin_thumbnail( 248, 387, true,true);?>
                                </div>
                                <span class="tempo"><?php echo get_post_meta( $post->ID,'tempo', true ); ?>m</span>
                                <h3><?php the_title();?></h3>
                            </a>													
						<?php endwhile;						
				   endif; 
                ?>
        	</article>
        </div>  
	</main><!-- #main -->
<?php
get_footer();
