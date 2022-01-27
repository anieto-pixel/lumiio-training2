<!doctype html>

<title>My Blog</title>

<link rel="stylesheet" href="/app.css">

<body>
    <? foreach($posts as $post) : ?>
    <article>
        <h1>
            <a href="/posts/slug">
                <?= $post->title;?>
            </a>
        </h1>
        <p>
            En un lugar de La Mancha de cuyo nombre no quiero acordarme,
            no ha mucho tiempo vivia un hidalgo de los de lanza en astillero,
            adarga antigua, rocin flaco y galgo corredor.
        </p>
    </article>
    <?php endofeach; ?>

</body>
