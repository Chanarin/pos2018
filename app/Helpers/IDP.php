<?php

namespace App\Helpers;

use App\Models\Checklist;
use App\Models\ChecklistDetail;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Item;
use App\Models\ItemDetail;
use App\Models\ItemTransaction;
use App\Models\OpenItem;
use App\Models\OpenItemDetail;
use App\Models\Production;
use App\Models\ProductionDetail;
use App\Models\Purchase;
use App\Models\PurchaseDetail;

class IDP
{
    public $data = [];
    public $type = '';
    public $ref_id = 0;

    public function __construct($data = [], $type, $ref_id)
    {
        $this->type = $type;
        $this->ref_id = $ref_id;
        $this->data = $data;
    }

    public function saveAllDetail()
    {
//        dd($this->ref_id);
        $mr = null;
        switch ($this->type) {
            case _POS_::checklists:
                $mr = ChecklistDetail::where('ref_id', $this->ref_id);
                break;
            case _POS_::invoice:
                $mr = InvoiceDetail::where('ref_id', $this->ref_id);
                break;
            case _POS_::open_items:
                $mr = OpenItemDetail::where('ref_id', $this->ref_id);
                break;
            case _POS_::production:
                $mr = ProductionDetail::where('ref_id', $this->ref_id);
                break;
            case _POS_::purchase:
                $mr = PurchaseDetail::where('ref_id', $this->ref_id);
                break;
            case _POS_::items:
                //$itemDeetaill = ItemDetail::where('ref_id', $this->ref_id)->delete();

                break;

            default:

        }

        if ($mr != null) {
            $mr->delete();
            $mtran = ItemTransaction::where('ref_id', $this->ref_id)
                ->where('ref_type', $this->type)->delete();
        }

        if (count($this->data) > 0) {
            if (is_array($this->data)) {
                foreach ($this->data as $row) {

                    $item_code = isset($row['item_code']) ? $row['item_code'] : '';

                    $item_id = isset($row['item_id']) ? $row['item_id'] : 0;

                    $title = isset($row['title']) ? $row['title'] : '';
                    $description = isset($row['description']) ? $row['description'] : '';
                    $unit = isset($row['unit']) ? $row['unit'] : '';
                    $num_qty = isset($row['num_qty']) ? $row['num_qty'] : 1;

                    $qty = isset($row['qty']) ? $row['qty'] : 0;
                    $count_qty = isset($row['count_qty']) ? $row['count_qty'] : 0;
                    $cost = isset($row['cost']) ? $row['cost'] : 0;
                    $price = isset($row['price']) ? $row['price'] : 0;
                    $discount = isset($row['discount']) ? $row['discount'] : 0;

                    $note = isset($row['note']) ? $row['note'] : '';


                    //=============================================
                    //=============================================
                    $_item_detail = isset($row['detail']) ? $row['detail'] : [];
                    $ssdd = [];
                    if (count($_item_detail) > 0) {
                        foreach ($_item_detail as $rdd) {
                            $item_code_d = isset($rdd['item_code']) ? $rdd['item_code'] : '';
                            $item_id_d = isset($rdd['item_id']) ? $rdd['item_id'] : 0;
                            $title_d = isset($rdd['title']) ? $rdd['title'] : '';
                            if ($item_id_d > 0 || ($item_code_d != '' || $title_d != '')) {
                                $ssdd[] = $rdd;
                            }

                        }
                    }

                    $item_detail = $ssdd;

                    //=============================================
                    //=============================================


                    $itemDetailP = new ItemDetailP($this->type, $item_id, $this->ref_id,
                        $item_id, $item_code,
                        $title, $unit, $num_qty, $qty, $count_qty,
                        $cost, $price, $discount, $note, $item_detail);


                }
            }
        }
    }

    public function getAllDetail() // 012 49 50 80
    {
        $type = $this->type;
        $ref_id = $this->ref_id;

        $m = null;
        switch ($type) {
            case _POS_::checklists:
                $m = ChecklistDetail::where('ref_id', $ref_id)->get();
                break;
            case _POS_::invoice:
                $m = InvoiceDetail::where('ref_id', $ref_id)->get();
                break;
            case _POS_::open_items:
                $m = OpenItemDetail::where('ref_id', $ref_id)->get();
                break;
            case _POS_::production:
                $m = ProductionDetail::where('ref_id', $ref_id)->get();
                break;
            case _POS_::purchase:
                $m = PurchaseDetail::where('ref_id', $ref_id)->get();
                break;
            case _POS_::items:
                $m = ItemDetail::where('ref_id', $ref_id)->get();
                break;
            default:
        }

        return $m;
    }

}

