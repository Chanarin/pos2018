<?php

namespace App\Http\Controllers\Api;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term)
        {
            $results = Item::where('title', 'LIKE', '%'.$search_term.'%')
                ->orWhere('item_code', 'LIKE', '%'.$search_term.'%')
                ->paginate(10);
        }
        else
        {
            $results = Item::paginate(10);
        }

        return $results;
    }

    public function show($id)
    {
        return Item::find($id);
    }
}