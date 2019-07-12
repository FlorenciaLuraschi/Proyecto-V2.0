<?php

use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $paises = [
      "AR" => "Argentina",
      "BO" => "Bolivia",
      "BR" => "Brasil",
      "Cl" => "Chile",
      "CR" => "Costa Rica",
      "CU" => "Cuba",
      "DM" => "Dominica",
      "DO" => "República Dominicana",
      "EC" => "Ecuador",
      "SV" => "El Salvador",
      "GT" => "Guatemala",
      "MX" => "México",
      "PA" => "Panamá",
      "PY" => "Paraguay",
      "PR" => "Puerto Rico",
      "UY" => "Uruguay",
      "VE" => "Venezuela",
  ];
  foreach($paises as $iso=>$pais) {
      DB::table('countries')->insert([
      'iso' => $iso,
      'name' => $pais
  ]);
  }  
    }
}
