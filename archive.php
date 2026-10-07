<?php get_header(); ?>


<section class="page-banner">

    <div class="container">

        <h1>Blog MusicVibe</h1>

        <p>
            Curiosidades, histórias e informações
            sobre o universo da música.
        </p>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="cards">

            <?php

            if (have_posts()) :

                while (have_posts()) :

                    the_post();

            ?>

                    <article class="post-card">

                        <?php if (has_post_thumbnail()) : ?>

                            <?php the_post_thumbnail(); ?>

                        <?php endif; ?>


                        <div class="post-card-content">

                            <div class="post-date">

                                <?php echo get_the_date(); ?>

                            </div>


                            <h3>

                                <?php the_title(); ?>

                            </h3>


                            <p>

                                <?php echo wp_trim_words(
                                    get_the_excerpt(),
                                    25
                                ); ?>

                            </p>


                            <br>


                            <a
                                href="<?php the_permalink(); ?>"
                                class="button">

                                Ler artigo

                            </a>

                        </div>

                    </article>

            <?php

                endwhile;

            else :

            ?>

                <p>
                    Nenhum artigo encontrado.
                </p>

            <?php endif; ?>

        </div>

    </div>

</section>


<?php get_footer(); ?>