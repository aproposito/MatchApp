<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Team;

class WorldCup2026TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Team::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $teams = [
            ['name' => 'Canadá', 'flag' => 'https://flagcdn.com/ca.svg'],
            ['name' => 'EE. UU.', 'flag' => 'https://flagcdn.com/us.svg'],
            ['name' => 'México', 'flag' => 'https://flagcdn.com/mx.svg'],
            ['name' => 'Alemania', 'flag' => 'https://flagcdn.com/de.svg'],
            ['name' => 'Arabia Saudí', 'flag' => 'https://flagcdn.com/sa.svg'],
            ['name' => 'Argelia', 'flag' => 'https://flagcdn.com/dz.svg'],
            ['name' => 'Argentina', 'flag' => 'https://flagcdn.com/ar.svg'],
            ['name' => 'Australia', 'flag' => 'https://flagcdn.com/au.svg'],
            ['name' => 'Austria', 'flag' => 'https://flagcdn.com/at.svg'],
            ['name' => 'Bélgica', 'flag' => 'https://flagcdn.com/be.svg'],
            ['name' => 'Bosnia y Herzegovina', 'flag' => 'https://flagcdn.com/ba.svg'],
            ['name' => 'Brasil', 'flag' => 'https://flagcdn.com/br.svg'],
            ['name' => 'Catar', 'flag' => 'https://flagcdn.com/qa.svg'],
            ['name' => 'Chequia', 'flag' => 'https://flagcdn.com/cz.svg'],
            ['name' => 'Colombia', 'flag' => 'https://flagcdn.com/co.svg'],
            ['name' => 'Costa de Marfil', 'flag' => 'https://flagcdn.com/ci.svg'],
            ['name' => 'Croacia', 'flag' => 'https://flagcdn.com/hr.svg'],
            ['name' => 'Curazao', 'flag' => 'https://flagcdn.com/cw.svg'],
            ['name' => 'Ecuador', 'flag' => 'https://flagcdn.com/ec.svg'],
            ['name' => 'Egipto', 'flag' => 'https://flagcdn.com/eg.svg'],
            ['name' => 'Escocia', 'flag' => 'https://flagcdn.com/gb-sct.svg'],
            ['name' => 'España', 'flag' => 'https://flagcdn.com/es.svg'],
            ['name' => 'Francia', 'flag' => 'https://flagcdn.com/fr.svg'],
            ['name' => 'Ghana', 'flag' => 'https://flagcdn.com/gh.svg'],
            ['name' => 'Haití', 'flag' => 'https://flagcdn.com/ht.svg'],
            ['name' => 'Inglaterra', 'flag' => 'https://flagcdn.com/gb-eng.svg'],
            ['name' => 'Irak', 'flag' => 'https://flagcdn.com/iq.svg'],
            ['name' => 'Islas de Cabo Verde', 'flag' => 'https://flagcdn.com/cv.svg'],
            ['name' => 'Japón', 'flag' => 'https://flagcdn.com/jp.svg'],
            ['name' => 'Jordania', 'flag' => 'https://flagcdn.com/jo.svg'],
            ['name' => 'Marruecos', 'flag' => 'https://flagcdn.com/ma.svg'],
            ['name' => 'Noruega', 'flag' => 'https://flagcdn.com/no.svg'],
            ['name' => 'Nueva Zelanda', 'flag' => 'https://flagcdn.com/nz.svg'],
            ['name' => 'Países Bajos', 'flag' => 'https://flagcdn.com/nl.svg'],
            ['name' => 'Panamá', 'flag' => 'https://flagcdn.com/pa.svg'],
            ['name' => 'Paraguay', 'flag' => 'https://flagcdn.com/py.svg'],
            ['name' => 'Portugal', 'flag' => 'https://flagcdn.com/pt.svg'],
            ['name' => 'RD Congo', 'flag' => 'https://flagcdn.com/cd.svg'],
            ['name' => 'República de Corea', 'flag' => 'https://flagcdn.com/kr.svg'],
            ['name' => 'RI de Irán', 'flag' => 'https://flagcdn.com/ir.svg'],
            ['name' => 'Senegal', 'flag' => 'https://flagcdn.com/sn.svg'],
            ['name' => 'Sudáfrica', 'flag' => 'https://flagcdn.com/za.svg'],
            ['name' => 'Suecia', 'flag' => 'https://flagcdn.com/se.svg'],
            ['name' => 'Suiza', 'flag' => 'https://flagcdn.com/ch.svg'],
            ['name' => 'Túnez', 'flag' => 'https://flagcdn.com/tn.svg'],
            ['name' => 'Turquía', 'flag' => 'https://flagcdn.com/tr.svg'],
            ['name' => 'Uruguay', 'flag' => 'https://flagcdn.com/uy.svg'],
            ['name' => 'Uzbekistán', 'flag' => 'https://flagcdn.com/uz.svg'],

            ['name' => 'Deportivo Alavés', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/f/f8/Deportivo_Alaves_logo_%282020%29.svg'],
            ['name' => 'Rayo Vallecano', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/d/d8/Rayo_Vallecano_logo.svg'],
            ['name' => 'Real Betis', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/1/13/Real_betis_logo.svg'],
            ['name' => 'Levante UD', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/7/7b/Levante_Uni%C3%B3n_Deportiva%2C_S.A.D._logo.svg'],
            ['name' => 'Celta', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/1/12/RC_Celta_de_Vigo_logo.svg'],
            ['name' => 'Sevilla FC', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/3/3b/Sevilla_FC_logo.svg'],
            ['name' => 'RCD Espanyol de Barcelona', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/9/92/RCD_Espanyol_crest.svg'],
            ['name' => 'Real Sociedad', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/f/f1/Real_Sociedad_logo.svg'],
            ['name' => 'Getafe CF', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/4/46/Getafe_logo.svg'],
            ['name' => 'CA Osasuna', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/3/38/CA_Osasuna_2024_crest.svg'],
            ['name' => 'RCD Mallorca', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/e/e0/Rcd_mallorca.svg'],
            ['name' => 'Real Oviedo', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/6/6e/Real_Oviedo_logo.svg'],
            ['name' => 'Real Madrid', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/5/56/Real_Madrid_CF.svg'],
            ['name' => 'Athletic Club', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/9/98/Club_Athletic_Bilbao_logo.svg'],
            ['name' => 'Valencia CF', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/c/ce/Valenciacf.svg'],
            ['name' => 'FC Barcelona', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg'],
            ['name' => 'Girona FC', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/f/f7/Girona_FC_Logo.svg'],
            ['name' => 'Elche CF', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/a/a7/Elche_CF_logo.svg'],
            ['name' => 'Villarreal CF', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/b/b9/Villarreal_CF_logo-en.svg'],
            ['name' => 'Atlético de Madrid', 'flag' => 'https://upload.wikimedia.org/wikipedia/en/f/f9/Atletico_Madrid_Logo_2024.svg'],

        ];
        DB::table('teams')->insert($teams);
    }
}
