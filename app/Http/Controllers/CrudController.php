<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class CrudController extends Controller
{
    public function add()
    {
        return view('update-data');
    }
    public function up(Request $request)
    {
        dd($request->except('_token', 'submit'));
        // $produk = Produk::all();
        // Produk::create($request->except(
        //     [
        //         '_token',
        //         'submit'
        //     ]
        // ));
        // return redirect(view('crud', compact('produk')));
    }
}
