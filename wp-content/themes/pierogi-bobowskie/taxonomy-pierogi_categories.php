<?php
get_header();
$hero_image = get_field('terms_hero_background', 'options');
$terms_title = get_field('terms_title', 'options');
$subtitle = get_field('terms_subtitle', 'options');
$styles = pierogi_section_styles(true);
$class = pierogi_section_styles(false, true);
$cur_term = get_queried_object()->term_id;;
$terms = get_terms('pierogi_categories');
?>
<?php if ($hero_image): ?>
	<section class="hero" style="background-image: url(<?= $hero_image['url']; ?>)">
		<div class="border-container <?= $class; ?>"></div>
	</section>
	<div id="primary" class="content-area">
		<section id="main" class="site-main product-terms" style="<?= $styles; ?>" role="main">
			<div class="border-container <?= $class; ?>"></div>
			<div class="grid-container">
				<?php the_title('<h1 class="page-title">', '</h1>'); ?>
				<?= ($subtitle) ? '<p class="subtitle">' . $subtitle . '</p>' : ''; ?>
				<?php if (isset($terms) && $terms): ?>

					<div class="product-terms__list">
						<div class="grid-x grid-padding-x">
							<?php foreach ($terms as $term): ?>
								<div class="cell small-12 medium-6 large-4">
									<div class="main-btn<?= ($cur_term == $term->term_id) ? ' active' : ''; ?>">
										<div class="border-container"></div>
										<a href="<?= get_term_link($term->term_id); ?>"><?= $term->name; ?></a>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if (have_posts()) : ?>
				<div class="our-products__list">
					<?php while (have_posts()) : the_post(); ?>
						<div class="our-products__list-item">
							<div class="product-data">
								<h5><?= get_the_title(get_the_ID()); ?></h5>
								<div class="main-btn">
									<div class="border-container"></div>
									<a href="<?= get_the_permalink(get_the_ID());?>"><?= __('dowiedz się więcej', THEME_TD); ?></a>
								</div>
							</div>
							<div class="product-img">
								<img src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>"
									 alt="<?php the_title(); ?>"/>
							</div>
						</div>
					<?php endwhile;
					else :
						get_template_part('template-parts/content', 'none');

					endif;
					?>
				</div>
		</section><!-- #main -->
	</div><!-- #primary -->
<?php endif; ?>

<?php
get_template_part('template-parts/sections/contact-section');
get_footer();
