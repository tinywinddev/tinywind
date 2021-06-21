<?php

return [

    'production' => false,

    'baseUrl' => '',

    'title' => 'Tinywind',

    'description' => 'A small collection of free Tailwind components.',

    'collections' => [
        'pages',
    ],

    'components' => [
        'Alerts' => [
            'Basic with dismiss' => 'alerts.basic',
            'Information with icon' => 'alerts.info',
        ],
        'Avatars' => [
            'Basic' => 'avatars.basic',
            'Activity indicator' => 'avatars.activity',
        ],
        'Buttons' => [
            'Solid' => 'buttons.solid',
            'Outline' => 'buttons.outline',
            'Rounded' => 'buttons.rounded',
            'Icons' => 'buttons.icons',
            'Three dimensional' => 'buttons.3d'
        ],
        'Blog posts' => [
            'Card' => 'blogs.card',
        ],
        'Maps' => false,
        'Stars' => [
            'Basic' => 'stars.basic',
        ],
        'Stats' => [
            'Basic' => 'stats.basic',
            'With icon' => 'stats.icon',
        ],
        'Tables' => [
            'Basic' => 'tables.basic',
            'Striped' => 'tables.striped',
            'With actions' => 'tables.actions',
            'Overflow' => 'tables.overflow'
        ],
        'Tabs' => [
            'Pills' => 'tabs.pills',
        ],
    ]

];
