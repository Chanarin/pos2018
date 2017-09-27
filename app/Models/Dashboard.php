<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    public static function saleOfWeek()
    {
        $monday = Carbon::now()->startOfWeek();

        $weekdays = array();
        for($i=0; $i<7; $i++){
            $weekdays[] = [
                'day' => $monday->format('D'),
                'total' => Invoice::whereDate('_date_',$monday->format('Y-m-d'))->sum('total_amt')
            ];
            $monday->addDay(1);
        }

        return $weekdays;
    }
}
