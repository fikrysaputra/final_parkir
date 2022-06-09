<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KatakanpetaController extends Controller
{
    public function index()
    {
        $parkirdong = DB::table('parkirdong')->get();
        return view('katakanpeta',['parkirdong' => $parkirdong]);
    }

    public function store(Request $request)
    {

	DB::table('parkirdong')->insert([
		'id' => $request->id,
		'name' => $request->name,
		'parkir' => $request->parkir,
	]);
	return redirect('/katakanpeta');
    }

    public function hapus($id)
    {
	DB::table('parkirdong')->where('id',$id)->delete();
	return redirect('/katakanpeta');
    }
}
