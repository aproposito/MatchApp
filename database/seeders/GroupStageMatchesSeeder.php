<?php

namespace Database\Seeders;

use App\Models\MatchGame;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupStageMatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Horarios en UTC (ET + 4h en verano)
     * Fase de grupos: 48 partidos, 11 jun - 27 jun 2026
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        MatchGame::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $matches = [

            // ── JORNADA 1 ─────────────────────────────────────────────

            // Jueves 11 jun
            ['home_team_id' => 3,  'away_team_id' => 42, 'phase' => 'groups', 'match_date_time' => '2026-06-11 19:00:00'], // México vs Sudáfrica
            ['home_team_id' => 39, 'away_team_id' => 14, 'phase' => 'groups', 'match_date_time' => '2026-06-12 02:00:00'], // Corea del Sur vs Chequia

            // Viernes 12 jun
            ['home_team_id' => 1,  'away_team_id' => 11, 'phase' => 'groups', 'match_date_time' => '2026-06-12 19:00:00'], // Canadá vs Bosnia y Herzegovina
            ['home_team_id' => 2,  'away_team_id' => 36, 'phase' => 'groups', 'match_date_time' => '2026-06-13 01:00:00'], // EE.UU. vs Paraguay

            // Sábado 13 jun
            ['home_team_id' => 13, 'away_team_id' => 44, 'phase' => 'groups', 'match_date_time' => '2026-06-13 19:00:00'], // Catar vs Suiza
            ['home_team_id' => 12, 'away_team_id' => 31, 'phase' => 'groups', 'match_date_time' => '2026-06-13 22:00:00'], // Brasil vs Marruecos
            ['home_team_id' => 25, 'away_team_id' => 21, 'phase' => 'groups', 'match_date_time' => '2026-06-14 01:00:00'], // Haití vs Escocia

            // Domingo 14 jun
            ['home_team_id' => 8,  'away_team_id' => 46, 'phase' => 'groups', 'match_date_time' => '2026-06-14 04:00:00'], // Australia vs Turquía
            ['home_team_id' => 4,  'away_team_id' => 18, 'phase' => 'groups', 'match_date_time' => '2026-06-14 17:00:00'], // Alemania vs Curazao
            ['home_team_id' => 34, 'away_team_id' => 29, 'phase' => 'groups', 'match_date_time' => '2026-06-14 20:00:00'], // Países Bajos vs Japón
            ['home_team_id' => 16, 'away_team_id' => 19, 'phase' => 'groups', 'match_date_time' => '2026-06-14 23:00:00'], // Costa de Marfil vs Ecuador
            ['home_team_id' => 45, 'away_team_id' => 43, 'phase' => 'groups', 'match_date_time' => '2026-06-15 02:00:00'], // Túnez vs Suecia

            // Lunes 15 jun
            ['home_team_id' => 22, 'away_team_id' => 28, 'phase' => 'groups', 'match_date_time' => '2026-06-15 16:00:00'], // España vs Islas de Cabo Verde
            ['home_team_id' => 10, 'away_team_id' => 20, 'phase' => 'groups', 'match_date_time' => '2026-06-15 19:00:00'], // Bélgica vs Egipto
            ['home_team_id' => 5,  'away_team_id' => 47, 'phase' => 'groups', 'match_date_time' => '2026-06-15 22:00:00'], // Arabia Saudí vs Uruguay
            ['home_team_id' => 40, 'away_team_id' => 33, 'phase' => 'groups', 'match_date_time' => '2026-06-16 01:00:00'], // RI de Irán vs Nueva Zelanda

            // Martes 16 jun
            ['home_team_id' => 23, 'away_team_id' => 41, 'phase' => 'groups', 'match_date_time' => '2026-06-16 19:00:00'], // Francia vs Senegal
            ['home_team_id' => 27, 'away_team_id' => 32, 'phase' => 'groups', 'match_date_time' => '2026-06-16 22:00:00'], // Irak vs Noruega
            ['home_team_id' => 7,  'away_team_id' => 6,  'phase' => 'groups', 'match_date_time' => '2026-06-17 01:00:00'], // Argentina vs Argelia

            // Miércoles 17 jun
            ['home_team_id' => 9,  'away_team_id' => 30, 'phase' => 'groups', 'match_date_time' => '2026-06-17 04:00:00'], // Austria vs Jordania
            ['home_team_id' => 37, 'away_team_id' => 38, 'phase' => 'groups', 'match_date_time' => '2026-06-17 17:00:00'], // Portugal vs RD Congo
            ['home_team_id' => 26, 'away_team_id' => 17, 'phase' => 'groups', 'match_date_time' => '2026-06-17 20:00:00'], // Inglaterra vs Croacia
            ['home_team_id' => 24, 'away_team_id' => 35, 'phase' => 'groups', 'match_date_time' => '2026-06-17 23:00:00'], // Ghana vs Panamá
            ['home_team_id' => 48, 'away_team_id' => 15, 'phase' => 'groups', 'match_date_time' => '2026-06-18 02:00:00'], // Uzbekistán vs Colombia

            // ── JORNADA 2 ─────────────────────────────────────────────

            // Jueves 18 jun
            ['home_team_id' => 14, 'away_team_id' => 42, 'phase' => 'groups', 'match_date_time' => '2026-06-18 16:00:00'], // Chequia vs Sudáfrica
            ['home_team_id' => 44, 'away_team_id' => 11, 'phase' => 'groups', 'match_date_time' => '2026-06-18 19:00:00'], // Suiza vs Bosnia y Herzegovina
            ['home_team_id' => 1,  'away_team_id' => 13, 'phase' => 'groups', 'match_date_time' => '2026-06-18 22:00:00'], // Canadá vs Catar
            ['home_team_id' => 3,  'away_team_id' => 39, 'phase' => 'groups', 'match_date_time' => '2026-06-19 01:00:00'], // México vs Corea del Sur

            // Viernes 19 jun
            ['home_team_id' => 2,  'away_team_id' => 8,  'phase' => 'groups', 'match_date_time' => '2026-06-19 19:00:00'], // EE.UU. vs Australia
            ['home_team_id' => 21, 'away_team_id' => 31, 'phase' => 'groups', 'match_date_time' => '2026-06-19 22:00:00'], // Escocia vs Marruecos
            ['home_team_id' => 12, 'away_team_id' => 25, 'phase' => 'groups', 'match_date_time' => '2026-06-20 00:30:00'], // Brasil vs Haití
            ['home_team_id' => 46, 'away_team_id' => 36, 'phase' => 'groups', 'match_date_time' => '2026-06-20 03:00:00'], // Turquía vs Paraguay

            // Sábado 20 jun
            ['home_team_id' => 34, 'away_team_id' => 43, 'phase' => 'groups', 'match_date_time' => '2026-06-20 17:00:00'], // Países Bajos vs Suecia
            ['home_team_id' => 4,  'away_team_id' => 16, 'phase' => 'groups', 'match_date_time' => '2026-06-20 20:00:00'], // Alemania vs Costa de Marfil
            ['home_team_id' => 19, 'away_team_id' => 18, 'phase' => 'groups', 'match_date_time' => '2026-06-21 00:00:00'], // Ecuador vs Curazao

            // Domingo 21 jun
            ['home_team_id' => 45, 'away_team_id' => 29, 'phase' => 'groups', 'match_date_time' => '2026-06-21 04:00:00'], // Túnez vs Japón
            ['home_team_id' => 22, 'away_team_id' => 5,  'phase' => 'groups', 'match_date_time' => '2026-06-21 16:00:00'], // España vs Arabia Saudí
            ['home_team_id' => 10, 'away_team_id' => 40, 'phase' => 'groups', 'match_date_time' => '2026-06-21 19:00:00'], // Bélgica vs RI de Irán
            ['home_team_id' => 47, 'away_team_id' => 28, 'phase' => 'groups', 'match_date_time' => '2026-06-21 22:00:00'], // Uruguay vs Islas de Cabo Verde
            ['home_team_id' => 33, 'away_team_id' => 20, 'phase' => 'groups', 'match_date_time' => '2026-06-22 01:00:00'], // Nueva Zelanda vs Egipto

            // Lunes 22 jun
            ['home_team_id' => 7,  'away_team_id' => 9,  'phase' => 'groups', 'match_date_time' => '2026-06-22 17:00:00'], // Argentina vs Austria
            ['home_team_id' => 23, 'away_team_id' => 27, 'phase' => 'groups', 'match_date_time' => '2026-06-22 21:00:00'], // Francia vs Irak
            ['home_team_id' => 32, 'away_team_id' => 41, 'phase' => 'groups', 'match_date_time' => '2026-06-23 00:00:00'], // Noruega vs Senegal
            ['home_team_id' => 30, 'away_team_id' => 6,  'phase' => 'groups', 'match_date_time' => '2026-06-23 03:00:00'], // Jordania vs Argelia

            // Martes 23 jun
            ['home_team_id' => 37, 'away_team_id' => 48, 'phase' => 'groups', 'match_date_time' => '2026-06-23 17:00:00'], // Portugal vs Uzbekistán
            ['home_team_id' => 26, 'away_team_id' => 24, 'phase' => 'groups', 'match_date_time' => '2026-06-23 20:00:00'], // Inglaterra vs Ghana
            ['home_team_id' => 35, 'away_team_id' => 17, 'phase' => 'groups', 'match_date_time' => '2026-06-23 23:00:00'], // Panamá vs Croacia
            ['home_team_id' => 15, 'away_team_id' => 38, 'phase' => 'groups', 'match_date_time' => '2026-06-24 02:00:00'], // Colombia vs RD Congo

            // ── JORNADA 3 (simultáneos por grupo) ─────────────────────

            // Miércoles 24 jun - Grupo B y C
            ['home_team_id' => 44, 'away_team_id' => 1,  'phase' => 'groups', 'match_date_time' => '2026-06-24 19:00:00'], // Suiza vs Canadá
            ['home_team_id' => 11, 'away_team_id' => 13, 'phase' => 'groups', 'match_date_time' => '2026-06-24 19:00:00'], // Bosnia y Herzegovina vs Catar
            ['home_team_id' => 21, 'away_team_id' => 12, 'phase' => 'groups', 'match_date_time' => '2026-06-24 22:00:00'], // Escocia vs Brasil
            ['home_team_id' => 31, 'away_team_id' => 25, 'phase' => 'groups', 'match_date_time' => '2026-06-24 22:00:00'], // Marruecos vs Haití
            ['home_team_id' => 14, 'away_team_id' => 3,  'phase' => 'groups', 'match_date_time' => '2026-06-25 01:00:00'], // Chequia vs México
            ['home_team_id' => 42, 'away_team_id' => 39, 'phase' => 'groups', 'match_date_time' => '2026-06-25 01:00:00'], // Sudáfrica vs Corea del Sur

            // Jueves 25 jun - Grupo D, E y F
            ['home_team_id' => 18, 'away_team_id' => 16, 'phase' => 'groups', 'match_date_time' => '2026-06-25 20:00:00'], // Curazao vs Costa de Marfil
            ['home_team_id' => 19, 'away_team_id' => 4,  'phase' => 'groups', 'match_date_time' => '2026-06-25 20:00:00'], // Ecuador vs Alemania
            ['home_team_id' => 29, 'away_team_id' => 43, 'phase' => 'groups', 'match_date_time' => '2026-06-25 23:00:00'], // Japón vs Suecia
            ['home_team_id' => 45, 'away_team_id' => 34, 'phase' => 'groups', 'match_date_time' => '2026-06-25 23:00:00'], // Túnez vs Países Bajos
            ['home_team_id' => 46, 'away_team_id' => 2,  'phase' => 'groups', 'match_date_time' => '2026-06-26 02:00:00'], // Turquía vs EE.UU.
            ['home_team_id' => 36, 'away_team_id' => 8,  'phase' => 'groups', 'match_date_time' => '2026-06-26 02:00:00'], // Paraguay vs Australia

            // Viernes 26 jun - Grupo G, H e I
            ['home_team_id' => 32, 'away_team_id' => 23, 'phase' => 'groups', 'match_date_time' => '2026-06-26 19:00:00'], // Noruega vs Francia
            ['home_team_id' => 41, 'away_team_id' => 27, 'phase' => 'groups', 'match_date_time' => '2026-06-26 19:00:00'], // Senegal vs Irak
            ['home_team_id' => 28, 'away_team_id' => 5,  'phase' => 'groups', 'match_date_time' => '2026-06-27 00:00:00'], // Islas de Cabo Verde vs Arabia Saudí
            ['home_team_id' => 47, 'away_team_id' => 22, 'phase' => 'groups', 'match_date_time' => '2026-06-27 00:00:00'], // Uruguay vs España
            ['home_team_id' => 20, 'away_team_id' => 40, 'phase' => 'groups', 'match_date_time' => '2026-06-27 03:00:00'], // Egipto vs RI de Irán
            ['home_team_id' => 33, 'away_team_id' => 10, 'phase' => 'groups', 'match_date_time' => '2026-06-27 03:00:00'], // Nueva Zelanda vs Bélgica

            // Sábado 27 jun - Grupo J, K y L
            ['home_team_id' => 35, 'away_team_id' => 26, 'phase' => 'groups', 'match_date_time' => '2026-06-27 21:00:00'], // Panamá vs Inglaterra
            ['home_team_id' => 17, 'away_team_id' => 24, 'phase' => 'groups', 'match_date_time' => '2026-06-27 21:00:00'], // Croacia vs Ghana
            ['home_team_id' => 15, 'away_team_id' => 37, 'phase' => 'groups', 'match_date_time' => '2026-06-27 23:30:00'], // Colombia vs Portugal
            ['home_team_id' => 38, 'away_team_id' => 48, 'phase' => 'groups', 'match_date_time' => '2026-06-27 23:30:00'], // RD Congo vs Uzbekistán
            ['home_team_id' => 6,  'away_team_id' => 9,  'phase' => 'groups', 'match_date_time' => '2026-06-28 02:00:00'], // Argelia vs Austria
            ['home_team_id' => 30, 'away_team_id' => 7,  'phase' => 'groups', 'match_date_time' => '2026-06-28 02:00:00'], // Jordania vs Argentina
        ];

        MatchGame::insert($matches);
    }
}