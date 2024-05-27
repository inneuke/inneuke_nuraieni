<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
       $data['result'] = \App\Models\Kelas::all();
       return view ('kelas/index')->with($data);
    }
}
