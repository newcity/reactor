<?php
/**
 * The template for displaying posts by category
 *
 * @package Reactor
 * @subpackge Templates
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">

    	<?php /* reactor_content_before(); */ ?>

        <main id="main" class="site-main" role="main">
        	<div class="row">
                <div class="<?php reactor_columns(); ?>">

				<?php if ( have_posts() ) : ?>
                    <header class="archive-header">
                        <h1 class="archive-title"><?php printf( __('Category: %s', 'reactor'), '<span>' . single_cat_title( '', false ) . '</span>'); ?></h1>

                    <?php // show an optional category description
					if ( category_description() ) : ?>
                        <div class="archive-meta">
                        <?php echo category_description(); ?>
                        </div>
                    <?php endif; ?>
                    </header><!-- .archive-header -->
                <?php endif; // end have_posts() check ?>

				<?php // get the loop
				get_template_part('loops/loop', 'index'); ?>

                </div><!-- .columns -->

                <?php get_sidebar(); ?>

            </div><!-- .row -->
        </main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>