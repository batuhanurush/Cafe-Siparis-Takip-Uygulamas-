<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
      
        DB::table('users')->insert([
            'name' => 'Batuhan',
            'type'=>'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('Batuhan+40'),
        ]);
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user3@email.com',
            'password' => bcrypt('password'),
        ]);
           

        
        
        
    }
}
