<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public static function findBySlug($slug, array $columns = ['*'])
    {
        return static::whereSlug($slug)->first($columns);
    }
    /**
     * Get the post date.
     *
     * @param  string  $value
     * @return string
     */
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->diffForhumans();
    }
}
