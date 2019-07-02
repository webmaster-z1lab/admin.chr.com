<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Limit title meta tag length
    |--------------------------------------------------------------------------
    |
    | To best SEO implementation, limit tags.
    |
    */

    'title_limit' => 70,

    /*
    |--------------------------------------------------------------------------
    | Limit description meta tag length
    |--------------------------------------------------------------------------
    |
    | To best SEO implementation, limit tags.
    |
    */

    'description_limit' => 200,

    /*
    |--------------------------------------------------------------------------
    | Limit image meta tag quantity
    |--------------------------------------------------------------------------
    |
    | To best SEO implementation, limit tags.
    |
    */

    'image_limit' => 5,

    /*
    |--------------------------------------------------------------------------
    | Available Tag formats
    |--------------------------------------------------------------------------
    |
    | A list of tags formats to print with each definition
    |
    */

    'tags' => ['Tag', 'MetaName', 'MetaProperty', 'TwitterCard'],

    /*
    |--------------------------------------------------------------------------
    | Default site title
    |--------------------------------------------------------------------------
    */

    'title' => 'Sistema Administrativo | Confecção Helena Ribeiro',

    /*
    |--------------------------------------------------------------------------
    | Default title separator
    |--------------------------------------------------------------------------
    */

    'title_separator' => ' |',

    /*
     |--------------------------------------------------------------------------
     | Default tags generated by default
     |--------------------------------------------------------------------------
     |
     | Use to set the meta tags that will repeat in all pages by default
     |
     */
    'default_tags'    => [
        'viewport'    => 'width=device-width, initial-scale=1.0',
        'description' => '',
        'robots'      => 'index, follow',
        'author'      => 'Confecção Helena Ribeiro',
        'local'       => 'pt-BR',
        'theme-color' => '#25416A',
        'site_name'   => 'evaluation',
    ],
];
