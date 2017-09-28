<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\OpenItem;
use App\Models\Production;
use App\Models\Purchase;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportTypeController extends Controller
{
    public function openItemList($limit=100){
        $rows = OpenItem::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.open.list',['rows'=>$rows]);
    }
    public function openItemDetail($limit=100){
        $rows = OpenItem::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.open.detail',['rows'=>$rows]);
    }

    public function purchaseItemList($limit=100){
        $rows = Purchase::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.purchase.list',['rows'=>$rows]);
    }
    public function purchaseItemDetail($limit=100){
        $rows = Purchase::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.purchase.detail',['rows'=>$rows]);
    }

    public function productionItemList($limit=100){
        $rows = Production::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.production.list',['rows'=>$rows]);
    }
    public function productionItemDetail($limit=100){
        $rows = Production::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.production.detail',['rows'=>$rows]);
    }

    public function saleList($limit=100){
        $rows = Invoice::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.sale.list',['rows'=>$rows]);
    }
    public function saleDetail($limit=100){
        $rows = Invoice::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.sale.detail',['rows'=>$rows]);
    }
    public function saleDiscount($limit=100){
        $rows = Invoice::where('total_discount','!=',null)->orderBy('id','ASC')->paginate($limit);


        return view('pos.report.report_type.sale.discount',['rows'=>$rows]);
    }
}