<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->exclude('vendor')
    ->name('*.php');

return (new Config())
    ->setRules([
        '@PSR12' => true,
        'no_unused_imports' => true,
        // Add more rules as needed
    ])
    ->setFinder($finder);
