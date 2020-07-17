<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * Trait usersFilter.
 */
trait carsFilter
{
    /**
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param                                       $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function carNumber_like(Builder $builder, $value)
    {
        return $builder->where('carNumber', 'like', '%' . $value . '%');
    }

    public function ownerName_like(Builder $builder, $value)
    {
        return $builder->where('ownerName', 'like', '%' . $value . '%');
    }

    public function ownerPhone_like(Builder $builder, $value)
    {
        return $builder->where('ownerPhone', 'like', '%' . $value . '%');
    }

    public function created_between(Builder $builder, $value)
    {
        $time = json_decode($value, true);

        $start = $time['start'];
        $end = $time['end'];
        return $builder->whereBetween('created_at', [$start, $end]);
    }
}
