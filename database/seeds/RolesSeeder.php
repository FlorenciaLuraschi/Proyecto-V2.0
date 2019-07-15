<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
          "1" => "Usuario",
          "2" => "Administrador",
        ];
    foreach($roles as $id=>$name) {
      DB::table('roles')->insert([
      'id' => $id,
      'name' => $name,
        ]);
        }
    }
}
