<?php

namespace App\Http\Controllers;

use App\Models\Orderan;
use Illuminate\Http\Request;

class OrderanController extends Controller
{
    public function ListOrder() {
        //sesuaikan saja nanti jika berdasarkan User//
        $l_order = Orderan::all();

        return view('index', compact('l_order'));
    }
}
