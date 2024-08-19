<?php

declare(strict_types=1);

$ruleset = new TwigCsFixer\Ruleset\Ruleset();
$ruleset->addStandard(new TwigCsFixer\Standard\TwigCsFixer());

$finder = new TwigCsFixer\File\Finder();
$finder->in('templates/');

$config = new TwigCsFixer\Config\Config();
$config->allowNonFixableRules();
$config->setRuleset($ruleset);
$config->setFinder($finder);

// $config->addTwigExtension(new Sulu\Twig\Extensions\PortalExtension());
// $config->addTokenParser(new Sulu\Twig\Extensions\TokenParser\PortalTokenParser());

return $config;
