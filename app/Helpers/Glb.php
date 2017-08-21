<?php
namespace App\Helpers;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class Glb
{
    static function get_basename($filename)
    {
        return preg_replace('/^.+[\\\\\\/]/', '', $filename);
    }

    static function getSetting($key=null)
    {
        if($key == null)
        {
            $m = \Backpack\Settings\app\Models\Setting::select('key','value')->get();
        }else{
            $m = \Backpack\Settings\app\Models\Setting::where('key',$key)->select('key','value')->first();
        }

        return $m;
    }

    static function getSettingKey($key,$m = null)
    {
        if($m != null)
        {
            if(isset($m->key)){
                return $m->value ;
            }else{
                foreach ($m as $row)
                {
                    if($row->key == $key){
                        return $row->value ;
                    }
                }
            }
        }

        return null;
    }

}

