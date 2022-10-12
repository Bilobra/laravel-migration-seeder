<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creo array associativo
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'data' => '2022/10/12',
                'stazione_di_partenza' => 'Novara',
                'stazione_di_arrivo' => 'Milano',
                'orario_di_partenza' => '12:00:00',
                'orario_di_arrivo' => '13:30:00',
                'codice_treno' => 'FGK67DS',
                'numero_carrozze' => 68,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Trenord',
                'data' => '2022/10/12',
                'stazione_di_partenza' => 'Galliate',
                'stazione_di_arrivo' => 'Cadorna',
                'orario_di_partenza' => '10:00:00',
                'orario_di_arrivo' => '11:30:00',
                'codice_treno' => 'FGKaop3',
                'numero_carrozze' => 40,
                'in_orario' => 0,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Trenitalia',
                'data' => '2022/10/13',
                'stazione_di_partenza' => 'Arona',
                'stazione_di_arrivo' => 'Bellinzago',
                'orario_di_partenza' => '22:50:00',
                'orario_di_arrivo' => '23:30:00',
                'codice_treno' => 'H4DKaop3',
                'numero_carrozze' => 20,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Trenitalia',
                'data' => '2022/10/11',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Trecate',
                'orario_di_partenza' => '08:50:00',
                'orario_di_arrivo' => '09:50:00',
                'codice_treno' => 'j4D00op3',
                'numero_carrozze' => 180,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Trenord',
                'data' => '2022/10/13',
                'stazione_di_partenza' => 'Cadorna',
                'stazione_di_arrivo' => 'Saronno',
                'orario_di_partenza' => '22:50:00',
                'orario_di_arrivo' => '23:10:00',
                'codice_treno' => '11KDR89',
                'numero_carrozze' => 56,
                'in_orario' => 0,
                'cancellato' => 1,
            ],
            [
                'azienda' => 'Trenord',
                'data' => '2022/10/10',
                'stazione_di_partenza' => 'Galliate',
                'stazione_di_arrivo' => 'Novara',
                'orario_di_partenza' => '15:50:00',
                'orario_di_arrivo' => '16:15:00',
                'codice_treno' => 'UNO38FR',
                'numero_carrozze' => 12,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
        ];

        // ciclo array con foeach
        // creo instanza vuota della classe Train(model)
        // valorizzo le proprietà dell'istanza
        // salvo con ->save() nel DB

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->data = $train['data'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];

            $newTrain->save();
        }
    }
}
