<?php
$contact_us_text = get_field('contact_us_text', 'options');
$contact_number = get_field('contact_number', 'options');
$contact_us_page = get_field('contact_us_page', 'options');
$post_thumbnail = get_field('product_contact_image', get_the_ID());
?>
<section class="contact-us">
	<div class="border-container"></div>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 medium-12 <?= ($post_thumbnail) ? 'large-7' : 'large-12'; ?>">
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
			<?php if ($post_thumbnail): ?>
				<div class="cell small-12 medium-12 large-5 cell-thumb">
					<img src="<?= $post_thumbnail['url']; ?>" alt="<?= $post_thumbnail['alt']; ?>"/>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
