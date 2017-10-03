<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Report extends Model
{
    static function openItemReport($request,$limit=100)
    {
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
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
    static function purchaseItemReport($request,$limit=100)
    {
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
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
    static function productionItemReport($request,$limit=100)
    {
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
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
    static function invoiceItemReport($request,$limit=100)
    {
        $from_date = isset($request->from_date)?$request->from_date:Carbon::now()->format('Y-m-d');
        $to_date = isset($request->to_date)?$request->to_date:Carbon::now()->format('Y-m-d');
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
//    static function getSaleMonthReport($m,$y){
//
//        $sql =
//
//        $sql = "SELECT
//                        rental_details.vehicle_id,
//                        DATE_FORMAT(rental_details.start_date,'%d%m%Y') as d_key,
//                        SUM((
//                        IFNULL(rentals.deposit,0) +
//                        IFNULL(rentals.total_amount,0) -
//                        IFNULL(rentals.total_discount,0) +
//                        IFNULL(rentals.extra_payment,0) +
//                        IFNULL(rentals.penal,0) +
//                        IFNULL(rentals.penal,0) -
//                        IFNULL(rentals.return_deposit,0)
//                        )) AS amt
//                        FROM
//                        rentals
//                        INNER JOIN rental_details ON rentals.id = rental_details.rental_id
//                        WHERE MONTH(rental_details.start_date) = {$m} and YEAR(rental_details.start_date) = {$y}
//                        GROUP BY rental_details.vehicle_id,
//                        rental_details.start_date";
//
//        $rows = DB::select(DB::raw($sql));
//
//        $arr = [];
//        if(count($rows)>0){
//            foreach ($rows as $row){
//                $arr[$row->vehicle_id][$row->d_key] = $row->amt;
//            }
//        }
//
//        $number_of_days_in_month = get_number_of_days_in_month($m,$y);
//
//        $rows_v = Vehicle::selectRaw("vehicles.id,
//                                        vehicles.vehicle_name,
//                                        vehicles.`engine`")->get();
//
//        return ['data' => $arr,'vehicle' => $rows_v,'nd' => $number_of_days_in_month,'m' => $m,'y' => $y];
//    }
}