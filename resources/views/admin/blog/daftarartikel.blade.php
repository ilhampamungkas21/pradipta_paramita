@extends('admin.layout.layout')
@section('konten')








          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Semua Artikel</h3></br>
              <a href="buatartikel"><button type="button" class="btn btn-success btn-sm">Buat Artikel</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Artikel</th>
                  <th>Judul Artikel</th>
                  <th>Kategori Artikel</th>
                  <th>Isi Artikel</th>
                  <th>Dibuat Pada</th>
                  <th>Diupdate Pada</th>
                  <th>Gambar Artikel</th>
                </tr>
                </thead>
                <tbody>

                
                @foreach($artikell as $artikel)

                <tr>
                  <td>{{ $artikel -> id }}</td>
                  <td>{{ $artikel -> judul_artikel }}</td>
                  <td>{{ $artikel -> kategori_artikel }}</td>
                  <td>{!!substr($artikel -> isi_artikel,0,30)!!}...</td>

                  <td>{{ $artikel -> created_at }}</td>
                  <td>{{ $artikel -> updated_at }}</td>


                  <td class="center"> <img src="{{ asset('img/gambar_artikel/' . $artikel->gambar_artikel) }}" alt="" width="50" height="50"> </td>
        

                        <td>
                        <a href="/editartikel/{{$artikel ->id}}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                        <a href="/hapusartikel/{{$artikel ->id}}" onclick="return confirm('Anda Yakin ingin menghapus artikel ini');">
                           <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                        </a>

                        </td>
                </tr>

                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Artikel</th>
                  <th>Judul Artikel</th>
                  <th>Kategori Artikel</th>
                  <th>Isi Artikel</th>
                  <th>Gambar Artikel</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection
