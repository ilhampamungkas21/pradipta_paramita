<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\BarangModel;
use App\KontakModel;
use App\BestSellerModel;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\TestiModel;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');

    }






    //testimoni

    public function testimoni()
    {
        $testimonii = TestiModel::all();
        return view('admin.testimoni.testi')->with('testimonii',$testimonii);
    }


    public function registeradmin()
    {
        return view('admin.register.register');
    }



    public function storeadmin(Request $request)
    {
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',

        ]);



        $tambah = new User();

        $tambah ->name           = $request['name'];
        $tambah ->email      = $request['email'];
        $tambah ->password       = Hash::make($request['password']);


        $tambah ->save();

        return redirect('admin.html');
    }

    


    public function storetesti(Request $request)
    {
      $this->validate($request,[
        'nama_testi'          => 'required',
        'alamat_testi'         => 'required',
        'keterangan_testi'         => 'required',
        'gambar_testi'        => 'required'
        ]);

        $tambah = new TestiModel();

        $tambah ->nama_testi       = $request['nama_testi'];
        $tambah ->alamat_testi       = $request['alamat_testi'];
        $tambah ->keterangan_testi       = $request['keterangan_testi'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar_testi');                 //disini variable buat ngedapetin gambar
        $fileName   = $file->getClientOriginalName();           //ngedapetin nama asli gambarnya
        $request->file('gambar_testi')->move("img/gambar_testi/", $fileName);    //memindahkan gambar ke folder yang sudah kita siapkan di dalam folder public / image

        $tambah->gambar_testi = $fileName;


        $tambah ->save();


        return redirect('testimoni');
    }



    public function edittesti($id)
    {
        $edit = TestiModel::where('id', $id)->first();
        return view('admin.testimoni.edittesti')->with('edit', $edit);
    }


    public function updatetesti(Request $request, $id)
    {
        $update = TestiModel::where('id',$id)->first();

        $update ->nama_testi       = $request['nama_testi'];
        $update ->keterangan_testi       = $request['keterangan_testi'];
        $update ->alamat_testi       = $request['alamat_testi'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar_testi');                 //disini variable buat ngedapetin gambar
        $fileName   = $file->getClientOriginalName();           //ngedapetin nama asli gambarnya
        $request->file('gambar_testi')->move("img/gambar_testi/", $fileName);    //memindahkan gambar ke folder yang sudah kita siapkan di dalam folder public / image

        $update->gambar_testi = $fileName;


        $update ->save();

        return redirect('/testimoni');
    }


























    public function index()
    {
        return view('admin.index');
    }






    public function buatbarang()
    {
        return view('admin.barang.buatbarang');
    }


     public function semuabarang()
    {

      $barangg = BarangModel::all();
      return view('admin.barang.daftarbarang')->with('barangg',$barangg);
    }

    public function bestseller()
    {
      $barangg = BestSellerModel::all();
      return view('admin.barang.bestseller')->with('barangg',$barangg);
    }

    public function buatbestseller()
    {
        return view('admin.barang.buatbestseller');
    }


    public function storebestseller(Request $request)
    {
      $this->validate($request,[
        'nama_barang'          => 'required',
        'harga_normal'         => 'required',
        'harga_diskon'         => 'required',
        'deskripsi_barang'     => 'required',
        'gambar_barang'        => 'required'
        ]);

        $tambah = new BestSellerModel();

        $tambah ->nama_barang       = $request['nama_barang'];
        $tambah ->harga_normal       = $request['harga_normal'];
        $tambah ->harga_diskon       = $request['harga_diskon'];
        $tambah ->deskripsi_barang  = $request['deskripsi_barang'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar_barang');                 //disini variable buat ngedapetin gambar
        $fileName   = $file->getClientOriginalName();           //ngedapetin nama asli gambarnya
        $request->file('gambar_barang')->move("img/gambar_barang/", $fileName);    //memindahkan gambar ke folder yang sudah kita siapkan di dalam folder public / image

        $tambah->gambar_barang = $fileName;


        $tambah ->save();


        return redirect('bestseller.html');
    }





    public function editbestseller($id)
    {
        $edit = BestSellerModel::where('id', $id)->first();
        return view('admin.barang.editbestseller')->with('edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatebestseller(Request $request, $id)
    {
        $update = BestSellerModel::where('id',$id)->first();

        $update ->nama_barang       = $request['nama_barang'];
        $update ->harga_normal       = $request['harga_normal'];
        $update ->harga_diskon       = $request['harga_diskon'];
        $update ->deskripsi_barang  = $request['deskripsi_barang'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar_barang');                 //disini variable buat ngedapetin gambar
        $fileName   = $file->getClientOriginalName();           //ngedapetin nama asli gambarnya
        $request->file('gambar_barang')->move("img/gambar_barang/", $fileName);    //memindahkan gambar ke folder yang sudah kita siapkan di dalam folder public / image

        $update->gambar_barang = $fileName;


        $update ->save();

        return redirect('/bestseller.html');
    }

















    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storebarang(Request $request)
    {
      $this->validate($request,[
        'nama_barang'                 => 'required',
        'harga_barang'                  => 'required',
        'deskripsi_barang_singkat'     => 'required',
        'deskripsi_barang_panjang'     => 'required',
        'gambar_barang'        => 'required',
        'kategori_barang'        => 'required'
        ]);

        $tambah = new BarangModel();

        $tambah ->nama_barang               = $request['nama_barang'];
        $tambah ->harga_barang               = $request['harga_barang'];
        $tambah ->deskripsi_barang_singkat  = $request['deskripsi_barang_singkat'];
        $tambah ->deskripsi_barang_panjang  = $request['deskripsi_barang_panjang'];
        $tambah ->kategori_barang             = $request['kategori_barang'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar_barang');                 //disini variable buat ngedapetin gambar
        $fileName   = $file->getClientOriginalName();           //ngedapetin nama asli gambarnya
        $request->file('gambar_barang')->move("img/gambar_barang/", $fileName);    //memindahkan gambar ke folder yang sudah kita siapkan di dalam folder public / image

        $tambah->gambar_barang = $fileName;


        $tambah ->save();


        return redirect('daftarproduk.html');
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

    public function editbarang($id)
    {
        $edit = BarangModel::where('id', $id)->first();
        return view('admin.barang.editbarang')->with('edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatebarang(Request $request, $id)
    {
        $update = BarangModel::where('id',$id)->first();

        $update ->nama_barang       = $request['nama_barang'];
        $update ->harga_barang      = $request['harga_barang'];
        $update ->kategori_barang      = $request['kategori_barang'];
        $update ->deskripsi_barang_singkat  = $request['deskripsi_barang_singkat'];
        $update ->deskripsi_barang_panjang  = $request['deskripsi_barang_panjang'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('gambar_barang');                 //disini variable buat ngedapetin gambar
        $fileName   = $file->getClientOriginalName();           //ngedapetin nama asli gambarnya
        $request->file('gambar_barang')->move("img/gambar_barang/", $fileName);    //memindahkan gambar ke folder yang sudah kita siapkan di dalam folder public / image

        $update->gambar_barang = $fileName;


        $update ->save();

        return redirect('/daftarproduk.html');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hapus = BarangModel::find($id);
      $hapus->delete();
      return redirect('/daftarproduk.html');
    }

    public function destroycp($id)
    {
      $hapus = KontakModel::find($id);
      $hapus->delete();
      return redirect('/admin.html');
    }

    public function destroytesti($id)
    {
      $hapus = TestiModel::find($id);
      $hapus->delete();
      return redirect('/admin.html');
    }

    public function destroybestseller($id)
    {
      $hapus = BestSellerModel::find($id);
      $hapus->delete();
      return redirect('/bestseller.html');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
