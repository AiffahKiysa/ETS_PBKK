<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use Illuminate\Http\Request;

class MedisController extends Controller
{
    public function index(){
        return view('rekamMedis', [
            'title' => 'Rekam Medis',
            'rekamMedis' => RekamMedis::latest()->get()
        ]);
    }

    public function content(RekamMedis $rekamMedis){
        return view('content', [
            "rekamMedis" => $rekamMedis
        ]);
    }
}
