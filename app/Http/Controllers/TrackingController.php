<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrackingController extends Controller
{
    public function cek(Request $request) {
       
        $kurir = $request->input('kurir');
        $awb = $request->input('awb');

        $response = Http::get("https://api.binderbyte.com/v1/track", [
            'api_key' => '254cefee14410a879a353c88d72b3c2bf93c147cb01ea03deb48ca07fbabdb10',
            'courier' => $kurir,
            'awb' => $awb,
        ]);

        // Mendapatkan dan mengembalikan data dari respons API
        $listData = $response->json();
        
        return view('detail', compact('listData'));

    }
}
