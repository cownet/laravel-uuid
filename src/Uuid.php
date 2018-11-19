<?php

namespace Cownet\Laravel\Uuid;

use Webpatser\Uuid\Uuid as VendorUuid;

/**
 * Class Model
 * @package Cownet\Laravel\Uuid
 */
trait Uuid
{

    /**
     * Model constructor.
     * @param array $attributes
     * @throws \Exception
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if ($this->incrementing === false) {
            $this->{$this->getKeyName()} = (string)VendorUuid::generate(4);
        }
    }

}