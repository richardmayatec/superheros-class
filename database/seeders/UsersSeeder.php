<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $richard = new User;
        $richard->name = "Richard";
        $richard->email = "richard_maya@tecmilenio.mx";
        $richard->password = Hash::make('Pass123');
        $richard->save();
        
        
        $richard = new User;
        $richard->name = "SpiderMan";
        $richard->email = "spider@tecmilenio.mx";
        $richard->password = Hash::make('Venom123');
        $richard->save();
    }
}
