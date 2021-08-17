<?php
$hero_bg = $section['hero_background'];
$premium_badge = $section['premium_badge'];
?>
<!-- Main Hero -->
	<section
			class="home-hero start-hero"<?= ($hero_bg) ? ' style="background-image: url(' . $hero_bg['url'] . ')"' : ''; ?>>
		<div class="border-container">
		</div>
		<div class="grid-container">
			<?= ($premium_badge) ? '<div class="premium-badge"><span>' . __('Premium', THEME_TD) . '</span></div>' : ''; ?>
		</div>
	</section>
