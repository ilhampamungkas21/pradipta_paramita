@extends('admin.layout.layout')
@section('konten')

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data" action="{{$pesanan -> id}}">
          {!! csrf_field() !!}
          <div class="box-body">
            <div class="form-group">
              <label>ID Pesanan</label>
              <input type="text" readonly class="form-control" value="{{$pesanan->id}}" name="id_pesanan">
            </div>

            <div class="form-group">
              <label>ID Pemesan</label>
              <input type="text" class="form-control" value="{{$pesanan->id_pemesan}}" name="id_pemesan" readonly>
            </div>

            <div class="form-group">
              <label>ID Barang</label>
              <input type="text" class="form-control" value="{{$pesanan->id_barang}}" name="id_barang" readonly>
            </div>

            <div class="form-group">
              <label>Nama Penerima</label>
              <input type="text" class="form-control" value="{{$pesanan->nama_penerima}}" name="nama_penerima" readonly>
            </div>


            <div class="form-group">
              <label>Telepon Pemesan</label>
              <input type="text" class="form-control" value="{{$pesanan->telepon_pemesan}}" name="telepon_pemesan" readonly>
            </div>

            <div class="form-group">
              <label>Alamat Penerima</label>
              <input type="text" class="form-control" value="{{$pesanan->alamat_penerima}}" name="alamat_penerima" readonly>
            </div>

            <div class="form-group">
              <label>Harga Total</label>
            <input type="text" class="form-control" value="{{$pesanan->harga_total}}" name="harga_total" readonly>
            </div>



            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status">
                <option selected>{{$pesanan->status}}</option>
                <option>Belum Dikirim</option>
                <option>Sudah Dikirim</option>
              </select>
            </div>







          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
      <!-- /.box -->

  <!-- /.row -->
</section>


@endsection
