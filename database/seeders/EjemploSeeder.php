<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjemploSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ejemplos')->insert([
        	[
	        	'nombre' => 'kevin',
	        	'apellido' => 'arturo',
	        	'email' =>'kevin@gmail.com',
	        	'telefono' => 943124351,
                'plan' => 'a',
                'periodo'=>'12/02/2020',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
        	],
        ]);
    }
}
