<?php
$packageKey = 'EXT:setup_package';
$iconPathSVG = '/Resources/Public/Icons/SVGs/Active/';

return [
    'theme' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
        'source' => '' . $packageKey . '/ext_icon.gif',
        'name' => 'theme'
    ],
    'col-1' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => '' . $packageKey . '' . $iconPathSVG . 'one-col-fullscreen.svg',
        'name' => 'col-1'
    ],
    'col-2' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => '' . $packageKey . '' . $iconPathSVG . '2-col.svg',
        'name' => 'col-2'
    ],
    'col-3' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => '' . $packageKey . '' . $iconPathSVG . '3-col.svg',
        'name' => 'col-3'
    ],
    'col-4' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => '' . $packageKey . '' . $iconPathSVG . '4-col.svg',
        'name' => 'col-4'
    ],
];