<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
  protected $table= 'barang';
  protected $primarykey = 'id';
  protected $fillable =['nama_barang','harga_normal','harga_diskon','deskripsi_barang_panjang','deskripsi_barang_singkat','gambar_barang'];
}
