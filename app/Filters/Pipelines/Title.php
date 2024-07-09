<?php

namespace App\Filters\Pipelines;

use Illuminate\Database\Eloquent\Builder;

class Title extends Filter
{
    /**
     * @param $filter
     * @param  Builder  $builder
     * @return Builder
     */
    protected function applyFilter(Builder $builder): Builder
    {
        return $builder->where('title', 'like', '%' . request($this->filterName()) . '%');
    }
}
