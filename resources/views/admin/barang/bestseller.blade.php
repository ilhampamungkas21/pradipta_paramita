@extends('admin.layout.layout')
@section('konten')







<div class="box">
  <div class="box-header">

    <h3 class="box-title">Daftar Barang Best Seller</h3><br>
    <br>
    <h1 id="pesan"></h1>
   <a href="buatbestseller.html"> <button type="button" class="btn btn-primary">Buat Barang</button></a>
  </div>
  <!-- /.box-header -->

  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped" style="width:100%">
      <thead>
      <tr>
        <th>ID Barang </th>
        <th>Nama Barang</th>
        <th>Harga Sebelum diskon</th>
        <th>Harga Setelah diskon</th>
        <th>Foto Barang</th>
        <th>Deskripsi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($barangg as $barang)
      <tr>
        <td>{{$barang -> id}}</td>
        <td>{{$barang -> nama_barang}}</td>
        <td>{{$barang -> harga_normal}}</td>
        <td>{{$barang -> harga_diskon}}</td>
        <td class="center"> <img src="{{ asset('img/gambar_barang/' . $barang->gambar_barang) }}" alt="" width="50" height="50"> </td>
        <td>{!!substr($barang->deskripsi_barang,0,30)!!}...</td>

        <td>
          <a href="/editbestseller/{{$barang ->id}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>

          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
          Hapus
          </button>

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
                  <a href="deletebestseller/{{$barang ->id}}"><button type="button" class="btn btn-danger">Ya</button></a>
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
        <th>Harga Sebelum diskon</th>
        <th>Harga Setelah diskon</th>
        <th>Foto Barang</th>
        <th>Deskripsi</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->













</div>

@endsection
