<?php

namespace Cownet\Laravel\Uuid;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->incrementing) {
                $model->{$model->getKeyName()} = (string)Uuid::generate(4);
            }
        });
    }

}