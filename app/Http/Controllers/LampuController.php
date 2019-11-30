<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formLampu;
use DB;
use Storage;
use App\Lampu;

class LampuController extends Controller
{
     public function index()
    {
    	$lampu = Lampu::all()
    	return view('admin.lamp', [
    		'lampu' => $lampu,
    	]);
    }

     public function delete(Lampu $lampu)
    {
    	$lampu->delete();
    	return redirect()->route('admin.lamp');
    }

    public function submit(formLampu $request){

        $lampu = formLampu::create([
            'name_product' => $request->input('name_product'),
            'lantai' => $request->input('lantai'),
            'ruang' => $request->input('ruang'),
            'deskripsi' => $request->input('deskripsi'),
        ]);
    
        return back()->with('success', 'Berhasil submit!');
    }

}