class ItemDetailP
{
    public $type;
    public $id;
    public $ref_id;
    public $item_id;
    public $item_code;
    public $qty;
    public $count_qty;
    public $cost;
    public $price;
    public $discount;
    public $note;
    public $item_detail;
    public $unit;
    public $num_qty;
    public $title;

    public $created_at;
    public $updated_at;
    public $deleted_at;

    public function __construct($type = null, $id = null, $ref_id = null,
                                $item_id = null, $item_code = null,
                                $title = null, $unit = null, $num_qty = 1, $qty = 0, $count_qty = 0,
                                $cost = 0, $price = 0, $discount = 0, $note = null,
                                $item_detail = null, $created_at = null,
                                $updated_at = null, $deleted_at = null)
    {
        $this->unit = $unit;
        $this->num_qty = $num_qty;
        $this->title = $title;
        $this->type = $type;
        $this->id = $id;
        $this->ref_id = $ref_id;
        $this->item_id = $item_id;
        $this->item_code = $item_code;
        $this->qty = $qty - 0;
        $this->count_qty = $count_qty - 0;
        $this->cost = $cost - 0;
        $this->price = $price - 0;
        $this->discount = $discount - 0;
        $this->note = $note;
        $this->item_detail = $item_detail;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;

        $this->_init_();

    }

    private function _init_()
    {
        if ($this->ref_id > 0 && $this->qty > 0 && (
                $this->type == _POS_::checklists ||
                $this->type == _POS_::invoice ||
                $this->type == _POS_::open_items ||
                $this->type == _POS_::production ||
                $this->type == _POS_::purchase
            )) {
            $this->createItem();

            $this->saveDetail();
        }


        if ($this->type == _POS_::items) {
            if ($this->title != null && $this->title != '') {
                $this->createItemDetail();
            }
        }
    }

    private function createItem()
    {
        $rrr = null;
        if ($this->type == _POS_::items) {

            $rrr = ItemDetail::where('item_id', $this->item_id)->first();

            if ($rrr == null) {
                $rrr = new ItemDetail();
            }

            $rrr->ref_id = $this->ref_id;
            $rrr->item_id = $this->item_id;
            $rrr->item_code = $this->item_code;
            $rrr->title = $this->title;
            $rrr->unit = $this->unit;
            $rrr->num_qty = $this->num_qty;
            $rrr->qty = $this->qty;
            $rrr->cost = $this->cost;
            $rrr->note = $this->note;

            $rrr->save();


        } else {

            if (!($this->item_id > 0)) {
                //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

                $mi = Item::where('item_code', trim($this->item_code))->first();

                if ($mi != null) {
                    $this->item_id = $mi->id;
                    $rrr = $mi;
                } else {

                    $mi = new Item();
                    $mi->item_code = $this->item_code;
                    $mi->title = $this->title;
                    //$mi->description = $this->description ;
                    //$mi->image = $this->image ;
                    $mi->unit = $this->unit;
                    if ($mi->save()) {
                        $this->item_id = $mi->id;
                        $rrr = $mi;
                    }
                }
            }

        }

        if ($this->item_id > 0 && $this->type == _POS_::items) {

            //ItemDetail::where('ref_id',$this->ref_id)->delete();

            if (count($this->item_detail) > 0) {

                foreach ($this->item_detail as $row) {
//                    ===============================
//                    ===============================
                    $item_code = isset($row['item_code']) ? $row['item_code'] : '';

                    $item_id = isset($row['item_id']) ? $row['item_id'] : 0;

                    $title = isset($row['title']) ? $row['title'] : '';
                    $description = isset($row['description']) ? $row['description'] : '';
                    $unit = isset($row['unit']) ? $row['unit'] : '';

                    $qty = isset($row['qty']) ? $row['qty'] : 0;
                    $num_qty = isset($row['num_qty']) ? $row['num_qty'] : 0;

                    $cost = isset($row['cost']) ? $row['cost'] : 0;
                    $price = isset($row['price']) ? $row['price'] : 0;
                    $discount = isset($row['discount']) ? $row['discount'] : 0;

                    $note = isset($row['note']) ? $row['note'] : '';
//                    ===============================
//                    ===============================
                    if (!($item_id > 0)) {
                        //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                        $mis = Item::where('item_code', trim($item_code))->first();

                        if ($mis != null) {
                            $item_id = $mis->id;
                        } else {
                            $mis = new Item();
                            $mis->item_code = $item_code;
                            $mis->title = $title;
                            //$mi->description = $this->description ;
                            //$mi->image = $this->image ;
                            $mis->unit = $unit;
                            if ($mis->save()) {
                                $item_id = $mis->id;
                            }
                        }
                    }

                    if ($item_id > 0) {
                        $mff = new ItemDetail();
                        $mff->ref_id = $this->item_id;
                        $mff->item_id = $item_id;
                        $mff->item_code = $item_code;
                        $mff->title = $title;
                        $mff->description = $description;
                        $mff->unit = $unit;
                        $mff->qty = $qty;
                        $mff->num_qty = $num_qty;
                        $mff->cost = $cost;
                        $mff->note = $note;
                        $mff->save();
                    }


                }
            }

        }

        return $rrr;
    }

