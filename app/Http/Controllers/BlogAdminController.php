<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ArtikelModel;
use App\Http\Controllers\Controller;

class BlogAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


        //bagian BACK END user

    public function daftarartikel()
    {

     $artikell = ArtikelModel::all();
      return view('admin.blog.daftarartikel')->with('artikell',$artikell);
    }


    public function buatartikel()
    {
      return view('admin.blog.buatartikel');
    }

    public function editartikel($id)
    {
        $edit = ArtikelModel::where('id', $id)->first();
        return view('admin.blog.editartikel')->with('edit', $edit);
    }


    


















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeartikel(Request $request)
    {
      $this->validate($request,[
        'judul_artikel'          => 'required',
        'kategori_artikel'         => 'required',
        'isi_artikel'         => 'required',
        'gambar_artikel'        => 'required'
        ]);

        $tambah = new ArtikelModel();

        $tambah ->judul_artikel       = $request['judul_artikel'];
        $tambah ->kategori_artikel       = $request['kategori_artikel'];
        $tambah ->isi_artikel       = $request['isi_artikel'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar_artikel');                 //disini variable buat ngedapetin gambar
        $fileName   = $file->getClientOriginalName();           //ngedapetin nama asli gambarnya
        $request->file('gambar_artikel')->move("img/gambar_artikel/", $fileName);    //memindahkan gambar ke folder yang sudah kita siapkan di dalam folder public / image

        $tambah->gambar_artikel = $fileName;


        $tambah ->save();


        return redirect('daftarartikel');
    }





    public function updateartikel(Request $request, $id)
    {
       $update = ArtikelModel::where('id',$id)->first();

        $update ->judul_artikel       = $request['judul_artikel'];
        $update ->kategori_artikel       = $request['kategori_artikel'];
        $update ->isi_artikel       = $request['isi_artikel'];
        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar_artikel');                 //disini variable buat ngedapetin gambar
        $fileName   = $file->getClientOriginalName();           //ngedapetin nama asli gambarnya
        $request->file('gambar_artikel')->move("img/gambar_artikel/", $fileName);    //memindahkan gambar ke folder yang sudah kita siapkan di dalam folder public / image

        $update->gambar_artikel = $fileName;


        $update ->save();

        return redirect('daftarartikel');
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

    public function hapusartikel($id)
    {
      $hapus = ArtikelModel::find($id);
      $hapus->delete();
      return redirect('/daftarblog');
    }
}
