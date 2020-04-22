<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangModel;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produkk = BarangModel::all();
        return view('produk.index')->with('produkk',$produkk);
    }


    public function produkdetail($id)
    {

        $detail = BarangModel::where('id', $id)->first();
        return view('produk.produkdetail')->with(['detail' => $detail]);
    }


    public function produkpertanian()
    {
        $totalproduk = DB::table('barang')->where('kategori_barang', 'pertanian')->count();
        $daftarproduk = DB::table('barang')->where('kategori_barang', 'pertanian')->paginate(5);
        return view('produk.daftarproduk_pertanian')->with(['totalproduk' => $totalproduk, 'daftarproduk' => $daftarproduk ]);
    }


    public function produkpeternakan()
    {
        $totalproduk = DB::table('barang')->where('kategori_barang', 'peternakan')->count();
        $daftarproduk = DB::table('barang')->where('kategori_barang', 'peternakan')->paginate(5);
        return view('produk.daftarproduk_pertanian')->with(['totalproduk' => $totalproduk, 'daftarproduk' => $daftarproduk ]);
    }


    public function produkperikanan()
    {
        $totalproduk = DB::table('barang')->where('kategori_barang', 'perikanan')->count();
        $daftarproduk = DB::table('barang')->where('kategori_barang', 'perikanan')->paginate(5);
        return view('produk.daftarproduk_pertanian')->with(['totalproduk' => $totalproduk, 'daftarproduk' => $daftarproduk ]);
    }


    public function produkdekomposer()
    {
        $totalproduk = DB::table('barang')->where('kategori_barang', 'dekomposer')->count();
        $daftarproduk = DB::table('barang')->where('kategori_barang', 'dekomposer')->paginate(5);
        return view('produk.daftarproduk_pertanian')->with(['totalproduk' => $totalproduk, 'daftarproduk' => $daftarproduk ]);
    }


    public function produkracunlalat()
    {
        $totalproduk = DB::table('barang')->where('kategori_barang', 'racun lalat')->count();
        $daftarproduk = DB::table('barang')->where('kategori_barang', 'racun lalat')->paginate(5);
        return view('produk.daftarproduk_pertanian')->with(['totalproduk' => $totalproduk, 'daftarproduk' => $daftarproduk ]);
    }


    public function produkburung()
    {
        $totalproduk = DB::table('barang')->where('kategori_barang', 'burung')->count();
        $daftarproduk = DB::table('barang')->where('kategori_barang', 'burung')->paginate(5);
        return view('produk.daftarproduk_pertanian')->with(['totalproduk' => $totalproduk, 'daftarproduk' => $daftarproduk ]);
    }


































    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
