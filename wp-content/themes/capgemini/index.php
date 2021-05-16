<?php get_header(); ?>
<main>

    <section class="text-center">


        <div class="slider">

            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'games',
                'posts_per_page' => -1,
            );
            $posts_query = new WP_Query($args);


            ?>

            <?php if ($posts_query->have_posts()) : ?>
                <!-- the loop -->
                <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>

                    <div class="row py-5" style="background-size: cover; background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'single-post-thumbnail'); ?>')">

                        <div class="col-lg-6 col-md-8 mx-auto py-5">
                            <h1 style="color:white"><?php the_title() ?></h1>

                            <a href="<?php the_permalink() ?>" class="btn btn-primary my-2">Saiba mais</a>


                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Nenhum post encontrado'); ?></p>
            <?php endif; ?>
        </div>
    </section>


    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php
                $categories = get_categories('exclude=3');

                foreach ($categories as $category) {

                    $new_query = new WP_Query('posts_per_page=10&cat=' . $category->cat_ID);

                    if ($new_query->have_posts()) :
                        while ($new_query->have_posts()) : $new_query->the_post(); ?>

                            <div class="col">
                                <article>
                                    <div class="card shadow-sm">


                                        <div class="card-body">
                                            <h2><?php the_title(); ?></h2>
                                           
                                            <p class="card-text"><?php the_excerpt() ?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary btn-custom">Saiba mais</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                <?php
                        endwhile;

                        wp_reset_postdata();

                    endif;
                }

                ?>

            </div>
        </div>

    </div>

</main>
<?php get_footer(); ?>