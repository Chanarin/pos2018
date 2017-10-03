<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\OpenItem;
use App\Models\Production;
use App\Models\Purchase;
use App\Models\ReportType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportTypeController extends Controller
{
    public function openItemListData(Request $request){
        $q = $request->q;
        $rows = ReportType::openItemReport($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('pos.report.report_type.open.data',['rows'=>$rows]);
    }
    public function openItemList(){
        return view('pos.report.report_type.open.list');
    }
    public function openItemDetail($limit=100){
        $rows = OpenItem::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.open.detail',['rows'=>$rows]);
    }
//===============
    public function purchaseItemListData(Request $request){
        $q = $request->q;
        $rows = ReportType::purchaseItemReport($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('pos.report.report_type.purchase.data',['rows'=>$rows]);
    }
    public function purchaseItemList(){
        return view('pos.report.report_type.purchase.list');
    }
    public function purchaseItemDetail($limit=100){
        $rows = Purchase::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.purchase.detail',['rows'=>$rows]);
    }
//    ===============

    public function productionItemListData(Request $request){
        $q = $request->q;
        $rows = ReportType::productionItemReport($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('pos.report.report_type.production.data',['rows'=>$rows]);
    }
    public function productionItemList(){
        return view('pos.report.report_type.production.list');
    }
    public function productionItemDetail($limit=100){
        $rows = Production::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.production.detail',['rows'=>$rows]);
    }
//============
    public function saleListData(Request $request){
        $q = $request->q;
        $rows = ReportType::invoiceItemReport($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('pos.report.report_type.sale.list_data',['rows'=>$rows]);
    }
    public function saleList(){

        return view('pos.report.report_type.sale.list');
    }
    public function saleDetail($limit=100){
        $rows = Invoice::orderBy('id','ASC')->paginate($limit);
        return view('pos.report.report_type.sale.detail',['rows'=>$rows]);
    }
//    =============
    public function saleDiscountData(Request $request){

        $q = $request->q;
        $rows = ReportType::invoiceDiscountItemReport($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('pos.report.report_type.sale.discount_data',['rows'=>$rows]);
    }
    public function saleDiscount(){
        return view('pos.report.report_type.sale.discount');
    }
//=============
    public function saleCustomerData(Request $request){
        $q = $request->q;
        $rows = ReportType::invoiceCustomerReport($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('pos.report.report_type.sale.customer_data',['rows'=>$rows]);
    }
    public function saleCustomer(){
        return view('pos.report.report_type.sale.customer');
    }
//=============
    public function saleDaily(){
        return view('pos.report.report_type.sale.daily');
    }
    public function saleMonthly(){
        return view('pos.report.report_type.sale.monthly');
    }
//    ==============
    public function saleProfitData(Request $request,$limit=100){
        $q = $request->q;
        $rows = ReportType::invoiceItemReport($request);
        $rows->appends([
            'q'=>$q
        ]);
        return view('pos.report.report_type.sale.profit_data',['rows'=>$rows]);
    }
    public function saleProfit(){
        return view('pos.report.report_type.sale.profit');
    }
//===============

    public function productInOutData(Request $request){
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
        $q = $request->q;

        $report = ReportType::productInOut($request);

        $rows = $report['rows'];

        $rows->appends([
            'from_date'=>$from_date,
            'to_date'=>$to_date,
            'q'=>$q
        ]);

        return view('pos.report.report_type.product.data',['rows'=>$rows,'from_date' => $from_date, 'to_date' => $to_date,
            'stocks' => $report['stocks']
           ]);
    }
    public function productInOut(){

        return view('pos.report.report_type.product.in_out_stock');
    }


}