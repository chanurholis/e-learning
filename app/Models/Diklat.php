<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Diklat
 * @package App\Models
 * @version April 30, 2021, 4:09 pm UTC
 *
 * @property string $jenis_diklat
 * @property string $bidang_pelatihan
 * @property string $jenis_kegiatan
 * @property string $model_palatihan
 * @property string $kode_diklat
 * @property string $kode_profil
 * @property string $nama_diklat
 * @property string $tahun
 * @property string $jenjang
 * @property string $syarat_peserta
 * @property string $syarat_wi
 * @property string $deskripsi
 * @property string $tujuan_diklat
 * @property string $keterangan
 * @property For $status_aktif
 */
class Diklat extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'diklats';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id_diklat';

    public $fillable = [
        'jenis_diklat',
        'bidang_pelatihan',
        'jenis_kegiatan',
        'model_palatihan',
        'kode_diklat',
        'kode_profil',
        'nama_diklat',
        'tahun',
        'jenjang',
        'syarat_peserta',
        'syarat_wi',
        'deskripsi',
        'tujuan_diklat',
        'keterangan',
        'status_aktif'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_diklat' => 'integer',
        'jenis_diklat' => 'string',
        'bidang_pelatihan' => 'string',
        'jenis_kegiatan' => 'string',
        'model_palatihan' => 'string',
        'kode_diklat' => 'string',
        'kode_profil' => 'string',
        'nama_diklat' => 'string',
        'tahun' => 'string',
        'jenjang' => 'string',
        'syarat_peserta' => 'string',
        'syarat_wi' => 'string',
        'deskripsi' => 'string',
        'tujuan_diklat' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jenis_diklat' => 'required',
        'bidang_pelatihan' => 'required',
        'jenis_kegiatan' => 'nomor string,3 text',
        'model_palatihan' => 'required',
        'kode_diklat' => 'required',
        'kode_profil' => 'required',
        'nama_diklat' => 'required',
        'tahun' => 'required',
        'jenjang' => 'required',
        'syarat_peserta' => 'required',
        'syarat_wi' => 'required',
        'deskripsi' => 'required',
        'tujuan_diklat' => 'required',
        'keterangan' => 'required',
        'status_aktif' => 'required'
    ];
}
