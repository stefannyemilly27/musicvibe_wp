<?php get_header(); ?>

<main class="blog-page">

```
<div class="container">

    <p class="section-label">
        MUSICVIBE
    </p>

    <h1>
        Blog
    </h1>

    <p class="blog-description">
        Histórias, curiosidades e descobertas
        do universo musical.
    </p>


    <div class="posts-grid">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article class="post-card">

                    <?php if (has_post_thumbnail()) : ?>

                        <?php the_post_thumbnail('medium'); ?>

                    <?php endif; ?>

                    <p class="post-date">
                        <?php echo get_the_date(); ?>
                    </p>

                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                    </p>

                    <a href="<?php the_permalink(); ?>">
                        Ler mais
                    </a>

                </article>

            <?php endwhile; ?>

        <?php else : ?>

            <p>
                Nenhum post encontrado.
            </p>

        <?php endif; ?>

    </div>

</div>
```

</main>

<?php get_footer(); ?>
