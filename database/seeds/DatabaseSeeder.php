<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            array(
                'name' => 'M7'
            ),
            array(
                'name' => 'M9'
            ),
            array(
                'name' => 'M11'
            ),
            array(
                'name' => 'M13'
            ),
            array(
                'name' => 'M15'
            ),
            array(
                'name' => 'M17'
            ),
            array(
                'name' => 'M20'
            ),
            array(
                'name' => 'Senior'
            ),
        ]);

        DB::table('users')->insert([
            array('id' => '1', 'name' => 'tireur', 'email' => 'tireur@test.fr', 'password' => Hash::make('tireur'),'role' => 'TIREUR'),
          array('id' => '2', 'name' => 'maitre', 'email' => 'maitre@test.fr', 'password' => Hash::make('maitre'),'role' => 'MAITRE_ARMES'),
          array('id' => '3', 'name' => 'admin', 'email' => 'admin@test.fr', 'password' => Hash::make('admin'),'role' => 'ADMIN'),
          array('id' => '4', 'name' => 'Jean', 'email' => 'jean.dupont@gmail.com', 'password' => Hash::make('tireur'), 'role' => 'TIREUR'),
          array('id' => '5', 'name' => 'Coralie', 'email' => 'dupnt.coralie@yahoo.fr', 'password' => hash::make('maitre'),'role' => 'MAITRE_ARMES'),
          array('id' => '6', 'name' => 'Sony', 'email' => 'sony-playstation@microsoft.com', 'password' => hash::make('tireur'), 'role' => 'TIREUR'),
          array('id' => '7', 'name' => 'Marine', 'email' => 'marine_sylver@yahoo.fr', 'password' => hash::make('maitre'), 'role' => 'MAITRE_ARMES'),
        ]);

        DB::table('lessons')->insert([
            array('idCombatInstructor' => '2', 'idShooter' => '6', 'comment' => 'Travail sur le coup droit'),
            array('idCombatInstructor' => '7', 'idShooter' => '4', 'comment' => 'Mise en place du nouveau lancé de sabre'),
            array('idCombatInstructor' => '5', 'idShoter' => '6', 'comment' => 'Perfectionnement de mon appuie pied gauche'),
            array('idCombatInstructor' => '5', 'idShooter' => '4', 'comment' => 'Performance réalisée sur le parrage de l adversaire'),
        ]);

        DB::table('objectives')->insert([
            array('idShooter' => '4', 'objectiveName' => 'Renforcer sa parade', 'knowledge' => true, 'comment' => 'De mieux en mieux'),
            array('idShooter' => '6', 'objectiveName' => 'Lever le pied plus haut', 'knowledge' => false, 'comment' => 'Encore du travail'),
            array('idShooter' => '6', 'objectiveName' => 'Passer au niveau supérieurn nouvelle arme', 'knowledge' => false, 'comment' => 'Persévérance'),
        ]);

    }
}
