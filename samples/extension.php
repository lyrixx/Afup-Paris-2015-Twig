<?php

require __DIR__.'/twig.php';

class SuffleExtension extends Twig_Extension
{
    public function getFilters()
    {
        return [
            new Twig_SimpleFilter('shuffle', 'str_shuffle'),
        ];
    }

    public function getName()
    {
        return 'shuffle';
    }
}

$twig->addExtension(new SuffleExtension());

echo $twig->render('shuffle.html.twig', array('word' => 'shuffle'));
