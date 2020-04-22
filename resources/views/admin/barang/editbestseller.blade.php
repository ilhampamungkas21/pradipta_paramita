@extends('admin.layout.layout')
@section('konten')

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Best Seller</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data" action="{{$edit -> id}}">
          {!! csrf_field() !!}
          <div class="box-body">


            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" class="form-control" value="{{$edit -> nama_barang}}" name="nama_barang">
            </div>

            <div class="form-group">
              <label>Harga Normal</label>
              <input type="number"  min="0" step="1" data-bind="value:replyNumber" name="harga_normal" value="{{$edit -> harga_normal}}" >
            </div>

            <div class="form-group">
              <label>Harga Diskon</label>
              <input type="number"  min="0" step="1" data-bind="value:replyNumber" name="harga_diskon" value="{{$edit -> harga_diskon}}" >
            </div>


            <div class="form-group">
              <label>Deskripsi Barang</label>
              <textarea class="form-control" rows="5" name="deskripsi_barang">{{$edit -> deskripsi_barang}}</textarea>
            </div>

            <div class="form-group">
              <label>Foto Barang</label>
               <img class="img-responsive" src="{{ asset('img/gambar_barang/' . $edit-> gambar_barang) }}" alt="" width="200" height="100">
            </div>





            <div class="form-group">
              <label for="exampleInputFile">Harus Di isi setiap kali edit</label>
              <input type="file" id='gambar_barang' name="gambar_barang" required>

              <p class="help-block">Pilih gambar </p>
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
