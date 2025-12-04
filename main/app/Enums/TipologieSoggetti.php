<?php

namespace App\Enums;

use Gecche\Cupparis\App\Enums\EnumHelperTrait;

enum TipologieSoggetti: string
{
    use EnumHelperTrait;

    case FISICA = 'F';
//    case VALIDATION = 'validation';
//    case REFERENT_REJECTED = 'referent_rejected';
    case GIURIDICA = 'G';


}

// see https://emekambah.medium.com/php-enum-and-use-cases-in-laravel-ac015cf181ad
