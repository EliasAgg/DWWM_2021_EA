<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class AdminController extends Controller
{
    public function index(){

        return view('admin.index', ['businesses' => Business::all()]);
    }
}
