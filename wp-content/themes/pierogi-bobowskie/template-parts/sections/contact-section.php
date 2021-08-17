<?php
$contact_us_text = get_field('contact_us_text', 'options');
$contact_number = get_field('contact_number', 'options');
$contact_us_page = get_field('contact_us_page', 'options');
$styles = pierogi_section_styles(true);
$class = pierogi_section_styles(false, true);
?>
<section class="contact-us" style="<?= (!is_tax('pierogi_categories')) ? $styles : ''; ?>">
	<div class="border-container <?= $class; ?>"></div>
	<div class="grid-container">
		<?= ($contact_us_text) ? '<div class="contact-us__text">' . $contact_us_text . '</div>' : ''; ?>
		<div class="contact-us__links">
			<div class="main-btn">
				<div class="border-container"></div>
				<?= ($contact_number) ? '<a href="tel:' . $contact_number . '">' . $contact_number . '</a>' : ''; ?>
			</div>
			<div class="main-btn">
				<div class="border-container"></div>
				<?= ($contact_us_page) ? '<a href="' . $contact_us_page['url'] . '">' . $contact_us_page['title'] . '</a>' : ''; ?>
			</div>
		</div>
	</div>
</section>
