<?php get_header(); ?>

<main class="site-content">

```
<div class="container">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article class="post">

                <h1>
                    <?php the_title(); ?>
                </h1>

                <div class="post-content">

                    <?php the_content(); ?>

                </div>

            </article>

        <?php endwhile; ?>

    <?php else : ?>

        <p>Nenhum conteúdo encontrado.</p>

    <?php endif; ?>

</div>
```

</main>

<?php get_footer(); ?>
