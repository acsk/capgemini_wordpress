<?php get_header(); ?>
<div class="header-category bg-light py-5">
	<div class="container">
		<?php
		$category = get_the_category();

		?>
		<h2>Categoria: <?php echo $category[0]->cat_name;  ?></h2>
	</div>
</div>
<div class="container">
	<div class="album py-5">
		<div class="row ">
			<?php while (have_posts()) : the_post(); ?>

				<div class="col-md-4" style="margin-bottom: 3rem;">

					<img src="<?php if (has_post_thumbnail()) {
									the_post_thumbnail_url('small');
								}    ?>" class="mx-auto d-block" style="height:auto; max-width:310px" />
				</div>
				<div class="col-md-8">
					<h3><?php the_title(); ?></h3>
					<span>
						<?php the_excerpt(); ?>
					</span>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-custom">Saiba mais</a>
				</div>

			<?php endwhile; ?>

			<?php numeric_posts_nav(); ?>

		</div>
	</div>
</div>
<?php get_footer(); ?>