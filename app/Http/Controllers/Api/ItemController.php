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
                ->paginate(50);
        }
        else
        {
            $results = Item::paginate(50);
        }

        return $results;
    }


    public function show($id)
    {
        return Item::find($id);
    }

    public function showSearchResult(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');
        $arr_item_id = $request->input('arr_item_id');

        $results = [];

        if ($search_term)
        {
            if(count($arr_item_id)>0) {

                $results = Item::whereNotIn('id', $arr_item_id)
                    ->where(function($q) use ($search_term) {
                        $q->where('item_code', 'LIKE', '%' . $search_term . '%')
                            ->orWhere('title', 'LIKE', '%' . $search_term . '%')
                            ->orWhere('description', 'LIKE', '%' . $search_term . '%');
                    })
                    ->paginate(10);


            }else{

                $results = Item::where('title', 'LIKE', '%' . $search_term . '%')
                    ->orWhere('item_code', 'LIKE', '%' . $search_term . '%')
                    ->orWhere('description', 'LIKE', '%' . $search_term . '%')
                    ->paginate(10);

            }
        }
        else
        {
            if(count($arr_item_id)>0) {
                $results = Item::whereNotIn('id', $arr_item_id)->paginate(10);
            }else{
                $results = Item::paginate(10);
            }
        }

        return view('pos.item.show-search-result',['rows' => $results]);
    }

}