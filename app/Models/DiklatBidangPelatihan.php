<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DiklatBidangPelatihan
 * @package App\Models
 * @version April 30, 2021, 5:59 pm UTC
 *
 */
class DiklatBidangPelatihan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'diklat_bidang_pelatihans';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'id_bidang';

    public $guarded = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_bidang' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];
}
