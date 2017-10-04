<?php

function _t($txt,$lang = 'km')
{
    return \App\Helpers\Glb::translate($txt,$lang);
}

function getInvFormat($n,$date,$pre='INV'){

    return ' '.$pre.'-'. \Carbon\Carbon::parse($date)->format('dmY')
        .'-'.str_pad($n,7,'0',STR_PAD_LEFT);
}

function getINVNext(){

    $m = \App\Models\Invoice::orderBy('id','DESC')->limit(1)->first();
    if($m==null){
        $n = 1;
    }else{
        $n = $m->id +1;
    }
    return getInvFormat($n,date('Y-m-d'),'INV');
}
