@extends('backpack::layout1')
@section('graph_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('pos') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte') }}/plugins/select2/select2.min.css">
    <style>
        .pos-item{
            cursor: pointer;
        }
        .show-all-customer tr,.show-all-product-list tr{
            cursor: pointer;
        }
        .red{
            background-color: rgba(255, 0, 0, 0.38);
        }
    </style>
@endsection

@section('content')
    <div class="cover-add" id="overlay">
        <div id="container">
            <form action="{{url('admin/invoice')}}" method="POST" enctype="multipart/form-data" class="pos-form">
                {!! csrf_field() !!}
                <input type="hidden" name="_date_" value="{{date('Y-m-d')}}">
                <input type="hidden" name="description" value="">
                {{--<input type="hidden" name="invoice_number" value="-1">--}}
                <input type="hidden" name="is_pos" value="1">
                <div id="left-panel" style="border-right:1px solid #cccccc; overflow: hidden; hight:auto; position: absolute;" >

                    <div id="left-top">
                        <div class="col-md-12" style="padding-left:0;">
                            <div class="form-group">
                                <div class="input-group">
                                    <style>
                                        .select2-container .select2-selection--single {
                                            height: 34px !important;
                                        }
                                    </style>
                                    <div class="">

                                        <select name="customer_id" required class="form-control select2 customer_id" style="width: 100%;">
                                            @php
                                             $custs = \App\Models\Customer::all();
                                            @endphp
                                            @foreach($custs as $rc)
                                                <option  value="{{$rc->id}}">{{$rc->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input-group-addon no-print" style="padding: 2px 5px; border-left: 0;">
                                        <a href="#"  data-toggle="modal" data-target="#viewCustomerModal" id="view-customer" class="external">
                                            <i class="fa fa-2x fa-user" id="addIcon"></i>
                                        </a>
                                    </div>
                                    <div class="input-group-addon no-print" style="padding: 2px 5px;">
                                        <a href="#"  data-toggle="modal" data-target="#addCustomerModal" id="add-customer" class="external">
                                            <i class="fa fa-2x fa-plus-circle" id="addIcon"></i>
                                        </a>
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                        <div class="col-md-12" style="padding:0;">
                            <div class="no-print">
                                <div class="form-group" id="ui">
                                    <div class="input-group">
                                        <input type="text" name="s_code_item" value="" class="form-control pos-tip ui-autocomplete-input"
                                               id="add_item" data-placement="top" data-trigger="focus"
                                               placeholder="{{_t('Search product by code')}}" title="Please start typing code/name for suggestions" autocomplete="off">
                                        <div class="input-group-addon" style="padding: 2px 5px;">
                                            <a href="#" class="search_details">
                                                <i class="fa fa-2x fa-search" id="addIcon"></i>
                                            </a>
                                        </div>
                                        <div class="input-group-addon" style="padding: 2px 5px;">
                                            <a href="#" id="addManually" data-toggle="modal" data-target="#searchProductFilterDetail">
                                                <i class="fa fa-2x fa-plus-circle" id="addIcon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                    </div>

                    <style>
                        /*========= item add to invoice==*/
                        .table-show-pro{
                                width:100%;
                                overflow:auto;
                                height:350px;
                                text-align: center;
                                border-bottom: #ffffff;
                                position: absolute;
                            }
                        .table-show-pro-a{
                            width:100%;
                            overflow:auto;
                            height:350px;
                            text-align: center;
                            border-bottom: #ffffff;
                            position: absolute;
                        }





                        /*========= show item list ==*/
                        .items-style{
                            padding-top: 20px;
                            height: 650px;
                            overflow: auto;
                        }
                    </style>

                    <div class="col-md-12 col-sm-12 panel-height left-middle">
                        <div class="tbl-header">
                            <table class="table table-action">
                                <thead style="width:100%;">
                                    <tr>
                                        <th style="width:15%;">{{_t('Code')}}</th>
                                        <th style="width:30%;">{{_t('Name')}}</th>
                                        <th class="hidden" style="width:10%;">{{_t('Num.QTY')}}</th>
                                        <th style="width:10%;">{{_t('Qty')}}</th>
                                        <th style="width:20%;">{{_t('Price')}}</th>
                                        <th style="width:20%;">{{_t('Total')}}</th>
                                        <th style="width: 10%;"></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table-show-pro" id="table-show-pro">
                            <table style="width:100%;" class="show-order-item" >
        {{--==============================item add ===============--}}
                            </table>
                        </div>
                    </div>

                    <div id="left-bottom">
                        <div class="col-md-12 col-sm-12 checkout_amount">
                            <table id="totalTable" style="width:100%; float:right; padding:5px; color:#000; background: #FFF;">
                                <tbody>
                                <tr>
                                    <td style="padding: 5px 10px; font-size: 16px;">{{_t('Items')}} <span style="padding: 5px 10px; font-size: 16px; font-weight:bold;" id="titems" class="item_count">0</span></td>

                                    @php
                                        $exchanges = \App\Models\ExchangeRate::orderBy('id','desc')->limit(1)->first();
                                    @endphp
                                        <td class="text-right">
                                            {{_t('Rate')}} <span style="padding: 5px 10px;font-size: 16px; font-weight:bold;" class="exchange_rate">{{number_format($exchanges->kh)}}  ៛</span>
                                            <input type="text" class="hidden" name="exchange_rate" value="{{$exchanges->kh}}">
                                        </td>


                                    <td style="padding: 5px 10px; font-size: 16px;">{{_t('Total')}}</td>
                                    <td class="text-right" style="padding: 5px 10px;font-size: 16px; font-weight:bold;">
                                        <span id="total" class="p-total">($ 0.00)</span>
                                    </td>

                                </tr>
                                <tr>
                                    {{--<td style="padding: 5px 10px; font-size: 16px;">Order Tax--}}
                                    {{--<a href="#" id="pptax2" data-toggle="modal" data-target="#taxModal">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--</a>--}}
                                    {{--</td>--}}
                                    {{--<td class="text-right" style="padding: 5px 10px;font-size: 16px; font-weight:bold;">--}}
                                    {{--<span id="ttax2">(0)0.00</span>--}}
                                    {{--</td>--}}

                                    <td style="padding: 5px 10px; font-size: 16px;">{{_t('Discount')}}
                                        <a href="#" id="ppdiscount" data-toggle="modal" data-target="#discountModal">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>

                                    <td class="text-right" style="padding: 5px 10px; font-size: 16px; font-weight:bold;">
                                        <span class="total-discount-show">($ 0.00)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 5px 10px; border-top: 1px solid #666; font-size: 20px; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                                        {{_t('Total Payable')}}
                                    </td>
                                    <td class="text-right" style="padding:5px 10px 5px 10px; font-size: 16px; border-top: 1px solid #666; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                                        <span style="float:left" class="grand_total_kh">(0.00 ៛)</span>
                                        <span class="grand_total">($ 0.00)</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                            <div id="botbuttons" style="text-align:center;">
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                        <div class="btn-group btn-group-justified">
                                            <div class="btn-group">
                                                <button data-toggle="modal" data-target="#cancelModal" type="button" title="Cancel Order - F4" style="height:68px; border-radius: 0% !important;" class="btn btn-danger" id="reset">
                                                    <i class="fa fa-remove"></i> {{_t('Cancel')}}</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-group">
                                        <div class="btn-group btn-group-justified">
                                            <div class="btn-group">
                                                <button type="button" title="Print Order - F9" style="border-radius: 0% !important;" class="btn btn-primary" id="print_order">
                                                    <i class="fa fa-print"></i> {{_t('Print Order')}}
                                                </button>
                                                <button type="button" title="Print Bill - F3" class="btn btn-primary" id="print_bill" style="margin-left: 0 !important; border-radius: 0% !important;">
                                                    <i class="fa fa-print"></i> {{_t('Print Bill')}}
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-group">
                                        <button type="button" data-toggle="modal" data-target="#postPaidModal" style="height:68px; border-radius: 0% !important;" class="btn btn-success" id="payment">
                                            <i class="fa fa-money"></i> {{_t('Payment')}}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both; height:5px;"></div>
                        </div>
                    </div>
                </div>

                <div id="right-section">
                    <div class="col-md-12 cat-items-style">
                        <div id="slider-2" class="slider slide-shadow">
                            <div class="slider-wrapper">
                                @foreach($categories as $category)
                                    <div class="slide" style="padding-right: 5px; padding-left: 5px;">
                                        <a href="#" data-id="{{ $category->id }}" class="item-by-category active">
                                            <span>
                                            <i>
                                             @php
                                                 $img = json_decode($category->image);
                                             @endphp
                                                @if(count($img)>0)
                                                    <img src="{{url('img/cache/original/'.\App\Helpers\Glb::get_basename($img[0]))}}" width="60" height="60">
                                                @endif
                                            </i>
                                            </span>
                                                <br>
                                            <span class="fon-size"><b>{{$category->title}}</b></span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <a href="#" class="slider-button--prev">
                                <i class="fa fa-fw fa-chevron-left"></i>
                            </a>
                            <a href="#" class="slider-button--next">
                                <i class="fa fa-fw fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 items-style menu-item-by-category">
                    {{--====================show items by categories==================--}}
                    </div>
                </div>
                <div class="modal fade" id="postPaidModal" tabindex="-1" role="dialog" aria-labelledby="postPaidModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">
                            <i class="fa fa-2x">×</i></span><span class="sr-only">{{_t('Close')}}</span>
                                </button>
                                <h4 class="modal-title" id="payModalLabel">{{_t('Finalize Sale')}}</h4>
                            </div>
                            <div class="modal-body" id="payment_content">
                                <div class="row">
                                    <div class="col-md-10 col-sm-9">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label for="date">{{_t('Date')}}</label> {{_t('yyyy-mm-dd')}}
                                                    <input type="text" name="date" value="{{date('Y-m-d')}}" class="form-control input-tip datetime" id="date" data-original-title="" title="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="slref">{{_t('Invoice No')}}</label>
                                                    <input type="text" name="invoice_number" value="{{getINVNext()}}" class="form-control input-tip datetime" id="date" data-original-title="" title="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group hidden">
                                            <div class="row">
                                                <div class="col-sm-6 hidden">
                                                    <div class="form-group">
                                                        <label for="saleman">{{_t('Customer Name')}}</label>
                                                        <input type="text" name="date" value="" readonly class="form-control input-tip">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 hidden">
                                                    <textarea readonly name="customer_note" cols="40" rows="10" id="sale_note"
                                                              class="form-control kb-text skip" style="height: 60px;"
                                                              maxlength="250">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfir"></div>
                                        <div id="payments">
                                            <div class="col-md-12 col-sm-9" style="padding:0;">
                                                <div class="font16">
                                                    <table class="table table-bordered table-condensed table-striped" style="font-size: 1.2em; font-weight: bold; margin-bottom: 0;">
                                                        <tbody>
                                                        <tr class="hidden">
                                                            <td width="50%" style="height: 50px;">{{_t('Total Items')}}</td>
                                                            <td class="text-right"><span class="item_count" id="item_count">0</span></td>
                                                            <td class="text-right"><span class="item_count" id="item_count">0</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th width="50%" style="text-align:left;">{{_t('Currency')}}</th>
                                                            <th style="text-align:center;">{{_t('USD')}}</th>
                                                            {{--=======kh=============--}}
                                                            <th style="text-align:center;">{{_t('KHM')}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td width="50%" style="height: 50px;">{{_t('Total')}}</td>
                                                            <td class="text-right"><span id="twt" class="p-total">($ 0.00)</span>
                                                                <input type="hidden" name="total_amt"  class="total_amt">
                                                            </td>
                                                            {{--=========kh===========--}}
                                                            <td class="text-right">
                                                                <span class="p-total-kh" id="twt">(0.00 ៛)</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="50%" style="height: 50px;">{{_t('Discount')}}</td>
                                                            <td class="text-right"><span id="twt" class="p-total-discount">($ 0.00)</span>
                                                                <input type="hidden" class="total-discount-show">
                                                            </td>
                                                            {{--====================--}}
                                                            <td class="text-right">
                                                                <span class="p-total-discount-kh" id="twt">(0.00 ៛)</span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td width="50%" style="height: 50px;">{{_t('Total Payable')}}</td>
                                                            <td class="text-right"><span id="twt" class="p-total-payable">($ 0.00)</span>
                                                                <input type="hidden" name="total_payable"  class="p-total-payable-en">
                                                            </td>
                                                            {{--====================--}}
                                                            <td class="text-right">
                                                                <span class="p-total-payable-kh" id="twt">(0.00 ៛)</span>
                                                            </td>
                                                        </tr>

                                        {{--===========================paid===============================--}}
                                                        <tr>
                                                            <td width="50%" style="height: 50px;">{{_t('Paid')}}</td>
                                                            <td class="text-right">
                                                                <input name="paid" type="text" number="number"
                                                                       class="pa form-control input-lg kb-pad amount paid_en p-current" style="text-align:right;">
                                                            </td>
                                                            {{--====================--}}
                                                            <td class="text-right">
                                                                <input name="paid_kh" number="number" type="text" id="other_cur_paid" class="form-control paid_kh input-lg kb-pad currencies-payment-kh" style="text-align:right;">
                                                            </td>
                                                        </tr>
                                        {{--===========================end paid===============================--}}
                                                        <tr>
                                                            <td rowspan="2" width="50%" style="text-align:left;">{{_t('Remaining')}}</td>
                                                            <td class="text-right">
                                                                <span id="remain_1" class="main_remain_1">($ 0.00)</span>
                                                            </td>
                                                            {{--====================--}}
                                                            <td class="text-right">
                                                                <span class="main_remain_1_kh" id="remain_1">(0.00 ៛)
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right"><span id="remain" class="main_remain">0.00</span></td>
                                                            {{--====================--}}
                                                            <td class="text-right"><span class="curr_remain" id="remain">0.00</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="2" width="50%" style="text-align:left;">{{_t('Change')}}</td>
                                                            <td class="text-right"><span id="change_1">0.00</span></td>
                                                            {{--====================--}}
                                                            <td class="text-right"><span class="curr_change_1" id="change_1">0.00</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right"><span id="change">0.00</span></td>
                                                            {{--====================--}}
                                                            <td class="text-right"><span class="curr_change" id="change">0.00</span></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="well well-sm well_1">
                                                <div class="payment">
                                                    <div class="row" style="font-size: 1.2em; font-weight: bold; margin-bottom: 0;">
                                                        <div class="col-sm-12">
                                                            <textarea name="payment_note" id="payment_note_1" style="height: 60px;" class="pa form-control kb-text payment_note" placeholder="{{_t('Payment Note')}}"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{--=========================admin more payment==============--}}


                                        <div style="clear:both; height:15px;"></div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 text-center">
                                        <span style="font-size: 1.2em; font-weight: bold;">{{_t('Quick Cash')}}</span>
                                        <div class="btn-group btn-group-vertical">
                                            {{--id="quick-payable-xxx"--}}
                                            <button type="button" class="btn btn-lg btn-info quick-cash total_amt-x" ></button>
                                            {{--<input type="hidden" id="payable_amount" class="payable_amount" name="payable_amount" value="5580">--}}
                                            <button type="button" class="btn btn-lg btn-warning quick-cash">10</button>
                                            <button type="button" class="btn btn-lg btn-warning quick-cash">20</button>
                                            <button type="button" class="btn btn-lg btn-warning quick-cash">50</button>
                                            <button type="button" class="btn btn-lg btn-warning quick-cash">100</button>
                                            <button type="button" class="btn btn-lg btn-warning quick-cash">500</button>
                                            <button type="button" class="btn btn-lg btn-warning quick-cash">1000</button>
                                            <button type="button" class="btn btn-lg btn-warning quick-cash">5000</button>
                                            <button type="button" class="btn btn-lg btn-danger clear-cash-notes">{{_t('Clear')}}</button>
                                            <hr>
                                            <div class="btn-group">
                                                <button style="font-size: 1.2em; font-weight: bold; height:80px;" type="submit"
                                                        class="btn btn-success" id="submit-sale">
                                                    <i class="fa fa-money"></i>
                                                    {{_t('Save')}}
                                                </button>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="discountModal" tabindex="-1" role="dialog" aria-labelledby="discountModal" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">×</i></button>
                                <h4 class="modal-title" id="dsModalLabel">{{_t('Edit Order Discount')}}</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="order_discount_input">{{_t('Order Discount')}}</label>
                                    <input type="text" name="total_discount" placeholder="$ 0.00 " value="" class="form-control total_discount">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" id="updateOrderDiscount" class="btn btn-primary updateOrderDiscount">{{_t('Update')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    {{--================cancel pop up =============--}}
    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true" style="margin-top: -10px;"><i class="fa fa-2x">×</i>
                    </button><div class="bootbox-body">{{_t('Are you sure?')}}</div></div><div class="modal-footer">
                    <button data-bb-handler="cancel" type="button" data-dismiss="modal" class="btn btn-default">{{_t('Cancel')}}</button>
                    <button data-bb-handler="confirm" type="button" data-dismiss="modal" class="btn btn-primary getOrderCancel">{{_t('OK')}}</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="addCustomerModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">×</i>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">{{_t('Add Customer')}}</h4>
                </div>
                <form action="#" data-toggle="validator" role="form" id="add-customer-form"  class="bv-form" style="padding: 10px;">
                    <div class="modal-body">
                        <p>{{_t('Please fill in the information below. The field labels marked with * are required input fields.')}}</p>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group person has-feedback">
                                    <label for="name">{{_t('Name')}} *</label>
                                    <input type="text" required name="name" value="" class="form-control tip name" id="name">
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="phone">{{_t('Phone')}} *</label>
                                    <input type="text" required name="phone" value="" class="form-control phone" id="phone">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="price_group">{{_t('Gender')}}</label>
                                    <select name="gender" required class="form-control gender" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="selected">{{_t('Select Gender')}}</option>
                                        <option value="male">{{_t('Male')}}</option>
                                        <option value="female">{{_t('Female')}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button"  name="add_customer" value="{{_t('Add Customer')}}" class="btn btn-primary add_customer">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewCustomerModal" tabindex="-1" role="dialog" aria-labelledby="viewCustomerModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa fa-2x">×</i>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">{{_t('Customer List')}}</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>

                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control pull-right search-customer-view-show-txt" placeholder="Search">

                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-default search-customer-view-show"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="table-responsive">

                                    <table class="table table-striped table-bordered" style="margin-bottom:0;">
                                        <thead>
                                            <tr>
                                                <th>{{_t('Name')}}</th>
                                                <th>{{_t('Phone')}}</th>
                                                <th>{{_t('Description')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="show-all-customer">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <div class="modal-footer no-print">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="searchProductFilterDetail" tabindex="-1" role="dialog" aria-labelledby="searchProductFilterDetail" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-2x">×</i></span><span class="sr-only">{{_t('Close')}}</span></button>
                    <h4 class="modal-title" id="prModalLabel">{{_t('Search Filter')}}</h4>
                </div>
                <div class="modal-body" style="height:400px;">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>

                                    <div class="box-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control pull-right search-item-pos-to-show-txt" placeholder="Search">

                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-default search-item-pos-to-show"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table class="table">
                                <thead>
                                <tr>
                                    <th>{{_t('Item Code')}}</th>
                                    <th>{{_t('Title')}}</th>
                                    <th>{{_t('Unit')}}</th>
                                    <th>{{_t('Price')}}</th>
                                </tr>
                                </thead>

                                <tbody class="show-all-product-list">

                                </tbody>
                            </table>

                            </div>
                            <!-- /.box -->
                        </div>
                    </div>

                    <div class="ps-scrollbar-x-rail" style="width: 0px; display: none; left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: -30px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 370px; display: none; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="addItem">{{_t('Submit')}}</button>
                </div>
            </div>
        </div>
    </div>

    {{--==========report list sale today=======--}}
    <div class="modal fade" id="listSaleTodayModal" tabindex="-1" role="dialog" aria-labelledby="listSaleTodayModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">×</i>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">{{_t('Total Sale Today')}}</h4>
                </div>
                <form action="#" data-toggle="validator" role="form" id="add-customer-form"  class="bv-form" style="padding: 10px;">
                    <div class="modal-body" style="height:600px;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <table class="table show-report-sale-today-list">

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--============edit customer pop up==============--}}
    <div class="modal fade" id="editCustomerModal" tabindex="-1" role="dialog" aria-labelledby="editCustomerModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">×</i>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">{{_t('Edit Customer')}}</h4>
                </div>
                <form action="#" data-toggle="validator" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="novalidate" class="bv-form">

                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                    <input type="hidden" name="token" value="" style="display:none;">
                    <div class="modal-body">
                        <p>Please fill in the information below. The field labels marked with * are required input fields.</p>
                        <div class="form-group has-feedback">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group person has-feedback">
                                        <label for="name">{{_t('Name')}}</label>
                                        <input type="text" name="name" value="Mengeang" class="form-control tip" id="name" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">{{_t('Gender')}}</label>
                                        <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                            <option value="" selected="selected">Select Gender</option>
                                            <option value="male">{{_t('Male')}}</option>
                                            <option value="female">{{_t('Female')}}</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">{{_t('Phone ')}}</label>
                                        <input type="tel" name="phone" class="form-control" id="phone" value="012 222 333">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="address">{{_t('Note')}}</label>
                                        <textarea name="sale_note" cols="40" rows="10" id="sale_note"
                                                  class="form-control kb-text skip" style="height: 181px;" placeholder="Customer Note"
                                                  maxlength="250">
                                            </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="edit_customer" value="Edit Customer" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection