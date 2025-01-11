<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Family extends Model
{

    use HasTranslations;


    public $translatable = [self::COL_NAME];
    public $fillable = [self::COL_NAME];
    protected $enableTranslations = true;}
