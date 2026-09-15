<?php get_header(); ?>

<main class="single-post">

```
<div class="container">

    <?php while (have_posts()) : the_post(); ?>

        <article>

            <p class="post-date">
                <?php echo get_the_date(); ?>
            </p>

            <h1>
                <?php the_title(); ?>
            </h1>

            <?php if (has_post_thumbnail()) : ?>

                <div class="post-image">

                    <?php the_post_thumbnail('large'); ?>

                </div>

            <?php endif; ?>

            <div class="post-content">

                <?php the_content(); ?>

            </div>

        </article>

    <?php endwhile; ?>

</div>
```

</main>

<?php get_footer(); ?>
