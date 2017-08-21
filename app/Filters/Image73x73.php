<?php
namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Image73x73 implements FilterInterface
{

    public function applyFilter(Image $image)
    {
        return $image->fit(73, 73);
    }

}