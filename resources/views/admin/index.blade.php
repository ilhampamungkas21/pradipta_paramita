@extends('admin.layout.layout')
@section('konten')


        <div class="row">

                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>100</h3>

                      <p>Daftar Produk</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="daftarproduk.html" class="small-box-footer">Buka <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>100</h3>

                      <p>Daftar Admin Baru</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{url('registeradmin')}}" class="small-box-footer">Buka <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>



                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-purple">
                    <div class="inner">
                      <h3>Bagian Depan</h3>

                      <p>Edit CV.PRADIPTA PARAMITA</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{url('registeradmin')}}" class="small-box-footer">Buka <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>


                  <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>Testimoni</h3>

                      <p>Testimoni Partner (Berpengaruh)</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="testimoni" class="small-box-footer">Buka <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>


                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-orange">
                    <div class="inner">
                      <h3>Artiel</h3>

                      <p>Artikel</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="daftarartikel" class="small-box-footer">Buka <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>100<sup style="font-size: 20px">%</sup></h3>

                      <p>Testimoni</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="bestseller.html" class="small-box-footer">Buka <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>



        </div>






















@endsection
