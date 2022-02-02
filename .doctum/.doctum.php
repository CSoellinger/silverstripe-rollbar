<?php

use Doctum\Doctum;
use Doctum\RemoteRepository\GitHubRemoteRepository;
use Doctum\Parser\Filter\TrueFilter;
use Doctum\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;

$dir = './src';
$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Resources')
    ->exclude('Tests')
    ->in($dir);

// generate documentation for all v2.0.* tags, the 2.0 branch, and the main one
$versions = GitVersionCollection::create($dir)
    // In a non case-sensitive way, tags containing "PR", "RC", "BETA" and "ALPHA" will be filtered out
    // To change this, use: `$versions->setFilter(static function (string $version): bool { // ... });`
    // ->addFromTags('v2.0.*')
    // ->add('2.0', '2.0 branch')
    ->add('main', 'main branch');

$doctum = new Doctum($iterator, [
    // 'versions'             => $versions,
    'template_dirs'        => [__DIR__ . '/themes'],
    'theme'                => 'markdown',
    'title'                => 'SilverStripe Rollbar Module',
    'language'             => 'en', // Could be 'fr'
    'build_dir'            => __DIR__ . '/../docs/en/api/',
    'cache_dir'            => __DIR__ . '/cache/en/',
    'source_dir'           => dirname($dir) . '/',
    'remote_repository'    => new GitHubRemoteRepository('csoellinger/silverstripe-rollbar', dirname($dir)),
    'default_opened_level' => 2, // optional, 2 is the default value
]);

$doctum['filter'] = function () {
    return new TrueFilter();
};

return $doctum;
