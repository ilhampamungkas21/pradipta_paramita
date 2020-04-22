<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ArtikelModel;
use App\BarangModel;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    // front end user
    //daftar kategori  artikel

    public function daftarperikanan()
    {
        $artikell = DB::table('artikel')->where('kategori_artikel', 'Perikanan')->paginate(4);
        return view('blog.blog_perikanan')->with('artikell',$artikell);
    }

    public function daftarpertanian()
    {
        $artikell = DB::table('artikel')->where('kategori_artikel', 'Pertanian')->paginate(4);
        return view('blog.blog_pertanian')->with('artikell',$artikell);
    }

    public function daftarpeternakan()
    {
        $artikell = DB::table('artikel')->where('kategori_artikel', 'Peternakan')->paginate(4);
        return view('blog.blog_peternakan')->with('artikell',$artikell);
    }

    public function daftardekomposer()
    {
        $artikell = DB::table('artikel')->where('kategori_artikel', 'Dekomposer')->paginate(4);
        return view('blog.blog_dekomposer')->with('artikell',$artikell);
    }

    public function daftarracunlalat()
    {
        $artikell = DB::table('artikel')->where('kategori_artikel', 'Racun Lalat')->paginate(4);
        return view('blog.blog_racunlalat')->with('artikell',$artikell);
    }

    public function daftarburung()
    {
        $artikell = DB::table('artikel')->where('kategori_artikel', 'Burung')->paginate(4);
        return view('blog.blog_burung')->with('artikell',$artikell);
    }



    //lihat artikel sekaligus ada produk terkait


    public function tampilanperikanan($id)
    {
        $artikell = ArtikelModel::where('id', $id)->first();
        return view('blog.isi_perikanan')->with('artikell', $artikell);
    }

    public function tampilanpertanian($id)
    {
        $produkterkaitt = DB::table('barang')->where('kategori_barang', 'Pertanian')->get();
        $artikell = ArtikelModel::where('id', $id)->first();
        return view('blog.isi_pertanian',['artikell' => $artikell, 'produkterkaitt' => $produkterkaitt ]);
    }

    public function tampilanpeternakan($id)
    {
        $artikell = ArtikelModel::where('id', $id)->first();
        $produkterkaitt = DB::table('barang')->where('kategori_barang', 'Peternakan')->get();
        return view('blog.isi_peternakan',['artikell' => $artikell, 'produkterkaitt' => $produkterkaitt ]);
    }

    public function tampilandekomposer($id)
    {
    $artikell = ArtikelModel::where('id', $id)->first();
    return view('blog.isi_dekomposer')->with('artikell', $artikell);
    }

    public function tampilanracunlalat($id)
    {
        $artikell = ArtikelModel::where('id', $id)->first();
        return view('blog.isi_racunlalat')->with('artikell', $artikell);
    }

    public function tampilanburung($id)
    {
        $artikell = ArtikelModel::where('id', $id)->first();
        return view('blog.isi_burung')->with('artikell', $artikell);
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
