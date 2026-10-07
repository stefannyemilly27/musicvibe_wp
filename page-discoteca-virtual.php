<?php get_header(); ?>


<section class="page-banner">

    <div class="container">

        <h1>Discoteca Virtual</h1>

        <p>
            Explore nossa coleção musical e descubra
            diferentes artistas e gêneros.
        </p>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="discoteca-grid">


            <div class="discoteca-item">

                <div class="music-disc"></div>

                <h3>Disco 01</h3>

                <p>
                    Música: Exemplo Musical
                </p>

                <p>
                    Artista: Artista 01
                </p>

                <p>
                    Gênero: Pop
                </p>

            </div>


            <div class="discoteca-item">

                <div class="music-disc"></div>

                <h3>Disco 02</h3>

                <p>
                    Música: Exemplo Musical
                </p>

                <p>
                    Artista: Artista 02
                </p>

                <p>
                    Gênero: Rock
                </p>

            </div>


            <div class="discoteca-item">

                <div class="music-disc"></div>

                <h3>Disco 03</h3>

                <p>
                    Música: Exemplo Musical
                </p>

                <p>
                    Artista: Artista 03
                </p>

                <p>
                    Gênero: Disco
                </p>

            </div>


            <div class="discoteca-item">

                <div class="music-disc"></div>

                <h3>Disco 04</h3>

                <p>
                    Música: Exemplo Musical
                </p>

                <p>
                    Artista: Artista 04
                </p>

                <p>
                    Gênero: MPB
                </p>

            </div>


            <div class="discoteca-item">

                <div class="music-disc"></div>

                <h3>Disco 05</h3>

                <p>
                    Música: Exemplo Musical
                </p>

                <p>
                    Artista: Artista 05
                </p>

                <p>
                    Gênero: Soul
                </p>

            </div>


            <div class="discoteca-item">

                <div class="music-disc"></div>

                <h3>Disco 06</h3>

                <p>
                    Música: Exemplo Musical
                </p>

                <p>
                    Artista: Artista 06
                </p>

                <p>
                    Gênero: Jazz
                </p>

            </div>


        </div>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="section-title">

            <h2>Ouça no MusicVibe</h2>

            <p>
                O player musical será integrado aqui
                utilizando o plugin de música escolhido
                para o projeto.
            </p>

        </div>

        <?php

        while (have_posts()) :

            the_post();

            the_content();

        endwhile;

        ?>

    </div>

</section>


<?php get_footer(); ?>