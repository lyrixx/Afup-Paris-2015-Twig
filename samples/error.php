<?php

require __DIR__.'/twig.php';

try {
    $twig->render('var.html.twig', array('prénom' => 'greg'));
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo "\n\n";

try {
    $twig->render('funct.html.twig');
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo "\n\n";
