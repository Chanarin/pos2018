<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\OpenItem;
use App\Models\Production;
use App\Models\Purchase;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function openItemList(Request $request){
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
        $q = $request->q;
        $report_option = $request->report_option;

        $rows = Report::openItemReport($request);
        $rows->appends([
            'from_date'=>$from_date,
            'to_date'=>$to_date,
            'report_option' => $report_option,
            'q'=>$q
        ]);

        return view('pos.report.open_item.list',['rows'=>$rows,'from_date' => $from_date, 'to_date' => $to_date,
            'report_option' => $report_option]);
    }
    public function openItemDetail(Request $request){
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
        $q = $request->q;
        $report_option = $request->report_option;
        $rows = Report::openItemReport($request);
        $rows->appends([
            'from_date'=>$from_date,
            'to_date'=>$to_date,
            'report_option' => $report_option,
            'q'=>$q
        ]);

        return view('pos.report.open_item.detail',['rows'=>$rows,'from_date' => $from_date, 'to_date' => $to_date,
            'report_option' => $report_option]);
    }
    public function purchaseItemList(Request $request){
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
        $q = $request->q;
        $report_option = $request->report_option;
        $rows = Report::purchaseItemReport($request);
        $rows->appends([
            'from_date'=>$from_date,
            'to_date'=>$to_date,
            'report_option' => $report_option,
            'q'=>$q

        ]);

        return view('pos.report.purchase_item.list',['rows'=>$rows,'from_date' => $from_date, 'to_date' => $to_date,
            'report_option' => $report_option]);
    }
    public function purchaseItemDetail(Request $request){
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
        $q = $request->q;
        $report_option = $request->report_option;
        $rows = Report::purchaseItemReport($request);
        $rows->appends([
            'from_date'=>$from_date,
            'to_date'=>$to_date,
            'report_option' => $report_option,
            'q'=>$q

        ]);

        return view('pos.report.purchase_item.detail',['rows'=>$rows,'from_date' => $from_date, 'to_date' => $to_date,
            'report_option' => $report_option]);
    }
    public function productionItemList(Request $request){
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
        $q = $request->q;
        $report_option = $request->report_option;
        $rows = Report::productionItemReport($request);
        $rows->appends([
            'from_date'=>$from_date,
            'to_date'=>$to_date,
            'report_option' => $report_option,
            'q'=>$q
        ]);

        return view('pos.report.production_item.list',['rows'=>$rows,'from_date' => $from_date, 'to_date' => $to_date,
            'report_option' => $report_option]);
    }
    public function productionItemDetail(Request $request){
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
        $q = $request->q;
        $report_option = $request->report_option;
        $rows = Report::productionItemReport($request);
        $rows->appends([
            'from_date'=>$from_date,
            'to_date'=>$to_date,
            'report_option' => $report_option,
            'q'=>$q
        ]);

        return view('pos.report.production_item.detail',['rows'=>$rows,'from_date' => $from_date, 'to_date' => $to_date,
            'report_option' => $report_option]);
    }
    public function invoiceList(Request $request){
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
        $q = $request->q;
        $report_option = $request->report_option;
        $rows = Report::invoiceItemReport($request);
        $rows->appends([
            'from_date'=>$from_date,
            'to_date'=>$to_date,
            'report_option' => $report_option,
            'q'=>$q
        ]);

        return view('pos.report.invoice.list',['rows'=>$rows,'from_date' => $from_date, 'to_date' => $to_date,
            'report_option' => $report_option]);
    }
    public function invoiceDetail(Request $request){
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
        $q = $request->q;
        $report_option = $request->report_option;
        $rows = Report::invoiceItemReport($request);
        $rows->appends([
            'from_date'=>$from_date,
            'to_date'=>$to_date,
            'report_option' => $report_option,
            'q'=>$q
        ]);

        return view('pos.report.invoice.detail',['rows'=>$rows,'from_date' => $from_date, 'to_date' => $to_date,
            'report_option' => $report_option]);
    }
}