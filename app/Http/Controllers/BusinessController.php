<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function listAll(){
        $businesses = Business::all();

        return view('business.list', [
            'businesses' => $businesses
        ]);
    }

    public function single($id){
        $business = Business::findOrFail($id);
        
        return view('business.single', [
            'business' => $business
        ]);
    }

    public function filteredList($glyph){
        $filtered = Business::where('glyph', '=', $glyph)->get();
        return view('business.list', [
            'businesses' => $filtered,
            'glyph' => $glyph
        ]);
    }
}
