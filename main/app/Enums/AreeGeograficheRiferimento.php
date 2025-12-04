<?php

namespace App\Enums;

use Gecche\Cupparis\App\Enums\EnumHelperTrait;

enum AreeGeograficheRiferimento: string
{
    use EnumHelperTrait;

    case NAZIONALE = 'nazionale';
//    case VALIDATION = 'validation';
//    case REFERENT_REJECTED = 'referent_rejected';
    case REGIONALE = 'regionale';
    case INTERPROVINCIALE = 'interprovinciale';
    case PROVINCIALE = 'provinciale';

}

// see https://emekambah.medium.com/php-enum-and-use-cases-in-laravel-ac015cf181ad
