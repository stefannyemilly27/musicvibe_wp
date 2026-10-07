<?php get_header(); ?>


<main class="page-content">

    <div class="container">

        <?php

        if (have_posts()) :

            while (have_posts()) :

                the_post();

        ?>

                <article class="single-post">

                    <h1>

                        <a href="<?php the_permalink(); ?>">

                            <?php the_title(); ?>

                        </a>

                    </h1>


                    <div class="post-meta">

                        <?php echo get_the_date(); ?>

                    </div>


                    <div class="single-post-content">

                        <?php the_excerpt(); ?>

                    </div>

                </article>

        <?php

            endwhile;

        else :

        ?>

            <h1>Nenhum conteúdo encontrado.</h1>

        <?php endif; ?>

    </div>

</main>


<?php get_footer(); ?>