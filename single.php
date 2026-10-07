<?php get_header(); ?>


<main class="page-content">

    <div class="container">

        <?php

        while (have_posts()) :

            the_post();

        ?>

            <article class="single-post">

                <h1>
                    <?php the_title(); ?>
                </h1>


                <div class="post-meta">

                    Publicado em
                    <?php echo get_the_date(); ?>

                </div>


                <?php if (has_post_thumbnail()) : ?>

                    <?php the_post_thumbnail(); ?>

                <?php endif; ?>


                <div class="single-post-content">

                    <?php the_content(); ?>

                </div>

            </article>

        <?php

        endwhile;

        ?>

    </div>

</main>


<?php get_footer(); ?>