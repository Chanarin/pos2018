<?php
namespace App\Filters;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Image80x80 implements FilterInterface
{

    public function applyFilter(Image $image)
    {
        return $image->resize(null, 50, function ($constraint) {
            $constraint->aspectRatio();
        });
    }

}