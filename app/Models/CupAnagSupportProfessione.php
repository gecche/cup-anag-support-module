<?php

namespace Modules\CupAnagSupport\Models;

use Gecche\Cupparis\App\Breeze\Breeze;

/**
 * Breeze (Eloquent) model for cup_anag_support_professioni table.
 */
class CupAnagSupportProfessione extends Breeze
{

    
//    use ModelWithUploadsTrait;

    protected $table = 'cup_anag_support_professioni';

    protected $guarded = ['id'];
    //protected $fillable = [];

    public $timestamps = true;
    public $ownerships = true;

    public $appends = [

    ];


    public static $relationsData = [





//        'belongsto' => array(self::BELONGS_TO, 'related' => CupAnagSupportProfessione::class, 'foreignKey' => '<FOREIGNKEYNAME>'),
//        'belongstomany' => array(self::BELONGS_TO_MANY, 'related' => CupAnagSupportProfessione::class, 'table' => '<TABLEPIVOTNAME>','pivotKeys' => [],'foreignKey' => '<FOREIGNKEYNAME>','otherKey' => '<OTHERKEYNAME>') ,
//        'hasmany' => array(self::HAS_MANY, 'related' => CupAnagSupportProfessione::class, 'table' => '<TABLENAME>','foreignKey' => '<FOREIGNKEYNAME>'),
    ];

    public static $rules = [
//        'username' => 'required|between:4,255|unique:users,username',
    ];

    public $columnsForSelectList = ['descrizione'];
     //['id','descrizione'];

    public $defaultOrderColumns = ['descrizione' => 'ASC', ];
     //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['descrizione'];
     //['cognome','denominazione','codicefiscale','partitaiva'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';


}
