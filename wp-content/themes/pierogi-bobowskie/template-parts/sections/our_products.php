<?php
$our_products = $section['select_products'];
$styles = pierogi_section_styles(true);
$class = pierogi_section_styles(false, true);

?>
<?php if ($our_products): ?>
	<section class="our-products" style="<?= $styles; ?>">
		<div class="border-container <?= $class; ?>"></div>
		<div class="grid-container">
			<?= ($section['title']) ? '<h3 class="page-title">' . $section['title'] . '</h3>' : ''; ?>
			<?= ($section['description']) ? '<p class="our-products__descr">' . $section['description'] . '</p>' : ''; ?>
			<div class="our-products__list">
				<?php foreach ($our_products as $product): ?>
					<div class="our-products__list-item">
						<div class="product-data">
							<h5><?= get_the_title($product->ID); ?></h5>
							<div class="main-btn">
								<div class="border-container"></div>
								<a href=""<?= get_the_permalink(get_the_ID());?>"><?= __('dowiedz się więcej', THEME_TD); ?></a>
							</div>
						</div>
						<div class="product-img">
							<img src="<?= get_the_post_thumbnail_url($product->ID); ?>"
								 alt="<?= $product->post_name; ?>"/>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
