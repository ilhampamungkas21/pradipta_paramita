@extends('admin.layout.layout')
@section('konten')

<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data member dan author</h3>
  </div>
  <!-- /.box-header -->

  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped" style="width:100%">
      <thead>
      <tr>
        <th>ID </th>
        <th>Nama</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Level</th>
        <th>Opsi</th>
      </tr>
      </thead>
      <tbody>
      @foreach($daftarmember as $datamember)
      <tr>
        <td>{{$datamember-> id}}</td>
        <td>{{$datamember -> name}}</td>
        <td>{{$datamember -> email}}</td>
        <td>{{$datamember -> telp}}</td>
        <td>{{$datamember -> level}}</td>
        <td>
          <a href="/admin/daftarmember/deletemember/{{$datamember -> id}}" onclick="return confirm('Yakin mau hapus data ini sob?')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
        </td>
      </tr>
      @endforeach


      </tbody>
      <tfoot>
        <tr>
          <th>ID </th>
          <th>Nama</th>
          <th>Email</th>
          <th>Telepon</th>
          <th>Level</th>
          <th>opsi</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->




</div>



@endsection
