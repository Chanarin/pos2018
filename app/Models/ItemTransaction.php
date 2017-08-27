<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class ItemTransaction extends Model
{
    use CrudTrait;

    protected $table = 'items_transaction';

}
