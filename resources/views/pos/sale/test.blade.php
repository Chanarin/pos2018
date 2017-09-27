
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>POS Module | iCloudERP Software</title>
    <script type="text/javascript">if(parent.frames.length !== 0){top.location = 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos';}</script>
    <base href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/"/>
    <meta http-equiv="cache-control" content="max-age=0"/>
    <meta http-equiv="cache-control" content="no-cache"/>
    <meta http-equiv="expires" content="0"/>
    <meta http-equiv="pragma" content="no-cache"/>
    <link rel="shortcut icon" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/images/icon.png"/>
    <link rel="stylesheet" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/styles/theme.css" type="text/css"/>
    <link rel="stylesheet" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/styles/style.css" type="text/css"/>
    <link rel="stylesheet" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/pos/css/posajax.css" type="text/css"/>
    <link rel="stylesheet" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/pos/css/print.css" type="text/css" media="print"/>
    <script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/jquery.js"></script>
    <![endif]-->
    <script>
        localStorage.setItem('exchange_kh', '4200.0000');
        localStorage.setItem('u_username', 'owner');
    </script>

    <script>




    </script>

</head>
<body>
<noscript>
    <div class="global-site-notice noscript">
        <div class="notice-inner">
            <p><strong>JavaScript seems to be disabled in your browser.</strong><br>You must have JavaScript enabled in
                your browser to utilize the functionality of this website.</p>
        </div>
    </div>
</noscript>
<div id="wrapper">
    <header id="header" class="navbar">
        <div class="container bblack" id="container">
            <a class="navbar-brand" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/"><span class="logo"><span class="pos-logo-lg">iCloudERP Software</span><span class="pos-logo-sm">POS</span></span><br><span class "btn bblack" id="display_time"></span></a>

            <div class="header-nav">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
                            <img alt="" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/images/male.png" class="mini_avatar img-rounded">
                            <br>
                            <div class="user">
                                <p>owner</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/auth/profile/1">
                                    <i class="fa fa-user"></i> Profile                                </a>
                            </li>
                            <li>
                                <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/auth/profile/1/#cpassword">
                                    <i class="fa fa-key"></i> Change Password                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/auth/logout">
                                    <i class="fa fa-sign-out"></i> Logout                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown hidden-sm">
                        <a class="btn pos-tip" title="Dashboard" data-placement="left" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/welcome">
                            <i class="fa fa-dashboard"></i><p>Dashboard</p>
                        </a>
                    </li>
                    <li class="dropdown hidden-sm">
                        <a class="btn pos-tip" title="Settings" data-placement="left" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/settings">
                            <i class="fa fa-cogs"></i><p>Settings</p>
                        </a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a class="btn pos-tip" title="Calculator" data-placement="left" href="#" data-toggle="dropdown">
                            <i class="fa fa-calculator"></i><p>Calculator</p>
                        </a>
                        <ul class="dropdown-menu pull-right calc">
                            <li class="dropdown-content">
                                <span id="inlineCalc"></span>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown hidden-sm">
                        <a class="btn pos-tip" title="Shortcuts" data-placement="left" href="#" data-toggle="modal" data-target="#sckModal">
                            <i class="fa fa-key"></i><p>Shortcuts</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="btn pos-tip" title="view kitchen" data-placement="bottom" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/view_kitchen" target="_blank">
                            <i class="fa fa-laptop"></i><p>Kitchen</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="btn pos-tip" title="view complete" data-placement="bottom" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/view_complete" target="_blank">
                            <i class="fa fa-laptop"></i><p>Complete</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="btn pos-tip" title="View Bill Screen" data-placement="bottom" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/view_bill" target="_blank">
                            <i class="fa fa-laptop"></i><p>Screen</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="btn pos-tip" title="Delivery" data-placement="bottom" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/deliveries" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-car"></i><p>Delivery</p>
                        </a>
                    </li>
                    <!--
                    <li class="dropdown">
                        <a class="btn bdarkGreen pos-tip" id="register_details" title="Register Details" data-placement="bottom" data-html="true" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/register_details" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-check-circle"></i><p>Register </p>
                        </a>
                    </li>-->
                    <li class="dropdown">
                        <a class="btn borange pos-tip" id="close_register" title="Close Register" data-placement="bottom" data-html="true" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/close_register" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-times-circle"></i><p>Clear</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="btn borange pos-tip" id="add_expense" title="<span>Add Expense" data-placement="bottom" data-html="true" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/purchases/add_expense" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-dollar"></i><p>Expense</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="btn bdarkGreen pos-tip" id="today_profit" title="today profit" data-placement="bottom" data-html="true" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/reports/profit" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-hourglass-half"></i><p>Profit</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="btn bdarkGreen pos-tip" id="today_sale" title="Today's Sale" data-placement="bottom" data-html="true" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/today_sale" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-heart"></i><p>Today</p>
                        </a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a class="btn bblue pos-tip" title="List Open Registers" data-placement="bottom" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/registers">
                            <i class="fa fa-list"></i><p>Register </p>
                        </a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a href="#" id="pos-list" title="List Sales" class="btn blightOrange pos-tip external" data-toggle="modal" data-target="#poslist">
                            <i class="fa fa-print"></i><p>List Sales</p>
                        </a>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a class="btn bred pos-tip" title="Clear all locally saved data" data-placement="bottom" id="clearLS" href="#">
                            <i class="fa fa-eraser"></i><p>Reset</p>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    <div id="content">

        <div class="c1">
            <div class="pos">
                <div id="pos">
                    <form action="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos" data-toggle="validator" role="form" id="pos-sale-form" method="post" accept-charset="utf-8">
                        <input type="hidden" name="token" value="872c98b1ef17052174bc786d5f84a7cb" style="display:none;" />
                        <div id="leftdiv">
                            <div id="printhead">
                                <h4 style="text-transform:uppercase;">iCloudERP Software</h4>
                                <h5 style="text-transform:uppercase;">Order List</h5>Date 27/09/2017 15:28                        </div>
                            <div id="left-top">
                                <div style="position: absolute; left:-9999px;"><input type="text" name="test" value=""  id="test" class="kb-pad" />
                                </div>
                                <div class="col-md-6" style="padding-left:0; margin-bottom: 5px">
                                    <div class="form-group">
                                        <div class="input-group">                                        <input type="text" name="customer" value=""  id="poscustomer" data-placeholder="Select Customer" required="required" class="form-control pos-input-tip" style="width:100%;" />
                                            <div class="input-group-addon no-print" style="padding: 2px 5px; border-left: 0;">
                                                <a href="#" id="view-customer" class="external" data-toggle="modal" data-target="#myModal">
                                                    <i class="fa fa-2x fa-user" id="addIcon"></i>
                                                </a>
                                            </div>
                                            <div class="input-group-addon no-print" style="padding: 2px 5px;">
                                                <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/customers/add" id="add-customer" class="external" data-toggle="modal" data-target="#myModal">
                                                    <i class="fa fa-2x fa-plus-circle" id="addIcon"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right:0;">
                                    <div class="form-group">
                                        <select name="warehouse" id="poswarehouse" class="form-control pos-input-tip" data-placeholder="Select Warehouse" required="required" style="width:100%;" >
                                            <option value=""></option>
                                            <option value="1" selected="selected">Head Office (PP)</option>
                                            <option value="2">WH1(PP)</option>
                                            <option value="7">Branch (S.R)</option>
                                            <option value="8">WH3 (S.R)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12" style="padding:0;">
                                    <div class="no-print">
                                        <div class="form-group" id="ui">
                                            <div class="input-group">											<input type="text" name="add_item" value=""  class="form-control pos-tip" id="add_item" data-placement="top" data-trigger="focus" placeholder="Scan/Search product by name/code" title="Please start typing code/name for suggestions or just scan barcode" />
                                                <div class="input-group-addon" style="padding: 2px 5px;">
                                                    <a href="#" id="search_details">
                                                        <i class="fa fa-2x fa-search" id="addIcon"></i>
                                                    </a>
                                                </div>
                                                <div class="input-group-addon" style="padding: 2px 5px;">
                                                    <a href="#" id="addManually">
                                                        <i class="fa fa-2x fa-plus-circle" id="addIcon"></i>
                                                    </a>
                                                </div>
                                                <div class="input-group-addon" style="padding: 2px 5px;">
                                                    <a href="#" id="search_floor">
                                                        <i class="fa fa-2x fa-th" id="addIcon"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div style="clear:both;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                            <div style="clear:both;"></div>
                            <div id="print">
                                <div id="left-middle">
                                    <div id="product-list">
                                        <table class="table items table-striped table-bordered table-condensed table-hover"
                                               id="posTable" style="margin-bottom: 0;">
                                            <thead>
                                            <tr>
                                                <th width="3%">N<sup>o</sup></th>
                                                <th width="30%">Product</th>
                                                <th width="10%">Price</th>
                                                <th width="12%">Price (KHM)</th>
                                                <th width="10%">Qty</th>
                                                <th width="5%">Discount</th>
                                                <th width="13%">Subtotal</th>
                                                <th style="width: 5%; text-align: center;"><i class="fa fa-trash-o"  style="opacity:0.5; filter:alpha(opacity=50);"></i>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <input type="hidden" name="table_no" class=" table_no" id="table_no" value=""/>
                                        <input type="hidden" name="suspend_" id="suspend_id" value="0" />
                                        <input type="hidden" name="suspend_name" id="suspend_name" value="0">

                                        <div style="clear:both;"></div>
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                                <div id="left-bottom">
                                    <table id="totalTable"
                                           style="width:100%; float:right; padding:5px; color:#000; background: #FFF;">
                                        <tr>
                                            <td style="padding: 5px 10px; font-size: 16px;">Items <span style="padding: 5px 10px; font-size: 16px; font-weight:bold;" id="titems">0</span></td>
                                            <td class="text-right">
                                                Rate <span style="padding: 5px 10px;font-size: 16px; font-weight:bold;" id="khmer_rate">4,200  ៛</span>
                                            </td>
                                            <td style="padding: 5px 10px; font-size: 16px;">Total</td>
                                            <td class="text-right" style="padding: 5px 10px;font-size: 16px; font-weight:bold;">
                                                <span id="total">0.00</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 10px; font-size: 16px;">Order Tax                                            <a href="#" id="pptax2">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                            <td class="text-right" style="padding: 5px 10px;font-size: 16px; font-weight:bold;">
                                                <span id="ttax2">0.00</span>
                                            </td>

                                            <td style="padding: 5px 10px; font-size: 16px;">Discount                                            <a href="#" id="ppdiscount">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>

                                            <td class="text-right" style="padding: 5px 10px; font-size: 16px; font-weight:bold;">
                                                <span id="tds">0.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 5px 10px; border-top: 1px solid #666; font-size: 20px; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                                                Total Payable                                        </td>
                                            <td class="text-right" style="padding:5px 10px 5px 10px; font-size: 30px; border-top: 1px solid #666; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                                                <span style="float:left" id="gtotal_kh"></span>
                                                <span id="gtotal">0.00</span>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="clearfix"></div>
                                    <div id="botbuttons" style="text-align:center;">
                                        <input type="hidden" name="biller" id="biller"
                                               value="1"/>

                                        <input type="hidden" name="saleman_1" id="saleman_1" value=""/>
                                        <input type="hidden" name="delivery_by_1" id="delivery_by_1" value=""/>
                                        <input type="hidden" name="reference_nob" id="reference_nob" value=""/>
                                        <input type="hidden" name="sale_status" id="sale_status_1" value=""/>
                                        <input type="hidden" name="address" id="address" value=""/>
                                        <input type="hidden" name="date" value="" class="date_c">
                                        <input type="hidden" name="sale_type" value="0" class="sale_type">
                                        <input type="hidden" name="sale_type_id" value="0" class="sale_type_id">


                                        <div class="btn-group btn-group-justified">
                                            <div class="btn-group">
                                                <div class="btn-group btn-group-justified">
                                                    <div class="btn-group">
                                                        <button type="button" title="Cancel Order - F4" style="height:68px;" class="btn btn-danger" id="reset">
                                                            <i class="fa fa-remove"></i> Cancel</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn-group">
                                                <div class="btn-group btn-group-justified">
                                                    <div class="btn-group">
                                                        <button type="button" title="Print Order - F9" class="btn btn-primary" id="print_order_food" style="width:50%;">
                                                            <i class="fa fa-print"></i> Order Food                                                    </button>
                                                        <button type="button" title="Print Order - F9" class="btn btn-primary" id="print_order_drink" style="width:50%;">
                                                            <i class="fa fa-print"></i> Order Drink                                                    </button>
                                                        <button type="button" title="Print Bill - F3" class="btn btn-primary" id="print_bill"  style="margin-left: 0 !important;">
                                                            <i class="fa fa-print"></i> Print Bill                                                    </button>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="btn-group">
                                                <button type="button" title="Payment - F8" style="height:68px;" class="btn btn-success" id="payment">
                                                    <i class="fa fa-money"></i> Payment                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both; height:5px;"></div>
                                    <div id="num">
                                        <div id="icon"></div>
                                    </div>
                                    <span id="hidesuspend"></span>
                                    <input type="hidden" name="pos_note" value="" id="pos_note">
                                    <input type="hidden" name="staff_note" value="" id="staff_note">
                                    <input type="hidden" name="suspend_room" value="" id="suspend_room1">
                                    <input type="hidden" name="pos_date" value="" id="pos_date">

                                    <div id="payment-con">
                                        <input type="hidden" name="amount[]" id="amount_val_1" value=""/>
                                        <input type="hidden" name="other_cur_paid[]" id="other_cur_paid_val_1" value=""/>
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_1" value=""/>
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_1" value="cash"/>
                                        <input type="hidden" name="bank_account[]" id="bank_account_val_1" value=""/>
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_1" value=""/>
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_1" value=""/>
                                        <input type="hidden" name="paying_deposit[]" id="paying_deposit_val_1" value=""/>
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_1" value=""/>
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_1" value=""/>
                                        <input type="hidden" name="voucher_no[]" id="voucher_no_val_1" value=""/>
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_1" value=""/>
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_1" value=""/>
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_1" value="Visa"/>
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_1" value=""/>
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_1" value=""/>
                                        <!-- Loan -->
                                        <input type="hidden" name="amount[]" id="amount_val_2" value=""/>
                                        <input type="hidden" name="other_cur_paid[]" id="other_cur_paid_val_2" value=""/>
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_2" value=""/>
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_2" value="cash"/>
                                        <input type="hidden" name="bank_account[]" id="bank_account_val_2" value=""/>
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_2" value=""/>
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_2" value=""/>
                                        <input type="hidden" name="paying_deposit[]" id="paying_deposit_val_2" value=""/>
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_2" value=""/>
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_2" value=""/>
                                        <input type="hidden" name="voucher_no[]" id="voucher_no_val_2" value=""/>
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_2" value=""/>
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_2" value=""/>
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_2" value="Visa"/>
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_2" value=""/>
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_2" value=""/>
                                        <!-- Loan -->
                                        <input type="hidden" name="amount[]" id="amount_val_3" value=""/>
                                        <input type="hidden" name="other_cur_paid[]" id="other_cur_paid_val_3" value=""/>
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_3" value=""/>
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_3" value="cash"/>
                                        <input type="hidden" name="bank_account[]" id="bank_account_val_3" value=""/>
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_3" value=""/>
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_3" value=""/>
                                        <input type="hidden" name="paying_deposit[]" id="paying_deposit_val_3" value=""/>
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_3" value=""/>
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_3" value=""/>
                                        <input type="hidden" name="voucher_no[]" id="voucher_no_val_3" value=""/>
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_3" value=""/>
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_3" value=""/>
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_3" value="Visa"/>
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_3" value=""/>
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_3" value=""/>
                                        <!-- Loan -->
                                        <input type="hidden" name="amount[]" id="amount_val_4" value=""/>
                                        <input type="hidden" name="other_cur_paid[]" id="other_cur_paid_val_4" value=""/>
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_4" value=""/>
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_4" value="cash"/>
                                        <input type="hidden" name="bank_account[]" id="bank_account_val_4" value=""/>
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_4" value=""/>
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_4" value=""/>
                                        <input type="hidden" name="paying_deposit[]" id="paying_deposit_val_4" value=""/>
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_4" value=""/>
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_4" value=""/>
                                        <input type="hidden" name="voucher_no[]" id="voucher_no_val_4" value=""/>
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_4" value=""/>
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_4" value=""/>
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_4" value="Visa"/>
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_4" value=""/>
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_4" value=""/>
                                        <!-- Loan -->
                                        <input type="hidden" name="amount[]" id="amount_val_5" value=""/>
                                        <input type="hidden" name="other_cur_paid[]" id="other_cur_paid_val_5" value=""/>
                                        <input type="hidden" name="balance_amount[]" id="balance_amount_5" value=""/>
                                        <input type="hidden" name="paid_by[]" id="paid_by_val_5" value="cash"/>
                                        <input type="hidden" name="bank_account[]" id="bank_account_val_5" value=""/>
                                        <input type="hidden" name="cc_no[]" id="cc_no_val_5" value=""/>
                                        <input type="hidden" name="paying_gift_card_no[]" id="paying_gift_card_no_val_5" value=""/>
                                        <input type="hidden" name="paying_deposit[]" id="paying_deposit_val_5" value=""/>
                                        <input type="hidden" name="cc_holder[]" id="cc_holder_val_5" value=""/>
                                        <input type="hidden" name="cheque_no[]" id="cheque_no_val_5" value=""/>
                                        <input type="hidden" name="voucher_no[]" id="voucher_no_val_5" value=""/>
                                        <input type="hidden" name="cc_month[]" id="cc_month_val_5" value=""/>
                                        <input type="hidden" name="cc_year[]" id="cc_year_val_5" value=""/>
                                        <input type="hidden" name="cc_type[]" id="cc_type_val_5" value="Visa"/>
                                        <input type="hidden" name="cc_cvv2[]" id="cc_cvv2_val_5" value=""/>
                                        <input type="hidden" name="payment_note[]" id="payment_note_val_5" value=""/>
                                        <!-- Loan -->
                                    </div>

                                    <input type="hidden" name="depreciation_rate1[]" id="depreciation_rate1_val_1" value=""/>
                                    <input type="hidden" name="depreciation_term[]" id="depreciation_term_val_1" value=""/>
                                    <input type="hidden" name="depreciation_type[]" id="depreciation_type_val_1" value=""/>
                                    <div id="loan1" style="display:none"></div>

                                    <input type="hidden" name="loan_rate" id="loan_rate" value=""/>
                                    <input type="hidden" name="loan_type" id="loan_type" value=""/>
                                    <input type="hidden" name="loan_term" id="loan_term" value=""/>

                                    <input name="order_tax" type="hidden" value="1" id="postax2">
                                    <input name="discount" type="hidden" value="" id="posdiscount">
                                    <input type="hidden" name="rpaidby" id="rpaidby" value="cash" style="display: none;"/>
                                    <input type="hidden" name="total_items" id="total_items" value="0" style="display: none;"/>
                                    <input type="submit" id="submit_sale" value="Submit Sale" style="display: none;"/>
                                </div>
                            </div>

                        </div>
                        <div id="cp">
                            <div id="cpinner" style="padding:0;">
                                <div class="quick-menu">
                                    <div id="proContainer">
                                        <div id="ajaxproducts">
                                            <div id="item-list">
                                                <div  id=box-item><button id="product-01175" type="button" value='LA-0001' title="Acer" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/cf4c317531ce747b07a20c80dc7a61d8.jpg" alt="Acer" style='width:60px;height:60px;' class='img-rounded' /><span>Acer</span></button><button id="product-01177" type="button" value='LA-0003' title="Asua" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/2eae3433477a75a0b0f8be37dfa3e25b.jpg" alt="Asua" style='width:60px;height:60px;' class='img-rounded' /><span>Asua</span></button><button id="product-01178" type="button" value='LA-0004' title="Dell" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/50433fd596df5b39eabb0753289eaa0e.jpg" alt="Dell" style='width:60px;height:60px;' class='img-rounded' /><span>Dell</span></button><button id="product-0194" type="button" value='DS-0001' title="Desk Dell" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/36e8c37d0392df263488f1420d9d2b5e.jpg" alt="Desk Dell" style='width:60px;height:60px;' class='img-rounded' /><span>Desk Dell</span></button><button id="product-0195" type="button" value='DS-0002' title="DESKTOP ASUS" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/2fb8291c9113b0b5d5392c602b71e135.jpg" alt="DESKTOP ASUS" style='width:60px;height:60px;' class='img-rounded' /><span>DESKTOP ASUS</span></button><button id="product-0197" type="button" value='DS-0004' title="DESKTOP HP" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/49e0a73a338231855f7d3a26ecc5ea95.png" alt="DESKTOP HP" style='width:60px;height:60px;' class='img-rounded' /><span>DESKTOP HP</span></button><button id="product-0196" type="button" value='DS-0003' title="DESTOP Acer" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/dd995406d6ea8473b7061670732267f6.jpg" alt="DESTOP Acer" style='width:60px;height:60px;' class='img-rounded' /><span>DESTOP Acer</span></button><button id="product-01179" type="button" value='LA-0005' title="IBM" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/f56e00ff381e6ad2fa63a7f024b6b6e8.jpg" alt="IBM" style='width:60px;height:60px;' class='img-rounded' /><span>IBM</span></button><button id="product-01173" type="button" value='IP-0002' title="Ipad" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/f7cd72187070e4c6644605b782259538.jpg" alt="Ipad" style='width:60px;height:60px;' class='img-rounded' /><span>Ipad</span></button><button id="product-01174" type="button" value='IP-0003' title="Ipad" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/032b2cc00e68b243ec0d53d15000b6a0.jpg" alt="Ipad" style='width:60px;height:60px;' class='img-rounded' /><span>Ipad</span></button><button id="product-0191" type="button" value='PH-0004' title="iphone 5 black" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/3fccbb97177be186d64a8b9ae01a522c.jpg" alt="iphone 5 black" style='width:60px;height:60px;' class='img-rounded' /><span>iphone 5 black</span></button><button id="product-0193" type="button" value='PH-0006' title="iphone 5 gold" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/f7419fd6cd8d451cd954c44990b2936c.jpg" alt="iphone 5 gold" style='width:60px;height:60px;' class='img-rounded' /><span>iphone 5 gold</span></button><button id="product-0192" type="button" value='PH-0005' title="iphone 5 white" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/9f89e56c741a308cb96a4d0c898d5b1a.jpg" alt="iphone 5 white" style='width:60px;height:60px;' class='img-rounded' /><span>iphone 5 white</span></button><button id="product-0190" type="button" value='PH-0003' title="iphone 6 black" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/a79ed379ee906a94181b64d5689fc91d.jpg" alt="iphone 6 black" style='width:60px;height:60px;' class='img-rounded' /><span>iphone 6 black</span></button><button id="product-0189" type="button" value='PH-0002' title="iphone 6 pink" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/dfecfa4fcf65bdd1162883f4beaba54d.jpg" alt="iphone 6 pink" style='width:60px;height:60px;' class='img-rounded' /><span>iphone 6 pink</span></button><button id="product-0166" type="button" value='PH-0001' title="iphone 7" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/3977d7b6b537e9c8b7759d234908822c.jpg" alt="iphone 7" style='width:60px;height:60px;' class='img-rounded' /><span>iphone 7</span></button><button id="product-01176" type="button" value='LA-0002' title="MacBook" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/f9b7ad4849a72af6b376aa516726f9cb.jpg" alt="MacBook" style='width:60px;height:60px;' class='img-rounded' /><span>MacBook</span></button><button id="product-01180" type="button" value='LA-0006' title="PH" class="btn-prni btn-primary product pos-tip" data-container="body"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/dc2551d4219a916ef978e45da6018585.jpg" alt="PH" style='width:60px;height:60px;' class='img-rounded' /><span>PH</span></button></div>                                        </div>
                                            <div class="btn-group btn-group-justified" style="position:fixed;bottom:10px;width:35%;z-index:1000;">
                                                <div class="btn-group" >
                                                    <button style="z-index:10002;" class="btn btn-primary pos-tip" title="Previous" type="button" id="previous">
                                                        <i class="fa fa-chevron-left"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button style="z-index:10003;" class="btn btn-primary pos-tip" type="button" id="sellGiftCard" title="Sell Member Card">
                                                        <i class="fa fa-credit-card" id="addIcon"></i> Sell Member Card                                                </button>
                                                </div>
                                                <div class="btn-group">
                                                    <button style="z-index:10004;" class="btn btn-primary pos-tip" title="Next" type="button" id="next">
                                                        <i class="fa fa-chevron-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                    </div>
                                </div>
                            </div>

                            <div style="clear:both;"></div>
                        </div>
                        <div style="clear:both;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
</div>
<div class="rotate btn-cat-con">
    <button type="button" id="suspend" class="btn btn-danger open-suspend">Room|Table&nbsp;</button>
    <button type="button" id="open-subcategory" class="btn btn-warning open-subcategory">Sub Categories</button>
    <button type="button" id="open-category" class="btn btn-primary open-category" >Categories</button>
</div>

<div id="suspend-slider" style="top:10%;width:63%; overflow:hidden;z-index:10;">
    <div id="suspend-list" style="overflow:hidden;">
        <h3>1</h3><span style='position:relative;display: inline-table;'>
												<a id='clear_suspend' hrefs='http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/delete_suspend/5' style='text-decoration:none;position:absolute;bottom:-5%;left:0;padding-left:5%;padding-right:5%;cursor:pointer;' class='btn-danger clear_suspend'><i class='fa fa-times'></i></a><a href='http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/seperate/5' style='text-decoration:none;position:absolute;bottom:-5%;right:5%;cursor:pointer;padding-left:5%;padding-right:5%;' class='btn-primary' data-toggle='modal' data-target='#myModal'><i class='fa fa-hourglass-half'></i></a><p style='text-decoration:none;position:absolute;top:0;left:0;padding:5px;' class='btn-warning clear_suspend'>2</p><input type='checkbox' name='chsuspend' class='chsuspend' value='5' style='position:absolute;right:5px;'/>
												<button type="button" value='3' id="5" class='btn-prni btn btn-info sus_sale' >
													<span class='wrap_suspend5'><p class='suspend-name5'>BA</p><div class='sup_number5'>Chanthy</div><br/>6.0000 (2)</span>
													03:09 (12:19)
												</button>
											 </span><span style='position:relative;display: inline-table;'>
												<a id='clear_suspend' hrefs='http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/delete_suspend/3' style='text-decoration:none;position:absolute;bottom:-5%;left:0;padding-left:5%;padding-right:5%;cursor:pointer;' class='btn-danger clear_suspend'><i class='fa fa-times'></i></a><a href='http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/seperate/3' style='text-decoration:none;position:absolute;bottom:-5%;right:5%;cursor:pointer;padding-left:5%;padding-right:5%;' class='btn-primary' data-toggle='modal' data-target='#myModal'><i class='fa fa-hourglass-half'></i></a><input type='checkbox' name='chsuspend' class='chsuspend' value='3' style='position:absolute;right:5px;'/>
												<button type="button" value='5' id="3" class='btn-prni btn btn-info sus_sale' >
													<span class='wrap_suspend3'><p class='suspend-name3'>cc</p><div class='sup_number3'>Chanthy</div><br/>0.0000 (0)</span>
													13:41 (01:47)
												</button>
											 </span><span style='position:relative;display: inline-table;'>
												<a id='clear_suspend' hrefs='http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/delete_suspend/2' style='text-decoration:none;position:absolute;bottom:-5%;left:0;padding-left:5%;padding-right:5%;cursor:pointer;' class='btn-danger clear_suspend'><i class='fa fa-times'></i></a><a href='http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/seperate/2' style='text-decoration:none;position:absolute;bottom:-5%;right:5%;cursor:pointer;padding-left:5%;padding-right:5%;' class='btn-primary' data-toggle='modal' data-target='#myModal'><i class='fa fa-hourglass-half'></i></a><p style='text-decoration:none;position:absolute;top:0;left:0;padding:5px;' class='btn-warning clear_suspend'>3</p><input type='checkbox' name='chsuspend' class='chsuspend' value='2' style='position:absolute;right:5px;'/>
												<button type="button" value='4' id="2" class='btn-prni btn btn-info sus_sale' >
													<span class='wrap_suspend2'><p class='suspend-name2'>hh</p><div class='sup_number2'>Chanthy</div><br/>555.6000 (3)</span>
													02:41 (12:47)
												</button>
											 </span><span style='position:relative;display: inline-table;'>
												<a id='clear_suspend' hrefs='http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/delete_suspend/4' style='text-decoration:none;position:absolute;bottom:-5%;left:0;padding-left:5%;padding-right:5%;cursor:pointer;' class='btn-danger clear_suspend'><i class='fa fa-times'></i></a><a href='http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/seperate/4' style='text-decoration:none;position:absolute;bottom:-5%;right:5%;cursor:pointer;padding-left:5%;padding-right:5%;' class='btn-primary' data-toggle='modal' data-target='#myModal'><i class='fa fa-hourglass-half'></i></a><p style='text-decoration:none;position:absolute;top:0;left:0;padding:5px;' class='btn-warning clear_suspend'>2</p><input type='checkbox' name='chsuspend' class='chsuspend' value='4' style='position:absolute;right:5px;'/>
												<button type="button" value='6' id="4" class='btn-prni btn btn-info sus_sale' >
													<span class='wrap_suspend4'><p class='suspend-name4'>vv</p><div class='sup_number4'>Chanthy</div><br/>9.3600 (2)</span>
													14:17 (01:11)
												</button>
											 </span><h3>2</h3><span>
											<button type="button" value='7' class='btn-prni btn suspend-button' id='Sweet Room' >
												<span>Sweet Room</span>
											</button>
										 </span>
    </div>
    <div style="position:relative;">
        <button class="btn btn-primary combine_table">Apply</button>
    </div>
</div>
<div id="category-slider">
    <!--<button type="button" class="close open-category"><i class="fa fa-2x">&times;</i></button>-->
    <div id="category-list">
        <button id="category-15" type="button" value='15' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Airticket</span></button><button id="category-20" type="button" value='20' class="btn-prni category" ><img src="assets/uploads/thumbs/c82008aa8874f732a1a0456d906dc993.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Bag </span></button><button id="category-8" type="button" value='8' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Beverage</span></button><button id="category-12" type="button" value='12' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Car</span></button><button id="category-21" type="button" value='21' class="btn-prni category" ><img src="assets/uploads/thumbs/61432ff7369b2018766ad5092d326604.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Clothes Shop</span></button><button id="category-17" type="button" value='17' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Coffee Shop</span></button><button id="category-11" type="button" value='11' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Contruction of Material</span></button><button id="category-19" type="button" value='19' class="btn-prni category" ><img src="assets/uploads/thumbs/0a6e41f4fd345c01f32f3bee90fe0b4c.jpg" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Dress </span></button><button id="category-22" type="button" value='22' class="btn-prni category" ><img src="assets/uploads/thumbs/b4e63e4a440615fd1be3897cb3986ba6.jpg" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Flower Shop</span></button><button id="category-14" type="button" value='14' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Food</span></button><button id="category-9" type="button" value='9' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Jewelry</span></button><button id="category-13" type="button" value='13' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Motorbike</span></button><button id="category-16" type="button" value='16' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Painting</span></button><button id="category-18" type="button" value='18' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Rice</span></button><button id="category-1" type="button" value='1' class="btn-prni category" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Technology</span></button>    </div>
</div>
<div id="subcategory-slider">
    <!--<button type="button" class="close open-category"><i class="fa fa-2x">&times;</i></button>-->
    <div id="subcategory-list">
        <button id="subcategory-5" type="button" value='5' class="btn-prni subcategory" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>DESKTOP</span></button><button id="subcategory-6" type="button" value='6' class="btn-prni subcategory" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Hand Phone</span></button><button id="subcategory-29" type="button" value='29' class="btn-prni subcategory" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>ipad</span></button><button id="subcategory-30" type="button" value='30' class="btn-prni subcategory" ><img src="assets/uploads/thumbs/no_image.png" style='width:60px;height:60px;' class='img-rounded img-thumbnail' /><span>Laptop</span></button>    </div>
</div>
<div class="modal fade in" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="payModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-2x">&times;</i></span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="payModalLabel">Finalize Sale</h4>
            </div>
            <div class="modal-body" id="payment_content">
                <div class="row">
                    <div class="col-md-10 col-sm-9">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="biller">Project</label>										<select name="biller" class="form-control" id="posbiller" required="required">
                                        <option value="1" selected="selected">Cloudnet(Phnom Penh)</option>
                                        <option value="5">CloudNET (Siem Rap)</option>
                                        <option value="10">Cloudnet (Myanmar)</option>
                                        <option value="13">3A-2222</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="date">Date</label> (yyyy-mm-dd)
                                    <input type="text" name="date" value=""  class="form-control input-tip datetime" id="date" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <textarea name="sale_note" cols="40" rows="10"  id="sale_note" class="form-control kb-text skip" style="height: 35px;" placeholder="Sale Note" maxlength="250"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <select name="suspend_room" id="suspend_room" placeholder="Room|Table" class="form-control pos-input-tip" style="width:100%;">
                                        <option value="" selected="selected"></option>
                                        <option value="bb">bb</option>
                                        <option value="A1">A1</option>
                                        <option value="BA">BA</option>
                                        <option value="hh">hh</option>
                                        <option value="cc">cc</option>
                                        <option value="vv">vv</option>
                                        <option value="Sweet Room">Sweet Room</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="saleman">Saleman</label>									<select name="saleman[]" id="saleman" class="form-control saleman">
                                        <option value="1" selected>owner</option><option value="2">poro</option><option value="3">lychanthy</option><option value="4">kakada</option><option value="5">Thy Tola</option><option value="6">channamana</option><option value="7">soksola</option><option value="8">chanty</option>									</select>
                                </div>

                                <div class="col-sm-6">
                                    <label for="delivery_by">Delivery by</label>									<select name="delivery_by[]" id="delivery_by" class="form-control delivery_by">
                                        <option value="4" selected>Kaoly</option>									</select>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="sale_status">Sale Status</label>										<select name="sale_status" class="form-control input-tip" required="required" id="sale_status">
                                            <option value="completed">Completed</option>
                                            <option value="pending">Pending</option>
                                            <option value="ordered">Ordered</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="slref">Reference No</label>									<div style="float:left;width:100%;">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="reference_no" value="SALE/POS/1709/00008"    class="form-control input-tip" id="slref" />
                                                <input type="hidden"  name="temp_reference_no"  id="temp_reference_no" value="SALE/POS/1709/00008" />
                                                <div class="input-group-addon no-print" style="padding: 2px 5px;background-color:white;">
                                                    <input type="checkbox" name="ref_status" id="ref_st" value="1" style="margin-top:3px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--<textarea name="staffnote" cols="40" rows="10"  id="staffnote" class="form-control kb-text skip" style="height: 35px;" placeholder="Staff Note" maxlength="250"></textarea>
-->
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-primary col-md-12 addButton">
                                        <i class="fa fa-plus"></i> Add More Payments									</button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfir"></div>
                        <div id="payments">
                            <div class="col-md-12 col-sm-9" style="padding:0;">
                                <div class="font16">
                                    <table class="table table-bordered table-condensed table-striped" style="font-size: 1.2em; font-weight: bold; margin-bottom: 0;">
                                        <tbody>
                                        <tr>
                                            <th width="50%" style="text-align:left;">Currency</th>
                                            <th  style="text-align:center;">USD</th>
                                            <th  style="text-align:center;">KHM</th>
                                        </tr>
                                        <tr>
                                            <td width="50%" style="height: 50px;">Total Items</td>
                                            <td class="text-right"><span id="item_count">0.00</span></td>
                                            <td class="text-right"><span class="item_count">0.00</span></td>
                                        </tr>
                                        <tr>
                                            <td width="50%" style="height: 50px;">Total Payable</td>
                                            <td class="text-right"><span id="twt">0.00</span></td>
                                            <td class="text-right"><span class="curr_tpay" rate="4200.0000" id="twt">0.00</span></td>
                                        </tr>
                                        <tr>
                                            <td width="50%" style="height: 50px;">Paid </td>
                                            <td class="text-right"><input name="amount[]" type="text" id="amount_1" class="pa form-control input-lg kb-pad amount" style="text-align:right;"/></td>
                                            <td class="text-right">
                                                <input name="other_cur_paid[]" rate="4200.0000" type="text" id="other_cur_paid_1" class="form-control input-lg kb-pad currencies_payment" style="text-align:right;"/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td  rowspan="2" width="50%" style="text-align:left;">Remaining</td>
                                            <td class="text-right"><span id="remain_1" class="main_remain_1">0.00</span></td>
                                            <td class="text-right"><span class="curr_remain_1" rate="4200.0000" id="remain_1">0</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><span id="remain" class="main_remain">0.00</span></td>
                                            <td class="text-right"><span class="curr_remain" rate="4200.0000" id="remain">0</span></td>
                                        </tr>
                                        <tr>
                                            <td  rowspan="2" width="50%" style="text-align:left;">Change</td>
                                            <td class="text-right"><span id="change_1">0.00</span></td>
                                            <td class="text-right"><span class="curr_change_1" rate="4200.0000" id="change_1">0</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><span id="change">0.00</span></td>
                                            <td class="text-right"><span class="curr_change" rate="4200.0000" id="change">0</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <!--<table class="table table-bordered table-condensed table-striped" style="margin-bottom: 0;">
										<tbody>
										<tr>
											<td width="20%">Total Items</td>
											<td width="20%" class="text-right"><span id="item_count">0.00</span></td>
											<td width="20%">Total Payable</td>
											<td width="20%" class="text-right"><span id="twt">0.00</span></td>
											<td rowspan="2" width="10%">USD</td>
											<td rowspan="2" width="10%"><input class="calExchangerate form-control kb-pad ui-keyboard-input ui-widget-content ui-corner-all" rate="1" class="form-control" type="text" /></td>
										</tr>
										<tr>
											<td>Total Paying</td>
											<td class="text-right"><span id="total_paying">0.00</span></td>
											<td>Balance</td>
											<td class="text-right"><span id="balance">0.00</span></td>
										</tr>
																						<tr style="border-top:2px solid #999 !important">
													<td width="20%">Total Items</td>
													<td width="20%" class="text-right"><span class="item_count">0.00</span></td>
													<td width="20%">Total Payable</td>
													<td width="20%" class="text-right"><span class="curr_tpay" rate="4200.0000" id="twt">0.00</span></td>
													<td rowspan="2" width="10%">KHM</td>
													<td rowspan="2" width="10%"><input class="calExchangerate form-control kb-pad ui-keyboard-input ui-widget-content ui-corner-all" rate="4200.0000" class="form-control currecies_id" type="text" /></td>
												</tr>
												<tr>
													<td>Total Paying</td>
													<td class="text-right"><span class="curr_total_p" rate="4200.0000" >0.00</span></td>
													<td>Balance</td>
													<td class="text-right"><span class="curr_balance" rate="4200.0000" >0.00</span></td>
												</tr>
																						</tbody>
									</table>
-->
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="well well-sm well_1">
                                <div class="payment">
                                    <div class="row" style="font-size: 1.2em; font-weight: bold; margin-bottom: 0;">
                                        <!--<div class="col-sm-5">
										<div class="form-group">
											<label for="amount_1">amount(USD)</label>											<input name="amount[]" type="text" id="amount_1"
												   class="pa form-control input-lg kb-pad amount"/>
										</div>
																					<div class="form-group">
												<label for="amount_2">amount(KHM)</label>												<input name="other_cur_paid" rate="4200.0000" type="text" id="other_cur_paid"
													   class="form-control input-lg kb-pad currencies_payment"/>
											</div>
											                                    </div>-->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="bank_account_1">Bank Account</label>												<select name="bank_account" id="bank_account_1" class="ba form-control kb-pad bank_account">
                                                    <option value="0">-- Select Bank Account --</option>
                                                    <option value="100100">100100 | Cash</option>
                                                    <option value="100101">100101 | Petty Cash</option>
                                                    <option value="100102">100102 | Cash on Hand</option>
                                                    <option value="100103">100103 | ANZ Bank</option>
                                                    <option value="100104">100104 | Wing Account</option>
                                                    <option value="100105">100105 | Visa</option>
                                                    <option value="100106">100106 | Chequing Bank Account</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="paying_by">Paying by</label>                                                <select name="paid_by[]" id="paid_by_1" class="form-control paid_by" >
                                                    <option value="cash">Cash</option>
                                                    <option value="CC">Credit Card</option>
                                                    <option value="Cheque">Cheque</option>
                                                    <option value="gift_card">Member Card</option>
                                                    <option value="deposit">Deposit</option>
                                                    <option value="depreciation">Loan</option>
                                                    <option value="Voucher">Voucher</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea name="payment_note[]" id="payment_note_1"  style="height: 60px;" class="pa form-control kb-text payment_note" placeholder="Payment Note"></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group gc_1" style="display: none;">
                                                <label for="gift_card_no_1">Member Card No</label>                                                <input name="paying_gift_card_no[]" type="text" id="gift_card_no_1"
                                                                                                                                                         class="pa form-control kb-pad gift_card_no"/>

                                                <div id="gc_details_1"></div>
                                            </div>

                                            <div class="form-group dp_1" style="display: none;">
                                                <label for="deposit_amount_1">Deposit Amount</label>                                                <div id="dp_details_1"></div>
                                            </div>

                                            <div class="pcc_1" style="display:none;">
                                                <div class="form-group">
                                                    <input type="text" id="swipe_1" class="form-control swipe"
                                                           placeholder="Swipe"/>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input name="cc_no[]" type="text" id="pcc_no_1"
                                                                   class="form-control"
                                                                   placeholder="Credit Card No"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <input name="cc_holer[]" type="text" id="pcc_holder_1"
                                                                   class="form-control"
                                                                   placeholder="Holder Name"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select name="cc_type[]" id="pcc_type_1"
                                                                    class="form-control pcc_type"
                                                                    placeholder="Card Type">
                                                                <option value="Visa">Visa</option>
                                                                <option
                                                                        value="MasterCard">MasterCard</option>
                                                                <option value="Amex">Amex</option>
                                                                <option value="Discover">Discover</option>
                                                            </select>
                                                            <!-- <input type="text" id="pcc_type_1" class="form-control" placeholder="Card Type" />-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input name="cc_month[]" type="text" id="pcc_month_1"
                                                                   class="form-control"
                                                                   placeholder="Month"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">

                                                            <input name="cc_year" type="text" id="pcc_year_1"
                                                                   class="form-control"
                                                                   placeholder="Year"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">

                                                            <input name="cc_cvv2" type="text" id="pcc_cvv2_1"
                                                                   class="form-control"
                                                                   placeholder="Security Code"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="depreciation_1" style="display:none;">
                                                <div class="form-group">
                                                    <label for="depreciation_1">Depreciation Term</label>                                                </div>
                                                <!--<div style="display:inline-flex;padding-left:2%">
																									</div>-->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <input name="depreciation_rate1[]" type="text" id="depreciation_rate_1"
                                                                       class="form-control depreciation_rate1"
                                                                       placeholder="Rate (%)"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">

                                                                <input name="depreciation_term[]" type="text" id="depreciation_term_1"
                                                                       class="form-control kb-pad" value=""
                                                                       placeholder="Term (Months)"/>
                                                                <input type="hidden" id="current_date" class="current_date" class="current_date[]" value="09/27/2017" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <select name="depreciation_type[]" id="depreciation_type_1"
                                                                        class="form-control depreciation_type"
                                                                        placeholder="Payment Type">
                                                                    <option value=""> &nbsp; </option>
                                                                    <option value="1">Normal</option>
                                                                    <option value="2">Custom</option>
                                                                    <option value="3">Fixed</option>
                                                                    <option value="4">Normal (Fixed)</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <select name="principle_type[]" id="principle_type_1"
                                                                        class="form-control principle_type"
                                                                        placeholder="Principle Type">
                                                                    <option value=""> &nbsp; </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group" id="print_" style="display:none">
                                                                <button type="button" class="btn btn-primary col-md-12 print_depre" id="print_depre" style="margin-bottom:5px;"><i class="fa fa-print"> &nbsp; </i>
                                                                    Print																</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group" id="export_" style="display:none">
                                                                <button type="button" class="btn btn-primary col-md-12 export_depre" id="export_depre" style="margin-bottom:5px;"><i class="fa fa-file-excel-o"> &nbsp; </i>
                                                                    export																</button>
                                                                <div style="clear:both; height:15px;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="dep_tbl" style="display:none;">
                                                        <table border="1" width="100%" class="table table-bordered table-condensed tbl_dep" id="tbl_dep">
                                                            <tbody>

                                                            </tbody>
                                                        </table>
                                                        <table id="export_tbl" width="70%" style="display:none;">

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pcheque_1" style="display:none;">
                                                <div class="form-group"><label for="cheque_no_1">Cheque No</label>                                                    <input name="cheque_no[]" type="text" id="cheque_no_1"
                                                                                                                                                                             class="form-control cheque_no"/>
                                                    <!-- <input name="ggwp[]" type="text" id="ggwp_1"
                                                           class="form-control ggwp"/> -->
                                                </div>
                                            </div>

                                            <div class="pvoucher_1" style="display:none;">
                                                <div class="form-group"><label for="voucher_no_1">Voucher No</label>                                                    <input name="voucher_no[]" type="text" id="voucher_no_1"
                                                                                                                                                                               class="form-control voucher_no"/>
                                                </div>
                                            </div>
                                            <!--
                                            <div class="form-group">
                                                <label for="payment_note">Payment Note</label>                                                <textarea name="payment_note[]" id="payment_note_1"  class="pa form-control kb-text payment_note"></textarea>
                                            </div>
-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="multi-payment"></div>
                        <!--<button type="button" class="btn btn-primary col-md-12 addButton"><i
                                class="fa fa-plus"></i> Add More Payments</button>-->

                        <div style="clear:both; height:15px;"></div>

                    </div>
                    <div class="col-md-2 col-sm-3 text-center">
                        <span style="font-size: 1.2em; font-weight: bold;">Quick Cash</span>

                        <div class="btn-group btn-group-vertical">
                            <button type="button" class="btn btn-lg btn-info quick-cash" id="quick-payable">0.00
                            </button>
                            <input type="hidden" id="payable_amount" class="payable_amount" name="payable_amount" value="0.00" />
                            <button type="button" class="btn btn-lg btn-warning quick-cash">10</button><button type="button" class="btn btn-lg btn-warning quick-cash">20</button><button type="button" class="btn btn-lg btn-warning quick-cash">50</button><button type="button" class="btn btn-lg btn-warning quick-cash">100</button><button type="button" class="btn btn-lg btn-warning quick-cash">500</button><button type="button" class="btn btn-lg btn-warning quick-cash">1000</button><button type="button" class="btn btn-lg btn-warning quick-cash">5000</button>                            <button type="button" class="btn btn-lg btn-danger"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   id="clear-cash-notes">Clear</button>
                            <hr />
                            <div class="btn-group">
                                <button type="button" style="font-size: 1.2em; font-weight: bold; height:80px;" class="btn btn-success" id="submit-sale">
                                    <i class="fa fa-money"></i> Save                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--
			<div class="modal-footer">
                <button class="btn btn-block btn-lg btn-primary" id="submit-sale">Submit</button>
            </div>
-->
    </div>
</div>
</div>
<div class="dep_tbl" style="display:none;">
    <table border="1" width="100%" class="table table-bordered table-condensed tbl_dep" id="tbl_dep1">
        <tbody>

        </tbody>
    </table>

</div>
<div class="dep_export" style="display:none;"></div>

<div class="modal" id="prModal" tabindex="-1" role="dialog" aria-labelledby="prModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i
                                class="fa fa-2x">&times;</i></span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="prModalLabel"></h4>
            </div>
            <div class="modal-body" id="pr_popover_content">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Product Tax</label>
                        <div class="col-sm-8">
                            <select name="ptax" id="ptax" class="form-control pos-input-tip" style="width:100%;">
                                <option value="" selected="selected"></option>
                                <option value="1">No Tax</option>
                                <option value="2">VAT @10%</option>
                                <option value="3">GST @6%</option>
                                <option value="4">VAT @20%</option>
                                <option value="5">TAX @10%</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="piece" class="col-sm-4 control-label">Piece</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="piece">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="wpiece" class="col-sm-4 control-label">W/Piece</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="wpiece">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pquantity" class="col-sm-4 control-label">Quantity</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-pad" id="pquantity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="qtyinhand" class="col-sm-4 control-label">Quantity In Hand</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-pad" id="qtyinhand" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="qtyorder" class="col-sm-4 control-label">Quantity Order</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-pad" id="qtyorder" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="poption" class="col-sm-4 control-label">Product Option</label>

                        <div class="col-sm-8">
                            <div id="poptions-div"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pgroup_prices" class="col-sm-4 control-label">Group Price</label>

                        <div class="col-sm-8">
                            <div id="pgroup_prices-div"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pdiscount"
                               class="col-sm-4 control-label">Product Discount</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-pad" id="pdiscount">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pprice" class="col-sm-4 control-label">Unit Price</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control kb-pad" id="pprice">
                            <input type="text" class="form-control kb-pad" id="pprice_show">
                            <input type="hidden" class="form-control" id="own_rate">
                            <input type="hidden" class="form-control" id="setting_rate">
                            <input type="hidden" class="form-control" value="" id="cost">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pnote" class="col-sm-4 control-label">Product Note</label>

                        <div class="col-sm-8">
                            <div class="input-group">
                                <textarea class="form-control kb-pad" id="pnote" rows="5" cols="20"></textarea>
                                <div class="input-group-addon no-print" style="padding: 2px 5px;">
                                    <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/system_settings/show_note" id="add-productnote" class="external" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-2x fa-plus-circle" id="addIcon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width:25%;">Net Unit Price</th>
                            <th style="width:25%;"><span id="net_price"></span></th>
                            <th style="width:25%;">Product Tax</th>
                            <th style="width:25%;"><span id="pro_tax"></span></th>
                        </tr>
                    </table>
                    <div class="images row">

                    </div>
                    <input type="hidden" id="punit_price" value=""/>
                    <input type="hidden" id="old_tax" value=""/>
                    <input type="hidden" id="old_qty" value=""/>
                    <input type="hidden" id="old_price" value=""/>
                    <input type="hidden" id="row_id" value=""/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="editItem">Submit</button>
            </div>
        </div>
    </div>
</div>

<!--------- Search Form ------------->

<div class="modal" id="seModal" tabindex="-1" role="dialog" aria-labelledby="prModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-2x">&times;</i></span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="prModalLabel">Search Filter</h4>
            </div>
            <div class="modal-body scroll_F" id="pr_popover_content" style="height:400px;overflow:hidden;">
                <form class="form-horizontal" role="form" id="s_seModal">
                    <table>
                        <thead>
                        <tr>
                            <td style="border:1px;width:5%"><input type="text" class="form-control" id="chk" disabled/></td>
                            <td style="padding:0;margin:0;border:1px;width:20%"><input type="text" class="form-control" id="Pcode"/></td>
                            <td style="padding:0;margin:0;border:1px;width:25%"><input type="text" class="form-control" id="Pname"/></td>
                            <!--<td style="padding:0;margin:0;border:1px;"><input type="text" style="width:113px;border-right:none" class="form-control" id="Pdescription" /></td>-->
                            <td style="padding:0;margin:0;border:1px;width:20%"><input type="text" class="form-control" id="Pcategory" ></td>
                            <td style="padding:0;margin:0;border:1px;width:10%"><input type="text" class="form-control" id="Pprice"></td>
                            <td style="padding:0;margin:0;border:1px;width:20%"><input type="text" class="form-control" id="dd" disabled></td>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th style="width:5%;">
                                <center>
                                    <input class="checkbox checkth input-xs" type="checkbox" name="check"/>
                                </center>
                            </th>
                            <th style="width:20%">Product Code</th>
                            <th style="width:25%">Product Name</th>
                            <!--<th style="width:104px">Description</th>-->
                            <th style="width:20%">Category</th>
                            <th style="width:10%">Price</th>
                            <!--<th style="width:200px">strap</th>-->
                            <th style="width:20px"><i class="fa fa-chain"></i></th>
                        </tr>
                        </thead>
                        <tbody class="test">

                        </tbody>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="addItem">Submit</button>
            </div>
        </div>
    </div>
</div>

<div id="ShowImage" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="prModalLabel" aria-hidden="true" style="z-index:9999;">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true"><i class="fa fa-2x">×</i></span>
                </button>
                <div class="getImg"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="seFoModal" tabindex="-1" role="dialog" aria-labelledby="prModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-2x">&times;</i></span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="prModalLabel">Search Filter</h4>
            </div>
            <div class="modal-body scroll_F" id="pr_popover_content" style="height:300px;overflow:hidden;">
                <form class="form-horizontal" role="form" id="s_seModal">
                    <table>
                        <thead>
                        <tr>
                            <td style="padding:0;margin:0;border:1px;"><input type="text" style="width:184px;border-right:none" class="form-control" id="fcode"/></td>
                            <td style="padding:0;margin:0;border:1px;"><input type="text" style="width:239px;border-right:none" class="form-control" id="fdescription"/></td>
                            <td style="padding:0;margin:0;border:1px;"><input type="text" style="width:145px;" class="form-control" id="ffloor" /></td>
                        </tr>
                        </thead>
                    </table>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width:45px;"></th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Floor</th>
                        </tr>
                        </thead>
                        <tbody class="floor">

                        </tbody>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="addSearch">Submit</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="gcModal" tabindex="-1" role="dialog" aria-labelledby="mModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="fa fa-2x">&times;</i></button>
                <h4 class="modal-title" id="myModalLabel">Sell Member Card</h4>
            </div>
            <div class="modal-body">
                <p>Please fill in the information below. The field labels marked with * are required input fields.</p>

                <div class="alert alert-danger gcerror-con" style="display: none;">
                    <button data-dismiss="alert" class="close" type="button">×</button>
                    <span id="gcerror"></span>
                </div>
                <div class="form-group">
                    <label for="gccard_no">Card No</label> *
                    <div class="input-group">
                        <input type="text" name="gccard_no" value=""  class="form-control" id="gccard_no" />
                        <div class="input-group-addon" style="padding-left: 10px; padding-right: 10px;">
                            <a href="#" id="genNo"><i class="fa fa-cogs"></i></a>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="gcname" value="Member Card" id="gcname"/>

                <div class="form-group">
                    <label for="gcvalue">Value</label> *
                    <input type="text" name="gcvalue" value=""  class="form-control" id="gcvalue" />
                </div>
                <div class="form-group">
                    <label for="gcprice">Price</label> *
                    <input type="text" name="gcprice" value=""  class="form-control" id="gcprice" />
                </div>
                <div class="form-group">
                    <label for="gccustomer">Customer</label>                    <input type="text" name="gccustomer" value=""  class="form-control" id="gccustomer" />
                </div>
                <div class="form-group">
                    <label for="gcexpiry">Expiry Date</label>                    <input type="text" name="gcexpiry" value=""  class="form-control date" id="gcexpiry" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="addGiftCard" class="btn btn-primary">Sell Member Card</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="mModal" tabindex="-1" role="dialog" aria-labelledby="mModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i
                                class="fa fa-2x">&times;</i></span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="mModalLabel">Add Product Manually</h4>
            </div>
            <div class="modal-body" id="pr_popover_content">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="mcode" class="col-sm-4 control-label">Product Code *</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-text" id="mcode">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mname" class="col-sm-4 control-label">Product Name *</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-text" id="mname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mtax" class="col-sm-4 control-label">Product Tax *</label>

                        <div class="col-sm-8">
                            <select name="mtax" id="mtax" class="form-control pos-input-tip" style="width:100%;">
                                <option value="" selected="selected"></option>
                                <option value="1">No Tax</option>
                                <option value="2">VAT @10%</option>
                                <option value="3">GST @6%</option>
                                <option value="4">VAT @20%</option>
                                <option value="5">TAX @10%</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mquantity" class="col-sm-4 control-label">Quantity *</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-pad" id="mquantity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mdiscount"
                               class="col-sm-4 control-label">Product Discount</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-pad" id="mdiscount">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mprice" class="col-sm-4 control-label">Unit Price *</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control kb-pad" id="mprice">
                        </div>
                    </div>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width:25%;">Net Unit Price</th>
                            <th style="width:25%;"><span id="mnet_price"></span></th>
                            <th style="width:25%;">Product Tax</th>
                            <th style="width:25%;"><span id="mpro_tax"></span></th>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="addItemManually">Submit</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="sckModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i
                                class="fa fa-2x">&times;</i></span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="mModalLabel">Shortcut Keys</h4>
            </div>
            <div class="modal-body" id="pr_popover_content">
                <table class="table table-bordered table-striped table-condensed table-hover" style="margin-bottom: 0px;">
                    <thead>
                    <tr>
                        <th>Shortcut Keys</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Ctrl+F3</td>
                        <td>Focus Add Item Input</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12" id="add_item"> Ctrl+F3</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ctrl+Shift+C</td>
                        <td>Customer Input</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12 addButton" id="customer"> Ctrl+Shift+C</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ctrl+F11</td>
                        <td>Toggle Categories Slider</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12 addButton open-category"> Ctrl+F11</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ctrl+F12</td>
                        <td>Toggle Subcategories Slider</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12 addButton open-subcategory"> Ctrl+F12</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ctrl+F1</td>
                        <td>Today's Sale</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12" id="today_profit" data-placement="bottom" data-html="true" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/today_sale" data-toggle="modal" data-target="#myModal"> Ctrl+F1</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ctrl+F10</td>
                        <td>Close Register</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12" id="close_register" data-placement="bottom" data-html="true" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/close_register" data-toggle="modal" data-target="#myModal"> Ctrl+F10</button>
                        </td>
                    </tr>
                    <tr>
                        <td>F1</td>
                        <td>Show Search Item</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12 addButton" id="search_details"> F1</button>
                        </td>
                    </tr>
                    <tr>
                        <td>F2</td>
                        <td>Product Unit</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12 addButton editor"> F2</button>
                        </td>
                    </tr>
                    <tr>
                        <td>F4</td>
                        <td>Cancel Sale</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12 addButton" id="clearData"> F4</button>
                        </td>
                    </tr>

                    <tr>
                        <td>F7</td>
                        <td>Room|Table Sale</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12 addButton open-suspend"> F7</button>
                        </td>
                    </tr>

                    <tr>
                        <td>F9</td>
                        <td>Print items list</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12 addButton" id="print_orders"> F9</button>
                        </td>
                    </tr>

                    <tr>
                        <td>F3</td>
                        <td>Print Bill</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12 addButton" id="print_bills"> F3</button>
                        </td>
                    </tr>

                    <tr>
                        <td>F8</td>
                        <td>Finalize Sale</td>
                        <td>
                            <button type="button" class="btn bdarkGreen col-md-12 addButton " id="paid-ment"> F8</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="dsModal" tabindex="-1" role="dialog" aria-labelledby="dsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="fa fa-2x">&times;</i></button>
                <h4 class="modal-title" id="dsModalLabel">Edit Order Discount</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="order_discount_input">Order Discount</label>                    <input type="text" name="order_discount_input" value=""  class="form-control kb-pad" id="order_discount_input" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="updateOrderDiscount" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="txModal" tabindex="-1" role="dialog" aria-labelledby="txModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="fa fa-2x">&times;</i></button>
                <h4 class="modal-title" id="txModalLabel">Edit Order Tax</h4>
            </div>

            <!--
            <div class="modal-body">
                <div class="form-group">
                    <label for="order_tax_input">Order Tax</label>                    <select name="order_tax_input" id="order_tax_input" class="form-control pos-input-tip" style="width:100%;" hello="aaaaaaa" >
<option value="" selected="selected"></option>
<option value="1">No Tax</option>
<option value="2">VAT @10%</option>
<option value="3">GST @6%</option>
<option value="4">VAT @20%</option>
<option value="5">TAX @10%</option>
</select>
                </div>

            </div>
			-->

            <div class="modal-body">
                <div class="form-group">
                    <label for="order_tax_input">Order Tax</label>					<select name="order_tax_input" id="order_tax_input" class="form-control pos-input-tip" style="width:100%;">
                        <option value="" selected="selected"></option>
                        <option value="1">No Tax</option>
                        <option value="2">VAT @10%</option>
                        <option value="3">GST @6%</option>
                        <option value="4">VAT @20%</option>
                        <option value="5">TAX @10%</option>
                    </select>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" id="updateOrderTax" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="b-footer" value="Thank you!">

<div class="modal fade in" id="susModal" tabindex="-1" role="dialog" aria-labelledby="susModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="fa fa-2x">&times;</i></button>
                <h4 class="modal-title" id="susModalLabel">Room|Table Sale</h4>
            </div>
            <div class="modal-body">
                <p>Please type reference note and submit to suspend this sale</p>

                <div class="form-group suspend-add">
                    <label for="reference_note">Reference Note</label>                    <input type="hidden" id="reference_note" class="form-control kb-text" value="" name="reference_note">
                </div>
                <div class="form-group">
                    <button class="btn-primary btn num_suspend" value="1" type="button">
                        <span>1</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="2" type="button">
                        <span>2</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="3" type="button">
                        <span>3</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="4" type="button">
                        <span>4</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="5" type="button">
                        <span>5</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="6" type="button">
                        <span>6</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="7" type="button">
                        <span>7</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="8" type="button">
                        <span>8</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="9" type="button">
                        <span>9</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="10" type="button">
                        <span>10</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="11" type="button">
                        <span>11</span>
                    </button>
                </div><div class="form-group">                        <button class="btn-primary btn num_suspend" value="12" type="button">
                        <span>12</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="13" type="button">
                        <span>13</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="14" type="button">
                        <span>14</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="15" type="button">
                        <span>15</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="16" type="button">
                        <span>16</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="17" type="button">
                        <span>17</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="18" type="button">
                        <span>18</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="19" type="button">
                        <span>19</span>
                    </button>
                    <button class="btn-primary btn num_suspend" value="20" type="button">
                        <span>20</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="suspend_sale" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
</form><div id="order_tbl_drink" style="display:none"> <span id="order_span_drink"></span>
    <table id="order-table-drink" class="prT table table-striped" style="margin-bottom:0;" width="100%"></table>
</div>
<div id="order_tbl_food" style="display:none"><span id="order_span_food"></span>
    <table id="order-table-food" class="prT table table-striped" style="margin-bottom:0;" width="100%"></table>
</div>
<div id="order_tbl" style="display:none"><span id="order_span"></span>
    <table id="order-table" class="prT table table-striped" style="margin-bottom:0;" width="100%"></table>
</div>
<div id="bill_tbl"><span id="bill_span"></span>
    <table id="bill-table" width="100%" class="prT table table-striped table-condensed receipt" style="margin-bottom:0;"></table>
    <table id="bill-total-table" class="prT table" style="margin-bottom:0;" width="100%"></table>
</div>
<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index:9999;"></div>

<div class="modal fade in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true"></div>

<div class="modal fade in" id="poslist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true"></div>
<div id="modal-loading" style="display: none;">
    <div class="blackbg"></div>
    <div class="loader"></div>
</div>
<script type="text/javascript">
    var site = {"base_url":"http:\/\/cloudnet-myanmar.com\/iCloudERP_v3_Production\/","settings":{"logo":"","logo2":"header_logo.png","site_name":"iCloudERP Software","language":"english","default_warehouse":"1","accounting_method":"2","default_currency":"USD","default_tax_rate":"1","rows_per_page":"10","version":"3.4","default_tax_rate2":"1","dateformat":"5","sales_prefix":"SALE","quote_prefix":"QUOTE","purchase_prefix":"PO","transfer_prefix":"TR","delivery_prefix":"DO","payment_prefix":"IPAY","return_prefix":"RE","expense_prefix":"EX","transaction_prefix":"J","stock_count_prefix":null,"project_plan_prefix":null,"adjust_cost_prefix":null,"item_addition":"0","theme":"default","product_serial":"0","default_discount":"1","product_discount":"1","discount_method":"1","tax1":"1","tax2":"1","overselling":"1","iwidth":"800","iheight":"800","twidth":"60","theight":"60","watermark":"0","smtp_host":"cloud--net.com","bc_fix":"4","auto_detect_barcode":"0","captcha":"0","reference_format":"1","racks":"1","attributes":"1","product_expiry":"0","purchase_decimals":"2","decimals":"2","qty_decimals":"2","decimals_sep":".","thousands_sep":",","invoice_view":"0","default_biller":"1","rtl":"0","each_spent":"10.0000","ca_point":"1","each_sale":"100.0000","sa_point":"1","sac":"0","display_all_products":"0","display_symbol":"0","symbol":"B","item_slideshow":"0","barcode_separator":"_","remove_expired":"0","sale_payment_prefix":"RV","purchase_payment_prefix":"PV","sale_loan_prefix":"LOAN","auto_print":"0","returnp_prefix":"PRE","alert_day":"7","convert_prefix":"CON","purchase_serial":"0","enter_using_stock_prefix":"ES","enter_using_stock_return_prefix":"ESR","supplier_deposit_prefix":"SDE","sale_order_prefix":"SAO","boms_method":"0","separate_code":"1","show_code":"1","bill_to":"0","show_po":"0","show_company_code":"1","purchase_order_prefix":"PAO","credit_limit":"0","purchase_request_prefix":"PQ","acc_cate_separate":"0","stock_deduction":null,"delivery":null,"authorization":null,"shipping":"0","separate_ref":null,"journal_prefix":null,"adjustment_prefix":null,"system_management":null,"table_item":null,"show_logo_invoice":"1","show_biller_name_invoice":"1","tax_prefix":null,"project_code_prefix":null,"customer_code_prefix":null,"supplier_code_prefix":null,"employee_code_prefix":null,"allow_change_date":null},"dateFormats":{"js_sdate":"dd\/mm\/yyyy","php_sdate":"d\/m\/Y","mysq_sdate":"%d\/%m\/%Y","js_ldate":"dd\/mm\/yyyy hh:ii","php_ldate":"d\/m\/Y H:i","mysql_ldate":"%d\/%m\/%Y %H:%i"}}, pos_settings = {"pos_id":"1","cat_limit":"22","pro_limit":"20","default_category":"1","default_customer":"2","default_biller":"1","display_time":"1","cf_title1":"GST Reg","cf_title2":"VAT Reg","cf_value1":"123456789","cf_value2":"987654321","receipt_printer":"BIXOLON SRP-350II","cash_drawer_codes":"x1C","focus_add_item":"Ctrl+F3","add_manual_product":"Ctrl+Shift+M","customer_selection":"Ctrl+Shift+C","add_customer":"Ctrl+Shift+A","toggle_category_slider":"Ctrl+F11","toggle_subcategory_slider":"Ctrl+F12","show_search_item":"F1","product_unit":"F2","cancel_sale":"F4","suspend_sale":"F7","print_items_list":"F9","print_bill":"F3","finalize_sale":"F8","today_sale":"Ctrl+F1","open_hold_bills":"Ctrl+F2","close_register":"Ctrl+F10","keyboard":"0","pos_printers":"BIXOLON SRP-350II, BIXOLON SRP-350II","java_applet":"0","product_button_color":"primary","tooltips":"0","paypal_pro":"0","stripe":"0","rounding":"0","char_per_line":"42","pin_code":null,"purchase_code":"cloud-net","envato_username":"53d35644-a36e-45cd-b7ee-8dde3a08f83d","version":"3.3","show_item_img":"1","pos_layout":"0","display_qrcode":"0","show_suspend_bar":"40","show_payment_noted":"1","payment_balance":"1","authorize":"0","show_product_code":"0","auto_delivery":"1","in_out_rate":"0","discount":"0.0000"}, user_layout = {"id":"1","last_ip_address":"103.197.107.250","ip_address":"\u0000\u0000","username":"owner","password":"06e6c33bfa4496ceceb8eff15f40ec726d8d2336","salt":"","email":"owner@cloudnet.com.kh","activation_code":"","forgotten_password_code":"","forgotten_password_time":null,"remember_code":"078c30f596fa50aa383a756752d503275fdc59c8","created_on":"1351661704","last_login":"1506500079","active":"1","first_name":"Own","last_name":"Owner","company":"ABC Shop","phone":"012345678","avatar":"","gender":"male","group_id":"1","warehouse_id":"","biller_id":null,"company_id":null,"show_cost":"0","show_price":"0","award_points":"165242","view_right":"0","edit_right":"0","allow_discount":"0","annualLeave":"0","sickday":"0","speacialLeave":null,"othersLeave":null,"first_name_kh":"","last_name_kh":"","nationality_kh":"","race_kh":"","pos_layout":null,"pack_id":"5","sales_standard":null,"sales_combo":null,"sales_digital":null,"sales_service":"1","sales_category":"","purchase_standard":null,"purchase_combo":null,"purchase_digital":null,"purchase_service":null,"purchase_category":"","date_of_birth":"1970-01-01","nationality":"Khmer","position":"","salary":"0.0000","spouse":"","number_of_child":"0","employeed_date":"2016-05-01","last_paid":"2016-12-09","address":"","note":"","emergency_contact":"","emp_code":"0012","allowance":"0.0000","emp_type":"","tax_salary_type":"","hide_row":"0","emp_group":null};
    var lang = {unexpected_value: 'Unexpected value provided!', select_above: 'Please select above first', r_u_sure: 'Are you sure?'};
</script>

<script type="text/javascript">
    var product_variant = 0, shipping = 0, p_page = 0, per_page = 0, tcp = "18",
        cat_id = "1", ocat_id = "1", sub_cat_id = 0, osub_cat_id,
        count = 1, an = 1, DT = 1,
        product_tax = 0, invoice_tax = 0, total_discount = 0, total = 0, total_paid = 0, grand_total = 0,
        KB = 0, tax_rates = [{"id":"1","name":"No Tax","code":"NT","rate":"0","type":"2"},{"id":"2","name":"VAT @10%","code":"VAT10","rate":"10","type":"1"},{"id":"3","name":"GST @6%","code":"GST","rate":"6","type":"1"},{"id":"4","name":"VAT @20%","code":"VT20","rate":"20","type":"1"},{"id":"5","name":"TAX @10%","code":"TAX","rate":"10","type":"1"}];
    var protect_delete = 0;
    //var audio_success = new Audio('http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/sounds/sound2.mp3');
    //var audio_error = new Audio('http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/sounds/sound3.mp3');
    var lang_total = 'Total', lang_items = 'Items', lang_discount = 'Discount', lang_tax2 = 'Order Tax', lang_total_payable = 'Total Payable';
    var java_applet = 0, order_data = '', bill_data = '';
    function widthFunctions(e) {
        var wh = $(window).height(),
            lth = $('#left-top').height(),
            lbh = $('#left-bottom').height();
        var bar_t = 0;
        ;
        ;
        $('#item-list').css("height", wh - bar_t - 140);
        $('#item-list').css("min-height", 515);
        ;
        ;
        $('#left-middle').css("height", wh - lth - lbh - bar_t - 100);
        $('#left-middle').css("min-height", 325);
        $('#product-list').css("height", wh - lth - lbh - bar_t - 105);
        ;
        $('#product-list').css("min-height", 320);
        $('#suspend-slider').css("height", wh - lth - lbh - bar_t - 100);
        $('#suspend-slider').css("min-height", 555);
        $('#suspend-list').css("height", wh - lth - lbh - bar_t - 105);
        $('#suspend-list').css("min-height", 550);

        ;
        ;
    }
    $(window).bind("resize", widthFunctions);

    $(document).ready(function () {

        $('#view-customer').click(function(){

            $('#myModal').modal({remote: site.base_url + 'customers/view/' + $("input[name=customer]").val()});
            $('#myModal').modal('show');
        });
        $('#pos-list').click(function(){
            $('#poslist').modal({remote: site.base_url + 'pos/pos_list/' + $("#poswarehouse").val()});
            $('#poslist').modal('show');
        });

        widthFunctions();

        if (!localStorage.getItem('poscustomer')) {
            localStorage.setItem('poscustomer', '2' );
        }
        if (!localStorage.getItem('postax2')) {
            localStorage.setItem('postax2', '1');
        }
        $('.select').select2({minimumResultsForSearch: 6});
        var cutomers = [{
            id: '2',
            text: 'Samet'
        }];
        $('#poscustomer').val(localStorage.getItem('poscustomer')).select2({
            minimumInputLength: 1,
            data: [],
            initSelection: function (element, callback) {
                $.ajax({
                    type: "get", async: false,
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/customers/getCustomer/" + $(element).val(),
                    dataType: "json",
                    success: function (data) {
                        callback(data[0]);
                    }
                });
            },
            ajax: {
                url: site.base_url + "customers/suggestions",
                dataType: 'json',
                quietMillis: 15,
                data: function (term, page) {
                    return {
                        term: term,
                        limit: 10
                    };
                },
                results: function (data, page) {
                    if (data.results != null) {
                        return {results: data.results};
                    } else {
                        return {results: [{id: '', text: 'No Match Found'}]};
                    }
                }
            }
        });

        if (KB) {
            display_keyboards();

            var result = false;
            $('#poscustomer').on('select2-opening', function () {
                $('.select2-input').addClass('kb-text');
                display_keyboards();
                $('.select2-input').bind('change.keyboard', function (e, keyboard, el) {
                    if (el && el.value != '' && el.value.length >= 4) {
                        $('.select2-input').addClass('select2-active');
                        $.ajax({
                            type: "get",
                            async: false,
                            url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/customers/suggestions/" + el.value,
                            dataType: "json",
                            success: function (res) {
                                if (res.results != null) {
                                    $('#poscustomer').select2({data: res}).select2('open');
                                    $('.select2-input').removeClass('select2-active');
                                    result = true;
                                } else {
                                    result = false;
                                }
                            }
                        });
                        if (!result) {
                            bootbox.alert('no_match_found');
                            $('#poscustomer').select2('close');
                            $('#test').click();
                        }
                    }
                });
            });

            $('#poscustomer').on('select2-close', function () {
                $('.select2-input').removeClass('kb-text');
                $('#test').click();
                $('select, .select').select2('destroy');
                $('select, .select').select2({minimumResultsForSearch: 6});
            });
            $(document).bind('click', '#test', function () {
                var kb = $('#test').keyboard().getkeyboard();
                kb.close();
                //kb.destroy();
                $('#add-item').focus();
            });

        }

        if(posbiller = localStorage.getItem('posbiller')){
            $("#posbiller").val(posbiller);
        }

        if(saleman = localStorage.getItem('saleman')){
            $('#saleman').val(saleman);
        }

        $('#posbiller').change(function(){
            $('#biller').val($(this).val());
            var id = $(this).val();
            $.ajax({
                url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/getReferenceByProject/pos/'+id,
                dataType: 'json',
                success: function(data){
                    $("#slref").val(data);
                    $("#temp_reference_no").val(data);
                    $("#reference_nob").val(data);
                    $("#slref").prop('readonly', true);
                }
            });
        });

        $('#saleman').change(function(){
            $('#saleman_1').val($(this).val());
        });

        $('#delivery_by').change(function(){
            $('#delivery_by_1').val($(this).val());
        });
        if(localStorage.getItem('delivery_by')){
            //$('#delivery_by').val(delivery_by);
        }

        $('#sale_status').live('change keyup paste', function() {
            $('#sale_status_1').val($(this).val());
        }).trigger('change');

        $(document).on('change', '#other_cur_paid', function () {
            $('.other_cur_paid').val($(this).val());
            $("#amount_1").trigger('change');
        });

        $('#paymentModal').on('change', '#amount_1', function (e) {
            $('#amount_val_1').val($(this).val());
        });
        $('#paymentModal').on('blur', '#amount_1', function (e) {
            $('#amount_val_1').val($(this).val());
        });

        $('#paymentModal').on('change', '#other_cur_paid_1', function (e) {
            $('#other_cur_paid_val_1').val($(this).val());
        });
        $('#paymentModal').on('blur', '#other_cur_paid_1', function (e) {
            $('#other_cur_paid_val_1').val($(this).val());
        });

        $('#paymentModal').on('select2-close', '#paid_by_1', function (e) {
            $('#paid_by_val_1').val($(this).val());

        });

        $('#paymentModal').on('select2-close', '#bank_account_1', function (e) {
            $('#bank_account_val_1').val($(this).val());

        });
        $('#paymentModal').on('change', '#pcc_no_1', function (e) {
            $('#cc_no_val_1').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_holder_1', function (e) {
            $('#cc_holder_val_1').val($(this).val());
        });
        $('#paymentModal').on('change', '#gift_card_no_1', function (e) {
            $('#paying_gift_card_no_val_1').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_month_1', function (e) {
            $('#cc_month_val_1').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_year_1', function (e) {
            $('#cc_year_val_1').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_type_1', function (e) {
            $('#cc_type_val_1').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_cvv2_1', function (e) {
            $('#cc_cvv2_val_1').val($(this).val());
        });
        $('#paymentModal').on('change', '#cheque_no_1', function (e) {
            $('#cheque_no_val_1').val($(this).val());
        });
        $('#paymentModal').on('change', '#voucher_no_1', function (e) {
            $('#voucher_no_val_1').val($(this).val());
        });
        $('#paymentModal').on('change', '#payment_note_1', function (e) {
            $('#payment_note_val_1').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_rate1_pos', function (e) {
            $('#depreciation_rate1_val_pos').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_term_pos', function (e) {
            $('#depreciation_term_val_pos').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_type_pos', function (e) {
            $('#depreciation_type_val_1').val($(this).val());
        });

        $('#paymentModal').on('change', '#amount_2', function (e) {
            $('#amount_val_2').val($(this).val());
        });
        $('#paymentModal').on('blur', '#amount_2', function (e) {
            $('#amount_val_2').val($(this).val());
        });

        $('#paymentModal').on('change', '#other_cur_paid_2', function (e) {
            $('#other_cur_paid_val_2').val($(this).val());
        });
        $('#paymentModal').on('blur', '#other_cur_paid_2', function (e) {
            $('#other_cur_paid_val_2').val($(this).val());
        });

        $('#paymentModal').on('select2-close', '#paid_by_2', function (e) {
            $('#paid_by_val_2').val($(this).val());

        });

        $('#paymentModal').on('select2-close', '#bank_account_2', function (e) {
            $('#bank_account_val_2').val($(this).val());

        });
        $('#paymentModal').on('change', '#pcc_no_2', function (e) {
            $('#cc_no_val_2').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_holder_2', function (e) {
            $('#cc_holder_val_2').val($(this).val());
        });
        $('#paymentModal').on('change', '#gift_card_no_2', function (e) {
            $('#paying_gift_card_no_val_2').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_month_2', function (e) {
            $('#cc_month_val_2').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_year_2', function (e) {
            $('#cc_year_val_2').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_type_2', function (e) {
            $('#cc_type_val_2').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_cvv2_2', function (e) {
            $('#cc_cvv2_val_2').val($(this).val());
        });
        $('#paymentModal').on('change', '#cheque_no_2', function (e) {
            $('#cheque_no_val_2').val($(this).val());
        });
        $('#paymentModal').on('change', '#voucher_no_2', function (e) {
            $('#voucher_no_val_2').val($(this).val());
        });
        $('#paymentModal').on('change', '#payment_note_2', function (e) {
            $('#payment_note_val_2').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_rate1_pos', function (e) {
            $('#depreciation_rate1_val_pos').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_term_pos', function (e) {
            $('#depreciation_term_val_pos').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_type_pos', function (e) {
            $('#depreciation_type_val_2').val($(this).val());
        });

        $('#paymentModal').on('change', '#amount_3', function (e) {
            $('#amount_val_3').val($(this).val());
        });
        $('#paymentModal').on('blur', '#amount_3', function (e) {
            $('#amount_val_3').val($(this).val());
        });

        $('#paymentModal').on('change', '#other_cur_paid_3', function (e) {
            $('#other_cur_paid_val_3').val($(this).val());
        });
        $('#paymentModal').on('blur', '#other_cur_paid_3', function (e) {
            $('#other_cur_paid_val_3').val($(this).val());
        });

        $('#paymentModal').on('select2-close', '#paid_by_3', function (e) {
            $('#paid_by_val_3').val($(this).val());

        });

        $('#paymentModal').on('select2-close', '#bank_account_3', function (e) {
            $('#bank_account_val_3').val($(this).val());

        });
        $('#paymentModal').on('change', '#pcc_no_3', function (e) {
            $('#cc_no_val_3').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_holder_3', function (e) {
            $('#cc_holder_val_3').val($(this).val());
        });
        $('#paymentModal').on('change', '#gift_card_no_3', function (e) {
            $('#paying_gift_card_no_val_3').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_month_3', function (e) {
            $('#cc_month_val_3').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_year_3', function (e) {
            $('#cc_year_val_3').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_type_3', function (e) {
            $('#cc_type_val_3').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_cvv2_3', function (e) {
            $('#cc_cvv2_val_3').val($(this).val());
        });
        $('#paymentModal').on('change', '#cheque_no_3', function (e) {
            $('#cheque_no_val_3').val($(this).val());
        });
        $('#paymentModal').on('change', '#voucher_no_3', function (e) {
            $('#voucher_no_val_3').val($(this).val());
        });
        $('#paymentModal').on('change', '#payment_note_3', function (e) {
            $('#payment_note_val_3').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_rate1_pos', function (e) {
            $('#depreciation_rate1_val_pos').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_term_pos', function (e) {
            $('#depreciation_term_val_pos').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_type_pos', function (e) {
            $('#depreciation_type_val_3').val($(this).val());
        });

        $('#paymentModal').on('change', '#amount_4', function (e) {
            $('#amount_val_4').val($(this).val());
        });
        $('#paymentModal').on('blur', '#amount_4', function (e) {
            $('#amount_val_4').val($(this).val());
        });

        $('#paymentModal').on('change', '#other_cur_paid_4', function (e) {
            $('#other_cur_paid_val_4').val($(this).val());
        });
        $('#paymentModal').on('blur', '#other_cur_paid_4', function (e) {
            $('#other_cur_paid_val_4').val($(this).val());
        });

        $('#paymentModal').on('select2-close', '#paid_by_4', function (e) {
            $('#paid_by_val_4').val($(this).val());

        });

        $('#paymentModal').on('select2-close', '#bank_account_4', function (e) {
            $('#bank_account_val_4').val($(this).val());

        });
        $('#paymentModal').on('change', '#pcc_no_4', function (e) {
            $('#cc_no_val_4').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_holder_4', function (e) {
            $('#cc_holder_val_4').val($(this).val());
        });
        $('#paymentModal').on('change', '#gift_card_no_4', function (e) {
            $('#paying_gift_card_no_val_4').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_month_4', function (e) {
            $('#cc_month_val_4').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_year_4', function (e) {
            $('#cc_year_val_4').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_type_4', function (e) {
            $('#cc_type_val_4').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_cvv2_4', function (e) {
            $('#cc_cvv2_val_4').val($(this).val());
        });
        $('#paymentModal').on('change', '#cheque_no_4', function (e) {
            $('#cheque_no_val_4').val($(this).val());
        });
        $('#paymentModal').on('change', '#voucher_no_4', function (e) {
            $('#voucher_no_val_4').val($(this).val());
        });
        $('#paymentModal').on('change', '#payment_note_4', function (e) {
            $('#payment_note_val_4').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_rate1_pos', function (e) {
            $('#depreciation_rate1_val_pos').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_term_pos', function (e) {
            $('#depreciation_term_val_pos').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_type_pos', function (e) {
            $('#depreciation_type_val_4').val($(this).val());
        });

        $('#paymentModal').on('change', '#amount_5', function (e) {
            $('#amount_val_5').val($(this).val());
        });
        $('#paymentModal').on('blur', '#amount_5', function (e) {
            $('#amount_val_5').val($(this).val());
        });

        $('#paymentModal').on('change', '#other_cur_paid_5', function (e) {
            $('#other_cur_paid_val_5').val($(this).val());
        });
        $('#paymentModal').on('blur', '#other_cur_paid_5', function (e) {
            $('#other_cur_paid_val_5').val($(this).val());
        });

        $('#paymentModal').on('select2-close', '#paid_by_5', function (e) {
            $('#paid_by_val_5').val($(this).val());

        });

        $('#paymentModal').on('select2-close', '#bank_account_5', function (e) {
            $('#bank_account_val_5').val($(this).val());

        });
        $('#paymentModal').on('change', '#pcc_no_5', function (e) {
            $('#cc_no_val_5').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_holder_5', function (e) {
            $('#cc_holder_val_5').val($(this).val());
        });
        $('#paymentModal').on('change', '#gift_card_no_5', function (e) {
            $('#paying_gift_card_no_val_5').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_month_5', function (e) {
            $('#cc_month_val_5').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_year_5', function (e) {
            $('#cc_year_val_5').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_type_5', function (e) {
            $('#cc_type_val_5').val($(this).val());
        });
        $('#paymentModal').on('change', '#pcc_cvv2_5', function (e) {
            $('#cc_cvv2_val_5').val($(this).val());
        });
        $('#paymentModal').on('change', '#cheque_no_5', function (e) {
            $('#cheque_no_val_5').val($(this).val());
        });
        $('#paymentModal').on('change', '#voucher_no_5', function (e) {
            $('#voucher_no_val_5').val($(this).val());
        });
        $('#paymentModal').on('change', '#payment_note_5', function (e) {
            $('#payment_note_val_5').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_rate1_pos', function (e) {
            $('#depreciation_rate1_val_pos').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_term_pos', function (e) {
            $('#depreciation_term_val_pos').val($(this).val());
        });
        $('#paymentModal').on('change', '#depreciation_type_pos', function (e) {
            $('#depreciation_type_val_5').val($(this).val());
        });

        $('#payment').click(function () {
            var GP = '';
            var Owner = '1';
            var Admin = '';
            var user_log = '1';

            if(localStorage.getItem('addre')){
                $("#sale_note").attr("value", localStorage.getItem('addre'));
                var nott = $("#sale_note").val();
                localStorage.setItem('nott',nott);
            }

            if(Owner || Admin || (GP == 1)){
                var twt = formatDecimal((total + total_tax) - order_discount);
                if (an == 1) {
                    bootbox.alert('Please add product before payment. Thank you!');
                    return false;
                }
                gtotal = formatDecimal(twt);
                $('#twt').text(formatMoney(gtotal));
                $('#quick-payable').text(gtotal);
                $('#payable_amount').val(gtotal);
                $('#product_note').val($('#get_not').text());
                $('#item_count').text(count - 1);
                $('.item_count').text(count - 1);
                $('#paymentModal').appendTo("body").modal('show');
                $('input[type="checkbox"],[type="radio"]').not('.skip').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
                $("#posbiller").trigger("change");
                //$('.currencies_payment').focus();
                $("#date").trigger('change');
                $("#saleman").trigger('change');
                $("#delivery_by").trigger('change');


                autoCalcurrencies(gtotal);
            }else{
                var val = '';
                $('.sdiscount').each(function(){
                    var value = $(this).val();
                    if(value != 0){
                        val = value;
                    }

                });
                if(val == 0){
                    var twt = formatDecimal((total + invoice_tax) - order_discount);
                    if (an == 1) {
                        bootbox.alert('Please add product before payment. Thank you!');
                        return false;
                    }
                    gtotal = formatDecimal(twt);
                    $('#twt').text(formatMoney(gtotal));
                    $('#quick-payable').text(gtotal);
                    $('#payable_amount').val(gtotal);
                    $('#product_note').val($('#get_not').text());
                    $('#item_count').text(count - 1);
                    $('.item_count').text(count - 1);
                    $('#paymentModal').appendTo("body").modal('show');
                    $('input[type="checkbox"],[type="radio"]').not('.skip').iCheck({
                        checkboxClass: 'icheckbox_square-blue',
                        radioClass: 'iradio_square-blue',
                        increaseArea: '20%' // optional
                    });

                    $("#posbiller").trigger("change");
                    //$('.currencies_payment').focus();
                    $("#date").trigger('change');
                    $("#saleman").trigger('change');
                    $("#delivery_by").trigger('change');

                    autoCalcurrencies(gtotal);
                }else{
                    bootbox.prompt("Please insert password", function(result){
                        $.ajax({
                            type: 'get',
                            url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/auth/checkPassDiscount',
                            dataType: "json",
                            data: {
                                password: result
                            },
                            success: function (data) {
                                if(data == 1){
                                    var twt = formatDecimal((total + invoice_tax) - order_discount);
                                    if (an == 1) {
                                        bootbox.alert('Please add product before payment. Thank you!');
                                        return false;
                                    }
                                    gtotal = formatDecimal(twt);
                                    $('#twt').text(formatMoney(gtotal));
                                    $('#quick-payable').text(gtotal);
                                    $('#payable_amount').val(gtotal);
                                    $('#product_note').val($('#get_not').text());
                                    $('#item_count').text(count - 1);
                                    $('.item_count').text(count - 1);
                                    $('#paymentModal').appendTo("body").modal('show');
                                    $('input[type="checkbox"],[type="radio"]').not('.skip').iCheck({
                                        checkboxClass: 'icheckbox_square-blue',
                                        radioClass: 'iradio_square-blue',
                                        increaseArea: '20%' // optional
                                    });

                                    $("#posbiller").trigger("change");
                                    //$('.currencies_payment').focus();
                                    $("#date").trigger('change');
                                    $("#saleman").trigger('change');
                                    $("#delivery_by").trigger('change');

                                    autoCalcurrencies(gtotal);
                                }else{
                                    alert('Incorrect passord');
                                }
                            }
                        });
                    });
                }
            }
            $('#pos_note').val(localStorage.getItem('address'));
            $('#sale_note').text(localStorage.getItem('address'));
        });

        $("#payment").bind('keypress', function(){
            $('#amount_1').focus();
        });

        function autoCalcurrencies(total_p){
            $(".curr_tpay").each(function(){
                var rate = $(this).attr('rate');
                $(this).html((total_p*rate).toFixed(0));
            });
        }

        function autoCalremain(total_p){
            $(".curr_remain").each(function(){
                var rate = $(this).attr('rate');
                if(total_p != 0){
                    $(this).html(formatDecimal((parseFloat(total_p)*rate).toFixed(0)));
                }else{
                    $(this).html('0');
                }
            });
            $(".curr_remain_1").each(function(){
                var rate = $(this).attr('rate');
                var ch = (total_p).toFixed(4);
                var str = ch.split('.');
                var dot_cash = '0.'+str[1];
                if(parseFloat(dot_cash) != 0){
                    $(this).html(formatDecimal((parseFloat(dot_cash)*rate).toFixed(0)));
                }else{
                    $(this).html('0');
                }
            });
        }

        function autoCalchange(total_p){
            $(".curr_change").each(function(){
                var rate = $(this).attr('rate');
                if(total_p != 0){
                    $(this).html((parseFloat(total_p)*rate).toFixed(0));
                }else{
                    $(this).html('0');
                }
            });
            $(".curr_change_1").each(function(){
                var rate = $(this).attr('rate');
                var ch = (total_p).toFixed(4);
                var str = ch.split('.');
                var dot_cash = '0.'+str[1];
                if(parseFloat(dot_cash) != 0){
                    $(this).html((parseFloat(dot_cash) * rate).toFixed(0));
                }else{
                    $(this).html('0');
                }
            });
        }

        function other_curr_paid_2_us(){
            var total_other_paid = 0;
            $(".currencies_payment").each(function(){
                var rate = $(this).attr('rate');
                var paid = $(this).val()-0;
                if(paid != '' || Number(paid)){
                    total_other_paid += (paid/rate);
                }
            });
            return total_other_paid;
        }
//////////////
        function grandtotalval(cls=""){
            var gtotal = 0;
            $("."+cls).each(function(){
                gtotal+=parseFloat($(this).val()-0);
            });
            return gtotal;
        }
        ///////////////
        var pi = 'amount_1', pa = 2;
        $(document).on('click', '.quick-cash', function () {
            var $quick_cash = $(this);
            var amt = $quick_cash.contents().filter(function () {
                return this.nodeType == 3;
            }).text();
            var th = site.settings.thousands_sep == 0 ? '' : site.settings.thousands_sep;
            var dollar_pi = $('#' + pi);
            var total_amount = $('#payable_amount').val()-0;
            amt = formatDecimal(amt.split(th).join("")) * 1 + dollar_pi.val() * 1;

            var balance = total_amount - amt;

            if(balance > 0){
                autoCalremain(balance);
                autoCalchange(0);
                $('#remain').text(formatMoney(balance));
                $('#change').text('0.00');
            }else if(balance < 0){
                balance = balance * (-1);
                autoCalremain(0);
                autoCalchange(balance);
                $('#change').text(formatMoney(balance));
                $('#remain').text('0.00');
            }else{
                autoCalremain(0);
                autoCalchange(0);
                $('#change').text('0.00');
                $('#remain').text('0.00');
            }

            //$('#amount_1').val(formatDecimal(amt));
            dollar_pi.val(formatDecimal(amt)).focus();
            var note_count = $quick_cash.find('span');
            if (note_count.length == 0) {
                $quick_cash.append('<span class="badge">1</span>');
            } else {
                note_count.text(parseInt(note_count.text()) + 1);
            }
        });

        $(document).on('click', '#clear-cash-notes', function () {
            $('.quick-cash').find('.badge').remove();
            $('#' + pi).val('0').focus();
            // set balance to zero when clear cash
            $('#balance, .curr_balance, .currencies_payment').html('0');
        });

        $(document).on('change', '.gift_card_no', function () {
            var cn = $(this).val() ? $(this).val() : '';
            var payid = $(this).attr('id'),
                id = payid.substr(payid.length - 1);
            if (cn != '') {
                $.ajax({
                    type: "get", async: false,
                    url: site.base_url + "sales/validate_gift_card/" + cn,
                    dataType: "json",
                    success: function (data) {
                        if (data === false) {
                            $('#gift_card_no_' + id).parent('.form-group').addClass('has-error');
                            bootbox.alert('Member card number is incorrect or expired.');
                        } else if (data.customer_id !== null && data.customer_id !== $('#poscustomer').val()) {
                            $('#gift_card_no_' + id).parent('.form-group').addClass('has-error');
                            bootbox.alert('Member card number is not for this customer.');
                        } else {
                            $('#gc_details_' + id).html('<small>Card No: ' + data.card_no + '<br>Value: ' + data.value + ' - Balance: ' + data.balance + '</small>');
                            $('#gift_card_no_' + id).parent('.form-group').removeClass('has-error');
                            //calculateTotals();
                            $('#amount_' + id).val(data.balance).focus();
                        }
                    }
                });
            }
        });

        $(document).on('click', '.addButton', function () {
            if (pa <= 5) {
                $('#paid_by_1, #pcc_type_1, #bank_account_1').select2('destroy');
                var phtml = $('#payments').html(), update_html = phtml.replace(/_1/g, '_' + pa);
                pi = 'amount_' + pa;
                $('#multi-payment').append('<button type="button" class="close close-payment" style="margin: -10px 0px 0 0;"><i class="fa fa-2x">&times;</i></button>' + update_html);
                $('#paid_by_1, #pcc_type_1, #bank_account_1, #paid_by_' + pa + ', #pcc_type_' + pa, '#other_cur_paid_' + pa, '#bank_account_' + pa).select2({minimumResultsForSearch: 6});
                $('select').select2();
                read_card();
                pa++;
            } else {
                bootbox.alert('Max allowed limit reached.');
                return false;
            }
            $('#paymentModal').css('overflow-y', 'scroll');
        });

        $(document).on('click', '.close-payment', function () {
            $(this).next().remove();
            $(this).next().remove();
            $(this).remove();
            pa--;
        });

        $(".calExchangerate").on('focus', function(){
            var amount = $(this).val();
            var ownRate = $(this).attr('rate');
            calExchangerate(amount, ownRate);
        });

        function calExchangerate(amount, ownRate){
            $(".calExchangerate").each(function(i){
                var rate = $(this).attr('rate');
                if(ownRate != rate){
                    if(ownRate > 1 && rate == 1){
                        var ex = formatMoney(amount/ownRate);
                        $(this).val(ex);
                    }else{
                        var ex = formatMoney(amount*rate);
                        $(this).val(ex);
                    }
                }
            });
        }
        $(".num_suspend").click(function(){
            $(".suspend-add input").val($(this).val());
        });
        // function calculate payment when we focus payment button.
        $(document).on('focus keyup paste', '.amount, .currencies_payment', function () {
            pi = $(this).attr('id');
            calculateTotals();
        }).on('blur', '.amount, .currencies_payment', function () {
            calculateTotals();
        });
        function calculateTotals() {
            var other_curr_amt = 0;
            var total_paying = 0;
            var ia = $(".amount");
            $.each(ia, function (i) {
                total_paying += parseFloat($(this).val());
            });

            $(".currencies_payment").each(function(i){
                other_curr_amt += parseFloat(($(this).val() / $(this).attr('rate')));
                if(other_curr_amt > 0){total_paying += parseFloat(other_curr_amt);}
            });
            if(other_curr_amt > 0){$('.other_cur_paid').val($(".currencies_payment").val());}

            $('#total_paying').text(formatMoney(total_paying));
            $(".curr_total_p").each(function(i){
                var rate = $(this).attr('rate');
                if(!isNaN(total_paying)){
                    var t = formatMoney(total_paying * rate);
                    $(this).html(t);
                }else{
                    $(this).html(formatMoney(0));
                }
            });
            $('#amt_balance').text(formatMoney(total_paying - gtotal));
            $('#balance' + pi).val(formatDecimal(total_paying - gtotal));
            $(".curr_balance").each(function(i){
                var rate = $(this).attr('rate');
                if(!isNaN(total_paying)){
                    var b = formatMoney((total_paying -gtotal) * rate);
                    $(this).html(b);
                    b = b.replace('-', '');
                    //$("#other_cur_paid").val(b);
                }else{
                    //$(this).html(formatMoney(0));
                    //$("#other_cur_paid").val('');
                }
            });
            total_paid = total_paying;
            grand_total = gtotal;
        }

        $("#add_item").autocomplete({
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#add_item').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('Please select above first');
                    //response('');
                    $('#add_item').focus();
                    return false;
                }
                var test = request.term;
                if($.isNumeric(test)){
                    $.ajax({
                        type: 'get',
                        url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/suggests',
                        dataType: "json",
                        data: {
                            term: request.term,
                            warehouse_id: $("#poswarehouse").val(),
                            customer_id: $("#poscustomer").val()
                        },
                        success: function (data) {
                            response(data);


                        }
                    });
                }else{
                    $.ajax({
                        type: 'get',
                        url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/suggestions',
                        dataType: "json",
                        data: {
                            term: request.term,
                            warehouse_id: $("#poswarehouse").val(),
                            customer_id: $("#poscustomer").val()
                        },
                        success: function (data) {
                            response(data);

                        }
                    });
                }

            },
            minLength: 1,
            autoFocus: false,
            delay: 300,
            response: function (event, ui) {

                if ($(this).val().length >= 16 && ui.content[0].id == 0)
                {
                    //audio_error.play();
                    /* bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                        $('#add_item').focus();
                    });*/
                    $(this).val('');
                }
                else if (ui.content.length == 1 && ui.content[0].id != 0) {
                    ui.item = ui.content[0];
                    $(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
                    $(this).autocomplete('close');
                }
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    //audio_error.play();
                    /* bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                        $('#add_item').focus();
                    }); */
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                /*********add autocomplete prepend item*******/
                var susp_id = $('#suspend_id').val();
                var table_no = $('#table_no').val();
                var item_row = $('#posTable tbody tr').length;
                wh = $('#poswarehouse').val(),
                    cu = $('#poscustomer').val();
                var subtotal = $('#total').html();
                var code = ui.item.row.code;
                $.ajax({
                    type: "get",
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/getProductDataByCode",
                    data: { code: code, warehouse_id: wh, customer_id: cu, suspend_id: susp_id, item_rows: item_row, sub_total: subtotal},
                    dataType: "json",
                    success: function (data) {
                        if (data !== null) {
                            var item_id  = data['item_id'];
                            var image    = "http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/"+data['image'];
                            var title    = data['row']['name'];
                            var code     = data['row']['code'];
                            var total    = data['sub_total'];
                            /* zz */

                            var item ='<button id="'+code+'" type="button" value="'+code+'" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="'+title+'"><img src="'+image+'" alt="'+title+'" style="width: 60px; height: 60px;" class="img-rounded"/><span>'+title+'</span></button>';

                            $('#product-sale-view').prepend(item);
                            /*var suspend_html ='<button id="p' + item_id + ' ' +code+'" type="button" value="'+code+'" title="'+title+' ('+ui.item.row.code+')" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="'+title+'"><img src="'+image+'" alt="'+title+'" style="width: 60px; height: 60px;" class="img-rounded"/><span>'+title.substring(0,15)+'...('+formatMoney(ui.item.row.price)+')</span></button>';
							$('#product-sale-view').prepend(suspend_html); */
                        }
                    }
                });
                /*********add autocomplete prepend item********/
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);
                    if (row)
                        $(this).val('');
                } else {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                    $('#add_item').focus();
                    $(this).val('');
                }
            }


        });


        $(document.body).bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $('#add_item').focus();
            }
        });



        $('#product-list, #suspend-slider, #category-list, #subcategory-list, #suspend-list, .scroll_F').perfectScrollbar({suppressScrollX: true});
        $('select, .select').select2({minimumResultsForSearch: 6});
        $('.rquantity').focusout(function(){
            alert(2);
        });


        $(document).on('click', '.product', function (e) {
            $('#modal-loading').show();
            var susp_id = $('#suspend_id').val();
            var table_no = $('#table_no').val();
            var item_row = $('#posTable tbody tr').length;
            code = $(this).val(),
                wh = $('#poswarehouse').val(),
                cu = $('#poscustomer').val();
            var subtotal = $('#total').html();

            $.ajax({
                type: "get",
                url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/getProductDataByCode",
                data: {code: code, warehouse_id: wh, customer_id: cu, suspend_id: susp_id, item_rows: item_row, sub_total: subtotal},
                dataType: "json",
                success: function (data) {
                    //alert(JSON.stringify(data));
                    e.preventDefault();
                    if (data !== null) {
                        var item_id = data['item_id'];
                        var image = "http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/"+data['image'];
                        var title = data['row']['name'];
                        var code = data['row']['code'];
                        var total = data['sub_total'];
                        var item_price = data['item_price'];
                        var qty = 0;
                        qty += data['row']['qty'];


                        /*******Addition*******/
                        var arr = [];
                        var arr_qty = qty;
                        var condition = true;
                        $.each($("#product-sale-view button"),function(i,e){
                            arr.push($(this).attr("id"));
                        });

                        $.each(arr,function(i,e){
                            if(code == e){
                                condition = false;
                                var c_qty = $("#"+e).children("span").find(".qty").text();
                                arr_qty = Number(c_qty)+Number(qty);
                                $("#"+e).children("span").find(".qty").text(arr_qty);
                            }
                        })

                        var item ='<button id="'+code+'" type="button" value="'+code+'" title="'+title+'" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="'+title+'"><img src="'+image+'" alt="'+title+'" style="width: 60px; height: 60px;" class="img-rounded"/><span>Qty :<i class="qty">'+(arr_qty)+'</i> ($ '+item_price+') '+title+'</span></button>';

                        var suspend_html = '<p> '+ table_no +'</p>';
                        suspend_html += '<div class="sup_number'+susp_id+'">('+(item_row+1)+')</div>';
                        suspend_html += '<br/>'+formatMoney(total);
                        $('.wrap_suspend'+susp_id).html(suspend_html);
                        if(condition == true){
                            $('#product-sale-view').prepend(item);
                        }
                        /*******Addition*******/

                        add_invoice_item(data);
                        $('#modal-loading').hide();
                    } else {
                        //audio_error.play();
                        bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                        $('#modal-loading').hide();
                    }
                }
            });
        });

        $(document).on('click', '.category', function () {

            if (cat_id != $(this).val()) {
                $('#box-item').remove();
                $('#box-item #box-item').remove();
                $('#open-category').click();
                $('#modal-loading').show();
                cat_id = $(this).val();
                $.ajax({
                    type: "get",
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/ajaxcategorydata",
                    data: {category_id: cat_id},
                    dataType: "json",
                    success: function (data) {
                        $('#slide_item').hide();
                        var newPrs = $('<div id=box-item ></div>');
                        newPrs.html(data.products);
                        newPrs.appendTo("#item-list");
                        $('#subcategory-list').empty();
                        var newScs = $('<div></div>');
                        newScs.html(data.subcategories);
                        newScs.appendTo("#subcategory-list");
                        tcp = data.tcp;
                    }
                }).done(function () {
                    p_page = 'n';
                    $('#category-' + cat_id).addClass('active');
                    $('#category-' + ocat_id).removeClass('active');
                    ocat_id = cat_id;
                    $('#modal-loading').hide();
                    var exist_slider= $('#check-slider-exist').text();
                    if(exist_slider==5){
                        $('.btn_gift_card').show();
                    }
                });
            }
        });
        $('#category-' + cat_id).addClass('active');

        $(document).on('click', '.subcategory', function () {

            if (sub_cat_id != $(this).val()) {
                $('#box-item').remove();
                $('#box-item #box-item').remove();
                $('#open-subcategory').click();
                $('#modal-loading').show();
                sub_cat_id = $(this).val();
                $.ajax({
                    type: "get",
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/ajaxproducts",
                    data: {category_id: cat_id, subcategory_id: sub_cat_id, per_page: p_page},
                    dataType: "html",
                    success: function (data) {
                        $('#slide_item').hide();
                        var newPrs = $('<div id=box-item ></div>');
                        newPrs.html(data);
                        newPrs.appendTo("#item-list");
                    }
                }).done(function () {
                    p_page = 'n';
                    $('#subcategory-' + sub_cat_id).addClass('active');
                    $('#subcategory-' + osub_cat_id).removeClass('active');
                    $('#modal-loading').hide();
                });
            }
        });

        $('#next').click(function () {
            if (p_page == 'n') {
                p_page = 0
            }
            p_page = p_page + 20;
            if (tcp >= 20 && p_page < tcp) {
                $('#box-item').remove();
                $('#box-item #box-item').remove();
                $('#modal-loading').show();
                $.ajax({
                    type: "get",
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/ajaxproducts",
                    data: {category_id: cat_id, subcategory_id: sub_cat_id, per_page: p_page},
                    dataType: "html",
                    success: function (data) {
                        $('#slide_item').hide();
                        var newPrs = $('<div id=box-item ></div>');
                        newPrs.html(data);
                        newPrs.appendTo("#item-list");
                    }
                }).done(function () {
                    $('#modal-loading').hide();
                });
            } else {
                p_page = p_page - 20;
            }
        });

        $('#previous').click(function () {
            if (p_page == 'n') {
                p_page = 0;
            }
            if (p_page != 0) {
                $('#box-item').remove();
                $('#box-item #box-item').remove();
                $('#modal-loading').show();
                p_page = p_page - 20;
                if (p_page == 0) {
                    p_page = 'n'
                }
                $.ajax({
                    type: "get",
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/ajaxproducts",
                    data: {category_id: cat_id, subcategory_id: sub_cat_id, per_page: p_page},
                    dataType: "html",
                    success: function (data) {
                        $('#slide_item').hide();
                        var newPrs = $('<div id=box-item ></div>');
                        newPrs.html(data);
                        newPrs.appendTo("#item-list");
                    }

                }).done(function () {
                    $('#modal-loading').hide();
                });

            }
        });

        $('#print_depre').click(function () {
            PopupPayments();
        });
        $('#export_depre').click(function () {
            var customer_id = $('#poscustomer').val();
            var customer_name = '';
            var customer_address = '';
            var customer_tel ='';
            var customer_mail = '';

            $.ajax({
                type: "get",
                url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/getCustomerInfo",
                data: {customer_id: customer_id},
                dataType: "html",
                async: false,
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    customer_name = obj.company;
                    customer_address = obj.address+', '+obj.city+', '+obj.state;
                    customer_tel = obj.phone;
                    customer_mail = obj.email;
                }
            });
            var issued_date = $('.current_date').val();
            var myexport = '<tbody>';
            myexport+= 		'<tr><td colspan="7" style="vertical-align:middle;"><center><h4 style="font-family:Verdana,Geneva,sans-serif; font-weight:bold;">Loan Amortization Schedule</h4></center></td></tr>';
            myexport+=		'<tr>';
            myexport+=			'<td colspan="2" width="25%"  style="padding-left:50px;">issued date</td>';
            myexport+=			'<td colspan="2" width="25%">: '+ issued_date +'</td>';
            myexport+=			'<td colspan="3" width="50%">&nbsp;</td>';
            myexport+=		'</tr>';
            myexport+=		'<tr>';
            myexport+=			'<td colspan="2" style="padding-left:50px;">Customer</td>';
            myexport+=			'<td colspan="2">: '+ customer_name +'</td>';
            myexport+=			'<td style="text-align:right; padding-right:30px;">Address</td>';
            myexport+=			'<td colspan="2">: '+ customer_address +'</td>';
            myexport+=		'</tr>'+
                '<tr>'+
                '<td colspan="2" style="padding-left:50px;">Tel</td>'+
                '<td colspan="2">: '+ customer_tel +'</td>'+
                '<td style="text-align:right; padding-right:30px;">Email</td>'+
                '<td colspan="2">: '+ customer_mail +'</td>'+
                '</tr>';
            myexport+=		'<tr style="height:50px; vertical-align:middle;">'+
                '<th class="td_bor_style">No</th>'+
                '<th class="td_bor_style td_align_center">item code</th>'+
                '<th colspan="2" class="td_bor_style">Description</th>'+
                '<th class="td_bor_style">Unit Price</th>'+
                '<th class="td_bor_style">Qty</th>'+
                '<th class="td_bor_botton">Amount</th>'+
                '</tr>';
            var type = $('#depreciation_type_1').val();
            var no = 0;
            var total_amt = 0;
            var total_amount = $('#quick-payable').text()-0;
            var rate_kh = $('#other_cur_paid').attr('rate')-0;
            var kh_down = $('#other_cur_paid').val()-0;
            var kh_2_us = kh_down/rate_kh;
            var us_down = $('#amount_1').val()-0;
            var down_pay = kh_2_us + us_down;
            var interest_rate = formatDecimal($('#depreciation_rate_1').val()-0);
            var term_ = formatDecimal($('#depreciation_term_1').val()-0);
            var counter = 0;
            var items = $('.edit').length;
            $('.edit').each(function(){
                if(counter < items-1){
                    no += 1;
                    var parent = $(this).parent().parent();
                    var unit_price = parent.find('.realuprice').val();
                    var qtt = parent.find('.rquantity').val();
                    var amt = unit_price * qtt;
                    total_amt += amt;
                    myexport +=	'<tr>'+
                        '<td class="td_color_light td_align_center" align="center">'+ no +'</td>'+
                        '<td class="td_color_light">'+ parent.find('.rcode').val() +'</td>'+
                        '<td colspan="2" class="td_color_light td_align_center">'+ parent.find('.rname').val() +'</td>'+
                        '<td class="td_color_light td_align_right" align="right">$ &nbsp;'+ formatMoney(unit_price) +'</td>'+
                        '<td class="td_color_light" align="right">'+ qtt +'</td>'+
                        '<td class="td_color_bottom_light td_align_right" align="right">$ &nbsp;'+ formatMoney(amt) +'</td>'+
                        '</tr>';
                }
                counter += 1;
            });
            var loan_amount = total_amt;
            //if(type != 4){
            loan_amount = total_amt - down_pay;
            //}
            if(down_pay != 0 || down_pay != ''){
                myexport+=			'<tr>'+
                    '<td colspan="6" style="text-align:right; padding:5px;">Total Amount</td>'+
                    '<td class="td_align_right" align="right"><b>$ &nbsp;'+ formatMoney(total_amt) +'</b></td>'+
                    '</tr>';
                myexport+=			'<tr>'+
                    '<td colspan="6" style="text-align:right; padding:5px;">Down Payment</td>'+
                    '<td class="td_align_right" align="right"><b>$ &nbsp;'+ formatMoney(down_pay) +'</b></td>'+
                    '</tr>';
            }
            myexport+=			'<tr>'+
                '<td colspan="6" style="text-align:right; padding:5px;">Loan Amount</td>'+
                '<td class="td_align_right" align="right"><b>$ &nbsp;'+ formatMoney(loan_amount) +'</b></td>'+
                '</tr>'+
                '<tr>'+
                '<td colspan="6" style="text-align:right; padding:5px;">Interest Rate/Month</td>'+
                '<td class="td_align_right" align="right"><b>'+ formatMoney(interest_rate/12) +'&nbsp; %</b></td>'+
                '</tr>';
            myexport+=			'<tr><td colspan="7" style="height:70px; vertical-align:middle; text-align:center; font-weight:bold; font-size:14px;">Payment Term</td></tr>';
            myexport+=			'<tr style="height:50px; vertical-align:middle;">'+
                '<th width="10%" class="td_bor_style">Pmt No.</th>'+
                '<th width="15%" class="td_bor_style">Payment Date</th>';
            if(type == 2){
                myexport+=				'<th width="10%" class="td_bor_style">Rate</th>';
                myexport+=				'<th width="10%" class="td_bor_style">Percentage</th>';
                myexport+=				'<th width="10%" class="td_bor_style">Payment</th>'+
                    '<th width="15%" class="td_bor_style">Total Payment</th>';
            }else{
                myexport+=				'<th width="10%" class="td_bor_style">Interest</th>'+
                    '<th width="10%" class="td_bor_style">principle</th>'+
                    '<th width="15%" class="td_bor_style">Total Payment</th>';
            }
            myexport+=				'<th width="10%" class="td_bor_style">Balance</th>'+
                '<th width="25%" class="td_bor_botton">Note</th>'+
                '</tr>';
            var k = 0;
            var total_interest = 0;
            var total_princ = 0;
            var amount_total_pay = 0;
            var total_pay_ = 0;
            $('.dep_tbl .no').each(function(){
                k += 1;
                var tr = $(this).parent().parent();
                var balance = formatMoney(tr.find('.balance').val()-0);
                if(type == 2){
                    total_interest += formatDecimal(tr.find('.rate').val()-0);
                    total_princ += formatDecimal(tr.find('.percentage').val()-0);
                    amount_total_pay += formatDecimal(tr.find('.total_payment').val()-0);
                }else{
                    total_interest += formatDecimal(tr.find('.interest').val()-0);
                    total_princ += formatDecimal(tr.find('.principle').val()-0);
                }
                total_pay_ += formatDecimal(tr.find('.payment_amt').val()-0);
                myexport+=			'<tr>'+
                    '<td class="td_color_light td_align_center" align="center">'+ k +'</td>'+
                    '<td class="td_color_light td_align_center" align="center">'+ tr.find('.dateline').val() +'</td>';
                if(type == 2){
                    myexport+=				'<td class="td_color_light td_align_center" align="right">$ &nbsp;'+ formatMoney(tr.find('.rate').val()-0) +'</td>';
                    myexport+=				'<td class="td_color_light td_align_center" align="right">$ &nbsp;'+ formatMoney(tr.find('.percentage').val()-0) +'</td>';
                    myexport+=				'<td class="td_color_light td_align_center" align="right">$ &nbsp;'+ formatMoney(tr.find('.payment_amt').val()-0) +'</td>';
                    myexport+=				'<td class="td_color_light td_align_center" align="right">$ &nbsp;'+ formatMoney(tr.find('.total_payment').val()-0) +'</td>';
                }else{
                    myexport+=				'<td class="td_color_light td_align_center" align="right">$ &nbsp;'+ formatMoney(tr.find('.interest').val()-0) +'</td>';
                    myexport+=				'<td class="td_color_light td_align_center" align="right">$ &nbsp;'+ formatMoney(tr.find('.principle').val()-0) +'</td>';
                    myexport+=				'<td class="td_color_light td_align_center" align="right">$ &nbsp;'+ formatMoney(tr.find('.payment_amt').val()-0) +'</td>';
                }
                myexport+=				'<td class="td_color_light td_align_right" align="right">$ &nbsp;'+ balance +'</td>'+
                    '<td class="td_color_bottom_light" style="padding-left:20px;">'+ tr.find('.note').val() +'</td>'+
                    '</tr>';
            });
            if(type == 2){
                myexport+=			'<tr>'+
                    '<td style="text-align:right; padding:5px;"><b> Total </b></td>'+
                    '<td style="text-align:right; padding:5px;"> &nbsp; </td>'+
                    '<td style="text-align:right; padding:5px;"><b>$ &nbsp;'+ formatMoney(total_princ) +'</b></td>'+
                    '<td style="text-align:right; padding:5px;"><b>$ &nbsp;'+ formatMoney(total_pay_) +'</b></td>'+
                    '<td style="text-align:right; padding:5px;"><b>$ &nbsp;'+ formatMoney(amount_total_pay) +'</b></td>'+
                    '<td style="text-align:right; padding:5px;"> &nbsp; </td>'+
                    '<td style="text-align:right; padding:5px;"> &nbsp; </td>'+
                    '</tr>';
            }else{
                myexport+=			'<tr>'+
                    '<td style="text-align:right; padding:5px; border-top:1px solid black;"><b> Total </b></td>'+
                    '<td style="text-align:right; padding:5px; border-top:1px solid black;"> &nbsp; </td>'+
                    '<td style="text-align:right; padding:5px; border-top:1px solid black;"><b>$ &nbsp;'+ formatMoney(total_interest) +'</b></td>'+
                    '<td style="text-align:right; padding:5px; border-top:1px solid black;"><b>$ &nbsp;'+ formatDecimal(total_princ) +'</b></td>'+
                    '<td style="text-align:right; padding:5px; border-top:1px solid black;"><b>$ &nbsp;'+ formatMoney(total_pay_) +'</b></td>'+
                    '<td style="text-align:right; padding:5px; border-top:1px solid black;"> &nbsp; </td>'+
                    '<td style="text-align:right; padding:5px;"> &nbsp; </td>'+
                    '</tr>';
            }
            myexport+= '</tbody>';
            $('#export_tbl').append(myexport);
            var htmltable= document.getElementById('export_tbl');
            var html = htmltable.outerHTML;
            window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
        });

        function PopupPayments() {
            var customer_id = $('#poscustomer').val();
            var customer_name = '';
            var customer_address = '';
            var customer_tel ='';
            var customer_mail = '';

            $.ajax({
                type: "get",
                url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/getCustomerInfo",
                data: {customer_id: customer_id},
                dataType: "html",
                async: false,
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    customer_name = obj.company;
                    customer_address = obj.address+', '+obj.city+', '+obj.state;
                    customer_tel = obj.phone;
                    customer_mail = obj.email;


                    //alert(customer_name +"|"+customer_address+"|"+customer_tel+"|"+customer_mail);
                }
            });

            var mywindow = window.open('', 'erp_pos_print', 'height=auto,max-width=480,min-width=250px');
            mywindow.document.write('<html><head><title>Print</title>');
            mywindow.document.write('<link rel="stylesheet" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/styles/helpers/bootstrap.min.css" type="text/css" />');
            mywindow.document.write('</head><body >');
            mywindow.document.write('<center>');
            var issued_date = $('.current_date').val();
            /*mywindow.document.write('<table class="table-condensed" style="width:95%; font-family:Verdana,Geneva,sans-serif; font-size:12px; padding-bottom:10px;">'+
										'<tr>'+
											'<td width="15%"><b style="font-size:18px;">Depreciation List</b></td>'+
											'<td width="35%"></td>'+
											'<td width="15%">To</td>'+
											'<td width="35%">: </td>'+
										'</tr>'+
										'<tr>'+
											'<td>Invoice No </td>'+
											'<td>: </td>'+
											'<td>Contact Person</td>'+
											'<td>: </td>'+
										'</tr>'+
										'<tr>'+
											'<td>Issued Date </td>'+
											'<td>: '+ issued_date +'</td>'+
											'<td>HP</td>'+
											'<td>: </td>'+
										'</tr>'+
										'<tr>'+
											'<td></td>'+
											'<td></td>'+
											'<td>Address</td>'+
											'<td>: </td>'+
										'</tr>'+
									'</table><br/>'
								  );*/

            mywindow.document.write('<center><h4 style="font-family:Verdana,Geneva,sans-serif;">Loan Amortization Schedule</h4></center>');
            mywindow.document.write('<table class="table-condensed" style="width:95%; font-family:Verdana,Geneva,sans-serif; font-size:12px; padding-bottom:10px;">'+
                '<tr>'+
                '<td colspan="2" style="width:100% !important;">issued date : '+ issued_date +'</td>'+
                '</tr>'+
                '<tr>'+
                '<td style="width:50% !important;">Customer : '+ customer_name +'</td>'+
                '<td style="width:50% !important;">Address : '+ customer_address +'</td>'+
                '</tr>'+
                '<tr>'+
                '<td style="width:50% !important;">Tel : '+ customer_tel +'</td>'+
                '<td style="width:50% !important;">Email : '+ customer_mail +'</td>'+
                '</tr>'+
                '</table><br/>'
            );
            mywindow.document.write('<table border="2px" class="table table-bordered table-condensed table_shape" style="width:95%; font-family:Verdana,Geneva,sans-serif; font-size:12px; border-collapse:collapse;">'+
                '<thead>'+
                '<tr>'+
                '<th width="5%" class="td_bor_style">No</th>'+
                '<th width="15%" class="td_bor_style td_align_center">item code</th>'+
                '<th width="45%" class="td_bor_style">Description</th>'+
                '<th width="10%" class="td_bor_style">Unit Price</th>'+
                '<th width="10%" class="td_bor_style">Qty</th>'+
                '<th width="15%" class="td_bor_botton">Amount</th>'+
                '</tr>'+
                '</thead>'+
                '<tbody>');
            var type = $('#depreciation_type_1').val();
            var no = 0;
            var total_amt = 0;
            var total_amount = $('#quick-payable').text()-0;
            var rate_kh = $('#other_cur_paid').attr('rate')-0;
            var kh_down = $('#other_cur_paid').val()-0;
            var kh_2_us = kh_down/rate_kh;
            var us_down = $('#amount_1').val()-0;
            var down_pay = kh_2_us + us_down;
            var interest_rate = Number($('#depreciation_rate_1').val()-0);
            var term_ = Number($('#depreciation_term_1').val()-0);
            var counter = 0;
            var items = $('.edit').length;
            $('.edit').each(function(){
                if(counter < items-1){
                    no += 1;
                    var parent = $(this).parent().parent();
                    var unit_price = parent.find('.realuprice').val();
                    var qtt = parent.find('.rquantity').val();
                    var amt = unit_price * qtt;
                    total_amt += amt;
                    mywindow.document.write(			'<tr>'+
                        '<td class="td_color_light td_align_center" >'+ no +'</td>'+
                        '<td class="td_color_light">'+ parent.find('.rcode').val() +'</td>'+
                        '<td class="td_color_light td_align_center">'+ parent.find('.rname').val() +'</td>'+
                        '<td class="td_color_light td_align_right">$ '+ formatMoney(unit_price) +'</td>'+
                        '<td class="td_color_light td_align_center">'+ qtt +'</td>'+
                        '<td class="td_color_bottom_light td_align_right">$ '+ formatMoney(amt) +'</td>'+
                        '</tr>');
                }
                counter += 1;
            });
            var loan_amount = total_amt;
            //if(type != 4){
            loan_amount = total_amt - down_pay;
            //}
            if(down_pay != 0 || down_pay != ''){
                mywindow.document.write(			'<tr>'+
                    '<td colspan="5" style="text-align:right; padding:5px;">Total Amount</td>'+
                    '<td class="td_align_right"><b>$ '+ formatMoney(total_amt) +'</b></td>'+
                    '</tr>');
                mywindow.document.write(			'<tr>'+
                    '<td colspan="5" style="text-align:right; padding:5px;">Down Payment</td>'+
                    '<td class="td_align_right"><b>$ '+ formatMoney(down_pay) +'</b></td>'+
                    '</tr>');
            }
            mywindow.document.write(			'<tr>'+
                '<td colspan="5" style="text-align:right; padding:5px;">Loan Amount</td>'+
                '<td class="td_align_right"><b>$ '+ formatMoney(loan_amount) +'</b></td>'+
                '</tr>'+
                '<tr>'+
                '<td colspan="5" style="text-align:right; padding:5px;">Interest Rate/Month</td>'+
                '<td class="td_align_right"><b>'+ formatMoney(interest_rate/12) +' %</b></td>'+
                '</tr>');
            mywindow.document.write(		'</tbody>'+
                '</table><br/>'
            );
            mywindow.document.write('<div class="payment_term"><b>Payment Term</b></div>');
            mywindow.document.write('<table border="2px" class="table table-bordered table-condensed table_shape" style="width:95%; font-family:Verdana,Geneva,sans-serif; font-size:12px; border-collapse:collapse;">'+
                '<thead>'+
                '<tr>'+
                '<th width="10%" class="td_bor_style">Pmt No.</th>'+
                '<th width="15%" class="td_bor_style">Payment Date</th>'
            );
            if(type == 2){
                mywindow.document.write(			'<th width="10%" class="td_bor_style">Rate</th>');
                mywindow.document.write(			'<th width="10%" class="td_bor_style">Percentage</th>');
                mywindow.document.write(			'<th width="10%" class="td_bor_style">Payment</th>'+
                    '<th width="15%" class="td_bor_style">Total Payment</th>'
                );
            }else{
                mywindow.document.write(			'<th width="10%" class="td_bor_style">Interest</th>'+
                    '<th width="10%" class="td_bor_style">principle</th>'+
                    '<th width="15%" class="td_bor_style">Total Payment</th>'
                );
            }
            mywindow.document.write(			'<th width="10%" class="td_bor_style">Balance</th>'+
                '<th width="25%" class="td_bor_botton">Note</th>'+
                '</tr>'+
                '</thead>'+
                '<tbody>');
            var k = 0;
            var total_interest = 0;
            var total_princ = 0;
            var amount_total_pay = 0;
            var total_pay_ = 0;
            $('.dep_tbl .no').each(function(){
                k += 1;
                var tr = $(this).parent().parent();
                var balance = formatMoney(tr.find('.balance').val()-0);
                if(type == 2){
                    total_interest += Number(tr.find('.rate').val()-0);
                    total_princ += Number(tr.find('.percentage').val()-0);
                    amount_total_pay += Number(tr.find('.total_payment').val()-0);
                }else{
                    total_interest += Number(tr.find('.interest').val()-0);
                    total_princ += Number(tr.find('.principle').val()-0);
                }
                total_pay_ += Number(tr.find('.payment_amt').val()-0);
                mywindow.document.write(		'<tr>'+
                    '<td class="td_color_light td_align_center">'+ k +'</td>'+
                    '<td class="td_color_light td_align_center">'+ tr.find('.dateline').val() +'</td>'
                );
                if(type == 2){
                    mywindow.document.write(				'<td class="td_color_light td_align_center">$ '+ formatMoney(tr.find('.rate').val()-0) +'</td>');
                    mywindow.document.write(				'<td class="td_color_light td_align_center">$ '+ formatMoney(tr.find('.percentage').val()-0) +'</td>');
                    mywindow.document.write(				'<td class="td_color_light td_align_center">$ '+ formatMoney(tr.find('.payment_amt').val()-0) +'</td>');
                    mywindow.document.write(				'<td class="td_color_light td_align_center">$ '+ formatMoney(tr.find('.total_payment').val()-0) +'</td>');
                }else{
                    mywindow.document.write(				'<td class="td_color_light td_align_center">$ '+ formatMoney(tr.find('.interest').val()-0) +'</td>');
                    mywindow.document.write(				'<td class="td_color_light td_align_center">$ '+ formatMoney(tr.find('.principle').val()-0) +'</td>');
                    mywindow.document.write(				'<td class="td_color_light td_align_center">$ '+ formatMoney(tr.find('.payment_amt').val()-0) +'</td>');
                }
                mywindow.document.write(				'<td class="td_color_light td_align_right">$ '+ balance +'</td>'+
                    '<td class="td_color_bottom_light">'+ tr.find('.note').val() +'</td>'+
                    '</tr>');
            });
            if(type == 2){
                mywindow.document.write(			'<tr>'+
                    '<td style="text-align:right; padding:5px;" colspan="2"><b> Total </b></td>'+
                    '<td style="text-align:left; padding:5px;"> &nbsp; </td>'+
                    '<td style="text-align:left; padding:5px;"><b>$ '+ formatMoney(total_princ) +'</b></td>'+
                    '<td style="text-align:left; padding:5px;"><b>$ '+ formatMoney(total_pay_) +'</b></td>'+
                    '<td style="text-align:left; padding:5px;"><b>$ '+ formatMoney(amount_total_pay) +'</b></td>'+
                    '<td style="text-align:left; padding:5px;"> &nbsp; </td>'+
                    '<td style="text-align:left; padding:5px;"> &nbsp; </td>'+
                    '</tr>');
            }else{
                mywindow.document.write(			'<tr>'+
                    '<td style="text-align:right; padding:5px;"><b> Total </b></td>'+
                    '<td style="text-align:left; padding:5px;"> &nbsp; </td>'+
                    '<td style="text-align:left; padding:5px;"><b>$ '+ formatMoney(total_interest) +'</b></td>'+
                    '<td style="text-align:left; padding:5px;"><b>$ '+ formatDecimal(total_princ) +'</b></td>'+
                    '<td style="text-align:left; padding:5px;"><b>$ '+ formatMoney(total_pay_) +'</b></td>'+
                    '<td style="text-align:left; padding:5px;"> &nbsp; </td>'+
                    '<td style="text-align:left; padding:5px;"> &nbsp; </td>'+
                    '</tr>');
            }
            mywindow.document.write(	'</tbody>'+
                '</table>'
            );

            mywindow.document.write('</center>');
            mywindow.document.write('</body></html>');
            mywindow.print();
            //mywindow.close();
            return true;
        }

        $(document).on('click', '.category', function () {
            if (cat_id != $(this).val()) {
                $('#box-item').remove();
                $('#box-item #box-item').remove();
                $('#open-category').click();
                $('#modal-loading').show();
                cat_id = $(this).val();
                $.ajax({
                    type: "get",
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/ajaxcategorydata",
                    data: {category_id: cat_id},
                    dataType: "json",
                    success: function (data) {
                        $('#slide_item').hide();
                        var newPrs = $('<div id=box-item ></div>');
                        newPrs.html(data.products);
                        newPrs.appendTo("#item-list");
                        $('#subcategory-list').empty();
                        var newScs = $('<div></div>');
                        newScs.html(data.subcategories);
                        newScs.appendTo("#subcategory-list");
                        tcp = data.tcp;
                    }
                }).done(function () {

                    p_page = 'n';
                    $('#category-' + cat_id).addClass('active');
                    $('#category-' + ocat_id).removeClass('active');
                    ocat_id = cat_id;
                    $('#modal-loading').hide();
                });
            }
        });
        $('#category-' + cat_id).addClass('active');

        if (sub_cat_id != $(this).val()) {
            $('#box-item').remove();
            $('#open-subcategory').click();
            $('#modal-loading').show();
            sub_cat_id = $(this).val();
            $.ajax({
                type: "get",
                url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/ajaxproducts",
                data: {category_id: cat_id, subcategory_id: sub_cat_id, per_page: p_page},
                dataType: "html",
                success: function (data) {
                    $('#slide_item').hide();
                    var newPrs = $('<div id=box-item ></div>');
                    newPrs.html(data);
                    newPrs.appendTo("#item-list");
                }
            }).done(function () {

                p_page = 'n';
                $('#subcategory-' + sub_cat_id).addClass('active');
                $('#subcategory-' + osub_cat_id).removeClass('active');
                $('#modal-loading').hide();
            });
        }

        /*
        $('#next').click(function () {
            if (p_page == 'n') {
                p_page = 0
            }
            p_page = p_page + 20;
            if (tcp >= 20 && p_page < tcp) {
				$('#box-item').remove();
				$('#box-item #box-item').remove();
			   $('#modal-loading').show();
                $.ajax({
                    type: "get",
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/ajaxproducts",
                    data: {category_id: cat_id, subcategory_id: sub_cat_id, per_page: p_page},
                    dataType: "html",
                    success: function (data) {
                        $('#slide_item').hide();
                        var newPrs = $('<div id=box-item ></div>');
                        newPrs.html(data);
                        newPrs.appendTo("#item-list");
                    }
                }).done(function () {
                    $('#modal-loading').hide();
                });
            } else {
                p_page = p_page - 20;
            }
        });

        $('#previous').click(function () {
            if (p_page == 'n') {
                p_page = 0;
            }
            if (p_page != 0) {
				$('#box-item').remove();
				$('#box-item #box-item').remove();
                $('#modal-loading').show();
                p_page = p_page - 20;
                if (p_page == 0) {
                    p_page = 'n'
                }
                $.ajax({
                    type: "get",
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/ajaxproducts",
                    data: {category_id: cat_id, subcategory_id: sub_cat_id, per_page: p_page},
                    dataType: "html",
                    success: function (data) {
                        $('#slide_item').hide();
                        var newPrs = $('<div id=box-item ></div>');
                        newPrs.html(data);
                        newPrs.appendTo("#item-list");
                    }

                }).done(function () {
                    $('#modal-loading').hide();
                });

            }
        });
		*/

        $('.chk_principle').on('change', function() {

            if ($(this).is(':checked')) {
                $.ajax({
                    type: "get",
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/ajaxproducts",
                    data: {category_id: cat_id, subcategory_id: sub_cat_id, per_page: p_page},
                    dataType: "html",
                    success: function (data) {
                        $('#slide_item').hide();
                        var newPrs = $('<div id=box-item ></div>');
                        newPrs.html(data);
                        newPrs.appendTo("#item-list");
                    }
                });
                define_depreciation(amount,rate,term,p_type,total_amount);
            }else{

            }
        });

        function define_depreciation(amount,rate,term,p_type,total_amount){

            tr += '<tr>';
            tr += '<th class="text-center"> Pmt No. </th>';
            tr += '<th class="text-center"> Interest </th>';
            tr += '<th class="text-center"> Principle </th>';
            tr += '<th class="text-center"> Total Payment </th>';
            tr += '<th class="text-center"> Balance </th>';
            tr += '<th class="text-center"> Note </th>';
            tr += '<th class="text-center"> Payment Date </th>';
            tr += '</tr>';

            var dateline ='';
            var principle = 0;
            var interest = 0;
            var balance = amount;
            var rate_amount = ((rate/100)/12);
            var payment = ((amount * rate_amount)*((Math.pow((1+rate_amount),term))/(Math.pow((1+rate_amount),term)-1)));
            var i=0;
            var k=1;
            var total_principle = 0;
            var total_payment = 0;
            for(i=0;i<term;i++){
                if(i== 0){
                    interest = amount*((rate/100)/12);
                    dateline = moment(new Date()).add(0,'months').format('DD/MM/YYYY');
                }else{
                    interest = balance *((rate/100)/12);
                    dateline = moment(new Date()).add((k-1),'months').format('DD/MM/YYYY');
                }
                principle = payment - interest;
                balance -= principle;
                if(balance <= 0){
                    balance = 0;
                }
                tr += '<tr> <td class="text-center">'+ k +'<input type="hidden" name="no[]" id="no" class="no" value="'+ k +'" /></td> ';
                tr += '<td>'+ formatMoney(interest) +'<input type="hidden" name="interest[]" id="interest" class="interest" width="90%" value="'+ formatDecimal(interest) +'"/></td>';
                tr += '<td>'+ formatMoney(principle) +'<input type="hidden" name="principle[]" id="principle" class="principle" width="90%" value="'+ principle +'"/></td>';
                tr += '<td>'+ formatMoney(payment) +'<input type="hidden" name="payment_amt[]" id="payment_amt" class="payment_amt" width="90%" value="'+ formatDecimal(payment) +'"/></td>';
                tr += '<td>'+ formatMoney(balance) +'<input type="hidden" name="balance[]" id="balance" class="balance" width="90%" value="'+ formatDecimal(balance) +'"/></td>';
                tr += '<td> <input name="note[]" class="note form-control" id="'+i+'" ></input> <input type="hidden" name="note1[]" id="note1" class="note1_'+i+'" width="90%"/></td>';
                tr += '<td>'+ dateline +'<input type="hidden" class="dateline" name="dateline[]" id="dateline" value="'+ dateline +'" /></td> </tr>';
                total_principle += principle;
                total_payment += payment;
                k++;
            }
            tr += '<tr> <td colspan="2"> Total </td>';
            tr += '<td>'+ formatMoney(total_principle) +'</td>';
            tr += '<td>'+ formatMoney(total_payment) +'</td>';
            tr += '<td colspan="3"> &nbsp; </td> </tr>';
            $('.dep_tbl').show();
            $('#tbl_dep').html(tr);
            //$('#tbl_dep1').html(tr);
            $("#loan1").html(tr);
        }

        function depreciation(amount,rate,term,p_type,total_amount){
            var dateline = '';
            var d = new Date();
            if(p_type == ''){
                $('#print_').hide();
                $('#export_').hide();
                return false;
            }else{
                $('#print_').show();
                $('#export_').show();
                if(rate == '' || rate < 0) {
                    if(term == '' || term <= 0) {
                        $('.dep_tbl').hide();
                        alert("Please choose Rate and Term again!");
                        return false;
                    }else{
                        $('.dep_tbl').hide();
                        alert("Please choose Rate again!");
                        return false;
                    }
                }else{
                    if(term == '' || term <= 0) {
                        $('.dep_tbl').hide();
                        alert("Please choose Term again!");
                        return false;
                    }else{
                        var tr = '';
                        if(p_type == 1 || p_type == 3 || p_type == 4){
                            tr += '<tr>';
                            tr += '<th class="text-center"> Pmt No. </th>';
                            tr += '<th class="text-center"> Interest </th>';
                            tr += '<th class="text-center"> Principle </th>';
                            tr += '<th class="text-center"> Total Payment </th>';
                            tr += '<th class="text-center"> Balance </th>';
                            tr += '<th class="text-center"> Note </th>';
                            tr += '<th class="text-center"> Payment Date </th>';
                            tr += '</tr>';
                        }else if(p_type == 2){
                            tr += '<tr>';
                            tr += '<th class="text-center"> Period </th>';
                            tr += '<th class="text-center"> Rate </th>';
                            tr += '<th class="text-center"> Percentage </th>';
                            tr += '<th class="text-center"> Payment </th>';
                            tr += '<th class="text-center"> Total Payment </th>';
                            tr += '<th class="text-center"> Balance </th>';
                            tr += '<th class="text-center"> Note </th>';
                            tr += '<th class="text-center"> Dateline </th>';
                            tr += '</tr>';
                        }
                        if(p_type == 1){
                            var principle = amount/term;
                            var interest = 0;
                            var balance = amount;
                            var payment = 0;
                            var i=0;
                            var k=1;
                            var total_principle = 0;
                            var total_payment = 0;
                            for(i=0;i<term;i++){
                                if(i== 0){
                                    interest = amount*((rate/term)/100);
                                    dateline = moment(new Date()).add(0,'months').format('DD/MM/YYYY');
                                }else{
                                    interest = balance *((rate/term)/100);
                                    dateline = moment(new Date()).add((k-1),'months').format('DD/MM/YYYY');
                                }
                                balance -= principle;
                                if(balance <= 0){
                                    balance = 0;
                                }
                                payment = principle + interest;
                                tr += '<tr> <td class="text-center">'+ k +'<input type="hidden" name="no[]" id="no" class="no" value="'+ k +'" /></td> ';
                                tr += '<td>'+ formatMoney(interest) +'<input type="hidden" name="interest[]" id="interest" class="interest" width="90%" value="'+ formatDecimal(interest) +'"/></td>';
                                tr += '<td>'+ formatMoney(principle) +'<input type="hidden" name="principle[]" id="principle" class="principle" width="90%" value="'+ formatDecimal(principle) +'"/></td>';
                                tr += '<td>'+ formatMoney(payment) +'<input type="hidden" name="payment_amt[]" id="payment_amt" class="payment_amt" width="90%" value="'+ formatDecimal(payment) +'"/></td>';
                                tr += '<td>'+ formatMoney(balance) +'<input type="hidden" name="balance[]" id="balance" class="balance" width="90%" value="'+ formatDecimal(balance) +'"/></td>';
                                tr += '<td> <input name="note[]" class="note form-control" id="'+i+'" ></input> <input type="hidden" name="note1[]" id="note1" class="note1_'+i+'" width="90%"/></td>';
                                tr += '<td>'+ dateline +'<input type="hidden" class="dateline" name="dateline[]" id="dateline" value="'+ dateline +'" /> </td> </tr>';
                                total_principle += principle;
                                total_payment += payment;
                                k++;
                            }
                            tr += '<tr> <td colspan="2"> Total </td>';
                            tr += '<td>'+ formatMoney(total_principle) +'</td>';
                            tr += '<td>'+ formatMoney(total_payment) +'</td>';
                            tr += '<td colspan="3"> &nbsp; </td> </tr>';
                        }else if(p_type == 2) {
                            var principle = 0;
                            var interest = 0;
                            var percent = 0;
                            var balance = amount;
                            var rate_amount = ((rate/100)/12);
                            var payment = ((amount * rate_amount)*((Math.pow((1+rate_amount),term))/(Math.pow((1+rate_amount),term)-1)));
                            var i=0;
                            var k=1;
                            var total_principle = 0;
                            var total_payment = 0;
                            for(i=0;i<term;i++){
                                if(i== 0){
                                    interest = amount*((rate/100)/12);
                                    dateline = moment(new Date()).add(0,'months').format('DD/MM/YYYY');
                                    principle = payment - interest;
                                    percent = (principle / balance) * 100;
                                    balance -= principle;
                                    if(balance <= 0){
                                        balance = 0;
                                    }
                                    tr += '<tr> <td class="text-center">'+ k +'<input type="hidden" name="no[]" id="no" class="no" value="'+ k +'" /></td> ';
                                    tr += '<td><input type="text" name="rate[]" id="rate" class="rate" style="width:60px;" value="'+ formatDecimal(interest) +'"/><input type="hidden" name="interest[]" id="interest" class="interest" width="90%" value="'+ formatDecimal(interest) +'"/></td>';
                                    tr += '<td><input type="text" name="percentage[]" id="percentage" class="percentage" style="width:60px;" value="'+ percent.toFixed(4) +'"/><input type="hidden" name="percentage_[]" id="percentage_" class="percentage_" style="width:60px;" value="'+ percent +'"/></td>';
                                    tr += '<td><input type="text" name="pmt_principle[]" id="pmt_principle" class="pmt_principle" style="width:60px;" value="'+ formatDecimal(principle) +'" /><input type="hidden" name="principle[]" id="principle" class="principle" width="90%" value="'+ formatDecimal(principle) +'"/></td>';
                                    tr += '<td><input type="text" name="total_payment[]" id="total_payment" class="total_payment" style="width:60px;" value="'+ formatDecimal(payment) +'" readonly/><input type="hidden" name="payment_amt[]" id="payment_amt" class="payment_amt" width="90%" value="'+ formatDecimal(payment) +'"/></td>';
                                    tr += '<td><input type="text" name="amt_balance[]" id="amt_balance" class="amt_balance" style="width:60px;" value="'+ formatDecimal(balance) +'" readonly/><input type="hidden" name="balance[]" id="balance" class="balance" style="width:60px;" value="'+ formatDecimal(balance) +'"/></td>';
                                    tr += '<td> <input name="note[]" class="note form-control" id="'+i+'" ></input> <input type="hidden" name="note1[]" id="note1" class="note1_'+i+'" width="90%"/></td>';
                                    tr += '<td><input type="text" class="dateline" name="dateline[]" id="dateline" value="'+ dateline +'" size="6" /></td> </tr>';
                                }else{
                                    interest = balance *((rate/100)/12);
                                    dateline = moment(new Date()).add((k-1),'months').format('DD/MM/YYYY');
                                    principle = payment - interest;
                                    percent = (principle / balance) * 100;
                                    balance -= principle;
                                    if(balance <= 0){
                                        balance = 0;
                                    }
                                    tr += '<tr> <td class="text-center">'+ k +'<input type="hidden" name="no[]" id="no" class="no" value="'+ k +'" /></td> ';
                                    tr += '<td><input type="text" name="rate[]" id="rate" class="rate" style="width:60px;" value="'+ formatDecimal(interest) +'"/><input type="hidden" name="interest[]" id="interest" class="interest" width="90%" value="'+ formatDecimal(interest) +'"/></td>';
                                    tr += '<td><input type="text" name="percentage[]" id="percentage" class="percentage" style="width:60px;" value="'+ percent.toFixed(4) +'"/><input type="hidden" name="percentage_[]" id="percentage_" class="percentage_" style="width:60px;" value="'+ percent +'"/></td>';
                                    tr += '<td><input type="text" name="pmt_principle[]" id="pmt_principle" class="pmt_principle" style="width:60px;" value="'+ formatDecimal(principle) +'" /><input type="hidden" name="principle[]" id="principle" class="principle" width="90%" value="'+ formatDecimal(principle) +'"/></td>';
                                    tr += '<td><input type="text" name="total_payment[]" id="total_payment" class="total_payment" style="width:60px;" value="'+ formatDecimal(payment) +'" readonly/><input type="hidden" name="payment_amt[]" id="payment_amt" class="payment_amt" width="90%" value="'+ formatDecimal(payment) +'"/></td>';
                                    tr += '<td><input type="text" name="amt_balance[]" id="amt_balance" class="amt_balance" style="width:60px;" value="'+ formatDecimal(balance) +'" readonly/><input type="hidden" name="balance[]" id="balance" class="balance" style="width:60px;" value="'+ formatDecimal(balance) +'"/></td>';
                                    tr += '<td> <input name="note[]" class="note form-control" id="'+i+'" ></input><input type="hidden" name="note1[]" id="note1" class="note1_'+i+'" width="90%"/></td>';
                                    tr += '<td><input type="text" class="dateline" name="dateline[]" id="dateline" value="'+ dateline +'" size="6" /></td> </tr>';
                                }
                                total_principle += principle;
                                total_payment += payment;
                                k++;
                            }
                            tr += '<tr> <td colspan="3"> Total </td>';
                            //tr += '<td><input type="text" name="total_percen" id="total_percen" class="total_percen" style="width:60px;" value="" readonly/></td>';
                            tr += '<td><input type="text" name="total_pay" id="total_pay" class="total_pay" style="width:60px;" value="'+ formatDecimal(total_principle) +'" readonly/></td>';
                            tr += '<td><input type="text" name="total_amount" id="total_amount" class="total_amount" style="width:60px;" value="'+ formatDecimal(total_payment) +'" readonly/></td>';
                            tr += '<td colspan="3"> &nbsp; </td> </tr>';
                        }else if(p_type == 3) {
                            var principle = 0;
                            var interest = 0;
                            var balance = amount;
                            var rate_amount = ((rate/100)/12);
                            var payment = ((amount * rate_amount)*((Math.pow((1+rate_amount),term))/(Math.pow((1+rate_amount),term)-1)));
                            var i=0;
                            var k=1;
                            var total_principle = 0;
                            var total_payment = 0;
                            for(i=0;i<term;i++){
                                if(i== 0){
                                    interest = amount*((rate/100)/12);
                                    dateline = moment(new Date()).add(0,'months').format('DD/MM/YYYY');
                                }else{
                                    interest = balance *((rate/100)/12);
                                    dateline = moment(new Date()).add((k-1),'months').format('DD/MM/YYYY');
                                }
                                principle = payment - interest;
                                balance -= principle;
                                if(balance <= 0){
                                    balance = 0;
                                }
                                tr += '<tr> <td class="text-center">'+ k +'<input type="hidden" name="no[]" id="no" class="no" value="'+ k +'" /></td> ';
                                tr += '<td>'+ formatMoney(interest) +'<input type="hidden" name="interest[]" id="interest" class="interest" width="90%" value="'+ formatDecimal(interest) +'"/></td>';
                                tr += '<td>'+ formatMoney(principle) +'<input type="hidden" name="principle[]" id="principle" class="principle" width="90%" value="'+ principle +'"/></td>';
                                tr += '<td>'+ formatMoney(payment) +'<input type="hidden" name="payment_amt[]" id="payment_amt" class="payment_amt" width="90%" value="'+ formatDecimal(payment) +'"/></td>';
                                tr += '<td>'+ formatMoney(balance) +'<input type="hidden" name="balance[]" id="balance" class="balance" width="90%" value="'+ formatDecimal(balance) +'"/></td>';
                                tr += '<td> <input name="note[]" class="note form-control" id="'+i+'" ></input> <input type="hidden" name="note1[]" id="note1" class="note1_'+i+'" width="90%"/></td>';
                                tr += '<td>'+ dateline +'<input type="hidden" class="dateline" name="dateline[]" id="dateline" value="'+ dateline +'" /></td> </tr>';
                                total_principle += principle;
                                total_payment += payment;
                                k++;
                            }
                            tr += '<tr> <td colspan="2"> Total </td>';
                            tr += '<td>'+ formatMoney(total_principle) +'</td>';
                            tr += '<td>'+ formatMoney(total_payment) +'</td>';
                            tr += '<td colspan="3"> &nbsp; </td> </tr>';
                        } else if(p_type == 4){
                            var principle = amount/term;
                            var interest = (amount * (rate/100))/12;
                            var balance = amount;
                            var payment = 0;
                            var i=0;
                            var k=1;
                            var total_principle = 0;
                            var total_payment = 0;
                            for(i=0;i<term;i++){
                                if(i== 0){
                                    dateline = moment(new Date()).add(0,'months').format('DD/MM/YYYY');
                                }else{
                                    dateline = moment(new Date()).add((k-1),'months').format('DD/MM/YYYY');
                                }
                                payment = principle + interest;

                                balance -= principle;
                                if(balance <= 0){
                                    balance = 0;
                                }
                                tr += '<tr> <td class="text-center">'+ k +'<input type="hidden" name="no[]" id="no" class="no" value="'+ k +'" /></td> ';
                                tr += '<td>'+ formatMoney(interest) +'<input type="hidden" name="interest[]" id="interest" class="interest" width="90%" value="'+ interest +'"/></td>';
                                tr += '<td>'+ formatMoney(principle) +'<input type="hidden" name="principle[]" id="principle" class="principle" width="90%" value="'+ principle +'"/></td>';
                                tr += '<td>'+ formatMoney(payment) +'<input type="hidden" name="payment_amt[]" id="payment_amt" class="payment_amt" width="90%" value="'+ payment +'"/></td>';
                                tr += '<td>'+ formatMoney(balance) +'<input type="hidden" name="balance[]" id="balance" class="balance" width="90%" value="'+ balance +'"/></td>';
                                tr += '<td> <input name="note[]" class="note form-control" id="'+i+'" ></input> <input type="hidden" name="note1[]" id="note1" class="note1_'+i+'" width="90%"/></td>';
                                tr += '<td>'+ dateline +'<input type="hidden" class="dateline" name="dateline[]" id="dateline" value="'+ dateline +'" /> </td> </tr>';
                                total_principle += principle;
                                total_payment += payment;
                                k++;
                            }
                            tr += '<tr> <td colspan="2"> Total </td>';
                            tr += '<td>'+ formatMoney(total_principle) +'</td>';
                            tr += '<td>'+ formatMoney(total_payment) +'</td>';
                            tr += '<td colspan="3"> &nbsp; </td> </tr>';
                        }
                        $('.dep_tbl').show();
                        $('#tbl_dep').html(tr);
                        //$('#tbl_dep1').html(tr);
                        $("#loan1").html(tr);
                    }
                }
            }
        }

        $("#depreciation_rate_1").on('change', function(){
            $("#loan_rate").val($(this).val());
        });

        $("#depreciation_type_1").on('change', function(){
            $("#loan_type").val($(this).val());
        });

        $("#depreciation_term_1").on('change', function(){
            $("#loan_term").val($(this).val());
        });

        $("#suspend_room").on('change', function(){
            $("#suspend_room1").val($(this).val());
        });

        $("#tbl_dep .note").live('change', function(){
            var id = ($(this).attr('id'));
            var value = $(this).val();

            $('.note1_'+id+'').val(value);
        });

        $(document).on('click','#depreciation_print',function(){
            var amount = $('#amount_1').val();
            alert(amount);
            $.ajax({
                type: "get",
                url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/getData",
                data: {
                    amount: amount
                },success: function (data) {

                }

            });

        });

        $(document).on('keyup','#amount_1, #amount_2, #amount_3, #amount_4, #amount_5, .currencies_payment', function(){
            //var total_amount = $('#quick-payable').text()-0;
            var total_amount = $('#payable_amount').val()-0;
            var us_paid = $('#amount_1').val()-0;
            var us_paid2 = $('#amount_2').val()? $('#amount_2').val()-0 : 0;
            var us_paid3 = $('#amount_3').val()? $('#amount_3').val()-0 : 0;
            var us_paid4 = $('#amount_4').val()? $('#amount_4').val()-0 : 0;
            var us_paid5 = $('#amount_5').val()? $('#amount_5').val()-0 : 0;
            var other_paid = other_curr_paid_2_us();
            var balance = total_amount - (us_paid + us_paid2 + us_paid3 + us_paid4 + us_paid5 + other_paid);
            var ch = (balance).toFixed(3);
            var str = ch.split('.');
            if(balance > 0){
                autoCalremain(balance);
                autoCalchange(0);
                $('.main_remain_1').text(formatMoney(str[0]));
                $('.main_remain').text(formatMoney(balance));
                $('#change').text('0.00');
                $('#change_1').text('0.00');
            }else if(balance < 0){
                balance = balance * (-1);
                var ch = (balance).toFixed(3);
                var str = ch.split('.');
                autoCalremain(0);
                autoCalchange(balance);
                $('#change').text(formatMoney(balance));
                $('#change_1').text(formatMoney(str[0]));
                $('.main_remain').text('0.00');
                $('.main_remain_1').text('0.00');
            }else{
                autoCalremain(0);
                autoCalchange(0);
                $('#change').text('0.00');
                $('.main_remain').text('0.00');
                $('.main_remain_1').text('0.00');
            }
            var deposit_amount = parseFloat($(".deposit_total_amount").text());
            var deposit_balance = parseFloat($(".deposit_total_balance").text());
            deposit_balance = (deposit_amount - Math.abs(us_paid));
            $(".deposit_total_balance").text(deposit_balance);

        });

        $(document).on('change','#depreciation_type_1, #depreciation_rate_1, #depreciation_term_1',function() {
            var p_type = $('#depreciation_type_1').val();
            var pr_type = $('#principle_type_1').val();
            var rate = $('#depreciation_rate_1').val();
            var term = $('#depreciation_term_1').val();
            var total_amount = $('#quick-payable').text()-0;
            var rate_kh = $('#other_cur_paid').attr('rate')-0;
            var kh_down = $('#other_cur_paid').val()-0;
            var kh_2_us = kh_down/rate_kh;
            if(!kh_2_us) {
                kh_2_us = 0;
            }
            var us_down = $('#amount_1').val();
            var down_pay = kh_2_us + us_down;
            var loan_amount = total_amount - down_pay;
            if(!pr_type) {
                depreciation(loan_amount,rate,term,p_type,total_amount);
            }
        });


        var datal = 0;
        $(document).on('change','#principle_type_1',function() {
            //var p_type = $('#depreciation_type_1').val();
            var pr_type = $('#principle_type_1').val();
            //var rate = $('#depreciation_rate_1').val();
            //var term = $('#depreciation_term_1').val();
            var total_amount = $('#quick-payable').text()-0;
            var rate_kh = $('#other_cur_paid').attr('rate')-0;
            var kh_down = $('#other_cur_paid').val()-0;
            var kh_2_us = kh_down/rate_kh;
            if(!kh_2_us) {
                kh_2_us = 0;
            }
            var us_down = $('#amount_1').val();
            var down_pay = kh_2_us + us_down;
            var amount = total_amount - down_pay;

            //depreciation(loan_amount,rate,term,p_type,total_amount);
            //alert(pr_type);
            if(pr_type ) {

                var principle = 0;
                var interest = 0;
                var percent = 0;
                var balance = amount;

                var i=0;
                var k=1;

                var total_principle = 0;
                var total_payment = 0;

                $.ajax({
                    type: 'get',
                    url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/getPrincipleCustomer',
                    dataType: "json",
                    async:false,
                    data: {
                        pr_type:pr_type
                    },
                    success: function (data) {
                        var c ="";
                        var tr ="";
                        tr += '<tr>';
                        tr += '<th class="text-center"> Period </th>';
                        tr += '<th class="text-center"> Rate </th>';
                        tr += '<th class="text-center"> Percentage </th>';
                        tr += '<th class="text-center"> Payment </th>';
                        tr += '<th class="text-center"> Total Payment </th>';
                        tr += '<th class="text-center"> Balance </th>';
                        tr += '<th class="text-center"> Note </th>';
                        tr += '<th class="text-center"> Dateline </th>';
                        tr += '</tr>';
                        datal = data.length;
                        for(i=0;i<data.length;i++){
                            c = data[i];
                            //alert(JSON.stringify(data));
                            var yong_yong = c.principle_rate.replace('%', '');
                            //alert(yong_yong);
                            //var rate_amount = ((yong_yong/100)/12);

                            var payment = amount *(yong_yong/100); //((amount * rate_amount)*((Math.pow((1+rate_amount),data.length))/(Math.pow((1+rate_amount),data.length)-1)));

                            if(c.rates == 1){
                                interest = balance*((yong_yong/100)/12);
                            }else{
                                interest = 0 ;
                            }
                            //dateline = moment(new Date()).add(0,'months').format('DD/MM/YYYY');

                            //principle = payment - interest;
                            var total_pay = interest + payment;

                            //percent = (principle / balance) * 100;
                            //balance -= principle;
                            balance = balance - payment;
                            if(balance <= 0){
                                balance = 0;
                            }

                            tr += '<tr> <td class="text-center">'+ c.period +'<input type="hidden" name="no[]" id="no" class="no" value="'+ c.period +'" /></td> ';
                            tr += '<td><input type="text" name="rate[]" id="rate" readonly class="rate2" style="width:60px;" value="'+ formatDecimal(interest) +'"/><input type="hidden" name="interest[]" id="interest" class="interest2" width="90%" value="'+ formatDecimal(interest) +'"/></td>';
                            tr += '<td><input type="text" name="percentage[]" id="percentage" class="percentage2" style="width:60px;" value="'+ yong_yong +'"/><input type="hidden" name="percentage_[]" id="percentage_" class="percentage_2" style="width:60px;" value="'+ yong_yong +'"/></td>';
                            tr += '<td><input type="text" name="pmt_principle[]" id="pmt_principle" class="pmt_principle2" style="width:60px;" value="'+ formatDecimal(payment) +'" /><input type="hidden" name="principle[]" id="principle" class="principle2" width="90%" value="'+ formatDecimal(payment) +'"/></td>';
                            tr += '<td><input type="text" name="total_payment[]" id="total_payment" class="total_payment2" style="width:60px;" value="'+ formatDecimal(total_pay) +'" readonly/><input type="hidden" name="payment_amt[]" id="payment_amt2" class="payment_amt" width="90%" value="'+ formatDecimal(total_pay) +'"/></td>';
                            tr += '<td><input type="text" name="amt_balance[]" id="amt_balance" class="amt_balance2" style="width:60px;" value="'+ formatDecimal(balance) +'" readonly/><input type="hidden" name="balance[]" id="balance" class="balance2" style="width:60px;" value="'+ formatDecimal(balance) +'"/></td>';
                            tr += '<td> <input type="text" style="width:60px;" name="note[]" class="note " id="'+i+'" value="'+c.remark+'"></input> <input type="hidden" name="note1[]" id="note1" class="note1_'+i+'" width="90%"/></td>';
                            tr += '<td><input type="text" class="dateline" name="dateline[]" id="dateline" value="'+ c.dateline +'" size="6" /></td> </tr>';

                            total_principle += payment;
                            total_payment += total_pay;
                            k++;
                        }
                        tr += '<tr> <td colspan="3" style="text-align:right;"> Total </td>';
                        //tr += '<td><input type="text" name="total_percen" id="total_percen" class="total_percen" style="width:60px;" value="" readonly/></td>';
                        tr += '<td><input type="text" name="total_pay" id="total_pay" class="total_pay2" style="width:60px;" value="'+ formatDecimal(total_principle) +'" readonly/></td>';
                        tr += '<td><input type="text" name="total_amount" id="total_amount" class="total_amount2" style="width:60px;" value="'+ formatDecimal(total_payment) +'" readonly/></td>';
                        tr += '<td colspan="3"> &nbsp; </td> </tr>';

                        $('.dep_tbl').show();
                        $('#tbl_dep').html(tr);
                        //$('#tbl_dep1').html(tr);
                        $("#loan1").html(tr);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                    }
                });
            }
        });


        //###################### Search Filter #####################//
        $(document).on('keyup', '#tbl_dep .percentage, #tbl_dep .rate', function () {

            var rate_all = $('#depreciation_rate_1').val()-0;
            var term = $('#depreciation_term_1').val()-0;
            var amount = 0;
            var payment = 0;
            var amount_payment = 0;
            var rate = 0;
            var balance = 0;
            var per = $(this).val()-0;
            var tr = $(this).parent().parent();
            if(per < 0 || per > 100) {
                alert("sorry you can not input the rate value less than zerro or bigger than 100");
                $(this).val('');
                $(this).focus();
                return false;
            }else {
                amount = tr.find('.balance').val()-0;
                rate = tr.find('.interest').val()-0;

                payment = amount *(per/100);
                amount_payment = rate + payment;
                balance = amount - payment;
                tr.find('.pmt_principle').val(formatDecimal(payment));
                tr.find('.principal').val(formatDecimal(payment));
                tr.find('.total_payment').val(formatDecimal(amount_payment));
                tr.find('.payment_amt').val(formatDecimal(amount_payment));
                tr.find('.amt_balance').val(formatDecimal(balance));
                tr.find('.balance').val(formatDecimal(balance));

                var total_percent = 0;
                $('#tbl_dep .percentage').each(function(){
                    var parent_ = $(this).parent().parent();
                    var per_tage_ = parent_.find('.percentage').val()-0;
                    total_percent += per_tage_;
                });

                var j = 1;
                var i = 1;
                var balance = 0;
                var amount_percent = 0;
                var amount_pay = 0;
                var amount_total_payment = 0;
                $('#tbl_dep .percentage').each(function(){
                    var parent = $(this).parent().parent();
                    var per_tage = parent.find('.percentage').val()-0;
                    if(per_tage == '' || per_tage == 0) {
                        per_tage = 0;
                    }
                    amount_percent += per_tage;
                    var rate = parent.find('.rate').val()-0;
                    //if(j == 1) {
                    var total_amount = $('#quick-payable').text()-0;
                    var rate_kh = $('#other_cur_paid').attr('rate')-0;
                    var kh_down = $('#other_cur_paid').val()-0;
                    var kh_2_us = kh_down/rate_kh;
                    var us_down = $('#amount_1').val();
                    var down_pay = kh_2_us + us_down;
                    var loan_amount = total_amount - down_pay;
                    balance = loan_amount;
                    //}else {
                    //	balance = parent.prev().find('.balance').val()-0;
                    //}

                    if(rate == 0) {
                        var new_rate = 0;
                    }else {
                        var new_rate = balance * ((rate_all/term)/100);
                    }
                    var payment = formatDecimal(loan_amount * (per_tage/100));
                    amount_pay += payment;
                    var total_payment = payment + new_rate;
                    amount_total_payment += total_payment;
                    var balance = balance - payment;

                    //alert(total_percent +" | "+ amount_percent);
                    //alert(new_rate +" | "+ payment +" | "+ total_payment +" | "+ balance);

                    if(total_percent != amount_percent) {
                        parent.find('.rate').val(formatDecimal(new_rate));
                        parent.find('.interest').val(formatDecimal(new_rate));
                        parent.find('.pmt_principle').val(formatDecimal(payment));
                        parent.find('.principle').val(formatDecimal(payment));
                        parent.find('.total_payment').val(formatDecimal(total_payment));
                        parent.find('.payment_amt').val(formatDecimal(total_payment));
                        parent.find('.amt_balance').val(formatDecimal(balance));
                        parent.find('.balance').val(formatDecimal(balance));
                    }else{
                        if(i == 1) {
                            parent.find('.rate').val(formatDecimal(new_rate));
                            parent.find('.interest').val(formatDecimal(new_rate));
                            parent.find('.pmt_principle').val(formatDecimal(payment));
                            parent.find('.principle').val(formatDecimal(payment));
                            parent.find('.total_payment').val(formatDecimal(total_payment));
                            parent.find('.payment_amt').val(formatDecimal(total_payment));
                            parent.find('.amt_balance').val(formatDecimal(balance));
                            parent.find('.balance').val(formatDecimal(balance));
                        }else {
                            parent.find('.rate').val(formatDecimal(new_rate));
                            parent.find('.interest').val(formatDecimal(new_rate));
                            parent.find('.pmt_principle').val("");
                            parent.find('.principle').val(formatDecimal(payment));
                            parent.find('.total_payment').val("");
                            parent.find('.payment_amt').val(formatDecimal(total_payment));
                            parent.find('.amt_balance').val("");
                            parent.find('.balance').val(formatDecimal(balance));
                        }
                        i++;
                    }
                    j++;
                });
                //$('.total_percen').val(formatDecimal(amount_percent));
                $('.total_pay').val(formatDecimal(amount_pay));
                $('.total_amount').val(formatDecimal(amount_total_payment));
            }
        });
        $(document).on('keyup', '#tbl_dep .percentage2', function () {
            //var rate_all = $('.percentage2').val()-0;
            //var term = datal;
            var amount = 0;
            var payment = 0;
            var amount_payment = 0;
            var rate = 0;
            var balance = 0;
            var per = $(this).val()-0;
            var tr = $(this).parent().parent();
            if(per < 0 || per > 100) {
                alert("sorry you can not input the rate value less than zerro or bigger than 100");
                $(this).val('');
                $(this).focus();
                return false;
            }else {
                amount = tr.find('.balance2').val()-0;
                rate = tr.find('.interest2').val()-0;

                payment = amount *(per/100);
                amount_payment = rate + payment;
                balance = amount - payment;
                tr.find('.pmt_principle2').val(formatDecimal(payment));
                tr.find('.principal2').val(formatDecimal(payment));
                tr.find('.total_payment2').val(formatDecimal(amount_payment));
                tr.find('.payment_amt2').val(formatDecimal(amount_payment));
                tr.find('.amt_balance2').val(formatDecimal(balance));
                tr.find('.balance2').val(formatDecimal(balance));

                var total_percent = 0;
                $('#tbl_dep .percentage2').each(function(){
                    var parent_ = $(this).parent().parent();
                    var per_tage_ = parent_.find('.percentage2').val()-0;
                    total_percent += per_tage_;
                });

                var j = 1;
                var i = 1;
                var balance = 0;
                var amount_percent = 0;
                var amount_pay = 0;
                var amount = 0;
                var new_rate = 0;
                var total_payment = 0;
                var payment = 0;
                var loan_amount = 0;
                var amount_total_payment = 0;
                $('#tbl_dep .percentage2').each(function(){
                    var parent = $(this).parent().parent();
                    var per_tage = parent.find('.percentage2').val()-0;
                    if(per_tage == '' || per_tage == 0) {
                        per_tage = 0;
                    }
                    amount_percent += per_tage;
                    var rate = parent.find('.rate2').val()-0;
                    //if(j == 1) {
                    var total_amount = $('#quick-payable').text()-0;
                    var rate_kh = $('#other_cur_paid').attr('rate')-0;
                    var kh_down = $('#other_cur_paid').val()-0;
                    var kh_2_us = kh_down/rate_kh;
                    var us_down = $('#amount_1').val();
                    var down_pay = kh_2_us + us_down;
                    loan_amount = total_amount - down_pay;
                    balance = loan_amount;
                    //}else {
                    //	balance = parent.prev().find('.balance2').val()-0;
                    //	loan_amount = parent.prev().find('.balance2').val()-0;
                    //}
                    new_rate = balance * ((per_tage/100)/12);

                    payment = formatDecimal(loan_amount * (per_tage/100));
                    amount_pay += payment;
                    total_payment = payment + new_rate;
                    amount_total_payment += total_payment;
                    balance = balance - payment;

                    //alert(total_percent +" | "+ amount_percent);
                    //alert(new_rate +" | "+ payment +" | "+ total_payment +" | "+ balance);


                    if(total_percent != amount_percent) {
                        parent.find('.rate2').val(formatDecimal(new_rate));
                        parent.find('.interest2').val(formatDecimal(new_rate));
                        parent.find('.pmt_principle2').val(formatDecimal(payment));
                        parent.find('.principle2').val(formatDecimal(payment));
                        parent.find('.total_payment2').val(formatDecimal(total_payment));
                        parent.find('.payment_amt2').val(formatDecimal(total_payment));
                        parent.find('.amt_balance2').val(formatDecimal(balance));
                        parent.find('.balance2').val(formatDecimal(balance));
                    }else{
                        if(i == 1) {
                            parent.find('.rate2').val(formatDecimal(new_rate));
                            parent.find('.interest2').val(formatDecimal(new_rate));
                            parent.find('.pmt_principle2').val(formatDecimal(payment));
                            parent.find('.principle2').val(formatDecimal(payment));
                            parent.find('.total_payment2').val(formatDecimal(total_payment));
                            parent.find('.payment_amt2').val(formatDecimal(total_payment));
                            parent.find('.amt_balance2').val(formatDecimal(balance));
                            parent.find('.balance2').val(formatDecimal(balance));
                        }else {
                            parent.find('.rate2').val(formatDecimal(new_rate));
                            parent.find('.interest2').val(formatDecimal(new_rate));
                            parent.find('.pmt_principle2').val("");
                            parent.find('.principle2').val(formatDecimal(payment));
                            parent.find('.total_payment2').val("");
                            parent.find('.payment_amt2').val(formatDecimal(total_payment));
                            parent.find('.amt_balance2').val("");
                            parent.find('.balance2').val(formatDecimal(balance));
                        }
                        i++;
                    }
                    j++;

                });
                //$('.total_percen').val(formatDecimal(amount_percent));
                $('.total_pay2').val(formatDecimal(amount_pay));
                $('.total_amount2').val(formatDecimal(amount_total_payment));
            }
        });
        $(document).on('keyup', '#tbl_dep .pmt_principle2', function () {


            var amount_payment = 0;
            var rate = 0;

            var pri = $(this).val()-0;
            var parent = $(this).parent().parent();
            var balance = 0;
            var amount_percent = 0;
            var amount_pay = 0;
            var amount = 0;
            var new_rate = 0;
            var total_payment = 0;
            var payment = 0;
            var perc = 0;
            var loan_amount = 0;
            var amount_total_payment = 0;

            var per_tage = parent.find('.percentage2').val()-0;
            if(per_tage == '' || per_tage == 0) {
                per_tage = 0;
            }
            //amount_percent += per_tage;
            var rate = parent.find('.rate2').val()-0;

            var total_amount = $('#quick-payable').text()-0;
            var rate_kh = $('#other_cur_paid').attr('rate')-0;
            var kh_down = $('#other_cur_paid').val()-0;
            var kh_2_us = kh_down/rate_kh;
            var us_down = $('#amount_1').val();
            var down_pay = kh_2_us + us_down;
            loan_amount = total_amount - down_pay;
            balance = loan_amount;
            perc = (loan_amount /100);
            perc = pri/perc;
            new_rate = balance * ((perc/100)/12);

            //payment = formatDecimal(loan_amount * (per_tage/100));
            total_payment = pri + new_rate;



            balance = balance - pri;

            parent.find('.rate2').val(formatDecimal(new_rate));
            parent.find('.interest2').val(formatDecimal(new_rate));
            parent.find('.percentage2').val(formatDecimal(perc));
            parent.find('.percentage_2').val(formatDecimal(perc));

            parent.find('.total_payment2').val(formatDecimal(total_payment));
            parent.find('.payment_amt2').val(formatDecimal(total_payment));
            parent.find('.amt_balance2').val(formatDecimal(balance));
            parent.find('.balance2').val(formatDecimal(balance));
            $('#tbl_dep .percentage2').each(function(){
                var p = $(this).parent().parent();
                amount_pay += p.find('.pmt_principle2').val()-0;
                amount_total_payment += p.find('.total_payment2').val()-0;;
            });

            //$('.total_percen').val(formatDecimal(amount_percent));
            $('.total_pay2').val(formatDecimal(amount_pay));
            $('.total_amount2').val(formatDecimal(amount_total_payment));

        });
        //######################## Code Search #############################//
        $("#Pcode").autocomplete({
            search: function(event, ui) {
                $('.test').empty();
            },
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#Pcode').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('Please select above first');
                    //response('');
                    $('#Pcode').focus();
                    return false;
                }
                $.ajax({
                    type: 'get',
                    url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/Pcode',
                    dataType: "json",
                    data: {
                        term: request.term,
                        warehouse_id: $("#poswarehouse").val(),
                        customer_id: $("#poscustomer").val()
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            autoFocus: false,
            delay: 200,
            response: function (event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                    //    $('#Pcode').focus();
                    //});
                    $(this).val('');
                }
                /*
                else if (ui.content.length == 1 && ui.content[0].id != 0) {
                    ui.item = ui.content[0];
                    $(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
                    $(this).autocomplete('close');
                }
				*/
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                    //    $('#Pcode').focus();
                    //});
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);
                    if (row)
                        $(this).val('');
                } else {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                }
            },
            open: function(event, ui) {
                //$(".ui-autocomplete").css("position", "absolute");
                $(".ui-autocomplete").css("width", "0");
                $(".ui-autocomplete").css("z-index", "99999");
                $(".data").css("z-index", "99999");
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            var inner_html = '';
            if(item.no_pro == 0){
                inner_html = '<td colspan="6" style="text-align:center;"><h2 style="font-size:37px"><b>no products</b></h2></td>';
            }else{
                var inner_html  = 	'<td style="width:50px;height:30px;">' +
                    '<center>'+
                    '<input type="checkbox" class="form-control" id="chk" name="val[]" value="'+ item.code +'"/>'+
                    '</center>' +
                    '</td>' +
                    '<td style="width:140px;">'+
                    item.code +
                    '</td>' +
                    '<td style="width:142px;">'+
                    item.label +
                    '</td>' +
                    //'<td style="width:114px;">'+
                    //	item.detail +
                    //'</td>' +
                    '<td style="width:102px;">'+
                    item.cate_id +
                    '</td>' +
                    '<td style="width:64px;">'+
                    item.price +
                    '</td>' +
                    //'<td style="width:64px;">'+
                    //	item.strap +
                    //'</td>' +
                    '<td class=""><a href="#ShowImage" data-toggle="modal"><img class="passimage" src="http://192.168.1.168:8181/CloudNET/iCloudERP_ACC/assets/uploads/thumbs/'+item.pic+'" alt="'+item.pic+'" style="width: 70px; height: 70px; margin: 0 auto; display: block;"></a></td>';
            }
            return $( "<tr></tr>")
                .data( "item.autocomplete", item )
                .append(inner_html)
                .appendTo($('.test'));
        };

        $('#Pcode').bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });

        $(document).on("click", ".passimage", function () {
            var img = $(this).attr('alt');
            var image = '<img src="http://192.168.1.168:8181/CloudNET/iCloudERP_ACC/assets/uploads/'+img+'" style="width:100%;"/>';
            $('.getImg').html(image);
        });

        //######################## Name Search #############################//
        $("#Pname").autocomplete({
            search: function(event, ui) {
                $('.test').empty();
            },
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#Pname').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('Please select above first');
                    //response('');
                    $('#Pname').focus();
                    return false;
                }
                var code     = $('#Pcode').val();
                var category = $('#Pcategory').val();
                var price    = $('#Pprice').val();
                $.ajax({
                    type: 'get',
                    url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/Pname',
                    dataType: "json",
                    data: {
                        code:code,
                        category:category,
                        price:price,
                        term: request.term,
                        warehouse_id: $("#poswarehouse").val(),
                        customer_id: $("#poscustomer").val()
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            autoFocus: false,
            delay: 200,
            response: function (event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                    // $('#Pname').focus();
                    //});
                    $(this).val('');
                }
                /*
                else if (ui.content.length == 1 && ui.content[0].id != 0) {
                    ui.item = ui.content[0];
                    $(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
                    $(this).autocomplete('close');
                }
				*/
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    //audio_error.play();
                    // bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                    //$('#Pname').focus();
                    //});
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);
                    if (row)
                        $(this).val('');
                } else {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                }
            },
            open: function(event, ui) {
                //$(".ui-autocomplete").css("position", "absolute");
                $(".ui-autocomplete").css("width", "0");
                $(".ui-autocomplete").css("z-index", "99999");
                $(".data").css("z-index", "99999");
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            if(item.no_pro == 0){
                inner_html = '<td colspan="6" style="text-align:center;"><h2 style="font-size:37px"><b>no products</b></h2></td>';
            }else{
                var inner_html  = 	'<td style="width:50px;height:30px;">' +
                    '<center>'+
                    '<input type="checkbox" class="form-control" id="chk" name="val[]" value="'+ item.code +'"/>'+
                    '</center>' +
                    '</td>' +
                    '<td style="width:140px;">'+
                    item.code +
                    '</td>' +
                    '<td style="width:142px;">'+
                    item.label +
                    '</td>' +
                    //'<td style="width:114px;">'+
                    //	item.detail +
                    //'</td>' +
                    '<td style="width:102px;">'+
                    item.cate_id +
                    '</td>' +
                    '<td style="width:64px;">'+
                    item.price +
                    '</td>' +
                    //'<td style="width:64px;">'+
                    //	item.strap +
                    //'</td>' +
                    '<td class=""><a href="#ShowImage" data-toggle="modal"><img class="passimage" src="http://192.168.1.168:8181/CloudNET/iCloudERP_ACC/assets/uploads/thumbs/'+item.pic+'" alt="'+item.pic+'" style="width: 70px; height: 70px; margin: 0 auto; display: block;"></a></td>';
            }
            return $( "<tr></tr>")
                .data( "item.autocomplete", item )
                .append(inner_html)
                .appendTo($('.test'));
        };

        $('#Pname').bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });

        //######################## Description Search #############################//
        $("#Pdescription").autocomplete({
            search: function(event, ui) {
                $('.test').empty();
            },
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#Pdescription').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('Please select above first');
                    //response('');
                    $('#Pdescription').focus();
                    return false;
                }
                var coding = $('#Pcode').val();
                var nameing = $('#Pname').val();
                var category = $('#Pcategory').val();
                var price    = $('#Pprice').val();
                $.ajax({
                    type: 'get',
                    url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/Pdescription',
                    dataType: "json",
                    data: {
                        code:coding,
                        named: nameing,
                        price:price,
                        category:category,
                        term: request.term,
                        warehouse_id: $("#poswarehouse").val(),
                        customer_id: $("#poscustomer").val()
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            autoFocus: false,
            delay: 200,
            response: function (event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                    //    $('#Pdescription').focus();
                    //});
                    $(this).val('');
                }
                /*
                else if (ui.content.length == 1 && ui.content[0].id != 0) {
                    ui.item = ui.content[0];
                    $(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
                    $(this).autocomplete('close');
                }
				*/
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                    //    $('#Pdescription').focus();
                    //});
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);
                    if (row)
                        $(this).val('');
                } else {
                    //audio_error.play();
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                }
            },
            open: function(event, ui) {
                //$(".ui-autocomplete").css("position", "absolute");
                $(".ui-autocomplete").css("width", "0");
                $(".ui-autocomplete").css("z-index", "99999");
                $(".data").css("z-index", "99999");
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            if(item.no_pro == 0){
                inner_html = '<td colspan="6" style="text-align:center;"><h2 style="font-size:37px"><b>no products</b></h2></td>';
            }else{
                var inner_html  = 	'<td style="width:50px;height:30px;">' +
                    '<center>'+
                    '<input type="checkbox" class="form-control" id="chk" name="val[]" value="'+ item.code +'"/>'+
                    '</center>' +
                    '</td>' +
                    '<td style="width:140px;">'+
                    item.code +
                    '</td>' +
                    '<td style="width:142px;">'+
                    item.label +
                    '</td>' +
                    //'<td style="width:114px;">'+
                    //	item.detail +
                    //'</td>' +
                    '<td style="width:102px;">'+
                    item.cate_id +
                    '</td>' +
                    '<td style="width:64px;">'+
                    item.price +
                    '</td>' +
                    //'<td style="width:64px;">'+
                    //	item.strap +
                    //'</td>' +
                    '<td class=""><a href="#ShowImage" data-toggle="modal"><img class="passimage" src="http://192.168.1.168:8181/CloudNET/iCloudERP_ACC/assets/uploads/thumbs/'+item.pic+'" alt="'+item.pic+'" style="width: 70px; height: 70px; margin: 0 auto; display: block;"></a></td>';
            }
            return $( "<tr></tr>")
                .data( "item.autocomplete", item )
                .append(inner_html)
                .appendTo($('.test'));
        };

        $('#Pdescription').bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });

        //######################## Category Search #############################//
        $("#Pcategory").autocomplete({
            search: function(event, ui) {
                $('.test').empty();
            },
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#Pcategory').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('Please select above first');
                    //response('');
                    $('#Pcategory').focus();
                    return false;
                }
                var coding = $('#Pcode').val();
                var nameing = $('#Pname').val();
                var price    = $('#Pprice').val();
                $.ajax({
                    type: 'get',
                    url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/Pcategory',
                    dataType: "json",
                    data: {
                        code: coding,
                        named: nameing,
                        price: price,
                        term: request.term,
                        warehouse_id: $("#poswarehouse").val(),
                        customer_id: $("#poscustomer").val()
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            autoFocus: false,
            delay: 200,
            response: function (event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                    //    $('#Pcategory').focus();
                    //});
                    $(this).val('');
                }
                /*
                else if (ui.content.length == 1 && ui.content[0].id != 0) {
                    ui.item = ui.content[0];
                    $(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
                    $(this).autocomplete('close');
                }
				*/
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    //audio_error.play();
                    // bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                    //    $('#Pcategory').focus();
                    //});
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);

                    if (row)
                        $(this).val('');
                } else {
                    //audio_error.play();
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                }
            },
            open: function(event, ui) {
                //$(".ui-autocomplete").css("position", "absolute");
                $(".ui-autocomplete").css("width", "0");
                $(".ui-autocomplete").css("z-index", "99999");
                $(".data").css("z-index", "99999");
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            if(item.no_pro == 0){
                inner_html = '<td colspan="6" style="text-align:center;"><h2 style="font-size:37px"><b>no products</b></h2></td>';
            }else{
                var inner_html  = 	'<td style="width:50px;height:30px;">' +
                    '<center>'+
                    '<input type="checkbox" class="form-control" id="chk" name="val[]" value="'+ item.code +'"/>'+
                    '</center>' +
                    '</td>' +
                    '<td style="width:140px;">'+
                    item.code +
                    '</td>' +
                    '<td style="width:142px;">'+
                    item.label +
                    '</td>' +
                    //'<td style="width:114px;">'+
                    //	item.detail +
                    //'</td>' +
                    '<td style="width:102px;">'+
                    item.cate_id +
                    '</td>' +
                    '<td style="width:64px;">'+
                    item.price +
                    '</td>' +
                    //'<td style="width:64px;">'+
                    //	item.strap +
                    //'</td>'+
                    '<td class=""><a href="#ShowImage" data-toggle="modal"><img class="passimage" src="http://192.168.1.168:8181/CloudNET/iCloudERP_ACC/assets/uploads/thumbs/'+item.pic+'" alt="'+item.pic+'" style="width: 70px; height: 70px; margin: 0 auto; display: block;"></a></td>';
            }
            return $( "<tr></tr>")
                .data( "item.autocomplete", item )
                .append(inner_html)
                .appendTo($('.test'));
        };

        $('#Pcategory').bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });

        //######################## Price Search #############################//
        $("#Pprice").autocomplete({
            search: function(event, ui) {
                $('.test').empty();
            },
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#Pprice').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('Please select above first');
                    //response('');
                    $('#Pprice').focus();
                    return false;
                }
                var coding = $('#Pcode').val();
                var nameing = $('#Pname').val();
                var category    = $('#Pcategory').val();
                $.ajax({
                    type: 'get',
                    url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/Pprice',
                    dataType: "json",
                    data: {
                        code:coding,
                        name:nameing,
                        category:category,
                        term: request.term,
                        warehouse_id: $("#poswarehouse").val(),
                        customer_id: $("#poscustomer").val()
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            autoFocus: false,
            delay: 200,
            response: function (event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                    //    $('#Pprice').focus();
                    //});
                    $(this).val('');
                }
                /*
                else if (ui.content.length == 1 && ui.content[0].id != 0) {
                    ui.item = ui.content[0];
                    $(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
                    $(this).autocomplete('close');
                }
				*/
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    //audio_error.play();
                    // bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                    //$('#Pprice').focus();
                    // });
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);

                    $('#product-sale-view').html("sdfsfd");

                    if (row)
                        $(this).val('');
                } else {
                    //audio_error.play();
                    //bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                }
            },
            open: function(event, ui) {
                //$(".ui-autocomplete").css("position", "absolute");
                $(".ui-autocomplete").css("width", "0");
                $(".ui-autocomplete").css("z-index", "99999");
                $(".data").css("z-index", "99999");
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            if(item.no_pro == 0){
                inner_html = '<td colspan="6" style="text-align:center;"><h2 style="font-size:37px"><b>no products</b></h2></td>';
            }else{
                var inner_html  = 	'<td style="width:50px;height:30px;">' +
                    '<center>'+
                    '<input type="checkbox" class="form-control" id="chk" name="val[]" value="'+ item.code +'"/>'+
                    '</center>' +
                    '</td>' +
                    '<td style="width:140px;">'+
                    item.code +
                    '</td>' +
                    '<td style="width:142px;">'+
                    item.label +
                    '</td>' +
                    //'<td style="width:114px;">'+
                    //	item.detail +
                    //'</td>' +
                    '<td style="width:102px;">'+
                    item.cate_id +
                    '</td>' +
                    '<td style="width:64px;">'+
                    item.price +
                    '</td>' +
                    //'<td style="width:64px;">'+
                    //	item.strap +
                    //'</td>'+
                    '<td class=""><a href="#ShowImage" data-toggle="modal"><img class="passimage" src="http://192.168.1.168:8181/CloudNET/iCloudERP_ACC/assets/uploads/thumbs/'+item.pic+'" alt="'+item.pic+'" style="width: 70px; height: 70px; margin: 0 auto; display: block;"></a></td>';
            }
            return $( "<tr></tr>")
                .data( "item.autocomplete", item )
                .append(inner_html)
                .appendTo($('.test'));
        };

        $('#Pprice').bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });

        //######################## Strap Search #############################//
        $("#Pstrap").autocomplete({
            search: function(event, ui) {
                $('.test').empty();
            },
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#Pstrap').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('Please select above first');
                    $('#Pstrap').focus();
                    return false;
                }

                $.ajax({
                    type: 'get',
                    url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/Pstrap',
                    dataType: "json",
                    data: {
                        term: request.term,
                        warehouse_id: $("#poswarehouse").val(),
                        customer_id: $("#poscustomer").val()
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            autoFocus: false,
            delay: 200,
            response: function (event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    //audio_error.play();
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                        $('#Pstrap').focus();
                    });
                    $(this).val('');
                }
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                        $('#Pstrap').focus();
                    });
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);

                    $('#product-sale-view').html("sdfsfd");

                    if (row)
                        $(this).val('');
                } else {
                    //audio_error.play();
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                }
            },
            open: function(event, ui) {
                //$(".ui-autocomplete").css("position", "absolute");
                $(".ui-autocomplete").css("width", "0");
                $(".ui-autocomplete").css("z-index", "99999");
                $(".data").css("z-index", "99999");
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            var inner_html  = 	'<td style="width:50px;height:30px;">' +
                '<center>'+
                '<input class="checkbox multi-select input-xs" type="checkbox" name="val[]" value="'+ item.code +'"/>'+
                '</center>' +
                '</td>' +
                '<td style="width:140px;">'+
                item.code +
                '</td>' +
                '<td style="width:142px;">'+
                item.label +
                '</td>' +
                '<td style="width:114px;">'+
                item.detail +
                '</td>' +
                '<td style="width:102px;">'+
                item.cate_id +
                '</td>' +
                '<td style="width:64px;">'+
                item.price +
                '</td>' +
                '<td style="width:64px;">'+
                item.strap +
                '</td>'+
                '<td class=""><a href="#ShowImage" data-toggle="modal"><img class="img-circle passimage" src="http://192.168.1.168:8181/CloudNET/iCloudERP_ACC/assets/uploads/thumbs/'+item.pic+'" alt="'+item.pic+'" style="width:30px; height:30px;"></a></td>';
            return $( "<tr></tr>")
                .data( "item.autocomplete", item )
                .append(inner_html)
                .appendTo($('.test'));
        };

        $('#Pstrap').bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });


        $('#Pcode').bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });

        //#################### Search Floor #######################//
        function floor_status(x){
            var lang = {'0': 'Free', '2': 'book', '1': 'busy'};
            if(x == 0){
                return '<div class="text-center"><span class="label label-default">'+lang[x]+'</span></div>';
            }else if(x == 1){
                return '<div class="text-center"><span class="label label-warning">'+lang[x]+'</span></div>';
            }else{
                return '<div class="text-center"><span class="label label-primary">'+lang[x]+'</span></div>';
            }
        }
        $("#fcode").autocomplete({
            search: function(event, ui) {
                $('.floor').empty();
            },
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#fcode').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('Please select above first');
                    //response('');
                    $('#fcode').focus();
                    return false;
                }
                $.ajax({
                    type: 'get',
                    url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/fcode',
                    dataType: "json",
                    data: {
                        term: request.term,
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            autoFocus: false,
            delay: 200,
            response: function (event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    //audio_error.play();
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                        $('#fcode').focus();
                    });
                    $(this).val('');
                }
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                        $('#fcode').focus();
                    });
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);
                    if (row)
                        $(this).val('');
                } else {
                    //audio_error.play();
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                }
            },
            open: function(event, ui) {
                //$(".ui-autocomplete").css("position", "absolute");
                $(".ui-autocomplete").css("width", "0");
                $(".ui-autocomplete").css("z-index", "99999");
                $(".data").css("z-index", "99999");
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            var inner_html  = 	'<td style="width:50px;height:30px;">' +
                '<center>'+
                '<input class="checkbox multi-select input-xs" type="checkbox" name="val[]" value="'+ item.item_id +'"/>'+
                '</center>' +
                '</td>' +
                '<td style="width:140px;">'+
                item.code + '<input type="hidden" value="'+ item.code +'" id="code'+item.item_id+'"/>' +
                '</td>' +
                '<td style="width:142px;">'+
                item.label +
                '</td>' +
                '<td style="width:142px;">'+
                floor_status(item.status) + '<input type="hidden" value="'+ item.status +'" id="status'+item.item_id+'"/>' +
                '</td>' +
                '<td style="width:114px;">'+
                item.floor +
                '</td>';
            return $( "<tr></tr>")
                .data( "item.autocomplete", item )
                .append(inner_html)
                .appendTo($('.floor'));
        };

        $('#fcode').bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });

        $("#fdescription").autocomplete({
            search: function(event, ui) {
                $('.floor').empty();
            },
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#fdescription').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('Please select above first');
                    //response('');
                    $('#fdescription').focus();
                    return false;
                }
                $.ajax({
                    type: 'get',
                    url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/fdescription',
                    dataType: "json",
                    data: {
                        term: request.term,
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            autoFocus: false,
            delay: 200,
            response: function (event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    //audio_error.play();
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                        $('#fdescription').focus();
                    });
                    $(this).val('');
                }
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                        $('#fdescription').focus();
                    });
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);
                    if (row)
                        $(this).val('');
                } else {
                    //audio_error.play();
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                }
            },
            open: function(event, ui) {
                //$(".ui-autocomplete").css("position", "absolute");
                $(".ui-autocomplete").css("width", "0");
                $(".ui-autocomplete").css("z-index", "99999");
                $(".data").css("z-index", "99999");
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            var inner_html  = 	'<td style="width:50px;height:30px;">' +
                '<center>'+
                '<input class="checkbox multi-select input-xs" type="checkbox" name="val[]" value="'+ item.item_id +'"/>'+
                '</center>' +
                '</td>' +
                '<td style="width:140px;">'+
                item.code + '<input type="hidden" value="'+ item.code +'" id="code'+item.item_id+'"/>' +
                '</td>' +
                '<td style="width:142px;">'+
                item.label +
                '</td>' +
                '<td style="width:142px;">'+
                floor_status(item.status) + '<input type="hidden" value="'+ item.status +'" id="status'+item.item_id+'"/>' +
                '</td>' +
                '<td style="width:114px;">'+
                item.floor +
                '</td>';
            return $( "<tr></tr>")
                .data( "item.autocomplete", item )
                .append(inner_html)
                .appendTo($('.floor'));
        };

        $('#fdescription').bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });

        $("#ffloor").autocomplete({
            search: function(event, ui) {
                $('.floor').empty();
            },
            source: function (request, response) {
                if (!$('#poscustomer').val()) {
                    $('#ffloor').val('').removeClass('ui-autocomplete-loading');
                    bootbox.alert('Please select above first');
                    //response('');
                    $('#ffloor').focus();
                    return false;
                }
                $.ajax({
                    type: 'get',
                    url: 'http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/ffloor',
                    dataType: "json",
                    data: {
                        term: request.term,
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 1,
            autoFocus: false,
            delay: 200,
            response: function (event, ui) {
                if ($(this).val().length >= 16 && ui.content[0].id == 0) {
                    //audio_error.play();
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                        $('#ffloor').focus();
                    });
                    $(this).val('');
                }
                else if (ui.content.length == 1 && ui.content[0].id == 0) {
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.', function () {
                        $('#ffloor').focus();
                    });
                    $(this).val('');

                }
            },
            select: function (event, ui) {
                event.preventDefault();
                if (ui.item.id !== 0) {
                    var row = add_invoice_item(ui.item);
                    if (row)
                        $(this).val('');
                } else {
                    //audio_error.play();
                    bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                }
            },
            open: function(event, ui) {
                //$(".ui-autocomplete").css("position", "absolute");
                $(".ui-autocomplete").css("width", "0");
                $(".ui-autocomplete").css("z-index", "99999");
                $(".data").css("z-index", "99999");
            }
        }).autocomplete( "instance" )._renderItem = function( ul, item ) {
            var inner_html  = 	'<td style="width:50px;height:30px;">' +
                '<center>'+
                '<input class="checkbox multi-select input-xs" type="checkbox" name="val[]" value="'+ item.item_id +'"/>'+
                '</center>' +
                '</td>' +
                '<td style="width:140px;">'+
                item.code + '<input type="hidden" value="'+ item.code +'" id="code'+item.item_id+'"/>' +
                '</td>' +
                '<td style="width:142px;">'+
                item.label +
                '</td>' +
                '<td style="width:142px;">'+
                floor_status(item.status) + '<input type="hidden" value="'+ item.status +'" id="status'+item.item_id+'"/>' +
                '</td>' +
                '<td style="width:114px;">'+
                item.floor +
                '</td>';
            return $( "<tr></tr>")
                .data( "item.autocomplete", item )
                .append(inner_html)
                .appendTo($('.floor'));
        };

        $('#ffloor').bind('keypress', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $(this).autocomplete("search");
            }
        });

        $(document).on('click', '#addItem', function (e) {

            $('#modal-loading').show();
            var susp_id = $('#suspend_id').val();
            var table_no = $('#table_no').val();
            var item_row = $('#posTable tbody tr').length;
            // code = $(this).val(),
            var val = [];
            wh = $('#poswarehouse').val(),
                cu = $('#poscustomer').val();
            var subtotal = $('#total').html();
            $(':checkbox:checked').each(function(i){
                code = val[i] = $(this).val();
                $.ajax({
                    type: "get",
                    url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/getProductDataByCode",
                    data: {code: code, warehouse_id: wh, customer_id: cu, suspend_id: susp_id, item_rows: item_row, sub_total: subtotal},
                    dataType: "json",
                    success: function (data) {
                        e.preventDefault();
                        if (data !== null) {
                            var item_id = data['item_id'];
                            var image = "http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/"+data['image'];
                            var title = data['row']['name'];
                            var code = data['row']['code'];
                            var total = data['sub_total'];
                            var item ='<button id="'+code+'" type="button" value="'+code+'" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="'+title+'"><img src="'+image+'" alt="'+title+'" style="width: 60px; height: 60px;" class="img-rounded"/><span>'+title+'</span></button>';
                            var suspend_html = '<p> '+ table_no +'</p>';
                            suspend_html += '<div class="sup_number'+susp_id+'">('+(item_row+1)+')</div>';
                            suspend_html += '<br/>'+formatMoney(total);
                            $('.wrap_suspend'+susp_id).html(suspend_html);
                            $('#product-sale-view').prepend(item);
                            add_invoice_item(data);
                            $('#modal-loading').hide();
                        } else {
                            //audio_error.play();
                            bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                            $('#modal-loading').hide();
                        }
                    }
                });
            });
        });

        $(document).on('click', '#addSearch', function (e) {

            $('#modal-loading').show();
            var susp_id = $('#suspend_id').val();
            var table_no = $('#table_no').val();
            var item_row = $('#posTable tbody tr').length;
            // code = $(this).val(),
            var val = [];
            wh = $('#poswarehouse').val(),
                cu = $('#poscustomer').val();
            var subtotal = $('#total').html();
            $(':checkbox:checked').each(function(i){
                code = val[i] = $(this).val();
                status = val[i] = $("#status"+code).val();
                co_id = val[i] = $("#code"+code).val();
                if(status == 0){
                    //$('#'+co_id).trigger('dblclick');
                    $("[id='"+co_id+"']").trigger('dblclick');
                }else{
                    $.ajax({
                        type: "get",
                        url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/getProductSearchByCode",
                        data: {code: code, warehouse_id: wh, customer_id: cu, suspend_id: susp_id, item_rows: item_row, sub_total: subtotal},
                        dataType: "json",
                        success: function (data) {
                            if(data === null){
                                bootbox.alert('No matching result found! Product might be out of stock in the selected warehouse.');
                                $('#modal-loading').hide();
                            }else{
                                $.each(data, function(i, items) {
                                    e.preventDefault();

                                    var item_id = items['item_id'];
                                    var image = "http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/thumbs/"+items['image'];
                                    var title = items['row']['name'];
                                    var code = items['row']['code'];
                                    var total = items['sub_total'];
                                    var item ='<button id="'+code+'" type="button" value="'+code+'" title="" class="btn-prni btn-default product pos-tip" data-container="body" data-original-title="'+title+'"><img src="'+image+'" alt="'+title+'" style="width: 60px; height: 60px;" class="img-rounded"/><span>'+title+'</span></button>';
                                    var suspend_html = '<p> '+ table_no +'</p>';
                                    suspend_html += '<div class="sup_number'+susp_id+'">('+(item_row+1)+')</div>';
                                    suspend_html += '<br/>'+formatMoney(total);
                                    $('.wrap_suspend'+susp_id).html(suspend_html);
                                    $('#product-sale-view').prepend(item);
                                    add_invoice_item(items);
                                    //$('#modal-loading').hide();
                                })
                            }
                        }
                    });
                }
            });
        });

        $(document).on('keyup','#tbl_dep .pmt_principle, #tbl_dep .rate', function () {
            var rate_all = $('#depreciation_rate_1').val()-0;
            var term = $('#depreciation_term_1').val()-0;
            var amount = 0;
            var percent = 0;
            var amount_payment = 0;
            var rate = 0;
            var balance = 0;
            var payment = $(this).val()-0;
            var tr = $(this).parent().parent();
            if(payment < 0 ) {
                alert("sorry you can not input the rate value less than zerro or bigger than 100");
                $(this).val('');
                $(this).focus();
                return false;
            }else {
                amount = tr.find('.balance').val();
                rate = tr.find('.interest').val()-0;
                percent = (payment / amount) * 100;
                amount_payment = rate + payment;
                balance = amount - payment;
                tr.find('.percentage').val(percent.toFixed(4));
                tr.find('.percentage_').val(percent);
                tr.find('.total_payment').val(formatDecimal(amount_payment));
                tr.find('.payment_amt').val(amount_payment);
                tr.find('.amt_balance').val(formatDecimal(balance));
                tr.find('.balance').val(balance);

                var total_pay = 0;
                $('#tbl_dep .pmt_principle').each(function(){
                    var parent = $(this).parent().parent();
                    var pay_amt_ = parent.find('.pmt_principle').val()-0;
                    total_pay += pay_amt_;
                });

                var j = 1;
                var i = 1;
                var balance = 0;
                var amount_pay = 0;
                var total_per = 0;
                var amount_total_payment  = 0;
                $('#tbl_dep .pmt_principle').each(function(){
                    var parent = $(this).parent().parent();
                    var pay_amt = parent.find('.pmt_principle').val()-0;
                    if(pay_amt == '' || pay_amt < 0) {
                        pay_amt = 0;
                    }
                    amount_pay += pay_amt;
                    var rate = parent.find('.rate').val()-0;
                    if(j == 1) {
                        var total_amount = $('#quick-payable').text()-0;
                        var rate_kh = $('#other_cur_paid').attr('rate')-0;
                        var kh_down = $('#other_cur_paid').val()-0;
                        var kh_2_us = kh_down/rate_kh;
                        var us_down = $('#amount_1').val();
                        var down_pay = kh_2_us + us_down;
                        var loan_amount = total_amount - down_pay;
                        balance = loan_amount;
                    }else {
                        balance = parent.prev().find('.balance').val()-0;
                    }
                    if(rate == 0) {
                        var new_rate = 0;
                    }else {
                        var new_rate = balance * ((rate_all/term)/100);
                    }
                    var percen = (pay_amt / balance) * 100;
                    total_per += percen;
                    //var payment = balance * (per_tage/100);
                    var total_payment = pay_amt + new_rate;
                    amount_total_payment += total_payment;
                    var balance = balance - pay_amt;

                    //alert(new_rate);
                    if(total_pay != amount_pay) {
                        parent.find('.rate').val(formatDecimal(new_rate));
                        parent.find('.interest').val(new_rate);
                        parent.find('.percentage').val(percen.toFixed(4));
                        parent.find('.percentage_').val(percen);
                        parent.find('.total_payment').val(formatDecimal(total_payment));
                        parent.find('.payment_amt').val(total_payment);
                        parent.find('.amt_balance').val(formatDecimal(balance));
                        parent.find('.balance').val(balance);
                    }else{
                        if(i == 1) {
                            parent.find('.rate').val(formatDecimal(new_rate));
                            parent.find('.interest').val(new_rate);
                            parent.find('.percentage').val(percen.toFixed(4));
                            parent.find('.percentage_').val(percen);
                            parent.find('.total_payment').val(formatDecimal(total_payment));
                            parent.find('.payment_amt').val(total_payment);
                            parent.find('.amt_balance').val(formatDecimal(balance));
                            parent.find('.balance').val(balance);
                        }else {
                            parent.find('.rate').val(formatDecimal(new_rate));
                            parent.find('.interest').val(new_rate);
                            parent.find('.percentage').val("");
                            parent.find('.percentage_').val(percen);
                            parent.find('.total_payment').val("");
                            parent.find('.payment_amt').val(total_payment);
                            parent.find('.amt_balance').val("");
                            parent.find('.balance').val(balance);
                        }
                        i++;
                    }
                    j++;
                });
                $('.total_percen').val(formatDecimal(total_per));
                $('.total_pay').val(formatDecimal(amount_pay));
                $('.total_amount').val(formatDecimal(amount_total_payment));
            }
        });

        function checkDeposit() {
            var customer_id = $("#poscustomer").val();

            if (customer_id != '') {
                $.ajax({
                    type: "get", async: false,
                    url: site.base_url + "sales/validate_deposit/" + customer_id,
                    dataType: "json",
                    success: function (data) {
                        if (data === false) {
                            $('#deposit_no_1').parent('.form-group').addClass('has-error');
                            bootbox.alert('invalid customer');
                        } else if (data.id !== null && data.id !== $('#poscustomer').val()) {
                            $('#deposit_no_1').parent('.form-group').addClass('has-error');
                            bootbox.alert('This Customer has no Deposit');

                            $(".paid_by").val($(".paid_by option:first").val());
                        } else {
                            amount1 = $("#amount_1").val() - 0;
                            amount2 = $("#amount_2").val() ? $("#amount_2").val()-0 : 0;
                            amount  = amount1 + amount2;

                            $('#dp_details_1').html('<small>Customer Name: ' + data.name + '<br>Amount: <span class="deposit_total_amount">' + (data.deposit_amount == null ? 0 : data.deposit_amount) + '</span> - Balance: <span class="deposit_total_balance">' +(data.deposit_amount - amount) + '</span></small>');

                            amount2 = $("#amount_2").val();
                            if(amount2){
                                $('#dp_details_2').html('<small>Customer Name: ' + data.name + '<br>Amount: <span class="deposit_total_amount">' + (data.deposit_amount == null ? 0 : data.deposit_amount) + '</span> - Balance: <span class="deposit_total_balance">' +(data.deposit_amount - amount) + '</span></small>');
                            }

                            $('#deposit_no_1').parent('.form-group').removeClass('has-error');
                            //calculateTotals();
                            //$('#amount_1').val(data.deposit_amount - amount).focus();
                        }
                    }
                });
            }
        }

        $(document).on('change', '.paid_by', function () {
            var p_val = $(this).val(),
                id = $(this).attr('id'),
                pa_no = id.substr(id.length - 1);
            $('#rpaidby').val(p_val);
            if (p_val == 'cash' || p_val == 'other') {
                $('.pcheque_' + pa_no).hide();
                $('.pvoucher_' + pa_no).hide();
                $('.pcc_' + pa_no).hide();
                $('.depreciation_' + pa_no).hide();
                $('.pcash_' + pa_no).show();
                $('#payment_note_' + pa_no).focus();
            } else if (p_val == 'CC' || p_val == 'stripe' || p_val == 'ppp') {
                $('.pcheque_' + pa_no).hide();
                $('.pvoucher_' + pa_no).hide();
                $('.pcash_' + pa_no).hide();
                $('.pcc_' + pa_no).show();
                $('.depreciation_' + pa_no).hide();
                $('#swipe_' + pa_no).focus();
            } else if (p_val == 'Cheque') {
                $('.pcc_' + pa_no).hide();
                $('.depreciation_' + pa_no).hide();
                $('.pcash_' + pa_no).hide();
                $('.pcheque_' + pa_no).show();
                $('#cheque_no_' + pa_no).focus();
                $('.pvoucher_' + pa_no).hide();
            }else if (p_val == 'Voucher') {
                $('.pcc_' + pa_no).hide();
                $('.depreciation_' + pa_no).hide();
                $('.pcash_' + pa_no).hide();
                $('.pvoucher_' + pa_no).show();
                $('#voucher_no_' + pa_no).focus();
                $('.pcheque_' + pa_no).hide();
            } else if(p_val == 'depreciation') {
                $('.pcheque_' + pa_no).hide();
                $('.pvoucher_' + pa_no).hide();
                $('.pcash_' + pa_no).hide();
                $('.pcc_' + pa_no).hide();
                $('.depreciation_' + pa_no).show();
                $('#swipe_' + pa_no).focus();
            } else {
                $('.pcheque_' + pa_no).hide();
                $('.pvoucher_' + pa_no).hide();
                $('.pcc_' + pa_no).hide();
                $('.depreciation_' + pa_no).hide();
                $('.pcash_' + pa_no).hide();
            }
            if (p_val == 'gift_card') {
                $('.gc_' + pa_no).show();
                $('.ngc_' + pa_no).hide();
                $('#gift_card_no_' + pa_no).focus();
            } else {
                $('.ngc_' + pa_no).show();
                $('.gc_' + pa_no).hide();
                $('#gc_details_' + pa_no).html('');
            }
            if(p_val == 'deposit') {
                $('.dp_' + pa_no).show();
                $('.ngc_' + pa_no).hide();
                checkDeposit();
            }else{
                $('.ngc_' + pa_no).show();
                $('.dp_' + pa_no).hide();
                $('#dp_details_' + pa_no).html('');
            }
        });

        $(document).on('click', '#submit-sale', function () {
            //alert(total_paid);
            var balance = parseFloat($("#balance").text());
            var other_balance = parseFloat($(".curr_balance").text());

            var amount_txt = $("#amount_1").val();
            var other_amount_txt = $("#other_cur_paid").val();

            var cur_pay = $(".curr_tpay").text();

            var deposit_amount = parseFloat($(".deposit_total_amount").text());
            var deposit_balance = parseFloat($(".deposit_total_balance").text());
            deposit_balance = (deposit_amount - Math.abs(amount_txt));

            if(deposit_balance > deposit_amount || deposit_balance < 0 || deposit_amount == 0){
                bootbox.alert('Your Deposit Limited: ' + deposit_amount);
                $('#amount_1').val(deposit_amount);
                $(".deposit_total_balance").text(deposit_amount - $('#amount_1').val()-0);
                return false;
            }

            var arr_push=[];
            $('.sprice').each(function (i) {
                var price = $(this).text();
                arr_push.push(price);

            });
            var i = 0;
            var chks = false;
            $('.cost').each(function (i){
                var cost = $(this).val();
                if(arr_push[i] >= cost){
                    chks=false;

                }else{
                    chks=true;
                    return false;
                }

            });

            if(chks == true){
                bootbox.confirm("Are you sure want to sale it?", function (res) {
                    if (res == true) {
                        $('#pos_note').val(localStorage.getItem('posnote'));
                        $('#staff_note').val(localStorage.getItem('staffnote'));
                        $('#suspend_room').val(localStorage.getItem('suspendroom'));
                        $('#pos_date').val(localStorage.getItem('date'));
                        $('#submit-sale').text('Loading...').attr('disabled', true);
                        $('#pos-sale-form').submit();
                    }
                });
                return false;
            }else{
                $('#pos_note').val(localStorage.getItem('posnote'));
                $('#staff_note').val(localStorage.getItem('staffnote'));
                $('#suspend_room').val(localStorage.getItem('suspendroom'));
                $('#pos_date').val(localStorage.getItem('date'));
                $('#submit-sale').text('Loading...').attr('disabled', true);
                $('#pos-sale-form').submit();
            }

            if(balance < 0 && other_balance < 0 || (amount_txt == 0 && other_amount_txt ==0)){
                bootbox.confirm("Paid amount is less than the payable amount. Please press OK to submit the sale.", function (res) {
                    if (res == true) {
                        $('#pos_note').val(localStorage.getItem('posnote'));
                        $('#staff_note').val(localStorage.getItem('staffnote'));
                        $('#suspend_room').val(localStorage.getItem('suspendroom'));
                        $('#pos_date').val(localStorage.getItem('date'));
                        $('#submit-sale').text('Loading...').attr('disabled', true);
                        $('#pos-sale-form').submit();
                    }
                });
                return false;
            }else{
                $('#pos_note').val(localStorage.getItem('posnote'));
                $('#staff_note').val(localStorage.getItem('staffnote'));
                $('#suspend_room').val(localStorage.getItem('suspendroom'));
                $('#pos_date').val(localStorage.getItem('date'));
                //console.log($('#pos_note').val(), $('#staff_note').val());
                $(this).text('Loading...').attr('disabled', true);
                $('#pos-sale-form').submit();
            }


        });

        $('.sus_sale').on('click', function (e) {
            var sid = $(this).attr("id");
            if (count > 1) {
                bootbox.confirm("You will lose sale data. Press OK to leave and Cancel to Stay on this page.", function (gotit) {
                    if (gotit == false) {
                        return true;
                    } else {
                        window.location.href = "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/index/" + sid;
                    }
                });
            } else {
                window.location.href = "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/index/" + sid;
            }
            return false;
        });

        $('.combine_table').on('click', function(e){
            var joined = [];
            $('.chsuspend:checked').each(function(e) {
                valu = $(this).val();
                joined.push(valu);
            });
            joined = joined.join('_');
            window.location.href = "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/index/0/0/" + joined;
        });

        $('.clear_suspend').on('click', function (e) {
            var hrefs = $(this).attr("hrefs");
            bootbox.confirm("You will lose sale data. Press OK to leave and Cancel to Stay on this page.", function (gotit) {
                if (gotit == true) {
                    window.location.href = hrefs;
                }
            });
            return false;
        });

        $('.suspend-button').dblclick(function () {
            ref = $(this).val();
            nref = $(this).attr('id');

            if (!ref || ref == '') {
                bootbox.alert('Please type reference note and submit to suspend this sale');
                return false;
            } else {
                suspend = $('<span></span>');
                suspend.html('<input type="hidden" name="suspend" value="yes" /><input type="hidden" name="suspend_id" value="' + ref + '" /><input type="hidden" name="suspend_name" value="' + nref + '" />');

                suspend.appendTo("#hidesuspend");
                $('#total_items').val(count - 1);
                $('#pos-sale-form').submit();

            }
        });

        $("#date").datetimepicker({
            format: 'yyyy-mm-dd h:i:ss',
            fontAwesome: true,
            language: 'erp',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0
        }).datetimepicker('update', new Date()).trigger('change');

        $("#date").live('change keyup paste', function(){
            $(".date_c").val($(this).val());
        });

        $('.dateline').datetimepicker({
            format: site.dateFormats.js_sdate,
            fontAwesome: true,
            language: 'erp',
            todayBtn: 1,
            autoclose: 1,
            minView: 2
        });

        $(document).on('focus','.dateline', function(t) {
            $(this).datetimepicker({format: site.dateFormats.js_sdate, fontAwesome: true, todayBtn: 1, autoclose: 1, minView: 2 });
        });

    });

    $(document).ready(function () {

        $('#print_order_drink').click(function () {

            Popup($('#order_tbl_drink').html());
            var item_id = Array();
            var susp_id = $("#suspend_id").val();
            $(".order_print_drink").each(function(i){
                item_id[i] = $(this).attr('itemcode');
            });

            $.ajax({
                type: "get",
                async: false,
                data: {'update_printed':1,suspend_id: susp_id,item_id:item_id},
                url: site.base_url + "pos/updated_print/",
                dataType: "json",
                success: function (data) {
                    // Popup($('#order_tbl_drink').html());
                }
            });

            $('#print_order_drink').css('pointer-events','none');

        });

        $('#print_order_food').click(function () {

            Popup($('#order_tbl_food').html());

            var item_id = Array();
            var susp_id = $("#suspend_id").val();
            $(".order_print_food").each(function(i){
                item_id[i] = $(this).attr('itemcode');
            });

            $.ajax({
                type: "get",
                async: false,
                data: {'update_printed':1,suspend_id: susp_id,item_id:item_id},
                url: site.base_url + "pos/updated_print/",
                dataType: "json",
                success: function (data) {
                    // Popup($('#order_tbl_drink').html());
                }
            });
            $('#print_order_food').css('pointer-events','none');

        });

        $('#print_order').click(function () {
            Popup($('#order_tbl').html());
        });
        $('#print_orders').click(function () {
            Popup($('#order_tbl').html());
        });
        $('#print_bill').click(function () {
            Popup($('#bill_tbl').html());
        });
        $('#print_bills').click(function () {
            Popup($('#bill_tbl').html());
        });


    });


    $(function () {
        $(".alert").effect("shake");
        setTimeout(function () {
            $(".alert").hide('blind', {}, 500)
        }, 8000);
        var now = new moment();
        $('#display_time').text(now.format((site.dateFormats.js_sdate).toUpperCase() + " HH:mm"));
        setInterval(function () {
            var now = new moment();
            $('#display_time').text(now.format((site.dateFormats.js_sdate).toUpperCase() + " HH:mm"));
        }, 1000);
    });
    function Popup(data) {

        var cssPrint = '' +
            '<style type="text/css">' +
            '@media print {' +
            '* {-webkit-print-color-adjust:exact;-moz-print-color-adjust:exact;}'+
            '  .table {' +
            '	border-collapse: collapse !important;' +
            '  }' +
            '  .table td,' +
            '  .table th {' +
            '	background-color: #fff !important;' +
            '	padding-left: 5px ;'+
            '	padding-right: 5px ;'+
            '	width:20%;' +
            '  }' +
            '  .receipt th {'+
            '	background-color:#07090f !important;'+
            '	color: #fff;'+
            '}'+
            '  .table-bordered th,' +
            '  .table-bordered td {' +
            '	border: 1px solid #ddd !important;' +
            '  }' +
            '	tfoot tr{border-bottom:1px solid #eee}'+
            '	img {display:block;}'+
            '}' +
            '</style>';

        var mywindow = window.open('', 'erp_pos_print', 'height=800,width=450');

        mywindow.document.write('<html><head><title>Print</title>');
        //mywindow.document.write('<link rel="stylesheet" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/styles/helpers/bootstrap.min.css"/>');
        mywindow.document.write(cssPrint);
        mywindow.document.write('</head>');
        mywindow.document.write('<div style="text-align:center"><img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/logos/" alt="Cloudnet(Phnom Penh)" /> ');
        mywindow.document.write('<p style="text-align:center">12Eo Phnom Penh 12001 Kondal Cambodia<br><b>Tel: </b></p></div>');

        baz = document.getElementById('b-footer').value;

        mywindow.document.write(data);

        mywindow.document.write('<hr>');
        mywindow.document.write('<div class="well well-sm" style="text-align:center">'+nl2br(baz)+'</div>');
        mywindow.document.write('</html>');
        mywindow.print();

        mywindow.close();
        return true;
    }
    function nl2br (str, is_xhtml) {
        var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
    }
