<?php

namespace Modules\CupAnagSupport\Models;

use Gecche\Cupparis\App\Breeze\Breeze;

class CupAnagSupportAttivita extends Breeze
{

    
//    use ModelWithUploadsTrait;

    protected $table = 'cup_anag_support_attivita';

    protected $guarded = ['id'];

    public $timestamps = true;
    public $ownerships = true;

    public $appends = [

    ];


    public static $relationsData = [





//        'belongsto' => array(self::BELONGS_TO, CupAnagSupportAttivita::class, 'foreignKey' => '<FOREIGNKEYNAME>'),
//        'belongstomany' => array(self::BELONGS_TO_MANY, CupAnagSupportAttivita::class, 'table' => '<TABLEPIVOTNAME>','pivotKeys' => [],'foreignKey' => '<FOREIGNKEYNAME>','otherKey' => '<OTHERKEYNAME>') ,
//        'hasmany' => array(self::HAS_MANY, CupAnagSupportAttivita::class, 'table' => '<TABLENAME>','foreignKey' => '<FOREIGNKEYNAME>'),
    ];

    public static $rules = [
//        'username' => 'required|between:4,255|unique:users,username',
    ];

    public $columnsForSelectList = ['codice', 'descrizione'];
     //['id','descrizione'];

    public $defaultOrderColumns = ['codice' => 'ASC', ];
     //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['codice', 'descrizione'];
     //['cognome','denominazione','codicefiscale','partitaiva'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';


}
