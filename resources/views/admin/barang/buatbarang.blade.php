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

          @if(count($errors) > 0)

            @foreach($errors ->all() as $error)
              <li>{{$error}}</li>
            @endforeach

          @endif



        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data" action="/storebarang">
          {!! csrf_field() !!}
          <div class="box-body">


            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang" value="{{ old('nama_barang') }}">
            </div>

              <div class="form-group">
                <label>Kategori Barang</label>
                <select class="form-control" name="kategori_barang" value="{{ old('kategori_barang') }}">
                  <option selected>lain</option>
                  <option>Peternakan</option>
                  <option>Pertanian</option>
                  <option>Perikanan</option>
                  <option>Dekomposer</option>
                  <option>Racun Lalat</option>
                  <option>Burung</option>
                </select>
              </div>

            <div class="form-group">
              <label>Harga Barang</label>
              <input type="number"  min="0" step="1" data-bind="value:replyNumber" name="harga_barang" value="{{old('harga_barang') }}">
            </div>



            <div class="form-group">
              <label>Deskripsi Barang Singkat</label>
              <textarea class="form-control" rows="5" name="deskripsi_barang_singkat">{{old('deskripsi_barang_singkat') }}</textarea>
            </div>


            <div class="form-group">
              <label>Deskripsi Barang Panjang</label>
              <textarea class="form-control" rows="5" name="deskripsi_barang_panjang">{{old('deskripsi_barang_panjang') }}</textarea>
            </div>


            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id='gambar_barang' name="gambar_barang" >

              <p class="help-block">Example block-level help text here.</p>
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
