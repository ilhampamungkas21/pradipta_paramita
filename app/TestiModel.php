<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestiModel extends Model
{
  protected $table= 'testimoni';
  protected $primarykey = 'id';
  protected $fillable =['nama_testi','gambar_testi','alamat_testi','keterangan_testi'];
}
