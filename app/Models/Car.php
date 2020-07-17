<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use eloquentFilter\QueryFilter\ModelFilters\Filterable;
use App\Traits\carsFilter;

class Car extends Model
{

    use Filterable, carsFilter;

    private static $whiteListFilter =[
        'carNumber',
        'ownerName',
        'ownerPhone',
        'created_at',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'carNumber', 'carType', 'ownerName','ownerPhone',
    ];



    public function parking()
    {
        return $this->belongsTo(Parking::class);
    }
}
