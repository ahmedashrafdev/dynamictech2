<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Scope a query to only include main products.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMain($query)
    {
        return $query->where('parent_id',null);
    }

    /**
     * children realtionship
     */
    public function children()
    {
        return $this->hasMany(Product::class,'parent_id','id');
    }


    public static function findBySlug($slug, array $columns = ['*'])
    {
        return static::whereSlug($slug)->first($columns);
    }

    public static function hasChildren($slug)
    {
        return count(static::whereSlug($slug)->first()->children) > 0;
    }
}
