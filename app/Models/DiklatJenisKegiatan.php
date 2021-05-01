<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DiklatJenisKegiatan
 * @package App\Models
 * @version April 30, 2021, 6:25 pm UTC
 *
 * @property string $kode_kegiatan
 * @property string $nama_kegiatan
 */
class DiklatJenisKegiatan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'diklat_jenis_kegiatans';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'id_kegiatan';

    public $fillable = [
        'kode_kegiatan',
        'nama_kegiatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_kegiatan' => 'integer',
        'kode_kegiatan' => 'string',
        'nama_kegiatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_kegiatan' => 'required|numeric|unique:diklat_jenis_kegiatans,kode_kegiatan',
        'nama_kegiatan' => 'required'
    ];
}
