<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package pierogi_bobowskie
 */
$subtitle = get_field('page_subtitle');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title('<h1 class="page-title">', '</h1>'); ?>
	<?= ($subtitle) ? '<p class="subtitle">' . $subtitle . '</p>' : ''; ?>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
