<?php

namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class ImageBigSlide implements FilterInterface
{

    public function applyFilter(Image $image)
    {
        return $image->fit((int)(1920*0.7), (int)(882*0.7));
    }

}