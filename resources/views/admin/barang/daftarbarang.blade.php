@extends('admin.layout.layout')
@section('konten')







<div class="box">
  <div class="box-header">

    <h3 class="box-title">Semua Daftar Barang</h3><br>
    <br>
    <h1 id="pesan"></h1>
   <a href="buatproduk.html"> <button type="button" class="btn btn-primary">Buat Barang</button></a>
  </div>
  <!-- /.box-header -->

  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped" style="width:100%">
      <thead>
      <tr>
        <th>ID Barang </th>
        <th>Nama Barang</th>
        <th>Kategori Barang</th>
        <th>Harga Barang</th>
        <th>Gambar Barang</th>
        <th>Deskripsi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($barangg as $barang)
      <tr>
        <td>{{$barang -> id}}</td>
        <td>{{$barang -> nama_barang}}</td>
        <td>{{$barang -> kategori_barang}}</td>
        <td>{{$barang -> harga_barang}}</td>
        <td class="center"> <img src="{{ asset('img/gambar_barang/' . $barang->gambar_barang) }}" alt="" width="50" height="50"> </td>
        <td>{!!substr($barang->deskripsi_barang_singkat,0,30)!!}...</td>
        <td>{!!substr($barang->deskripsi_barang_panjang,0,30)!!}...</td>

        <td>
          <a href="/editbarang/{{$barang ->id}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
           <a href="/deletebarang/{{$barang ->id}}" onclick="return confirm('Are you sure you want to delete this item?');">
             <button type="button" class="btn btn-danger btn-sm">Hapus</button>
           </a>

        </td>

      </tr>



      <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 apa kamu yakin untuk menghapus barang ini

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <a href="/deletebarang/{{$barang ->id}}"><button type="button" class="btn btn-primary btn-sm">Hapus</button></a>
                </div>
              </div>
            </div>
          </div>

      @endforeach



      </tbody>
      <tfoot>
      <tr>
        <th>ID Barang </th>
        <th>Nama Barang</th>
        <th>Kategori Barang</th>
        <th>Harga Barang</th>
        <th>Gambar Barang</th>
        <th>Deskripsi</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->













</div>

@endsection
