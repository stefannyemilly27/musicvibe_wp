<?php get_header(); ?>

<main>

```
<!-- BANNER PRINCIPAL -->

<section class="hero">

    <div class="container">

        <p class="hero-subtitle">
            BEM-VINDO AO
        </p>

        <h1>
            MUSIC<span>VIBE</span>
        </h1>

        <p class="hero-description">
            Descubra artistas, conheça gêneros
            e explore o universo da música.
        </p>

        <div class="hero-buttons">

            <a href="<?php echo esc_url(home_url('/artistas')); ?>">
                Conhecer artistas
            </a>

            <a href="<?php echo esc_url(home_url('/discoteca')); ?>">
                Entrar na discoteca
            </a>

        </div>

    </div>

</section>


<!-- APRESENTAÇÃO -->

<section class="about">

    <div class="container">

        <p class="section-label">
            SOBRE O PROJETO
        </p>

        <h2>
            O universo da música em um só lugar
        </h2>

        <p>
            O MusicVibe é um espaço criado para explorar
            diferentes artistas, gêneros musicais e
            curiosidades sobre o universo da música.
        </p>

    </div>

</section>


<!-- DESTAQUES -->

<section class="highlights">

    <div class="container">

        <p class="section-label">
            EXPLORE
        </p>

        <h2>
            Descubra o MusicVibe
        </h2>

        <div class="highlight-grid">

            <div class="highlight-card">

                <h3>Artistas</h3>

                <p>
                    Conheça artistas de diferentes
                    estilos e épocas.
                </p>

                <a href="<?php echo esc_url(home_url('/artistas')); ?>">
                    Explorar
                </a>

            </div>


            <div class="highlight-card">

                <h3>Gêneros</h3>

                <p>
                    Explore diferentes gêneros
                    e suas características.
                </p>

                <a href="<?php echo esc_url(home_url('/generos')); ?>">
                    Explorar
                </a>

            </div>


            <div class="highlight-card">

                <h3>Discoteca</h3>

                <p>
                    Escolha um disco e descubra
                    uma música.
                </p>

                <a href="<?php echo esc_url(home_url('/discoteca')); ?>">
                    Explorar
                </a>

            </div>

        </div>

    </div>

</section>


<!-- BLOG -->

<section class="latest-posts">

    <div class="container">

        <p class="section-label">
            BLOG
        </p>

        <h2>
            Do nosso blog
        </h2>

        <div class="posts-grid">

            <?php

            $posts = new WP_Query(array(
                'posts_per_page' => 3
            ));

            if ($posts->have_posts()) :

                while ($posts->have_posts()) :
                    $posts->the_post();

            ?>

                <article class="post-card">

                    <?php if (has_post_thumbnail()) : ?>

                        <a href="<?php the_permalink(); ?>">

                            <?php the_post_thumbnail('medium'); ?>

                        </a>

                    <?php endif; ?>


                    <h3>

                        <a href="<?php the_permalink(); ?>">

                            <?php the_title(); ?>

                        </a>

                    </h3>


                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                    </p>


                    <a href="<?php the_permalink(); ?>">
                        Ler mais
                    </a>

                </article>

            <?php

                endwhile;

                wp_reset_postdata();

            else :

            ?>

                <p>
                    Ainda não existem posts publicados.
                </p>

            <?php endif; ?>

        </div>

    </div>

</section>
```

</main>

<?php get_footer(); ?>
