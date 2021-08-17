<?php
/**
 * Page template file
 *
 * @package pierogi_bobowskie
 */

get_header();
$hero_image = get_field('page_hero_image');
?>
<?php if ($hero_image): ?>
<section class="hero" style="background-image: url(<?= $hero_image['url'];?>)">
	<div class="border-container"></div>
</section>
<?php endif; ?>
	<div id="primary" class="content-area">
		<section id="main" class="site-main" role="main">
			<div class="border-container"></div>
			<div class="grid-container">
				<?php
				while (have_posts()) : the_post();

					get_template_part('template-parts/content', 'page');

				endwhile; // End of the loop.
				?>
			</div>
		</section><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