    private function saveDetail()
    {
        if ($this->item_id > 0 && $this->ref_id > 0) {

            //=================================================
            //=================================================
            //========= Add Item Detail =======================
            $item_ref_detail = [];
            $ixix = 0;
            if (count($this->item_detail) > 0) {
                foreach ($this->item_detail as $rrdd) {
                    $d_item_code = isset($rrdd['item_code']) ? $rrdd['item_code'] : '';

                    $d_item_id = isset($rrdd['item_id']) ? $rrdd['item_id'] : 0;

                    $d_title = isset($rrdd['title']) ? $rrdd['title'] : '';
                    $d_description = isset($rrdd['description']) ? $rrdd['description'] : '';
                    $d_unit = isset($rrdd['unit']) ? $rrdd['unit'] : '';
                    $d_num_qty = isset($rrdd['num_qty']) ? $rrdd['num_qty'] : '';

                    $d_qty = isset($rrdd['qty']) ? $rrdd['qty'] : 0;
                    $d_cost = isset($rrdd['cost']) ? $rrdd['cost'] : 0;
                    $d_price = isset($rrdd['price']) ? $rrdd['price'] : 0;
                    $d_discount = isset($rrdd['discount']) ? $rrdd['discount'] : 0;

                    $d_note = isset($rrdd['note']) ? $rrdd['note'] : '';

                    $item_ref_detail[$ixix] = [
                        'item_code' => $d_item_code,
                        'title' => $d_title,
                        'description' => $d_description,
                        'unit' => $d_unit,
                        'num_qty' => $d_num_qty,
                        'qty' => $d_qty,
                        'cost' => $d_cost,
                        'note' => $d_note
                    ];
                    if ($d_item_id > 0) {
                        $item_ref_detail[$ixix]['item_id'] = $d_item_id;
                    } else {
                        //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                        $mITT = Item::where('item_code', trim($d_item_code))->first();

                        if ($mITT != null) {
                            $item_ref_detail[$ixix]['item_id'] = $mITT->id;
                        } else {
                            $mITT = new Item();
                            $mITT->item_code = $d_item_code;
                            $mITT->title = $d_title;
                            $mITT->description = $d_description;
                            $mITT->unit = $d_unit;

                            if ($mITT->save()) {
                                $item_ref_detail[$ixix]['item_id'] = $mITT->id;
                            }
                        }

                    }

                    $ixix++;
                }
            }
            //=================================================
            //=================================================

            $m = null;

            switch ($this->type) {
                case _POS_::checklists:
                    $m = new ChecklistDetail();
                    $m->count_qty = $this->count_qty;
                    break;
                case _POS_::invoice:
                    $m = new InvoiceDetail();
                    break;
                case _POS_::open_items:
                    $m = new OpenItemDetail();
                    break;
                case _POS_::production:
                    $m = new ProductionDetail();
                    break;
                case _POS_::purchase:
                    $m = new PurchaseDetail();
                    break;
                default:

            }

            $m->ref_id = $this->ref_id;
            $m->item_id = $this->item_id;

            $m->item_code = $this->item_code;

            $m->title = isset($this->title) ? $this->title : '';
            $m->unit = isset($this->unit) ? $this->unit : '';
            $m->num_qty = isset($this->num_qty) ? $this->num_qty : 1;


            $m->qty = $this->qty;
            $m->cost = $this->cost;
            $m->price = $this->price;
            $m->discount = $this->discount;
            $m->note = $this->note;
            $m->item_detail = json_encode($item_ref_detail);//$this->item_detail


            if ($m->save()) {
                $iitrain = new ItemTransaction();

                $iitrain->ref_id = $this->ref_id;
                $iitrain->ref_type = $this->type;
                $iitrain->item_id = $this->item_id;
                $iitrain->unit = $this->unit;
                $iitrain->num_qty = $this->num_qty;

                $iitrain->cost = $this->cost;
                $iitrain->price = $this->price;
                $iitrain->discount = $this->discount;


                switch ($this->type) {
                    case _POS_::checklists:
                        $mm = Checklist::find($this->ref_id);
                        $iitrain->qty = $this->qty;
                        $iitrain->tran_date = $mm->_date_;
                        break;
                    case _POS_::invoice:
                        $mm = Invoice::find($this->ref_id);
                        $iitrain->qty = -$this->qty;
                        $iitrain->tran_date = $mm->_date_;
                        break;
                    case _POS_::open_items:
                        $mm = OpenItem::find($this->ref_id);
                        $iitrain->qty = $this->qty;
                        $iitrain->tran_date = $mm->_date_;
                        break;
                    case _POS_::production:
                        $mm = Production::find($this->ref_id);
                        $iitrain->qty = $this->qty;
                        $iitrain->tran_date = $mm->_date_;
                        break;
                    case _POS_::purchase:
                        $mm = Purchase::find($this->ref_id);
                        $iitrain->qty = $this->qty;
                        $iitrain->tran_date = $mm->_date_;
                        break;
                    default:

                }

                $iitrain->save();

                //============ Add to Item Detail ==================
                if (count($item_ref_detail) > 0) {
                    foreach ($item_ref_detail as $item_dd) {
                        $mddd = ItemDetail::where('ref_id', $this->item_id)
                            ->where('item_id', $item_dd['item_id'])->first();

                        if ($mddd == null) {
                            $mddd = new ItemDetail();
                        }

                        $mddd->ref_id = $this->item_id;
                        $mddd->item_id = $item_dd['item_id'];
                        $mddd->item_code = isset($item_dd['item_code']) ? $item_dd['item_code'] : '';
                        $mddd->title = isset($item_dd['title']) ? $item_dd['title'] : '';
                        $mddd->unit = isset($item_dd['unit']) ? $item_dd['unit'] : '';

                        if ($item_dd['num_qty'] > 0) {
                            $mddd->num_qty = isset($item_dd['num_qty']) ? $item_dd['num_qty'] - 0 : 0;
                        } else {
                            $mddd->num_qty = 0;
                        }
                        $mddd->description = isset($item_dd['description']) ? $item_dd['description'] : '';
                        $mddd->qty = isset($item_dd['qty']) ? $item_dd['qty'] - 0 : 0;
                        $mddd->cost = isset($item_dd['cost']) ? $item_dd['cost'] - 0 : 0;
                        $mddd->note = isset($item_dd['note']) ? $item_dd['note'] : '';

                        $mddd->save();

                    }
                }
                //============End Add to Item Detail ===============

                return $m;
            }
        } else {
            return null;
        }
    }

