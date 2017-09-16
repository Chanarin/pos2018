<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Report extends Model
{
    static function openItemReport($request,$limit=200)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $q = $request->q;
        $report_option = $request->report_option;

        $m = OpenItem::whereBetween('_date_', array($from_date, $to_date));

        if ($report_option == 'between') {
            $m->whereBetween('_date_', array($from_date, $to_date));
        } else {
            $m->where('_date_', '<=', $to_date);
        }

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('open_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->orderBy('id','ASC')->paginate($limit);
    }
    static function purchaseItemReport($request,$limit=200)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $q = $request->q;
        $report_option = $request->report_option;
        $m = Purchase::whereBetween('_date_', array($from_date, $to_date));

        if ($report_option == 'between') {
            $m->whereBetween('_date_', array($from_date, $to_date));
        } else {
            $m->where('_date_', '<=', $to_date);
        }

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('purchase_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->orderBy('id','ASC')->paginate($limit);
    }
    static function productionItemReport($request,$limit=200)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $q = $request->q;
        $report_option = $request->report_option;

        $m = Production::whereBetween('_date_', array($from_date, $to_date));
        if ($report_option == 'between') {
            $m->whereBetween('_date_', array($from_date, $to_date));
        } else {
            $m->where('_date_', '<=', $to_date);
        }

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('production_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->orderBy('id','ASC')->paginate($limit);
    }
    static function invoiceItemReport($request,$limit=200)
    {
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $q = $request->q;
        $report_option = $request->report_option;

        $m = Invoice::whereBetween('_date_', array($from_date, $to_date));
        if ($report_option == 'between') {
            $m->whereBetween('_date_', array($from_date, $to_date));
        } else {
            $m->where('_date_', '<=', $to_date);
        }

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('invoice_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->orderBy('id','ASC')->paginate($limit);
    }
}