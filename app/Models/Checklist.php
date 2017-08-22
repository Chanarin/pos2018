<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Checklist extends Model
{
    use CrudTrait;

    protected $fillable = ['checklist_number','_date_'];

}
