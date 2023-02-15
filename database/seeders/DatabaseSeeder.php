<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
     Listing::factory(6)->create();
        // Listing::create([
//     'title'=>'fadwa',
//     'tags'=>'dfghj',
//     'company'=>'fghjk',
//     'location'=>'fghj',
//     'email'=>'fghjk@gmail.com',
//     'website'=>'hjklghj.com',
//     'discription'=>'fghjkj'
// ]);
// Listing::create([
//     'title'=>'fadwa',
//     'tags'=>'dfghj',
//     'company'=>'fghjk',
//     'location'=>'fghj',
//     'email'=>'fghjk@gmail.com',
//     'website'=>'hjklghj.com',
//     'discription'=>'fghjkj'
// ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