</script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/select2.min.js"></script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/custom.js"></script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/jquery.calculator.min.js"></script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/pos/js/plugins.min.js"></script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/pos/js/parse-track-data.js"></script>
<script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/pos/js/pos.ajax.js"></script>
<script>
    $(document).ready(function(){

        $("#slref").attr('readonly','readonly');
        $('#ref_st').on('ifChanged', function() {
            if ($(this).is(':checked')) {
                $("#slref").prop('readonly', false);
                $("#slref").val("");
            }else{
                $("#slref").prop('readonly', true);
                var temp = $("#temp_reference_no").val();
                $("#slref").val(temp);
                $("#reference_nob").val(temp);

            }
        });

        $('#slref').change(function(){
            $('#reference_nob').val($(this).val());
        });


        $(".grid-view-btn").click(function(){
            //$(".grid-view").slideToggle();
        });

        // prevent default action upon enter // rothana
        $('body').bind('keypress', function (e) {
            var payable = $("#quick-payable").text();
            var amount_1 = $("#amount_1").val();
            if(amount_1 == 0){
                if (e.keyCode == 13) {
                    $("#amount_1").val(payable);
                    $("#amount_1").focus();
                    $(".currencies_payment").focus();
                }
            }else if(amount_1 != 0)
            {
                if (e.keyCode == 13) {
                    //$("#amount_1").val(payable);

                    var balance = parseFloat($("#balance").text());
                    var other_balance = parseFloat($(".curr_balance").text());

                    if(balance < 0 && other_balance < 0){


                        bootbox.confirm("Paid amount is less than the payable amount. Please press OK to submit the sale.", function (res) {
                            if (res == true) {
                                $('#pos_note').val(localStorage.getItem('posnote'));
                                $('#staff_note').val(localStorage.getItem('staffnote'));
                                $('#suspend_room').val(localStorage.getItem('suspendroom'));
                                $('#submit-sale').text('Loading...').attr('disabled', true);
                                $('#pos-sale-form').submit();
                            }else{
                                $("#amount_1").focus();
                            }
                        });
                    }
                    $('#pos-sale-form').submit();
                }
            }
        });

        var exist_slider= $('#check-slider-exist').text();
        if(exist_slider==1 || exist_slider==5){
            var checkmouse=0;




            var checkmove = $(document).mousemove(function() {
                checkmouse=0;
                $('.test-mouse').html(checkmouse);
            });
            setInterval(function () {
                checkmouse=1;
            },1000);

            setInterval(function () {
                if(checkmouse==1){
                    $('#category-' + ocat_id).removeClass('active');
                    $('#box-item').remove();
                    $('#box-item #box-item').remove();
                    $('#slide_item').show();
                    cat_id=0;
                    if(exist_slider==5) {
                        $('.btn_gift_card').hide();
                    }
                }
            },60000);
        }

    });


