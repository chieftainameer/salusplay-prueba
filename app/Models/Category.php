<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    const FIELD_ID = 'id';
    const FIELD_TITLE = 'title';
    const FIELD_SLUG = 'slug';
    const FIELD_VISIBLE = 'visible';
    const FIELD_CREATED_AT = 'created_at';
    const FIELD_UPDATED_AT = 'updated_at';
    const FIELD_DELETED_AT = 'deleted_at';

    static $rules = [
        self::FIELD_TITLE => 'required|string|unique:categories,title|max:250',
    ];

    protected $casts = [
        self::FIELD_VISIBLE => 'boolean'
    ];

    protected $fillable = [
        self::FIELD_TITLE,
        self::FIELD_SLUG,
        self::FIELD_VISIBLE,
        self::FIELD_CREATED_AT,
        self::FIELD_UPDATED_AT
    ];

    public function getRouteKeyName(): string
    {
        return self::FIELD_SLUG;
    }
    
    // relationships
    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class);
    }
    
    // local scopes
    public function scopeVisible(Builder $query) : void
    {
        $query->where(self::FIELD_VISIBLE,1);
    }
}
