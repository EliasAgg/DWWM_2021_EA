<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**+
     * Lists all businesses from database
     * View: business/list
     */
    public function listAll(){
        $businesses = Business::with('MainCategory')->paginate(15);
        // Following line not appropriate due to N+1 problem https://medium.com/swlh/solving-n-1-query-without-creating-memory-issue-in-laravel-d02d77c5fccc
        // $businesses = Business::all();
        // $businesses = Business::with('MainCategory')->get();

        return view('business.list', [
            'businesses' => $businesses
        ]);
    }

    /**
     * Get one business from the specified id
     * View: business/single
     */
    public function single($id){
        $business = Business::findOrFail($id);

        return view('business.single', [
            'business' => $business
        ]);
    }

    /**
     * Lists all businesses which matches the selected letter (glyph)
     * View: business/list
     */
    public function filteredList($glyph){
        $filtered = Business::where('glyph', '=', $glyph)->paginate(15);

        return view('business.list', [
            'businesses' => $filtered,
            'glyph' => $glyph
        ]);
    }
}
