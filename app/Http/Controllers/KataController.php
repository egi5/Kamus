<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Models\Kata;

class KataController extends Controller
{
    public function index(){
        return view('konten/kata');
    }

    public function getMakna(Request $request)
    {
        $data = [
            // 'user_id'   => user()->id,
            'kata'      => $request->kata,
            'arti'      => $request->def,
        ];

        dd($data);
        
    }

    public function history(Request $request)
    {
        
        
    }
}
