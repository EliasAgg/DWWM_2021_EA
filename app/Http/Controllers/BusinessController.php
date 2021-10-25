<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Lists all businesses from database
     *
     */
    public function listAll(){

        $businesses = Business::with('MainCategory')->paginate(15);
        // Following line not good due to N+1 problem https://medium.com/swlh/solving-n-1-query-without-creating-memory-issue-in-laravel-d02d77c5fccc
        // $businesses = Business::all();

        return view('business.list', [
            'businesses' => $businesses
        ]);
    }

    /**
     * Get one business from the specified id
     *
     */
    public function single($id){
        $business = Business::findOrFail($id);

        return view('business.single', [
            'business' => $business
        ]);
    }

    /**
     * Lists all businesses which matches the selected letter (glyph)
     *
     */
    public function filteredList($glyph){
        $filtered = Business::where('glyph', '=', $glyph)->get();

        return view('business.list', [
            'businesses' => $filtered,
            'glyph' => $glyph
        ]);
    }
}
