<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasUuid;

class Hotel extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'lodgings';
    protected $guarded = [];

    protected $primaryKey = 'uuid_lodging';
    public $incrementing = true;

    protected $keyType = 'string';

    public $timestamps = false;

}
