<?php

namespace App\Enums;

use Gecche\Cupparis\App\Enums\EnumHelperTrait;

enum Sesso: string
{
    use EnumHelperTrait;

    case MASCHILE = 'M';
//    case VALIDATION = 'validation';
//    case REFERENT_REJECTED = 'referent_rejected';
    case FEMMINILE = 'F';

    case ALTRO = 'A';

}

// see https://emekambah.medium.com/php-enum-and-use-cases-in-laravel-ac015cf181ad
