<footer class="site-footer">

    <div class="container">

        <div class="footer-content">

            <div>

                <h3>MusicVibe</h3>

                <p>
                    Descubra artistas, conheça gêneros
                    e explore o universo da música.
                </p>

            </div>


            <div>

                <h3>Explore</h3>

                <ul>

                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            Início
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/artistas')); ?>">
                            Artistas
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/generos-musicais')); ?>">
                            Gêneros Musicais
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/discoteca-virtual')); ?>">
                            Discoteca Virtual
                        </a>
                    </li>

                </ul>

            </div>


            <div>

                <h3>Blog</h3>

                <ul>

                    <li>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>">
                            Curiosidades
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>">
                            História da música
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>">
                            Gêneros musicais
                        </a>
                    </li>

                </ul>

            </div>

        </div>


        <div class="copyright">

            <p>
                © <?php echo date('Y'); ?> MusicVibe.
                Todos os direitos reservados.
            </p>

        </div>

    </div>

</footer>


<?php wp_footer(); ?>

</body>

</html>