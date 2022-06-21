<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasUuid;

class Restaurant extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'restaurants';
    protected $guarded = [];



    protected $primaryKey = 'uuid_restaurant';

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
