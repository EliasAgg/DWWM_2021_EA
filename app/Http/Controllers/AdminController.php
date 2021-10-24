<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', ['businesses' => Business::with('MainCategory')->orderBy('glyph')->paginate(10)]);
    }

    public function single($id)
    {
        $business = Business::findOrFail($id);

        return view('admin.business.single', [
            'business' => $business
        ]);
    }

    public function edit($id)
    {
        return view('admin.business.single');
    }

    public function create(Request $request)
    {


        return view('admin.business.single');
    }

    public function validator(Request $request)
    {
        $validated = $request->validate([
            'glyph' => ['required'],
            'name' => ['required'],
            'glyph',
            'name',
            'activity',
            'description',
            'link',
            'address',
            'phone',
            'contact',
            'hours',
            'email',
            'address',
            'zipcode',
            'city',
            'address_id',
            'schedule_id',
            'main_category_id',
            'sub_category_id',

        ]);

        return $validated;
    }
}
