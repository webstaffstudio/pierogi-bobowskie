<?php
get_header();
?>
	<div class="flexible_content">
		<!-- Get layouts for flex content -->
		<?php
		$fields = get_fields(get_the_ID());
		if (isset($fields['flexible_content']) && is_array($fields['flexible_content'])):
			foreach ($fields['flexible_content'] as $section) :
				$template = 'template-parts/sections/' . $section['acf_fc_layout'] . '.php';
				if ($loc_template = locate_template($template)) {
					include($loc_template);
				}
			endforeach;
		endif; ?>
	</div><!-- #content -->
<?php get_template_part('template-parts/sections/contact-section'); ?>
<?php
get_footer();
