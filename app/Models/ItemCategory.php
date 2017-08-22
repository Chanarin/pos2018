<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ItemCategory extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'item_categories';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['parent_id','title','image','description','status'];

    public function parent()
    {
        return $this->belongsTo('App\Models\ItemCategory', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\ItemCategory', 'parent_id');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item', 'parent_id');
    }


    public function setImageAttribute($values)
    {

        $attribute_name = "image";

        $att = [];

        if(isset($values['n'])) {

            if (count($values['n']) > 0) {

                foreach ($values['n'] as $value) {


                    // if a base64 was sent, store it in the db
                    if (starts_with($value, 'data:image')) {
                        //dd(file_get_contents($value));
                        $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
                        Image::make(file_get_contents($value))->save("images/item_categories/$filename");

//                        $att[] = "uploads/$filename";
                        $att[] = "images/item_categories/$filename";
                    }
                }


            }

        }

        if(isset($values['e'])) {
            foreach ($values['e'] as $value) {
                // if a base64 was sent, store it in the db
                if (starts_with($value, 'data:image')) {
                    //dd(file_get_contents($value));
                    $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
                    Image::make(file_get_contents($value))->save("images/item_categories/$filename");

                    $att[] = "images/item_categories/$filename";
                }else {
                    if($value != '') {
                        $att[] = $value;
                    }
                }
            }
        }


        $this->attributes[$attribute_name] = json_encode($att);

    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            $f = json_decode($obj->image,true);
            if(count($f)) {
                foreach ($f as $fv){
                    if (File::exists($fv)) File::delete($fv);
                }
            }
        });
    }


}
