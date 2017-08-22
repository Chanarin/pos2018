<?php

namespace App\Helpers;

use App\Models\ChecklistDetail;
use App\Models\InvoiceDetail;
use App\Models\Item;
use App\Models\OpenItemDetail;
use App\Models\ProductionDetail;
use App\Models\PurchaseDetail;

class IDP
{
    public $data = [];
    public $type = '';
    public $ref_id = 0;

    public function __construct($data = [],$type,$ref_id)
    {
        $this->type = $type;
        $this->ref_id = $ref_id;
        $this->data = $data;
    }

    public function saveAllDetail()
    {
        if(count($this->data)>0)
        {
            foreach ($this->data as $row)
            {
                $item_id = isset($row['item_id'])?$row['item_id']:0;

                $item_code = isset($row['item_code'])?$row['item_code']:'';
                $title = isset($row['title'])?$row['title']:'';
                $description = isset($row['description'])?$row['description']:'';
                $unit = isset($row['unit'])?$row['unit']:'';

                $qty = isset($row['qty'])?$row['qty']:0;
                $cost = isset($row['cost'])?$row['cost']:0;
                $price = isset($row['price'])?$row['price']:0;
                $discount = isset($row['discount'])?$row['discount']:0;

                $note = isset($row['note'])?$row['note']:'';

                $item_detail = isset($row['detail'])?$row['detail']:[];

                $itemDetailP = new ItemDetailP($this->type , $item_id , $this->ref_id ,
                   $item_id , $item_code ,
                   $title , $unit, $qty,
                   $cost, $price, $discount, $note, $item_detail);

            }
        }
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
    public $cost;
    public $price;
    public $discount;
    public $note;
    public $item_detail;
    public $unit;
    public $title;

    public $created_at;
    public $updated_at;
    public $deleted_at;

    public function __construct($type = null, $id = null, $ref_id = null,
                                $item_id = null, $item_code = null,
                                $title = null, $unit = null, $qty = 0,
                                $cost = 0, $price = 0, $discount = 0, $note = null,
                                $item_detail = null, $created_at = null,
                                $updated_at = null, $deleted_at = null)
    {
        $this->unit = $unit;
        $this->title = $title;
        $this->type = $type;
        $this->id = $id;
        $this->ref_id = $ref_id;
        $this->item_id = $item_id;
        $this->item_code = $item_code;
        $this->qty = $qty - 0;
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
    }

    private function createItem()
    {
        if (!($this->item_id > 0)) {
            $mi = new Item();
            $mi->item_code = $this->item_code;
            $mi->title = $this->title;
            //$mi->description = $this->description ;
            //$mi->image = $this->image ;
            $mi->unit = $this->unit;
            if ($mi->save()) {
                $this->item_id = $mi->id;
                return $mi;
            }
        }

        return null;
    }

    private function saveDetail()
    {
        if ($this->item_id > 0 && $this->ref_id > 0) {

            $m = null;

            switch ($this->type) {
                case _POS_::checklists:
                    $m = new ChecklistDetail();
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
            $m->qty = $this->qty;
            $m->cost = $this->cost;
            $m->price = $this->price;
            $m->discount = $this->discount;
            $m->note = $this->note;
            $m->item_detail = $this->item_detail;

            return $m->save() ? $m : null;
        } else {
            return null;
        }
    }

}

class _POS_
{
    const checklists = 'checklists';
    const invoice = 'invoice';
    const open_items = 'open_items';
    const production = 'production';
    const purchase = 'purchase';
}