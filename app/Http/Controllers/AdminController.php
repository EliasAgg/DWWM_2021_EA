<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin)
            return view('admin.index', ['businesses' => Business::with('MainCategory')->orderBy('glyph')->paginate(10)]);
        else
            abort(404);
    }
}
