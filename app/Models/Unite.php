<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Unite extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [self::COL_NAME];

    public const TABLE_NAME = 'unites';

    public const COL_ID = 'id';

    public const COL_NAME = 'name';

    public const COL_CREATED_AT = 'created_at';

    public const COL_UPDATED_AT = 'updated_at';

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_unite', 'unite_id', 'product_id');
    }
}
