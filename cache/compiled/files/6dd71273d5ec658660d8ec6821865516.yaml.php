<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/steveforbes/Sites/ninas-wellness/grav-admin/user/themes/nina/blueprints.yaml',
    'modified' => 1513123617,
    'data' => [
        'name' => 'Nina',
        'version' => '1.0.0',
        'description' => 'This the default branded theme for Nina\'s Wellness',
        'icon' => 'empire',
        'author' => [
            'name' => 'Steve Forbes',
            'email' => 'sonicpoom@gmail.com',
            'url' => 'http://sebrof.co'
        ],
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
