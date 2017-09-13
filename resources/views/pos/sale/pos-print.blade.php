<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report</title>
    <style>
        th,td {
            padding: 5px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Hanuman|Moul" rel="stylesheet">
</head>
<body>


<table width="100%">
    <tr>
        <td>
            <img src="{{url('pos/img/logo.jpg')}}" width="90" height="90" alt="">
        </td>
        <td width="100%" style="text-align: center"><b>វិក័យប័ត្រ</b></td>
    </tr>
</table>
@if(isset($id))
    @if($id>0)
        @php $row = \App\Models\Invoice::join('customers','customers.id','=','invoice.customer_id')
                        ->where('invoice.id',$id)->first(); @endphp
        @if($row != null)
            <table width="100%" style="font-family: 'Hanuman', serif; font-size: 12px;">
                <tr>
                    <td>
                        <table style="width: 100%; margin-bottom: 10px; margin-top: 10px;">
                            <tbody style="font-size: 14px;">
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;">
                                    <span><b>លេខ​វិ​ក័​យ​ប័ត្រ</b></span>
                                    : {{$row->invoice_number}}
                                </td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>ថ្ងៃទី</b></span> :
                                    {{$row->_date_}}
                                </td>
                            </tr>

                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>អតិថិជន</b></span>
                                    : {{$row->name}}
                                </td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>ប្រាក់កក់</b></span>
                                    : {{$row->deposit}}
                                </td>
                            </tr>

                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;"><span><b>ថ្ងៃបញ្ចប់</b></span>
                                    : {{$row->complete_date}}
                                </td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>តម្លៃពេញ</b></span> :
                                    $ {{number_format($row->complete_price,2)}}
                                </td>
                            </tr>
                            <tr style="text-align:center;">
                                <td style="vertical-align:middle;text-align:left; padding-left:10px;">
                                    <span><b>ស្ថានភាព</b></span> : {{$row->status}}
                                </td>
                                <td style="vertical-align:middle;text-align:left;"><span><b>ពិពណ៌នា</b></span> :
                                    {{$row->description}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>

                        <table border="1" class="table-condensed receipt no_border_btm" style="width:100%;border-collapse: collapse;">
                            <thead>
                            <tr style="font-size:14px;height: 30px;">
                                <th>ល.រ</th>
                                <th>កូដ</th>
                                <th class="text-center">ទំនិញ</th>
                                <th class="text-center">ឯកតា</th>
                                <th class="text-center">ចំនួន</th>
                                <th class="text-center">តំលៃ</th>
                                <th class="text-center">សរុប</th>
                            </tr>
                            </thead>
                            <tbody style="font-size: 12px;">
                            @php
                                $rowds = \App\Models\InvoiceDetail::where('ref_id',$id)
                                    ->join('items','items.id','=','invoice_detail.item_id')
                                    ->get();

                                //dd($rowds);
                            @endphp
                            @foreach($rowds as $rd)
                                @php
                                    $rds = \App\Models\ItemDetail::where('ref_id',$rd->item_id)->get();
                                    $oe = $loop->index;
                                @endphp
                            <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif ">
                                <td class="text-left">{{$loop->index+1}}</td>
                                <td class="text-left">{{$rd->item_code}}</td>
                                <td class="text-left">{{$rd->title}}</td>
                                <td class="text-left">{{$rd->unit}}</td>
                                <td class="text-right">{{$rd->qty}}</td>
                                <td class="text-right">$ {{number_format($rd->price,2)}}</td>
                                <td class="text-right">$ {{number_format($rd->price*$rd->qty,2)}}</td>
                            </tr>
                                @if(count($rds)>0)
                                    @foreach($rds as $r)
                                        @php
                                            $unit = \App\Models\Unit::where('id',$r->unit)->first();
                                        @endphp
                                        <tr class="item" style="height: 30px; @if($oe % 2 > 0) background: rgba(240,255,0,0.29); @endif ">
                                            <td class="text-left"></td>
                                            <td class="text-left">{{$r->item_code}}</td>
                                            <td class="text-left">{{$r->title}}</td>
                                            <td class="text-left">{{$r->unit}} {{isset($unit->name)?$unit->name:''}}</td>
                                            <td class="text-right">{{$r->qty*$rd->qty}}</td>
                                            <td class="text-right">$ {{number_format($r->price,2)}}</td>
                                            <td class="text-right">$ {{number_format($r->price*$r->qty*$rd->qty,2)}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endforeach
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td>
                        <table style="width: 100%; margin-top: 5px;">
                            @php
                            $riel = ($row->paid_kh)/($row->paid);
                            @endphp
                            <tbody>
                            <tr>
                                <td width="60%"></td>
                                <td style="text-align:right;">សរុប</td>
                                <td style="text-align:right;">$ {{number_format($row->total_amt,2)}}</td>
                                <td style="text-align:right;">{{number_format(($row->total_amt)*$riel,2)}} ៛</td>
                            </tr>
                            {{--<tr>--}}
                                {{--<td width="60%"></td>--}}
                                {{--<td style="text-align:right;">បញ្ចុះតំលៃ</td>--}}
                                {{--<td style="text-align:right;">$ {{number_format($row->total_discount,2)}}</td>--}}
                                {{--<td style="text-align:right;">{{number_format($row->total_discount,2)}} ៛</td>--}}
                            {{--</tr>--}}
                            <tr>
                                <td width="60%"></td>
                                <td style="text-align:right;">បញ្ចុះតំលៃ</td>
                                <td style="text-align:right;">$ {{number_format($row->total_amt-$row->total_payable,2)}}</td>
                                <td style="text-align:right;">{{number_format(($row->total_amt-$row->total_payable)*$riel,2)}} ៛</td>
                            </tr>
                            <tr>
                                <td width="60%"></td>
                                <td style="text-align:right;">សរុបចុងក្រោយ</td>
                                <td style="text-align:right;">$ {{number_format($row->total_payable,2)}}</td>
                                <td style="text-align:right;">{{number_format(($row->total_payable)*$riel,2)}} ៛</td>
                            </tr>
                            <tr>
                                <td width="60%"></td>
                                <td style="text-align:right;">លុយបង់</td>
                                <td style="text-align:right;">$ {{number_format($row->paid,2)}}</td>
                                <td style="text-align:right;">{{number_format($row->paid_kh,2)}} ​​៛</td>
                            </tr>
                            <tr>
                                <td width="60%"></td>
                                <td style="text-align:right;">លុយអាប់</td>
                                <td style="text-align:right;">$ {{number_format($row->paid-$row->total_payable,2)}}</td>
                                <td style="text-align:right;">{{number_format(($row->paid-$row->total_payable)*$riel,2)}}​ ៛</td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        @endif
    @endif
@endif
<script>
    //        ==============print invoice
    window.print();

    window.setTimeout(' window.history.back()',500);

//    $(function () {
//        $("#print-invoice").click(function () {
//
//            // $('#search-by-date').trigger('click');
//
//            var contents = $(".print-invoice").html();
//            var frame1 = $('<iframe />');
//            frame1[0].name = "frame1";
//            frame1.css({"position": "absolute", "top": "-1000000px"});
//            $("body").append(frame1);
//            var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument.document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
//            frameDoc.document.open();
//            //Create a new HTML document.
//            frameDoc.document.write('<html><head><title>Print Report</title>');
//
//            frameDoc.document.write('<style> .txt{font-family: \'Hanuman\', serif; font-size: 12px; padding-top: 5px; padding-bottom: 0px; } \n' +
//                '    table{\n' +
//                '        border-collapse: collapse;\n' +
//                '    }\n' +
//                '    .border th, .border td {\n' +
//                '        border: 1px solid rgba(188, 188, 188, 0.96);\n' +
//                '        padding: 5px;\n' +
//                '    }\n' +
//                '</style>' +
//                '<link href="https://fonts.googleapis.com/css?family=Hanuman|Moul" rel="stylesheet">');
//
//            frameDoc.document.write('</head><body>');
//            //Append the external CSS file.
//
////                frameDoc.document.write('<link href="style.css" rel="stylesheet" type="text/css" />');
//            //Append the DIV contents.
//            frameDoc.document.write(contents);
//            frameDoc.document.write('</body></html>');
//            frameDoc.document.close();
//            setTimeout(function () {
//                window.frames["frame1"].focus();
//                window.frames["frame1"].print();
//                frame1.remove();
//            }, 500);
//        });
//    });

</script>
</body>
</html>