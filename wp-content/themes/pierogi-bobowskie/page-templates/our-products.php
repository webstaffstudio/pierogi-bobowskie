<?php
/**
 * Template Name: Our Products
 *
 * @package pierogi_bobowskie
 */
get_header();
$hero_image = get_field('page_hero_image');
$subtitle = get_field('terms_subtitle', 'option');
$styles = pierogi_section_styles(true);
$class = pierogi_section_styles(false, true);
$terms = get_terms('pierogi_categories');
echo '<pre>';
print_r($terms);
echo '</pre>';
?>
<?php if ($hero_image): ?>
	<section class="hero" style="background-image: url(<?= $hero_image['url'];?>)">
		<div class="border-container"></div>
	</section>
	<div id="primary" class="content-area">
		<section id="main" class="site-main" role="main">
			<div class="border-container"></div>
			<div class="grid-container">
				<?php the_title('<h1 class="page-title">', '</h1>'); ?>
				<?= ($subtitle) ? '<p class="subtitle">' . $subtitle . '</p>' : ''; ?>
			</div>
		</section><!-- #main -->
	</div><!-- #primary -->
<?php endif; ?>

<?php
get_template_part('template-parts/sections/contact-section');
get_footer();
