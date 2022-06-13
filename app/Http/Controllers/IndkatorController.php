<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndkatorController extends Controller
{
    public function index()
    {
        return view('indikator');
    }

    public function count()
    {
	$users = DB::table('parkirdong')
            ->select('id')
            ->get();
 
        return view('indikator', ['parkirdong' => $users]);
    }
}
