<?php
namespace App\Helpers;

use App\Language;
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

    static function translate($txt,$lang = 'km')
    {
        if(session()->exists('sess_lang'))
        {
            $lang = session('sess_lang');
        }
        $arr_lang = ['en','km'];
        $l = in_array($lang,$arr_lang)?$lang:'km';
        $t = str_replace(' ','_',   preg_replace('/\s+/', ' ',  strtolower(trim($txt))));
        $m = Language::where('key',$t)->first();
        if($m != null)
        {
            if(isset($m->{$l}))
            {
                if($m->{$l} != null && $m->{$l} != '')
                {
                    return $m->{$l};
                }
            }
        }else{
            $m = new Language();
            $m->key = $t;
            $m->save();
        }
        return $txt;
        //return __('go711.'.$t);
    }

}

