<?php
namespace App\Helpers;

//use App\Language;
use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class GH extends Model
{
    public static function getImage($img)
    {
        if(File::exists($img))
        {
            return asset($img);
        }else{
            return asset('no-image.png');
        }
    }

    public static function getRoleArray()
    {
        return [
            1 => 'Post Card',
            2 => 'User',
            3 => 'Admin',
            4 => 'Supper Admin',
        ];
    }

    public static function getMemberRoleArray()
    {
        return [
            1 => 'Professional',
            2 => 'Ultimate',
            3 => 'Business',
        ];
    }

    public static function arrMemberLevel()
    {
        return [1=>'Bronze Level Membership',2=>'Silver Level Membership',3=>'Gold Level Membership',4=>'Platinum Level Membership'];
    }

    public static function getMemberLevel()
    {
        return 3;
        try {
            $m_level = session('m_level');
            return $m_level - 0;
        } catch (\Exception $e) {
            return 0;
        }
    }

    public static function getMemberID()
    {
        try {
            $member_id = session('m_id');
            return $member_id - 0;
        } catch (\Exception $e) {
            return 0;
        }
    }

    public static function getMemberInfo()
    {

        try {
            if(session('m_id') > 0) {
                return [
                    'id' => session('m_id'),
                    'name' => session('m_name'),
                    'email' => session('m_email'),
                    'phone' => session('m_phone'),
                    'photo' => session('m_photo')
                ];
            }else{
                $m = Member::find(getMember2ID());
                if($m != null) {
                    return [
                        'id' => $m->id,
                        'name' => $m->name,
                        'email' => $m->email,
                        'phone' => $m->phone,
                        'photo' => $m->photo
                    ];
                }
            }

        } catch (\Exception $e) {  }

        return [
            'id' => 0,
            'name' => '',
            'email' => '',
            'phone' => '',
            'photo' => '',
        ];

    }

    public static function getUserID()
    {
        try {
            $id = 0;
            if (Auth::check())
            {
                $id = Auth::user()->getId();
            }
            $user_id = $id;// session('u_id');
            return $user_id - 0;
        } catch (\Exception $e) {
            return 0;
        }
    }

    public static function getAdminMemberID()
    {
        try {
            $user_id =  session('admin_member_id');
            return $user_id - 0;
        } catch (\Exception $e) {
            return 0;
        }
    }



    public static function getUserInfo()
    {
        try {
            return [
                'id' => session('u_id'),
                'name' => session('u_name'),
                'email' => session('u_email'),
                'phone' => session('u_phone')
            ];
        } catch (\Exception $e) {

            return [
                'id' => 0,
                'name' => '',
                'email' => '',
                'phone' => ''
            ];
        }
    }

    public static function arrUserLevel()
    {
        return [1=>'User',2=>'Admin',3=>'Supper Admin'];
    }

    public static function getUserLevel()
    {
        return 3;
        try {
            $u_level = session('u_level');
            return $u_level - 0;
        } catch (\Exception $e) {
            return 0;
        }
    }

    public static function status(){
        return [1=> 'Active',0=> 'Inactive'];
    }

    static function translate($txt)
    {
        //return Language::Translate($txt);
        return $txt;
    }


    static function deleteFileUpload($img_full_path)
    {
        if(File::exists($img_full_path)) File::delete($img_full_path);
    }

}