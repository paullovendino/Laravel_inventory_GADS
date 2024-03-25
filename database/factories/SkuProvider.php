<?php
// database/factories/providers/SkuProvider.php

namespace Database\Factories;

use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SkuProvider extends Base
{
    /**
     * Generate a random SKU.
     *
     * @param int $length
     * @return string
     */
    public function sku($length = 8)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $sku = '';
        for ($i = 0; $i < $length; $i++) {
            $sku .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $sku;
    }
}
