<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
 $fond = get_post_meta($post->ID, 'fond', true);
 $prix = get_post_meta($post->ID, 'Prix', true);
 var_dump($prix);
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<div class="meta">
		<div class="row collapse">
			<div class="small-9 columns"><?php the_category(", "); ?></div>
			<div class="small-3 columns text-right"><?php the_date(); ?></div>
		</div>
	</div>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<?php get_template_part('template-parts/img'); ?>



	<div class="entry-content">

		<?php do_action('avant_le_contenu_de_larticle', $post->ID); ?>




		<?php the_excerpt(); ?>
		<?php echo $prix; ?>
		<a href="<?php the_permalink(); ?>">Lire la suite...</a>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
