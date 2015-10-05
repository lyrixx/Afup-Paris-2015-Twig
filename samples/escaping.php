<?php

require __DIR__.'/twig.php';

echo $twig->render('index.html.twig', [
    'name' => '<script>alert("coucou")</script>',
]);
