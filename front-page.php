<?php get_header(); ?>


<section class="hero">

    <div class="container">

        <div class="hero-content">

            <h1>
                Descubra o universo da
                <span>música.</span>
            </h1>

            <p>
                Conheça artistas, explore gêneros musicais
                e descubra histórias que fazem parte
                do mundo da música.
            </p>


            <div class="hero-buttons">

                <a
                    href="<?php echo esc_url(home_url('/artistas')); ?>"
                    class="button">

                    Conheça os artistas

                </a>


                <a
                    href="<?php echo esc_url(home_url('/discoteca-virtual')); ?>"
                    class="button secondary">

                    Visite a discoteca

                </a>

            </div>

        </div>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="section-title">

            <h2>Explore o MusicVibe</h2>

            <p>
                Um espaço para descobrir diferentes
                estilos, artistas e histórias da música.
            </p>

        </div>


        <div class="cards">


            <article class="card">

                <div class="card-content">

                    <h3>🎤 Artistas</h3>

                    <p>
                        Conheça artistas de diferentes
                        estilos e descubra suas histórias.
                    </p>

                    <br>

                    <a
                        href="<?php echo esc_url(home_url('/artistas')); ?>"
                        class="button">

                        Explorar

                    </a>

                </div>

            </article>


            <article class="card">

                <div class="card-content">

                    <h3>🎵 Gêneros Musicais</h3>

                    <p>
                        Explore diferentes gêneros e
                        conheça suas características.
                    </p>

                    <br>

                    <a
                        href="<?php echo esc_url(home_url('/generos-musicais')); ?>"
                        class="button">

                        Explorar

                    </a>

                </div>

            </article>


            <article class="card">

                <div class="card-content">

                    <h3>💿 Discoteca Virtual</h3>

                    <p>
                        Entre em uma coleção musical
                        inspirada na cultura dos discos.
                    </p>

                    <br>

                    <a
                        href="<?php echo esc_url(home_url('/discoteca-virtual')); ?>"
                        class="button">

                        Entrar

                    </a>

                </div>

            </article>


        </div>

    </div>

</section>


<section class="section blog-section">

    <div class="container">

        <div class="section-title">

            <h2>Últimas do Blog</h2>

            <p>
                Curiosidades, histórias e informações
                sobre o universo musical.
            </p>

        </div>


        <div class="cards">

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
                                    20
                                ); ?>

                            </p>


                            <br>

                            <a
                                href="<?php the_permalink(); ?>"
                                class="button">

                                Ler mais

                            </a>

                        </div>

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


<?php get_footer(); ?>
