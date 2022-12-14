<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slimming extends Model
{
    use HasFactory;

    protected $table = 'slimming';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama','no_hp','alamat','berat_badan','lokasi','idgerai','riwayat_penyakit','keterangan_lain'
    ];
}
