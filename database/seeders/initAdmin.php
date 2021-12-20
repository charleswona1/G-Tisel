<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class initAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
            [
                "type_compte_id" => 1,
                "name"=>"Administrateur",
                "phone"=>"+237 655049463",
                "codePostale"=> 15000,
                "email"=>"admin@gtisel.com",
                "password"=> Hash::make('123456'),
                "last_login_at"=>"2021-02-16 13:27:00"
            ]
        );
    }
}
