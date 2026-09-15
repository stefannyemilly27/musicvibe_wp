<?php get_header(); ?>

<main class="page-content">

```
<div class="container">

    <?php while (have_posts()) : the_post(); ?>

        <article>

            <h1 class="page-title">
                <?php the_title(); ?>
            </h1>

            <div class="page-text">

                <?php the_content(); ?>

            </div>

        </article>

    <?php endwhile; ?>

</div>
```

</main>

<?php get_footer(); ?>
