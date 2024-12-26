<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Categorie extends Model
{    public const TABLE_NAME = 'categories';

    public const COL_ID = 'id';
    public const COL_NAME = 'name';
    public const COL_SLUG = 'slug';
    public const COL_DESCRIPTION = 'description';
    public const COL_IMAGE = 'image';
    public const COL_DISPLAY = 'display';
    public const COL_PARENT_ID = 'parent_id';
    public const COL_FAMILY_ID = 'family_id';
    public const COL_CREATED_AT = 'created_at';
    public const COL_UPDATED_AT = 'updated_at';
    
    use HasTranslations;
    public $translatable = [];
    
 

 
    
 
}
