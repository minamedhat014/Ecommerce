<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    
    public function index(){
        return view('admin.inventory.stock');
    }
}
