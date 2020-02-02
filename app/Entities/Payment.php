<?php

namespace App\Entities;

use RuntimeException;

class Payment extends Entity
{
    /**
     * The entity's attribute keys.
     *
     * @var array
     */
    protected $keys = [
        'id',
        'date',
        'category',
        'price',
        'income',
        'spend',
        'place',
        'name',
        'comment',
    ];
}
