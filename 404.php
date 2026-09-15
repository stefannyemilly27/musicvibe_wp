<?php get_header(); ?>

<main class="error-page">

```
<div class="container">

    <p class="section-label">
        MUSICVIBE
    </p>

    <h1>
        404
    </h1>

    <h2>
        Essa página saiu da playlist.
    </h2>

    <p>
        Parece que o conteúdo que você procura
        não existe ou foi movido.
    </p>

    <a href="<?php echo esc_url(home_url('/')); ?>">
        Voltar para o início
    </a>

</div>
```

</main>

<?php get_footer(); ?>
