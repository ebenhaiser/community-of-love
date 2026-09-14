<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function anggota()
    {
        return view('master.anggota');
    }

    public function users()
    {
        return view('master.users');
    }
}
