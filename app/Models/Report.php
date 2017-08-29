<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Report extends Model
{

    static function openItemReport($request,$limit=2)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $q = $request->q;
        $m = OpenItem::whereBetween('_date_', array($from_date, $to_date));

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('open_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->orderBy('id','ASC')->paginate($limit);
    }
    static function purchaseItemReport($request,$limit=2)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $q = $request->q;
        $m = OpenItem::whereBetween('_date_', array($from_date, $to_date));

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('open_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->orderBy('id','ASC')->paginate($limit);
    }
    static function productionItemReport($request,$limit=2)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $q = $request->q;
        $m = OpenItem::whereBetween('_date_', array($from_date, $to_date));

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('open_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->orderBy('id','ASC')->paginate($limit);
    }
}