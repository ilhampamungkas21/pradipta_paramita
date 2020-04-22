<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    
  protected $table= 'artikel';
  protected $primarykey = 'id';
  protected $fillable =['judul_artikel','isi_artikel','kategori_artikel','gambar_artikel'];
}
