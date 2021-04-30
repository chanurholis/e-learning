<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Diklat-Jenis
 * @package App\Models
 * @version April 30, 2021, 4:38 pm UTC
 *
 * @property string $kode_jenis
 * @property string $nama_jenis
 * @property string $status_aktif
 */
class DiklatJenis extends Model
{
    // use SoftDeletes;
    use HasFactory;

    public $table = 'diklat_jenis';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id_jenis';

    public $fillable = [
        'kode_jenis',
        'nama_jenis',
        'status_aktif'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_jenis' => 'integer',
        'kode_jenis' => 'string',
        'nama_jenis' => 'string',
        'status_aktif' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_jenis' => 'required|max:2',
        'nama_jenis' => 'required',
        'status_aktif' => 'required'
    ];
}
