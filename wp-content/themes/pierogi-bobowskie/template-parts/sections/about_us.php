<?php
?>
<!-- About us section -->

<section class="about">
	<div class="border-container"></div>
	<div class="grid-container">
		<?= (isset($section['title']) && $section['title']) ? '<h2 class="page-title">' . $section['title'] . '</h2>' : ''; ?>
		<?php if (isset($section['description']) && $section['description']): ?>
			<div class="about_descr"><?= $section['description']; ?></div>
		<?php endif; ?>
	</div>
	<?php if (isset($section['image']) && $section['image']): ?>
		<div class="about-image-wrapper">
			<img class="about__img" src="<?= $section['image']['url']; ?>" alt="<?= $section['image']['alt']; ?>"/>
		</div>
	<?php endif; ?>
</section>
