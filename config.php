<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Janarthansekar Sekar',
    'siteDescription' => 'Backend-heavy full-stack engineer building PLM-based ERP systems.',
    'siteAuthor' => 'Janarthansekar Sekar',

    // Collections
    'collections' => [
        'writing' => [
            'author' => 'Janarthansekar Sekar',
            'sort' => '-date',
            'path' => 'writing/{filename}',
        ],
        'case_studies' => [
            'author' => 'Janarthansekar Sekar',
            'sort' => '-date',
            'path' => 'case-studies/{filename}',
        ],
    ],

    // Helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },

    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(strip_tags($content[0]));

        if (Str::length($cleaned) > $length) {
            return Str::limit($cleaned, $length);
        }

        return $cleaned;
    },
];
