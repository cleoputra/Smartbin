<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formtempatSampah;
use DB;
use Storage;
use App\TempatSampah;


class SampahController extends Controller
{
    public function index()
    {
    	$tempatSampah = TempatSampah::all()
    	return view('admin.dashboard', [
    		'tempatSampah' => $tempatSampah,
    	]);
    }

     public function delete(TempatSampah $tempatSampah)
    {
    	$tempatSampah->delete();
    	return redirect()->route('admin.dashboard');
    }

    public function submit(formLampu $request){

        $lampu = formLampu::create([
            'name_product' => $request->input('name_product'),
            'lantai' => $request->input('lantai'),
            'ruang' => $request->input('ruang'),
        ]);
    
        return back()->with('success', 'Berhasil submit!');
    }

}
