@extends('admin.layout.layout')
@section('konten')




<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Buat Artikel</h3>

          @if(count($errors) > 0)

            @foreach($errors ->all() as $error)
              <li>{{$error}}</li>
            @endforeach

          @endif



        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data" action="/storeartikel">
          {!! csrf_field() !!}
          <div class="box-body">


            <div class="form-group">
              <label>Judul Artikel</label>
              <input type="text" class="form-control" placeholder="Judul Artikel" name="judul_artikel" value="{{ old('judul_artikel') }}">
            </div>



              <div class="form-group">
                <label>Kategori Artikel</label>
                <select class="form-control" name="kategori_artikel" value="{{ old('kategori_artikel') }}">
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
              <label>Isi Artikel</label>
              <textarea class="form-control" rows="5" name="isi_artikel">{{old('isi_artikel') }}</textarea>
            </div>


            <div class="form-group">
              <label for="exampleInputFile">File Gambar Artikel</label>
              <input type="file" id='gambar_artikel' name="gambar_artikel" >

              <p class="help-block">Harap Dilengkapi Semua</p>
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
