<?php
namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ReportType extends Model
{
    static function openItemReport($request,$limit=100)
    {
        $q = $request->q;
        $m = OpenItem::orderBy('id','ASC');

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('open_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->paginate($limit);
    }

    static function purchaseItemReport($request,$limit=100)
    {
        $q = $request->q;
        $m = Purchase::orderBy('id','ASC');

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('purchase_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->paginate($limit);
    }
    static function productionItemReport($request,$limit=100)
    {
        $q = $request->q;
        $m = Production::orderBy('id','ASC');

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('production_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->paginate($limit);
    }

    static function invoiceItemReport($request,$limit=100)
    {
        $q = $request->q;
        $m = Invoice::orderBy('id','ASC');

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('invoice_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->paginate($limit);

    }
    static function invoiceDiscountItemReport($request,$limit=100)
    {
        $q = $request->q;


        $m = Invoice::where('total_discount','<>',null)
            ->where('total_discount','<>',0);

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('invoice_number','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }
        return $m->paginate($limit);

    }

    static function productInOut($request,$limit=100){
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
        $q = $request->q;

        $begin = DB::select("SELECT item_id,SUM(qty) as total_qty FROM items_transaction WHERE tran_date < '$from_date' GROUP BY item_id");

        $ab = [];
        if(count($begin)>0){

            foreach ($begin as $rb){
                $ab[$rb->item_id] = $rb->total_qty;
            }

        }


        $stockin = DB::select("SELECT item_id,SUM(qty) as total_qty FROM items_transaction WHERE tran_date >= '$from_date' 
                AND tran_date <= '$to_date' AND qty > 0 GROUP BY item_id ");

        $ab2 = [];
        if(count($stockin)>0){

            foreach ($stockin as $rb){
                $ab2[$rb->item_id] = $rb->total_qty;
            }

        }

        $stockout = DB::select("SELECT item_id,SUM(qty) as total_qty FROM items_transaction WHERE tran_date >= '$from_date' 
                AND tran_date <= '$to_date' AND qty < 0 GROUP BY item_id ");



        $ab3 = [];
        if(count($stockout)>0){

            foreach ($stockout as $rb){
                $ab3[$rb->item_id] = $rb->total_qty;
            }

        }


        $m = Item::orderBy('id','ASC');

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){
                $query->where('item_code','like',"%{$q}%")
                    ->orWhere('title','like',"%{$q}%")
                    ->orWhere('description','like',"%{$q}%")
                ;
            });
        }



        $rows = $m->paginate($limit);

        $st = [];
        if(count($rows)>0){
            foreach ($rows as $row){
                $st[$row->id] = [
                  'begin' => isset($ab[$row->id])?$ab[$row->id]:0,
                  'in' => isset($ab2[$row->id])?$ab2[$row->id]:0,
                  'out' => isset($ab3[$row->id])?$ab3[$row->id]:0,
                ];
            }
        }

        return ['rows' => $rows , 'stocks' => $st];

    }
}