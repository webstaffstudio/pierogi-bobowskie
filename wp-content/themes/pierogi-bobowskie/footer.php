<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package pierogi_bobowskie
 */
$footer_logo = get_field('footer_logo', 'options');
$policy_page = get_field('policy_page', 'options');
$style = pierogi_section_styles();
$class = pierogi_section_styles(false,true);

?>

</main><!-- #content -->

<footer id="footer-container" class="footer" role="contentinfo" style="<?= $style; ?>">
	<div class="border-container <?= $class; ?>"></div>
	<div class="grid-container">
		<div class="footer__site-copy">
			<?= ($footer_logo) ? '<a href="'.home_url().'" class="footer__logo"><img src="' . $footer_logo['url'] . '" alt="' . $footer_logo['alt'] . '"></a>' : ''; ?>
			<div class="footer__copy"><p><?= __('© ' . date('Y') . ' Zajazd Ostoja Marcin Szczepanek', THEME_TD); ?></p></div>
			<?= ($policy_page) ? '<div class="footer__policy"><a href="' . $policy_page['url'] . '">' . $policy_page['title'] . '</a></div>' : ''; ?>
		</div>
		<a class="footer__web-logo" href="https://dankordigital.com/" target="_blank">
			<img src="<?= get_template_directory_uri() . '/assets/images/dankordigital-logo-w.svg'; ?>"
				 alt="dankordigital"/>
		</a>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
