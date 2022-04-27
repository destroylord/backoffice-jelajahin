<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuRestaurant extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'menus';

    protected $guarded = [];

    protected $primaryKey = 'uuid_menu';
    public $incrementing = true;

    protected $keyType = 'string';

    // public function restaurants()
    // {
    //     return $this->belongsTo(Restaurant::class,'uuid_restaurants');
    // }
}
