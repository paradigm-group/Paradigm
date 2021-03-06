<?php get_header(); ?>

			<div id="content" class="wrapper">

				<div id="inner-content" class="container">

					<div class="main" role="main">
                      
              <?php 

                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb('<div id="breadcrumbs">','</div>');
                } 

              ?>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                
                <?php get_template_part ('partials/article-header');?>

                <div class="entry-content" itemprop="articleBody">
                  <?php
                    the_content();
                  ?>
                </div <?php // end article section ?>

                <footer class="article-footer">

                  <?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer> <?php // end article footer ?>


              </article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

              <?php get_template_part ('partials/no-post-found');?>

						<?php endif; ?>

					</div>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
