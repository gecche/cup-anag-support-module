<?php

namespace App\Enums;

use Gecche\Cupparis\App\Enums\EnumHelperTrait;

enum TipologieAnagrafichePiattaforma: string
{
    use EnumHelperTrait;

    case ORGANIZZAZIONE = 'OO.PP.';
    case ENTE_BILATERALE = 'Ente Bilaterale';
    case AZIENDA = 'Azienda';
    case SOGGETTO_PRIVATO = 'Soggetto Privato';
    case ALTRO = 'Altro';


}

// see https://emekambah.medium.com/php-enum-and-use-cases-in-laravel-ac015cf181ad
