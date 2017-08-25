<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OpenItem;
use App\Models\Production;
use App\Models\Purchase;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function openItemList(Request $request){
        $k = 1;
        $from_date = $request->from_date;
        $to_date = $request->to_date;

        $m = OpenItem::orderBy('id','desc')
            ->whereBetween('_date_', array($from_date, $to_date))
            ->paginate(30);

        return view('pos.report.open_item.list',['rows'=>$m, 'k'=>$k]);
    }
    public function openItemDetail(Request $request){
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $m = OpenItem::orderBy('id','desc')
            ->whereBetween('created_at', array($from_date, $to_date))
            ->paginate(30);

        return view('pos.report.open_item.detail',['rows'=>$m]);
    }
    public function purchaseItemList(Request $request){
        $k = 1;
        $from_date = $request->from_date;
        $to_date = $request->to_date;

        $m = Purchase::orderBy('id','desc')
            ->whereBetween('_date_', array($from_date, $to_date))
            ->paginate(30);
        return view('pos.report.purchase_item.list',['rows'=>$m, 'k'=>$k]);
    }
    public function purchaseItemDetail(Request $request){
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $m = Purchase::orderBy('id','desc')
            ->whereBetween('created_at', array($from_date, $to_date))
            ->paginate(30);
        return view('pos.report.purchase_item.detail',['rows'=>$m]);
    }
    public function productionItemList(Request $request){
        $k = 1;
        $from_date = $request->from_date;
        $to_date = $request->to_date;

        $m = Production::orderBy('id','desc')
            ->whereBetween('_date_', array($from_date, $to_date))
            ->paginate(30);
        return view('pos.report.production_item.list',['rows'=>$m, 'k'=>$k]);
    }
    public function productionItemDetail(Request $request){
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $m = Production::orderBy('id','desc')
            ->whereBetween('created_at', array($from_date, $to_date))
            ->paginate(30);
        return view('pos.report.production_item.detail',['rows'=>$m]);
    }

}