<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\RekamMedis;

class FormController extends Controller
{
    public function input()
    {
        return view('formulir',[
            "active" => 'formulir',
            'dokter' => Dokter::latest()->get(),
            'pasien' => Pasien::latest()->get()
        ]);
    }

    public function proses(Request $request)
    {
        $messagesError = [
            'required' => 'The :attribute field is required',
            'min' => 'The :attribute must be at least :min characters.',
            'max' => 'The :attribute must not be greater than :max characters.',
        ];

        $this->validate($request,[
            'dokter' => 'required|not_in:---',
            'pasien' => 'required|not_in:---',
            'kondisi' => 'required',
            'suhu' => 'required|numeric|between:35,45.5',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
        ],$messagesError);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = 'image'.'.'.$extention;
            $file->storeAs(null, $filename, ['disk' => 'public']); 
        }
        $request->image = $filename;
        
        Alert::success('Success!!', 'Data Completed');
        return view('proses',[
            'data' => $request,
            'dokter' => Dokter::latest()->get(),
            'pasien' => Pasien::latest()->get(),            
            'rekamMedis' => rekamMedis::latest()->get(),            
        ]);
    }
}
?>