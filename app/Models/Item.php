<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Item extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'items';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['category_id','item_code','title','description','image','unit','price'];

//    protected $appends = [
//        'price'
//    ];
//
//    public function getPriceAttribute()
//    {
//        $mi = InvoiceDetail::where('item_id',$this->id)
//                ->orderBy('id','DESC')->limit(1)->first();
//        if($mi != null){
//            return $mi->price;
//        }else{
//            return 0;
//        }
//
//    }

    public function category()
    {
        return $this->belongsTo('App\Models\ItemCategory', 'category_id');
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
                        Image::make(file_get_contents($value))->save("images/items/$filename");

                        $att[] = "images/items/$filename";
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
                    Image::make(file_get_contents($value))->save("images/items/$filename");

                    $att[] = "images/items/$filename";
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
