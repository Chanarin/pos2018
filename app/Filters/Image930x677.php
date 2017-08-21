<?php
namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Image930x677 implements FilterInterface
{

    public function applyFilter(Image $image)
    {
        return $image->fit(930, 677);
    }

}