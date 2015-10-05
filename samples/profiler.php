<?php

require __DIR__.'/twig.php';

$profile = new Twig_Profiler_Profile();
$twig->addExtension(new Twig_Extension_Profiler($profile));

$twig->render('index.html.twig', [
    'name' => 'greg',
]);

// $dumper = new Twig_Profiler_Dumper_Blackfire();
$dumper = new Twig_Profiler_Dumper_Text();
echo $dumper->dump($profile);
