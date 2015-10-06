<?php

require __DIR__.'/twig.php';

echo $twig->render('hello.html.twig', array('name' => 'greg'));

echo $twig->render('function-filter.html.twig', array('name' => 'greg'));
