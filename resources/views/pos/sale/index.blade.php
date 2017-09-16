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

                                        <select name="customer_id" class="form-control select2 customer_id" style="width: 100%;">
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
                        <div class="table-show-pro">
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
    {{--====================end items by categories==================--}}
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
                                                                <input name="paid_kh" number="number" type="text" id="other_cur_paid" class="form-control input-lg kb-pad currencies-payment-kh" style="text-align:right;">
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


        {{--================modal pop up =============--}}

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
                                    <input type="text" name="name" value="" class="form-control tip name" id="name">
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="phone">{{_t('Phone')}} *</label>
                                    <input type="text" name="phone" value="" class="form-control phone" id="phone">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="price_group">{{_t('Gender')}}</label>
                                    <select name="gender" class="form-control gender" style="width: 100%;" tabindex="-1" aria-hidden="true">
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

    {{--============end modal pop up==============--}}

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
@section('graph_script')
    <script src="{{ asset('vendor/adminlte') }}/dist/js/demo.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/select2/select2.full.min.js"></script>
    <script>
        var ex = {{$exchanges->kh}} - 0 ;
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        function _c(num)
        {
            return '$'+numberWithCommas(num);
        }
        function _r(num)
        {
            return numberWithCommas(num*ex)+'៛';
        }
        (function($) {
             $(".select2").select2();
            $.fn.flexboxslider = function(opts) {
                var options = $.extend({}, $.fn.flexboxslider.defaults, opts);
                return this.each(function() {
                    var el = $(this),
                        $slides_container = el.find('.slider-wrapper'),
                        $slides = el.find('.slide'),
                        $slides_length = $slides.length,
                        prev = el.find('.slider-button--prev'),
                        next = el.find('.slider-button--next'),
                        slider_nav,
                        timer,
                        resizeTimer,
                        steps = 1,
                        current_step = 1,
                        items_per_step = 6;
                    function initialize() {
                        items_per_step = options.items;
                        steps = Math.ceil($slides_length / items_per_step);
                        current_step = 1;
                        $slides_container.wrap('<div class="slider-viewport"></div>');
                        if (options.show_nav) {
                            create_nav();
                        }
                        el.css({
                            'max-height':  options.max_height + 'px'
                        });
                        $(window).resize(resize);
                        prev.on('click', function(e) {
                            e.preventDefault();
                            move(current_step - 1);
                        });
                        next.on('click', function(e) {
                            e.preventDefault();
                            move(current_step + 1);
                        });
                        if (options.timer) {
                            el.on('mouseover', stop);
                            el.on('mouseleave', play);
                        }
                        resize();
                        if (options.timer) {
                            play();
                        }
                    }
                    function create_nav() {
                        slider_nav = $('');
                        slider_nav.addClass('slider-nav');
                        create_nav_links();
                        el.append(slider_nav);
                    }
                    function create_nav_links() {
                        for (var i = 0; i < steps; i++) {
                            var li = $('<li></li>')
                            var nav_link = $('<a></a>');
                            nav_link.attr('href', '#');

                            nav_link.on('click', function(e) {
                                e.preventDefault();
                                var index = $(this).parent().index(),
                                    index_plus_1 = index + 1;

                                if (index_plus_1 > current_step) {
                                    move(index_plus_1);
                                } else {
                                    move(index_plus_1);
                                }
                            });
                            li.append(nav_link);
                            slider_nav.append(li);
                        }
                    }
                    function update_nav() {
                        var links_count = slider_nav.find('li a').length;
                        if (links_count !== steps) {
                            slider_nav.empty();
                            create_nav_links();
                        }
                    }
                    function resize() {
                        if (options.timer) {
                            stop();
                            clearTimeout(resizeTimer);
                            resizeTimer = setTimeout(function() {
                                play();
                            }, 250);
                        }
                        if (options.items > 1) {
                            responsive_slider();
                        } else {
                            resize_slide();
                        }
                        position_slides_container();
                        actualize_buttons();
                    }
                    function responsive_slider() {
                        var slider_width = el.outerWidth(true);
                        if (slider_width < options.small_screen && options.items >= 2) {
                            change_items_per_step_to(2);
                        } else if (slider_width < options.tablet && options.items >= 3) {
                            change_items_per_step_to(3);
                        } else {
                            change_items_per_step_to(options.items);
                        }
                        resize_slide();
                        update_nav(items_per_step);
                    }
                    function change_items_per_step_to(new_items_per_step) {
                        items_per_step = new_items_per_step;

                        var new_steps = Math.ceil($slides_length / items_per_step);

                        if (new_steps != steps) {
                            var old_current_step_slides_count = current_step == steps ?
                                $slides_length :
                                current_step * items_per_step;
                            var new_current_step = old_current_step_slides_count == $slides_length ?
                                new_steps :
                                old_current_step_slides_count / items_per_step;

                            current_step = new_current_step;
                        }
                        steps = new_steps;
                    }
                    function resize_slide() {
                        var slider_width = el.width();
                        var slide_width = slider_width / items_per_step;
                        $slides.css({
                            width: slide_width + 'px'
                        });
                    }
                    function position_slides_container() {
                        var margin = parseInt($slides.css('margin-left')) + parseInt($slides.css('margin-right')),
                            slide_width = (el.width() / items_per_step) + margin;
                        var left = 0;
                        if (current_step == 1) {
                            left = 0;
                        } else if (current_step == steps) {
                            left = (($slides_length - (current_step * items_per_step)) + ((current_step - 1) * items_per_step)) * slide_width;
                        } else {
                            left = ((current_step - 1) * items_per_step) * slide_width;
                        }
                        $slides_container.css({
                            left: '-' + left + 'px'
                        });
                    }
                    function calc_slides_diff(from_step, to_step) {
                        if (from_step < to_step) {
                            var slides_to_move = to_step == steps ?
                                $slides_length - (current_step * items_per_step) :
                                (to_step * items_per_step) - (current_step * items_per_step);
                            return slides_to_move;
                        }
                        if (from_step > to_step) {
                            var slides_to_move = current_step == steps ?
                                $slides_length - (to_step * items_per_step) :
                                (current_step * items_per_step) - (to_step * items_per_step);
                            return slides_to_move;
                        }
                        return 0;
                    }
                    function move(to_step) {
                        var slides_to_move = calc_slides_diff(current_step, to_step);
                        var width = items_per_step > 1 ?
                            $slides.outerWidth(true) * slides_to_move:
                            $slides.outerWidth(true) * slides_to_move;
                        if (current_step < to_step) {
                            $slides_container.animate({
                                left: '-=' + width + 'px'
                            }, options.animation_duration, options.easing);
                            current_step = to_step;
                        }
                        if (current_step > to_step) {
                            $slides_container.animate({
                                left: '+=' + width + 'px'
                            }, options.animation_duration, options.easing);
                            current_step = to_step;
                        }
                        actualize_buttons();
                    }
                    function actualize_buttons() {
                        if (current_step <= 1) {
                            prev.hide();
                        } else {
                            prev.show();
                        }
                        if (current_step >= steps) {
                            next.hide();
                        } else {
                            next.show();
                        }
                        if (options.show_nav) {
                            var current_nav = slider_nav.find('a').eq(current_step - 1);
                            slider_nav.find('a').removeClass('active');
                            current_nav.addClass('active');
                        }
                    }
                    function play() {
                        clearInterval(timer);
                        timer = setInterval(function() {
                            if (current_step == steps) {
                                move(1);
                            } else {
                                move(current_step + 1);
                            }
                        }, options.interval);
                    }
                    function stop() {
                        clearInterval(timer);
                    }
                    initialize();
                });
            };
            $.fn.flexboxslider.defaults = {
                max_height:250,
                items:4,
                timer: true,
                interval: 5000,
                show_nav: true,
                animation_duration: 500,
                easing: 'swing',
                small_screen:600,
                tablet:768
            };
        })(jQuery);
        $(document).ready(function() {
            $('#slider-2').flexboxslider({
                max_height: 80,
                timer: false
            });
            $('.add_customer').on('click',function () {
                var name = $('#add-customer-form').find('.name').val();
                var phone = $('#add-customer-form').find('.phone').val();
                var gender = $('#add-customer-form').find('.gender').val();
                $.ajax({
                    url: '{{url('/api/add-customer')}}',
                    type: 'GET',
                    dataType: 'html',
                    data: {
                        name: name,
                        phone: phone,
                        gender: gender
                    },
                    success: function (d) {
                        $('.customer_id').html(d);
                        $('#addCustomerModal').modal('hide');
                    },
                    error: function () {
                    }
                });
            });
        });
        //get item by category
        $(function () {
            $('.item-by-category').on('click', function (e) {
                e.preventDefault();
                var category_id = $(this).data('id') - 0;
                var q = $('#q').val();
                $.ajax({
                    url: '{{url('/admin/menu-item')}}',
                    type: 'GET',
                    dataType: 'html',
                    data: {
                        category_id: category_id,
                        q:q
                    },
                    success: function (d) {
                        $('.menu-item-by-category').html(d);
                    },
                    error: function () {
                        swal("OOps.., Error!", "Please, try again.")
                    }
                });
            });
            $('.item-by-category:first').trigger('click');
            $('body').delegate('.pos-item','click',function (e) {
                e.preventDefault();
                var uid = (new Date().getTime());
                var id = $(this).data('id');
                var item_code = $(this).data('item_code');
                var title = $(this).data('title');
                var image = $(this).data('image');
                var unit = $(this).data('unit');
                var price = $(this).data('price');
                getRowItem(id,item_code,title,unit,price,image);
            });

            $('body').delegate('.qty-row','keyup',function () {
                calPOS();
            });
        });
        function isDupItem(item_id) {
            var dup = false;

            $('.item_id').each(function () {
                var q = $(this).parent().parent();
                var d = $(this).val();

                console.log(d);
                if(d != '' && d == item_id){
                    var qqq = q.find('.qty-row').val() - 0 + 1;
                    q.find('.qty-row').val(qqq);
                    dup = true;
                    return true;
                }
            });
            return dup;
        }
        function getRowItem(id,item_code,title,unit,price,image) {
            var uid = (new Date().getTime());
            if(isDupItem(id)){
            }else {
                var tr = '\n' +
                    '                            <tr>\n' +
                    '                                <td style="width:10%;">                                    \n' +
                    '                                    <input type="hidden" class="item_id" name="_data_[' + uid + '][item_id]" value="' + id + '">\n' +
                    '                                    <input type="hidden" name="_data_[' + uid + '][item_code]" value="' + item_code + '">\n' +
                    '                                    <input type="hidden" name="_data_[' + uid + '][title]" value="' + title + '">\n' +
                    '                                    <input type="hidden" name="_data_[' + uid + '][unit]" value="' + unit + '">\n' +
                    '                                    <input type="hidden" name="_data_[' + uid + '][cost]" value="">\n' +
                    '                                    <input type="hidden" class="price-row" name="_data_[' + uid + '][price]" value="' + price + '">\n' +
                    '                                    <input type="hidden" name="_data_[' + uid + '][discount]" value="">                                    \n' +
                    '                                    ' + item_code + '</td>\n' +
                    '                                <td style="width:30%;">' + title + '</td>\n' +
                    '                                <td style="width:0%;"><input class="hidden" number="number" type="text" name="_data_[' + uid + '][num_qty]" value="" min="0" placeholder=" 0 " style="width: 100%;"></td>\n' +
                    '                                <td style="width:15%;"><input class="qty-row" number="number" type="text" name="_data_[' + uid + '][qty]" value="1" min="0" placeholder=" 0 " style="width: 100%;"></td>\n' +
                    '                                <td style="width:20%;"><span>$</span> ' + price + '</td>\n' +
                    '                                <td style="width:25%;"><span>$</span> <span class="total-amount-row">' + price + '</span></td>\n' +
                    '                                <td style="width: 10%">\n' +
                    '                                    <a class=" remove-pos" style="font-size: 18px; color: rgba(160,8,22,0.84);">\n' +
                    '                                        <i class="fa fa-fw fa-times-circle"></i>\n' +
                    '                                    </a>\n' +
                    '                                </td>\n' +
                    '                            </tr>';

                $('.show-order-item').append(tr);
                $('input[type=number],[number]').ForceNumericOnly();
            }
            calPOS();
        }
        function calPOS() {
            var g_total = 0;
            var total_discount = $('.total_discount').val() - 0;
            var ic = 0;
            $('.show-order-item tr').each(function () {
                var d = $(this);
                var price = d.find('.price-row').val() - 0;
                var qty = d.find('.qty-row').val() - 0;
                var amt = price * qty;
                d.find('.total-amount-row').html(_c(amt));
                if(amt > 0){
                    g_total += amt;
                }
                if(qty>0) {
                    ic += qty;
                }
            });
            $('.p-total').html(_c(g_total));
            $('.total_amt').val(g_total);
            $('.total_amt-x').html(g_total);
            $('.item_count').html((ic));
            $('.p-total-payable').html(_c(g_total - total_discount));
            $('.p-total-payable-en').val(g_total - total_discount);
            //            =====================eang=======
            $('.p-total-discount').val(_c(total_discount));
            $('.grand_total').html(_c(g_total - total_discount));
            //            =====================exchange kh=======
            $('.grand_total_kh').html(_r(g_total - total_discount));
            $('.p-total-kh').html(_r(g_total));
            $('.p-total-payable-kh').html(_r(g_total - total_discount));
            $('.p-total-discount-kh').val(_r(total_discount));
            return g_total;
        }
        //get item pagination by category
        $('body').delegate('.my-paginate ul li a', 'click', function (e) {
            e.preventDefault();
            var report_url = $(this).prop('href');
            $.ajax({
                url: report_url,
                type: 'GET',
                dataType: 'html',
                data: {
                },

                success: function (d) {
                    $('.menu-item-by-category').html(d);
                },
                error: function (d) {
                    swal("OOps.., Error!", "Please, try again.")
                }
            });
        });
    </script>

    <script>
        var delay = (function(){
            var timer = 0;
            return function(callback, ms){
                clearTimeout (timer);
                timer = setTimeout(callback, ms);
            };
        })();

        function loadPosItemSearch() {
            var q = $('.search-item-pos-to-show-txt').val();

            $('.show-all-product-list').html('');
            $('.show-all-product-list').load('{{url('api/show-pos-product')}}',{q:q});
        }
        function loadPosCustomerSearch() {
            var q = $('.search-customer-view-show-txt').val();

            $('.show-all-customer').html('');
            $('.show-all-customer').load('{{url('api/show-pos-customer')}}',{q:q});

        }
        $(function () {
        {{--============search customer pop up ============--}}

            $('.search-customer-view-show-txt').on('keyup',function (e) {
                e.preventDefault();
                loadPosCustomerSearch();
            });

            $('.search-customer-view-show').on('click',function (e) {
                e.preventDefault();
                loadPosCustomerSearch();
            });

            $('#viewCustomerModal').on('show.bs.modal', function (e) {
                loadPosCustomerSearch();
            });

            $('body').delegate('.show-all-customer tr','click',function () {
                var id = $(this).data('id');
                var name = $(this).data('name');
                $('.customer_id').val(id);
                $('.customer_id').select2();
                $('#viewCustomerModal').modal('hide');
            });
        {{--============search item pop up ============--}}
            $('.search-item-pos-to-show-txt').on('keyup',function (e) {
                e.preventDefault();
                loadPosItemSearch();
            });
            $('.search-item-pos-to-show').on('click',function (e) {
                e.preventDefault();
                loadPosItemSearch();
            });
            $('#searchProductFilterDetail').on('show.bs.modal', function (e) {
                loadPosItemSearch();
            });

            $('body').delegate('.show-all-product-list tr','click',function () {
                var uid = (new Date().getTime());
                var id = $(this).data('id');
                var item_code = $(this).data('item_code');
                var title = $(this).data('title');
                var image = $(this).data('image');
                var unit = $(this).data('unit');
                var price = $(this).data('price');

                getRowItem(id,item_code,title,unit,price,image);

                $('#searchProductFilterDetail').modal('hide');
            });

            $('.updateOrderDiscount').on('click',function () {
                var total_discount = $('.total_discount').val() - 0;

                $('.total-discount-show').html(_c(total_discount));

                var total = calPOS();

                var total_after_discount = total - total_discount;

                $('.grand_total').html(_c(total_after_discount));
                $('.grand_total_kh').html(_r(total_after_discount));

                $('.p-total-discount').html(_c(total_discount));
                $('.p-total-discount-kh').html(_r(total_discount));
                $('.total-discount-show').val((total_discount));

                $('.total_amt-x').html(total_after_discount);


            });

            $('.paid_en').on('keyup',function () {
                var paid = $(this).val() - 0;
                var payable = $('.p-total-payable-en').val() -0;
                $('.main_remain_1').html(_c(paid - payable));
//===========kh=================
                $('.main_remain_1_kh').html(_r(paid - payable));
            });

            $('.quick-cash').on('click',function(e){
                e.preventDefault();
                var p = $(this).html()-0;
                var pp_d = $('.paid_en').val()-0;
                var pp_r = $('.currencies-payment-kh').val()-0;

                if($('.p-current').hasClass('currencies-payment-kh')){
                    $('.currencies-payment-kh').val(p*ex+pp_r);
                }else {
                    $('.paid_en').val(p+pp_d);
                }

                pp_d = $('.paid_en').val()-0;

                pp_r = $('.currencies-payment-kh').val()-0;


                var payable = $('.p-total-payable-en').val() -0;

                $('.main_remain_1').html(_c((pp_d+pp_r/ex) - payable));
//===========kh=================
                $('.main_remain_1_kh').html(_r((pp_d+pp_r/ex) - payable));
            });

            $('.clear-cash-notes').on('click',function(e){
                e.preventDefault();
                var p = 0;
                var pp = 0;
                $('.paid_en').val(0);
                $('.currencies-payment-kh').val(0);
                $('.paid_en').val();

                pp_d = $('.paid_en').val()-0;

                pp_r = $('.currencies-payment-kh').val()-0;


                var payable = $('.p-total-payable-en').val() -0;

                $('.main_remain_1').html(_c((pp_d+pp_r/ex) - payable));
//===========kh=================
                $('.main_remain_1_kh').html(_r((pp_d+pp_r/ex) - payable));
            });

            $('.pos-form').on('submit',function () {
                var payable = $('.p-total-payable-en').val();

                var paid = $('.paid_en').val();
                if(paid-payable < 0){
                    $('.paid_en').addClass('red');
                    return false;
                }
            });
            $('[name="s_code_item"]').on('keyup',function () {
                var q = $(this).val();
                delay(function () {
                    getSearch(q);
                }, 1000);

            });

            $('[name="s_code_item"]').on('change',function () {
                var q = $(this).val();
                getSearch(q);
            });

            $('.search_details').on('click',function () {
                var q = $('[name="s_code_item"]').val();
                getSearch(q);
            }) ;

            $('body').delegate('.remove-pos','click',function (e) {
                e.preventDefault();
                $(this).parent().parent().remove();
                calPOS();

            });

            $('body').delegate('.getOrderCancel','click',function (e) {
                e.preventDefault();
                location.reload();
            });
            $('body').delegate('.paid_en,.currencies-payment-kh','click',function (e) {
                e.preventDefault();

                $('.paid_en').removeClass('p-current');
                $('.currencies-payment-kh').removeClass('p-current');

                $(this).addClass('p-current');
            });
        });

        function getSearch(q) {
            $.ajax({
                url: '{{url('api/get-search')}}',
                data: {q: q},
                async: false,
                dataType: 'json',
                type: 'GET',
                success: function (data) {
                    if(data.error == 0) {
                        var d = data.row;
                        getRowItem(d.id,d.item_code,d.title,d.unit,d.price,'');
                    }
                },
                error: function () {
                }
            });
        }
    </script>
@endsection