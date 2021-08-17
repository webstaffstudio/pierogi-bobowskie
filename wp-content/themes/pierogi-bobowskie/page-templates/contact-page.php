<?php
/**
 * Template Name: Contact Page
 *
 * @package pierogi_bobowskie
 */
get_header();
$page_hero_image = get_field('page_hero_image');
$page_subtitle = get_field('page_subtitle');
$contact_form_shortcode = get_field('contact_form_shortcode');
$contacts_info = get_field('contacts_info');
?>
	<section class="hero" style="background-image: url(<?= $page_hero_image['url'];?>)">
		<div class="border-container"></div>
	</section>
<section class="contact">
	<div class="border-container"></div>
	<div class="grid-container">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?= ($page_subtitle) ? '<p class="subtitle">' . $page_subtitle . '</p>' : ''; ?>
		<div class="grid-x grid-padding-x">
			<?= ($contacts_info) ? '<div class="cell small-12 medium-4 large-4 contact__info">' . $contacts_info . '</div>' : ''; ?>
			<?= ($contact_form_shortcode) ? '<div class="cell small-12 medium-8 large-8">' . do_shortcode($contact_form_shortcode) . '</div>' : ''; ?>
		</div>
	</div>
</section>
<?php
get_footer(); ?>
