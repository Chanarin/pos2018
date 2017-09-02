<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AdminUser extends Model
{
    use CrudTrait;

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['role_id','name','username','email','phone','password','confirmed','confirmation_code','photo','status','create_by','update_by','remember_token'];
//bcrypt
    public function setPhotoAttribute($value)
    {
        $attribute_name = "photo";
        $disk = "public";

        // if the image was erased
        if (($value==null && $this->id ==0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

            // delete the image from disk
            if(File::exists($this->photo)) File::delete($this->photo);

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            //dd(file_get_contents($value));
            $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
            Image::make(file_get_contents($value))->save("images/users/$filename");

            $this->attributes[$attribute_name] = "images/users/$filename";
        }
    }

    public function setPasswordAttribute($value)
    {

            $this->attributes['password'] = bcrypt($value);
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            if(File::exists($obj->logo)) File::delete($obj->photo);
        });
    }

    public function changePassword($crud = false)
    {
        return '<form action="'.url('admin/user/change-pass').'" method="post" style="display: inline;">
                  <input name="id" type="hidden" value="'.$this->id.'">
                  '.csrf_field().method_field('PUT').'                  
                  <button class="btn btn-xs btn-default" data-toggle="tooltip" title=""><i class="fa fa-key"></i> Change Pass.</button>
                </form>';
    }

}
