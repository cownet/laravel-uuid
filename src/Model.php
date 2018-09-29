<?php

namespace Cownet\Laravel\Uuid;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Model
 * @package Cownet\Laravel\Uuid
 */
class Model extends EloquentModel
{

    /**
     * Model constructor.
     * @param array $attributes
     * @throws \Exception
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if($this->incrementing === false) {
            $this->{$this->getKeyName()} = (string)Uuid::generate(4);
        }
    }

}