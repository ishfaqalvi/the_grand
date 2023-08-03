<?php

namespace App\EloquentFilters;

use Illuminate\Database\Eloquent\Builder;

class CategoryId
{
    /**
     * Apply the filter after validation passes & sanitize
     * @param string $value
     * @param  Builder  $builder
     */
    public function handle(string $value, Builder $builder): void
    {
        $builder->where('category_id', $value);
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