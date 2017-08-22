<?php

namespace App\Helpers;


use App\Models\Invoice;

class IDP
{
    public $data = [];
    public function __construct($data = [])
    {
        $this->data = $data;
    }
}

class ItemDetailP
{
   public $type;
   public $id ;
   public $ref_id ;
   public $item_id ;
   public $item_code ;
   public $qty ;
   public $cost ;
   public $price ;
   public $discount ;
   public $note ;
   public $item_detail ;
   public $created_at ;
   public $updated_at ;
   public $deleted_at ;

   public function __construct($type = null,$id  = null, $ref_id  = null, $item_id  = null, $item_code  = null, $qty  = null,
                               $cost  = null, $price = null , $discount = null, $note = null ,
                               $item_detail  = null, $created_at = null , $updated_at = null , $deleted_at = null)
   {
        $this->type = $type;
        $this->id = $id ;
        $this->ref_id = $ref_id ;
        $this->item_id = $item_id ;
        $this->item_code = $item_code ;
        $this->qty = $qty ;
        $this->cost = $cost ;
        $this->price = $price ;
        $this->discount = $discount ;
        $this->note = $note ;
        $this->item_detail = $item_detail ;
        $this->created_at = $created_at ;
        $this->updated_at = $updated_at ;
        $this->deleted_at = $deleted_at ;
   }

   public function saveDetail()
   {
       switch ($this->type) {
           case 'invoice':

        break;
           case 'open_items':

        break;
           case '':

        break;

           default:

       }
   }

}