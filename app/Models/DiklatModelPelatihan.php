<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DiklatModelPelatihan
 * @package App\Models
 * @version April 30, 2021, 7:02 pm UTC
 *
 * @property string $kode_model
 * @property string $nama_model
 */
class DiklatModelPelatihan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'diklat_model_pelatihans';
    

    protected $dates = ['deleted_at'];


    protected $primaryKey = 'id_model';

    public $fillable = [
        'kode_model',
        'nama_model'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_model' => 'integer',
        'kode_model' => 'string',
        'nama_model' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_model' => 'required',
        'nama_model' => 'required'
    ];

    
}
