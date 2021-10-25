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

    public function editBusiness($id)
    {
        return view('admin.business.single');
    }

    public function createBusiness(Request $request)
    {
        $validated = $this->validatorBusiness($request);
        $business = Business::create([
            'glyph' => $validated['glyph'],
            'name' => $validated['name'],
            'main_category_id' =>$validated['main_category_id'],
            'sub_category_id' => $validated['sub_category_id'],
            'activity' => $validated['activity'],
            'description' => $validated['description'],
            'link' => $validated['link'],
            'address' => $validated['address'],
            'phone' => $validated['phone'],
            'contact' => $validated['contact'],
            'schedule' => $validated['schedule'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'zipcode' => $validated['zipcode'],
            'city' => $validated['city']
            ]
        );

        return view('admin.business.single', ['business' => $business]);
    }

    public function validatorBusiness(Request $request)
    {
        $validated = $request->validate([
            'glyph' => ['required', 'bail', 'alpha'],
            'name' => ['required', 'bail'],
            'glyph' => ['required', 'bail'],
            'name' => ['required', 'bail'],
            'main_category_id' =>['required', 'bail'],
            'sub_category_id' => ['required', 'bail'],
            'activity' => ['nullable'],
            'description' => ['nullable'],
            'link' => ['starts_with:www.', 'nullable'],
            'address' => ['nullable'],
            'phone' => ['digits:10'],
            'contact' => ['nullable'],
            'schedule' => ['nullable'],
            'email' => ['email', 'required_without:phone'],
            'address' => ['nullable'],
            'zipcode' => ['nullable', 'digits:5'],
            'city' => ['nullable']
        ]);

        return $validated;
    }
}
