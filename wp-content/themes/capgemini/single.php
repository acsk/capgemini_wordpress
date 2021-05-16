<?php get_header(); ?>





<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php if (has_post_thumbnail()) {
			$featured_image = get_the_post_thumbnail();
		}
		?>


		<div class="destaque" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'single-post-thumbnail'); ?>')"></div>


		<div class="container">
			<h1 class="single-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>

			<hr>

			<p><b>Fonte: </b><?php echo get_post_meta($post->ID, 'Fonte', true); ?></p>

		</div>

	<?php endwhile; ?>
<?php endif; ?>

<hr>
<div class="container">

	<h5>Leia mais postagens posts:</h5>
	<div class="py-5 row">

		<?php

		$exclude = get_the_ID();


		global $wp_query;
		$exclude = $wp_query->post->ID;

		global $post;
		$postcat = get_the_category($post->ID);



		// if (!empty($postcat)) {
		// 	echo esc_html($postcat[0]->name);
		// }

		$args = array(
			'category_name' => esc_html($postcat[0]->name),
			'posts_per_page' => -1
		);
		$your_query = new WP_Query($args);

		/* loop */
		echo '<ul>';
		while ($your_query->have_posts()) : $your_query->the_post();
			if ($exclude != get_the_ID()) {
				echo '<li><a href="' . get_permalink() . '">' .
					get_the_title() . '</a></li>';
			}
		endwhile;
		echo '</ul>';

		?>
	</div>
</div>

<?php get_footer(); ?>