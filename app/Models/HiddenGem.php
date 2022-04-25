<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiddenGem extends Model
{
    use HasFactory;

    protected $guarded = [];


    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'string';

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
