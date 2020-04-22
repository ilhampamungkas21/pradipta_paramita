@extends('admin.layout.layout')
@section('konten')

<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Artikel</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data" action="{{$edit -> id}}">
          {!! csrf_field() !!}
          <div class="box-body">


            <div class="form-group">
              <label>Judul Artikel</label>
              <input type="text" class="form-control" value="{{$edit -> judul_artikel}}" name="judul_artikel">
            </div>

              <div class="form-group">
                <label>Kategori Artikel</label>
                <select class="form-control" name="kategori_artikel" value="{{ $edit -> kategori_artikel }} ">
                  <option selected>lain</option>
                  <option>Peternakan</option>
                  <option>Pertanian</option>
                  <option>Dekomposer</option>
                  <option>Perikanan</option>
                </select>
              </div>


            <div class="form-group">
              <label>Isi Artikel</label>
              <textarea class="form-control" rows="20" name="isi_artikel">{{$edit -> isi_artikel}}</textarea>
            </div>



            <div class="form-group">
              <label>Foto Barang</label>
               <img class="img-responsive" src="{{ asset('img/gambar_artikel/' . $edit-> gambar_artikel) }}" alt="" width="200" height="100">
            </div>





            <div class="form-group">
              <label for="exampleInputFile">Harus Di isi setiap kali edit</label>
              <input type="file" id='gambar_artikel' name="gambar_artikel" required>

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