</script>
<script type="text/javascript">
    $(document).ready(function(){

        $('body').on('change', '#addr,#addr1,#addr2,#addr3,#addr4,#addr5', function(e) {
            e.preventDefault();
            var addr = $(this).val();
            localStorage.setItem('addre',addr);
        });

    });
</script>
<script type="text/javascript" charset="UTF-8">(function ($) { "use strict"; $.fn.select2.locales['erp'] = { formatMatches: function (matches) { if (matches === 1) { return "One result is available, press enter to select it."; } return matches + "results are available, use up and down arrow keys to navigate."; }, formatNoMatches: function () { return "No matches found"; }, formatInputTooShort: function (input, min) { var n = min - input.length; return "Please type "+n+" or more characters"; }, formatInputTooLong: function (input, max) { var n = input.length - max; if(n == 1) { return "Please delete "+n+" character"; } else { return "Please delete "+n+" characters"; } }, formatSelectionTooBig: function (n) { if(n == 1) { return "You can only select "+n+" item"; } else { return "You can only select "+n+" items"; } }, formatLoadMore: function (pageNumber) { return "Loading more results..."; }, formatSearching: function () { return "Searching..."; }, formatAjaxError: function() { return "Ajax request failed"; }, }; $.extend($.fn.select2.defaults, $.fn.select2.locales['sma']); })(jQuery);</script>
<div id="ajaxCall"><i class="fa fa-spinner fa-pulse"></i></div>
<p style="display:none;" id="check-slider-exist" >0 </p>
</body>
</html>
