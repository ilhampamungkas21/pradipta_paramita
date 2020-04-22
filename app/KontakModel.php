<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KontakModel extends Model
{
  protected $table= 'kontak';
  protected $primarykey = 'id';
  protected $fillable =['nama_cp','jabatan_cp','nomor_cp','gambar_cp'];
}
