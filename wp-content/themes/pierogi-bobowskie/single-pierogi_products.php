<?php
get_header();
$styles = pierogi_section_styles(true);
$class = pierogi_section_styles(false, true);
$product_description = get_field('product_description');
$product_hero_image = get_field('product_hero_image');
$product_badges = get_field('product_badges');
$product_premium_badge = get_field('product_premium_badge');
$product_background_section = get_field('product_background_section');
$product_table_shortcode = get_field('product_table_shortcode');
$product_package_image = get_field('product_package_image');
$product_netto = get_field('netto');
$product_properties = get_field('product_properties');
?>
	<section class="hero-post" style="<?= $styles; ?>">
		<div class="border-container <?= $class; ?>"></div>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12 medium-6 large-6">
					<div class="hero-post__title"><?php the_title(); ?></div>
					<?= ($product_description) ? '<p class="hero-post__description">' . $product_description . '</p>' : ''; ?>
					<?php if ($product_badges): ?>
						<div class="hero-post__badges">
							<?php foreach ($product_badges as $badge): ?>
								<img src="<?= $badge['url']; ?>" alt="<?= $badge['alt']; ?>"/>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="cell small-12 medium-6 large-6">
					<div class="hero-post__image">
						<img src="<?= $product_hero_image['url']; ?>" alt="<?= $product_hero_image['alt']; ?>"/>
					</div>
				</div>
			</div>
		</div>
		<?= ($product_premium_badge) ? '<div class="premium-badge"><span>' . __('Premium', THEME_TD) . '</span></div>' : ''; ?>
	</section>
<?php if ($product_background_section): ?>
	<section class="product__main-background" style="background-image: url(<?= $product_background_section['url']; ?>)">
		<div class="border-container <?= $class; ?>"></div>
	</section>
<?php endif; ?>
	<section class="properties" style="<?= $styles; ?>">
		<div class="border-container <?= $class; ?>"></div>
		<div class="grid-container">
			<div class="properties__title">
				<h2 class="page-title"><?= __('O produkcie', THEME_TD); ?></h2>
			</div>
			<div class="properties__items">
				<div class="grid-x grid-padding-x">
					<?php if ($product_package_image): ?>
						<div class="cell small-12 medium-12 large-6">
							<div class="properties__items-img">
								<div class="img-container">
									<img src="<?= $product_package_image['url']; ?>"
										 alt="<?= $product_package_image['alt']; ?>"/>
								</div>
							</div>
							<?= ($product_netto) ? '<div class="properties__items-content netto"><div class="property-descr">'.$product_netto.'</div></div>' : ''; ?>
						</div>
					<?php endif; ?>
					<?php if ($product_properties): ?>
						<div class="cell small-12 medium-12 large-6">
							<?php foreach ($product_properties as $property): ?>
								<div class="properties__items-content">
									<?= ($property['icon']) ? '<img src="' . $property['icon']['url'] . '" alt="' . $property['icon']['alt'] . '" />' : ''; ?>
									<?= $property['description'] ? '<div class="property-descr">' . $property['description'] . '</div>' : ''; ?>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php if ($product_table_shortcode): ?>
				<div class="properties__table">
					<h3 class="properties__table-title page-title"><?= __('Wartość odżywcza', THEME_TD); ?></h3>
					<div class="properties__table-body">
						<?= do_shortcode($product_table_shortcode); ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php get_template_part('template-parts/sections/contact-us-single'); ?>
<?php
get_footer();
