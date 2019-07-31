<?php
require '../vendor/autoload.php';

$products = ['orange','pomme','banane','clémentine','cerise','mangue'];

$loader = new Twig_Loader_Filesystem('../src/View');
$twig = new Twig_Environment($loader,['cache'=> false]);
echo $twig->render('index.html.twig', ['products'=> $products]);

?>