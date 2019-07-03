<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/config/site.yaml',
    'modified' => 1562182595,
    'data' => [
        'title' => 'SM',
        'favicon' => 'favicon.png',
        'default_lang' => 'es',
        'google_analytics' => 'UA-143170319-1',
        'author' => [
            'name' => 'Sahory Maila',
            'email' => 'sahory.maila@gmail.com',
            'logo' => 'logo.jpg'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => 'sahorymaila.com'
        ],
        'google_translate_token' => 'a4a3caaf1d41a924-5fa21ae3833dd6c1-g99933840045dca1c-26',
        'mainmenu' => [
            0 => [
                'text' => 'Sobre mi',
                'url' => '#'
            ],
            1 => [
                'text' => 'Contacto',
                'url' => 'page:contact'
            ],
            2 => [
                'text' => 'Login',
                'url' => 'https://sahorymaila.com/admin'
            ]
        ],
        'feedburner' => [
            'title' => 'Follow by Email',
            'id' => 'SoraArticle',
            'text' => 'Suscríbase aquí para recibir nuestro boletín de noticias, es seguro, solo coloque su correo electrónico y presione Enter'
        ],
        'labels' => [
            'title' => 'Labels',
            'items' => [
                0 => [
                    'url' => 'http://getgrav.org/',
                    'label' => 'Grav'
                ]
            ]
        ],
        'footer' => [
            'title' => 'Graficacion y Animacion',
            'content' => 'Este blog se lleva acabo para la materia de Graficacion y Animacion, utilizando Grav como CMS para administrar el contido.'
        ],
        'copyright' => [
            'text1' => 'Copyright',
            'year' => 2015
        ]
    ]
];
