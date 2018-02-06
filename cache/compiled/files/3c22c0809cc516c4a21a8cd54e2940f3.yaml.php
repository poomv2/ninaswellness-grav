<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/steveforbes/Sites/ninas-wellness/grav-admin/user/config/site.yaml',
    'modified' => 1517511195,
    'data' => [
        'title' => 'Nina\'s Wellness',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Joe Bloggs',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 150,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
