<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BestSellerModel extends Model
{
  protected $table= 'bestseller';
  protected $primarykey = 'id';
  protected $fillable =['nama_barang','harga_normal','harga_diskon','deskripsi_barang','gambar_barang'];
}
