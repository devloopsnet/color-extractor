<?php

$finder = Symfony\Component\Finder\Finder::create()
                                         ->files()
                                         ->name('*.php')
                                         ->in(['src', 'tests']);

$config = new PhpCsFixer\Config();
return $config->setFinder($finder)
              ->setRules([
                '@Symfony'     => true,
                'array_syntax' => ['syntax' => 'short'],
              ]);