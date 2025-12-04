<?php

namespace Modules\CupAnagSupport\Database\Seeders;

use App\Models\CupAnagSupportAttivita;
use App\Models\CupAnagSupportNaturaGiuridica;
use App\Models\CupAnagSupportProfessione;
use App\Models\CupAnagSupportStatoCivile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Nwidart\Modules\Facades\Module;

class CupAnagSupportDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $module = Module::find('CupAnagSupport');

        $modulePath = $module->getPath();

        $dataPath = $modulePath . '/database/data/';

        $entities = [
            [
                'table' => 'CupAnagSupport_attivita',
                'model' => CupAnagSupportAttivita::class,
            ],
            [
                'table' => 'CupAnagSupport_professioni',
                'model' => CupAnagSupportProfessione::class,
            ],
            [
                'table' => 'CupAnagSupport_stati_civili',
                'model' => CupAnagSupportStatoCivile::class,
            ],
            [
                'table' => 'CupAnagSupport_nature_giuridiche',
                'model' => CupAnagSupportNaturaGiuridica::class,
            ],
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        foreach (array_reverse($entities) as $entity) {

            $table = Arr::get($entity,'table');
            if (!$table) {
                throw new \Exception("Tabella o modello non trovato: " . print_r($entity,true));
            }
            echo "TRUNCATE TABLE ". $table . "\n";
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        foreach ($entities as $entity) {


            $table = Arr::get($entity,'table');
            $modelName = Arr::get($entity,'model');

            if (!$table || !$modelName) {
                throw new \Exception("Tabella o modello non trovato: " . print_r($entity,true));
            }
            echo "SEED TABLE ". $table . "\n";
            echo "SEED MODEL ". $modelName . "\n";

            $recordsPath = $table;


            $recordsData = File::get($dataPath . $recordsPath . '.json');

//        Log::info($recordsData);
            $recordsData = json_decode($recordsData, true);

            foreach ($recordsData as $recordData) {

                $model = new $modelName();
                $model->forceFill($recordData);
                $saved = $model->save();

            }
        }

    }
}
