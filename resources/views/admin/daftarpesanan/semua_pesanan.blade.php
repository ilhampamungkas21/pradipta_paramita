@extends('admin.layout.layout')
@section('konten')

<div class="box">
  <div class="box-header">

    <h3 class="box-title">Daftar Pesanan</h3><br>

  </div>
  <!-- /.box-header -->

  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped" style="width:100%">
      <thead>
      <tr>
        <th>ID Pesanan </th>
        <th>ID Pemesan </th>
        <th>ID Barang</th>
        <th>Nama Penerima</th>
        <th>Telepon Pemesan</th>
        <th>Alamat Penerima</th>
        <th>Harga Total</th>

      </tr>
      </thead>
      <tbody>
      @foreach($pesanan as $data)
      <tr>
        <td>{{$data -> id}}</td>
        <td>{{$data -> id_pemesan}}</td>
        <td>{{$data -> id_barang}}</td>
        <td>{{$data -> nama_penerima}}</td>
        <td>{{$data -> telepon_pemesan}}</td>
        <td>{{$data -> alamat_penerima}}</td>
        <td>{{$data -> harga_total}}</td>





      @endforeach



      </tbody>
      <tfoot>
        <tr>
          <th>ID Pesanan </th>
          <th>ID Pemesan </th>
          <th>ID Barang</th>
          <th>Nama Penerima</th>
          <th>Telepon Pemesan</th>
          <th>Alamat Penerima</th>
          <th>Harga Total</th>

        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->













</div>

@endsection
