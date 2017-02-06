<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
 //$image = get_field('image_source', $post->ID);
 $reference = get_field('reference_produit', $post->ID);

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('column blogpost-entry wow slideInLeft'); ?> style="background: <?php echo $fond; ?>">

	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-content">
		<img src="<?php the_field('image_source'); ?>" alt=""><br>
    Reference : <?php echo $reference; ?><br>
		<a href="<?php the_permalink(); ?>">Lire la suite...</a>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
