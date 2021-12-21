<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeCompte extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_comptes')->insert([
            [
                'libelle' => 'Super Admin',
            ],
            [
                'libelle' => 'Administrateur',
            ],
            [
                'libelle' => 'Gestionnaire',
            ],
        ]);
    }
}
