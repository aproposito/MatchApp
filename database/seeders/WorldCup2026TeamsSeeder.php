<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorldCup2026TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            ['name' => 'Canadá', 'flag' => 'https://flagcdn.com/ca.svg'],
            ['name' => 'México', 'flag' => 'https://flagcdn.com/mx.svg'],
            ['name' => 'Estados Unidos', 'flag' => 'https://flagcdn.com/us.svg'],
            ['name' => 'Argentina', 'flag' => 'https://flagcdn.com/ar.svg'],
            ['name' => 'Brasil', 'flag' => 'https://flagcdn.com/br.svg'],
            ['name' => 'Colombia', 'flag' => 'https://flagcdn.com/co.svg'],
            ['name' => 'Ecuador', 'flag' => 'https://flagcdn.com/ec.svg'],
            ['name' => 'Paraguay', 'flag' => 'https://flagcdn.com/py.svg'],
            ['name' => 'Uruguay', 'flag' => 'https://flagcdn.com/uy.svg'],
            ['name' => 'Australia', 'flag' => 'https://flagcdn.com/au.svg'],
            ['name' => 'Irán', 'flag' => 'https://flagcdn.com/ir.svg'],
            ['name' => 'Japón', 'flag' => 'https://flagcdn.com/jp.svg'],
            ['name' => 'Jordania', 'flag' => 'https://flagcdn.com/jo.svg'],
            ['name' => 'Uzbekistán', 'flag' => 'https://flagcdn.com/uz.svg'],
            ['name' => 'Qatar', 'flag' => 'https://flagcdn.com/qa.svg'],
            ['name' => 'Arabia Saudí', 'flag' => 'https://flagcdn.com/sa.svg'],
            ['name' => 'Corea del Sur', 'flag' => 'https://flagcdn.com/kr.svg'],
            ['name' => 'Argelia', 'flag' => 'https://flagcdn.com/dz.svg'],
            ['name' => 'Cabo Verde', 'flag' => 'https://flagcdn.com/cv.svg'],
            ['name' => 'Egipto', 'flag' => 'https://flagcdn.com/eg.svg'],
            ['name' => 'Ghana', 'flag' => 'https://flagcdn.com/gh.svg'],
            ['name' => 'Costa de Marfil', 'flag' => 'https://flagcdn.com/ci.svg'],
            ['name' => 'Marruecos', 'flag' => 'https://flagcdn.com/ma.svg'],
            ['name' => 'Senegal', 'flag' => 'https://flagcdn.com/sn.svg'],
            ['name' => 'Sudáfrica', 'flag' => 'https://flagcdn.com/za.svg'],
            ['name' => 'Túnez', 'flag' => 'https://flagcdn.com/tn.svg'],
            ['name' => 'Inglaterra', 'flag' => 'https://flagcdn.com/gb-eng.svg'],
            ['name' => 'Francia', 'flag' => 'https://flagcdn.com/fr.svg'],
            ['name' => 'Croacia', 'flag' => 'https://flagcdn.com/hr.svg'],
            ['name' => 'Noruega', 'flag' => 'https://flagcdn.com/no.svg'],
            ['name' => 'Portugal', 'flag' => 'https://flagcdn.com/pt.svg'],
            ['name' => 'Alemania', 'flag' => 'https://flagcdn.com/de.svg'],
            ['name' => 'Países Bajos', 'flag' => 'https://flagcdn.com/nl.svg'],
            ['name' => 'Suiza', 'flag' => 'https://flagcdn.com/ch.svg'],
            ['name' => 'Escocia', 'flag' => 'https://flagcdn.com/gb-sct.svg'],
            ['name' => 'España', 'flag' => 'https://flagcdn.com/es.svg'],
            ['name' => 'Austria', 'flag' => 'https://flagcdn.com/at.svg'],
            ['name' => 'Bélgica', 'flag' => 'https://flagcdn.com/be.svg'],
            ['name' => 'Panamá', 'flag' => 'https://flagcdn.com/pa.svg'],
            ['name' => 'Curaçao', 'flag' => 'https://flagcdn.com/cw.svg'],
            ['name' => 'Haití', 'flag' => 'https://flagcdn.com/ht.svg'],
            ['name' => 'Nueva Zelanda', 'flag' => 'https://flagcdn.com/nz.svg'],
            ['name' => 'Jamaica', 'flag' => 'https://flagcdn.com/jm.svg'],
            ['name' => 'República Democrática del Congo', 'flag' => 'https://flagcdn.com/cd.svg'],
            ['name' => 'Bolivia', 'flag' => 'https://flagcdn.com/bo.svg'],
            ['name' => 'Irak', 'flag' => 'https://flagcdn.com/iq.svg'],
        ];
        DB::table('teams')->insert($teams);
    }
}
