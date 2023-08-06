<?php

namespace App\EloquentFilters;

use Illuminate\Database\Eloquent\Builder;

class PageId
{
    /**
     * Apply the filter after validation passes & sanitize
     * @param string $value
     * @param  Builder  $builder
     */
    public function handle(string $value, Builder $builder): void
    {
        $builder->where('page_id', $value);
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    public function sanitize($value)
    {
        return is_string($value) ? $value : '';
    }
}