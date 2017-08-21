<?php

namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Image335x210 implements FilterInterface
{

    public function applyFilter(Image $image)
    {
        return $image->fit(335, 210);
    }

}