<?php

namespace Database\Seeders;

use App\Models\EffectType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EffectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $effectTypes = [
            [
                'id' => 210,
                'value' => 'pa',
                'display_name' => 'Pa',
                'type' => 'E',
            ],
            [
                'id' => 220,
                'value' => 'pm',
                'display_name' => 'Pm',
                'type' => 'E',
            ],
            [
                'id' => 230,
                'value' => 'po',
                'display_name' => 'Alcance',
                'type' => 'E',
            ],
            [
                'id' => 130,
                'value' => 'vi',
                'display_name' => 'Vitalidad',
                'type' => 'E',
            ],
            [
                'id' => 170,
                'value' => 'ag',
                'display_name' => 'Agilidad',
                'type' => 'E',
            ],
            [
                'id' => 160,
                'value' => 'ch',
                'display_name' => 'Suerte',
                'type' => 'E',
            ],
            [
                'id' => 140,
                'value' => 'fo',
                'display_name' => 'Fuerza',
                'type' => 'E',
            ],
            [
                'id' => 150,
                'value' => 'in',
                'display_name' => 'Inteligencia',
                'type' => 'E',
            ],
            [
                'id' => 190,
                'value' => 'pu',
                'display_name' => '% Dmg',
                'type' => 'E',
            ],
            [
                'id' => 200,
                'value' => 'cc',
                'display_name' => 'Critico',
                'type' => 'E',
            ],
            [
                'id' => 180,
                'value' => 'sa',
                'display_name' => 'Sabiduría',
                'type' => 'E',
            ],
            [
                'id' => 310,
                'value' => 'so',
                'display_name' => 'Curas',
                'type' => 'E',
            ],
            [
                'id' => 330,
                'value' => 'ii',
                'display_name' => 'Iniciativa',
                'type' => 'E',
            ],
            [
                'id' => 240,
                'value' => 'ic',
                'display_name' => 'Invocación',
                'type' => 'E',
            ],
            [
                'id' => 320,
                'value' => 'pp',
                'display_name' => 'Prospección',
                'type' => 'E',
            ],
            [
                'id' => 340,
                'value' => 'pd',
                'display_name' => 'Pods',
                'type' => 'E',
            ],
            [
                'id' => 250,
                'value' => 'dmg',
                'display_name' => 'Daños fijos',
                'type' => 'E',
            ],
            [
                'id' => 570,
                'value' => 'rv',
                'display_name' => 'Reenvío daños',
                'type' => 'E',
            ],
            [
                'id' => 460,
                'value' => 'pi',
                'display_name' => 'Daños trampa',
                'type' => 'E',
            ],
            [
                'id' => 450,
                'value' => 'pip',
                'display_name' => 'Daños trampa',
                'type' => 'E',
            ],
            [
                'id' => 520,
                'value' => 'rn',
                'display_name' => 'Res. Neutro',
                'type' => 'E',
            ],
            [
                'id' => 470,
                'value' => 'rnp',
                'display_name' => '% Res. Neutro',
                'type' => 'E',
            ],
            [
                'id' => 530,
                'value' => 'rt',
                'display_name' => 'Res. Tierra',
                'type' => 'E',
            ],
            [
                'id' => 480,
                'value' => 'rtp',
                'display_name' => '% Res. Tierra',
                'type' => 'E',
            ],
            [
                'id' => 540,
                'value' => 'rf',
                'display_name' => 'Res. Fuego',
                'type' => 'E',
            ],
            [
                'id' => 490,
                'value' => 'rfp',
                'display_name' => '% Res. Fuego',
                'type' => 'E',
            ],
            [
                'id' => 550,
                'value' => 're',
                'display_name' => 'Res. Agua',
                'type' => 'E',
            ],
            [
                'id' => 500,
                'value' => 'rep',
                'display_name' => '% Res. Agua',
                'type' => 'E',
            ],
            [
                'id' => 560,
                'value' => 'ra',
                'display_name' => 'Res. Aire',
                'type' => 'E',
            ],
            [
                'id' => 510,
                'value' => 'rap',
                'display_name' => '% Res. Agua',
                'type' => 'E',
            ],
            [
                'id' => 10,
                'value' => 'dn',
                'display_name' => 'Daños Neutro',
                'type' => 'D',
            ],
            [
                'id' => 20,
                'value' => 'dt',
                'display_name' => 'Daños tierra',
                'type' => 'D',
            ],
            [
                'id' => 30,
                'value' => 'df',
                'display_name' => 'Daños fuego',
                'type' => 'D',
            ],
            [
                'id' => 40,
                'value' => 'de',
                'display_name' => 'Daños agua',
                'type' => 'D',
            ],
            [
                'id' => 50,
                'value' => 'da',
                'display_name' => 'Daños aire',
                'type' => 'D',
            ],
            [
                'id' => 60,
                'value' => 'vn',
                'display_name' => 'Robo neutro',
                'type' => 'D',
            ],
            [
                'id' => 70,
                'value' => 'vt',
                'display_name' => 'Robo tierra',
                'type' => 'D',
            ],
            [
                'id' => 80,
                'value' => 'vf',
                'display_name' => 'Robo fuego',
                'type' => 'D',
            ],
            [
                'id' => 90,
                'value' => 've',
                'display_name' => 'Robo agua',
                'type' => 'D',
            ],
            [
                'id' => 100,
                'value' => 'va',
                'display_name' => 'Robo aire',
                'type' => 'D',
            ],
            [
                'id' => 110,
                'value' => 'pvr',
                'display_name' => 'Pdv devueltos',
                'type' => 'D',
            ],
            [
                'id' => 120,
                'value' => 'pac',
                'display_name' => '-PA (objetivo)',
                'type' => 'U',
            ],
            [
                'id' => 710,
                'value' => 'chs',
                'display_name' => 'Arma de caza',
                'type' => 'U',
            ],
            [
                'id' => 370,
                'value' => 'rpa',
                'display_name' => 'Retira PA',
                'type' => 'E',
            ],
            [
                'id' => 390,
                'value' => 'epa',
                'display_name' => 'Esquiva PA',
                'type' => 'E',
            ],
            [
                'id' => 380,
                'value' => 'rpm',
                'display_name' => 'Retira PM',
                'type' => 'E',
            ],
            [
                'id' => 400,
                'value' => 'epm',
                'display_name' => 'Esquiva PM',
                'type' => 'E',
            ],
            [
                'id' => 350,
                'value' => 'ta',
                'display_name' => 'Placaje',
                'type' => 'E',
            ],
            [
                'id' => 360,
                'value' => 'fu',
                'display_name' => 'Huida',
                'type' => 'E',
            ],
            [
                'id' => 410,
                'value' => 'dc',
                'display_name' => 'Daños crítico',
                'type' => 'E',
            ],
            [
                'id' => 420,
                'value' => 'dp',
                'display_name' => 'Daños Empuje',
                'type' => 'E',
            ],
            [
                'id' => 302,
                'value' => 'ds',
                'display_name' => '% Daños hechizos',
                'type' => 'E',
            ],
            [
                'id' => 304,
                'value' => 'dw',
                'display_name' => '% Daños armas',
                'type' => 'E',
            ],
            [
                'id' => 308,
                'value' => 'dd',
                'display_name' => '% Daños distancia',
                'type' => 'E',
            ],
            [
                'id' => 306,
                'value' => 'dm',
                'display_name' => '% Daños cac',
                'type' => 'E',
            ],
            [
                'id' => 430,
                'value' => 'rc',
                'display_name' => 'Res critico',
                'type' => 'E',
            ],
            [
                'id' => 440,
                'value' => 'rp',
                'display_name' => 'Res empuje',
                'type' => 'E',
            ],
            [
                'id' => 564,
                'value' => 'rw',
                'display_name' => '% Res armas',
                'type' => 'E',
            ],
            [
                'id' => 568,
                'value' => 'rd',
                'display_name' => '% Res distancia',
                'type' => 'E',
            ],
            [
                'id' => 566,
                'value' => 'rm',
                'display_name' => '% Res cac',
                'type' => 'E',
            ],
            [
                'id' => 260,
                'value' => 'dnf',
                'display_name' => 'Daños neutro fijo',
                'type' => 'E',
            ],
            [
                'id' => 270,
                'value' => 'dtf',
                'display_name' => 'Daños tierra fijo',
                'type' => 'E',
            ],
            [
                'id' => 280,
                'value' => 'dff',
                'display_name' => 'Daños Fuego fijo',
                'type' => 'E',
            ],
            [
                'id' => 290,
                'value' => 'def',
                'display_name' => 'Daños agua fijo',
                'type' => 'E',
            ],
            [
                'id' => 300,
                'value' => 'daf',
                'display_name' => 'Daños aire fijo',
                'type' => 'E',
            ],
            [
                'id' => 723,
                'value' => 'at',
                'display_name' => 'Actitud',
                'type' => 'O',
            ],
            [
                'id' => 998,
                'value' => 'pdvf',
                'display_name' => 'Pdv devueltos Fuego',
                'type' => 'C',
            ],
            [
                'id' => 999,
                'value' => 'pdv',
                'display_name' => 'Pdv devueltos',
                'type' => 'C',
            ],
            [
                'id' => 1000,
                'value' => 'gf',
                'display_name' => 'Glifo Fuego',
                'type' => 'D',
            ],
            [
                'id' => 1001,
                'value' => 'pou',
                'display_name' => 'Daño Empuje',
                'type' => 'D',
            ],
            [
                'id' => 1002,
                'value' => 'pit',
                'display_name' => 'Trampa Tierra',
                'type' => 'D',
            ],
            [
                'id' => 1003,
                'value' => 'dv',
                'display_name' => 'Daños % de vida',
                'type' => 'D',
            ],
            [
                'id' => 1004,
                'value' => 'pf',
                'display_name' => 'Veneno Fuego',
                'type' => 'D',
            ],
            [
                'id' => 1005,
                'value' => 'puni',
                'display_name' => 'Castigo',
                'type' => 'D',
            ],
        ];

        foreach ($effectTypes as $effectType) {
            EffectType::updateOrCreate(
                ['id' => $effectType['id']],
                $effectType
            );
        }
    }
}
