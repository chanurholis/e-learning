<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DiklatBidangKerja
 * @package App\Models
 * @version May 1, 2021, 7:24 am UTC
 *
 * @property string $kode_jenis
 * @property string $kode_bidang
 * @property string $kode_kerja
 * @property string $nama_kerja
 * @property string $status_aktif
 */
class DiklatBidangKerja extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'diklat_bidang_kerjas';
    

    protected $dates = ['deleted_at'];


    protected $primaryKey = 'id_kerja';

    public $fillable = [
        'kode_jenis',
        'kode_bidang',
        'kode_kerja',
        'nama_kerja',
        'status_aktif'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_kerja' => 'integer',
        'kode_jenis' => 'string',
        'kode_bidang' => 'string',
        'kode_kerja' => 'string',
        'nama_kerja' => 'string',
        'status_aktif' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_jenis' => 'required',
        'kode_bidang' => 'required',
        'kode_kerja' => 'required',
        'nama_kerja' => 'required',
        'status_aktif' => 'required'
    ];

    
}
