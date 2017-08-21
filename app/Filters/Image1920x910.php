<?php
namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Image1920x910 implements FilterInterface
{

    public function applyFilter(Image $image)
    {
        return $image->fit(1920, 910);
    }

}