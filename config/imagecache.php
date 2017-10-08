<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Name of route
    |--------------------------------------------------------------------------
    |
    | Enter the routes name to enable dynamic imagecache manipulation.
    | This handle will define the first part of the URI:
    | 
    | {route}/{template}/{filename}
    | 
    | Examples: "images", "img/cache"
    |
    */

    'route' => 'img/cache',

    /*
    |--------------------------------------------------------------------------
    | Storage paths
    |--------------------------------------------------------------------------
    |
    | The following paths will be searched for the image filename, submited
    | by URI.
    |
    | Define as many directories as you like.
    |
    */

    'paths' => array(
        public_path('uploads'),
        public_path('uploads/slider'),
        public_path('uploads/donate'),
        public_path('uploads/gallery'),
        public_path('images'),
        public_path('images/users'),
        public_path('images/items'),
        public_path('images/item_categories'),
    ),

    /*
    |--------------------------------------------------------------------------
    | Manipulation templates
    |--------------------------------------------------------------------------
    |
    | Here you may specify your own manipulation filter templates.
    | The keys of this array will define which templates
    | are available in the URI:
    |
    | {route}/{template}/{filename}
    |
    | The values of this array will define which filter class
    | will be applied, by its fully qualified name.
    |
    */

    'templates' => array(
        'big-slide' => 'App\Filters\ImageBigSlide',
        'img335x210' => 'App\Filters\Image335x210',
        'img80' => 'App\Filters\Image80x80',
        'img300x300' => 'App\Filters\Image300x300',
        'img1920x910' => 'App\Filters\Image1920x910',
        'img930x677' => 'App\Filters\Image930x677',
        'img800x400' => 'App\Filters\Image800x400',
        'img150x100' => 'App\Filters\Image150x100',
        'img800' => 'App\Filters\Image800',
        'img73x73' => 'App\Filters\Image73x73',
        'small' => 'App\Filters\Image3x2',
        'medium' => 'Intervention\Image\Templates\Medium',
        'large' => 'Intervention\Image\Templates\Large',
    ),

    /*
    |--------------------------------------------------------------------------
    | Image Cache Lifetime
    |--------------------------------------------------------------------------
    |
    | Lifetime in minutes of the images handled by the imagecache route.
    |
    */

//  'lifetime' => 0,
    'lifetime' => 43200,

);
