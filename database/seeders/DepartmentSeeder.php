<?php

namespace Database\Seeders;

use App\Models\Department;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deparments = [
            ['name'=>'Antioquia'],
            ['name'=>'Atlantico'],
            ['name'=>'BogotáD.C'],
            ['name'=>'Bolivar'],
            ['name'=>'Boyaca'],
            ['name'=>'Caldas'],
            ['name'=>'Caqueta'],
            ['name'=>'Cauca'],
            ['name'=>'Cesar'],
            ['name'=>'Cordova'],
            ['name'=>'Cundinamarca'],
            ['name'=>'Choco'],
            ['name'=>'Huila'],
            ['name'=>'LaGuajira'],
            ['name'=>'Magdalena'],
            ['name'=>'Meta'],
            ['name'=>'Nariño'],
            ['name'=>'NortedeSantander'],
            ['name'=>'Quindio'],
            ['name'=>'Risaralda'],
            ['name'=>'Santander'],
            ['name'=>'Sucre'],
            ['name'=>'Tolima'],
            ['name'=>'Valle'],
            ['name'=>'Arauca'],
            ['name'=>'Casanare'],
            ['name'=>'Putumayo'],
            ['name'=>'SanAndres'],
            ['name'=>'Amazonas'],
            ['name'=>'Guainia'],
            ['name'=>'Guaviare'],
            ['name'=>'Vaupes'],
            ['name'=>'Vichada']
        ];
        foreach ($deparments as $deparment) {
            Department::create($deparment);
        }
    }
}
