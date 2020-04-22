@extends('admin.layout.layout')
@section('konten')




      <div class="row">

         @foreach($testimonii as $testi)

        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('img/gambar_testi/' . $testi->gambar_testi) }}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$testi -> nama_testi}}</h3>

              <p class="text-muted text-center">Admin</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>{{$testi -> alamat_testi}}</b> <a class="pull-right">Alamat</a>
                </li>
                <li class="list-group-item">
                  <b>{{$testi -> keterangan_testi}}</b> <a class="pull-right">Keterangan</a>
                </li>

              </ul>

              <a href="/edittesti/{{$testi -> id}}" class="btn btn-primary btn-block"><b>Edit</b></a>
              <a href="/deletetesti/{{$testi ->id}}"  onclick="return confirm('Apa admin yakin menghapus Testimoni ini?');">
                <button type="button" class="btn btn-danger btn-block">Hapus</button>
              </a>

            </div>
            <!-- /.box-body -->
          </div>
        </div>
            @endforeach



        <div class="col-md-3" >
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Testimoni</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="/storetesti">
                    {!! csrf_field() !!}
              <div class="box-body">

                <div class="form-group">
                  <label >Nama Testi</label>
                  <input class="form-control"  placeholder="Masukkan Nama" name="nama_testi">
                </div>

                <div class="form-group">
                  <label >Alamat Testi (Hanya Kota)</label>
                  <input class="form-control"  placeholder="Masukkan Alamat" name="alamat_testi">
                </div>


                <div class="form-group">
                  <label >Keterangan Testi</label>
                  <textarea class="form-control" name="keterangan_testi" placeholder="Keterangan Testi" rows="3"></textarea>

                </div>

                <div class="form-group">
                  <label >File input</label>
                  <input type="file" name="gambar_testi">

                  <p class="help-block">Harap dilengkapi</p>
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

















@endsection