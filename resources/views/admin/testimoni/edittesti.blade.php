@extends('admin.layout.layout')
@section('konten')

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Testimoni</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data" action="{{$edit -> id}}">
          {!! csrf_field() !!}
          <div class="box-body">


            <div class="form-group">
              <label>Nama Testi</label>
              <input type="text" class="form-control" value="{{$edit -> nama_testi}}" name="nama_testi">
            </div>

            <div class="form-group">
              <label>Alamat Testi (Kota)</label>
              <input type="text" class="form-control" value="{{$edit -> alamat_testi}}" name="alamat_testi">
            </div>



            <div class="form-group">
              <label>Isi Testimoni</label>
              <textarea class="form-control" rows="20" name="keterangan_testi">{{$edit -> keterangan_testi}}</textarea>
            </div>



            <div class="form-group">
              <label>Foto Testi</label>
               <img class="img-responsive" src="{{ asset('img/gambar_testi/' . $edit-> gambar_testi) }}" alt="" width="200" height="100">
            </div>



            <div class="form-group">
              <label for="exampleInputFile">Harus Di isi setiap kali edit</label>
              <input type="file" id='gambar_testi' name="gambar_testi" required>

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
