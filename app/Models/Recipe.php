<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recipe extends Model
{
    use HasFactory,SoftDeletes;

    const FIELD_ID = 'id';
    const FIELD_CATEGORY_ID = 'category_id';
    const FIELD_TITLE = 'title';
    const FIELD_SLUG = 'slug';
    const FIELD_THUMBNAIL = 'thumbnail';
    const FIELD_PREPARATION_TIME = 'preparation_time';
    const FIELD_NUM_OF_RATIONES = 'num_of_rationes';
    const FIELD_INGREDIENTS = 'ingredients';
    const FIELD_PROCEDURE = 'procedure';
    const FIELD_VISIBLE = 'visible';
    const FIELD_PUBLISHED_AT = 'published_at';
    const FIELD_CREATED_AT = 'created_at';
    const FIELD_UPDATED_AT = 'updated_at';
    const FIELD_DELETED_AT = 'deleted_at';

    protected $casts = [
        self::FIELD_PUBLISHED_AT => 'datetime',
        self::FIELD_VISIBLE => 'boolean'
    ];

    static $rules = [
        self::FIELD_TITLE => 'required|string|unique:recipes,title|max:250',
        self::FIELD_CATEGORY_ID => 'required|number|exists:categories,id',
        self::FIELD_PREPARATION_TIME => 'required|numeric',
        self::FIELD_NUM_OF_RATIONES => 'required|numeric',
        self::FIELD_INGREDIENTS => 'required|string',
        self::FIELD_PROCEDURE => 'required|string'
    ];

    protected $fillable = [
        self::FIELD_TITLE,
        self::FIELD_SLUG,
        self::FIELD_THUMBNAIL,
        self::FIELD_CATEGORY_ID,
        self::FIELD_PREPARATION_TIME,
        self::FIELD_NUM_OF_RATIONES,
        self::FIELD_INGREDIENTS,
        self::FIELD_PROCEDURE,
        self::FIELD_VISIBLE,
        self::FIELD_PUBLISHED_AT,
        self::FIELD_CREATED_AT,
        self::FIELD_UPDATED_AT,
    ];

    public function getRouteKeyName(): string
    {
        return self::FIELD_SLUG;
    }

    // relationships
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // local scopes
    public function scopeVisible(Builder $query)
    {
        $query->where(self::FIELD_VISIBLE,'=',1);
    }

    public function scopeHidden(Builder $query)
    {
        $query->where(self::FIELD_VISIBLE,'=',0);
    }
}
