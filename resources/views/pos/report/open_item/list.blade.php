{{--http://127.0.0.1:8000/api/report/open-item/list?from_date=2-8-9&to_date=2-3-4--}}
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px; margin-top: 10px;">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 " style="text-align: center;">
        <img src="{{asset('/pos/img/logo.jpg')}}" width="90" height="90" alt="">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align: center;">
        <span style="font-size: 24px;"><b>POS SHOP REPORT</b></span><br>
        <span style="font-size: 18px;"><b>OPEN ITEM LIST</b></span>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table class="table table-bordered" style="width: 100%;">
            <thead>
            <tr style="font-size: 14px;">
                <th style="width: 20px">#</th>
                <th>open number</th>
                <th>Date</th>
                <th>description</th>
                <th style="width: 20px"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($rows as $row)
                <tr style="font-size: 12px;">
                    <td>1.</td>
                    <td>OP00001</td>
                    <td>09/09/2017</td>
                    <td>lkdsjflafjlasdjf</td>
                    <td><button type="button" data-toggle="modal" data-target="#popUpItemDetail"><i class="fa fa-search">
                            </i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
