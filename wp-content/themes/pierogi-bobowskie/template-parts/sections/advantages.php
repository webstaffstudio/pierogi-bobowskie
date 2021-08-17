<?php
$advantages = $section['advantages_columns'];
$background_image = $section['background_image']['url'];
$product_badges = $section['product_badges'];
?>
<?php if ($advantages): ?>
	<section class="advantages">
		<div class="border-container"></div>
		<div class="advantages__list">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<?php foreach ($advantages as $item): ?>
						<div class="cell small-12 medium-12 large-4">
							<div class="advantages__item">
								<h5 class="advantages__item-title"><?= $item['title']; ?></h5>
								<p class="advantages__item-descr"><?= $item['description']; ?></p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="advantages__bg" style="background-image: url(<?= $background_image; ?>)">
			<?php if ($product_badges): ?>
				<div class="advantages__bg-badges">
					<?php foreach ($product_badges as $badge): ?>
						<img src="<?= $badge['image']['url']; ?>" alt="<?= $badge['image']['alt']; ?>"/>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
