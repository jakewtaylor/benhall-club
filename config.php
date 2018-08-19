<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [],

    'active' => function ($page, $section) {
        if ($page->getPath() === '' && $section === 'home') {
            return 'active';
        }

        return str_contains($page->getPath(), $section) ? 'active' : '';
    },

    'getTitle' => function ($page) {
        if ($page->getPath() === '') {
            return $page->info->title;
        }

        return $page->title . ' - ' . $page->info->title;
    },

    'info' => [
        'title' => 'Benhall & Sternfield Ex Servicemens Club',
        'tel' => '01728 768 140',
        'openingHours' => [
            'Mon - Thu' => '7pm - 11pm',
            'Fri' => '7pm - 1am',
            'Sat' => '1:30pm - 1am',
            'Sun' => '12pm - 10:30pm',
        ],
        'facebook' => 'https://www.facebook.com/benhallclub/',
    ],
];