    private function createItemDetail()
    {
        if (!($this->item_id > 0)) {
            //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
            $mi = Item::where('item_code', trim($this->item_code))->first();

            if ($mi != null) {
                $this->item_id = $mi->id;
            } else {
                $mi = new Item();
                $mi->item_code = $this->item_code;
                $mi->title = $this->title;
                //$mi->description = $this->description ;
                //$mi->image = $this->image ;
                $mi->unit = $this->unit;
                if ($mi->save()) {
                    $this->item_id = $mi->id;
                }
            }
        }

        /*        if (_POS_::items == $this->type) {

                    $md = null;
                    dd($this->item_detail);
                    foreach ($this->item_detail as $ittdd) {

                        $md = ItemDetail::where('item_id', $this->item_id)->first();

                        if ($md == null) {
                            $md = new ItemDetail();
                        }
                        $md->ref_id = $this->ref_id;
                        $md->item_id = $this->item_id;
                        $md->item_code = $this->item_code;
                        $md->title = $this->title;
        //        $md->description  =  $this->description ;
                        $md->unit = $this->unit;
                        $md->qty = $this->qty;
                        $md->cost = $this->cost;
                        $md->note = $this->note;

                    }

                    return $md->save() ? $md : null;

                }*/

    }

}

class _POS_
{
    const checklists = 'checklists';
    const invoice = 'invoice';
    const open_items = 'open_items';
    const production = 'production';
    const purchase = 'purchase';
    const items = 'items';
}