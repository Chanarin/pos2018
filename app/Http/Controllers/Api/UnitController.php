<?php

namespace App\Http\Controllers\Api;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnitController extends Controller
{

    public function index(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term)
        {
            $results = Unit::where('title', 'LIKE', '%'.$search_term.'%')
                ->orWhere('item_code', 'LIKE', '%'.$search_term.'%')
                ->paginate(50);
        }
        else
        {
            $results = Unit::paginate(50);
        }

        return $results;
    }


    public function show($id)
    {
        return Unit::find($id);
    }

}