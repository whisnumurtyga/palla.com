<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Warehouse;
use App\Models\Type;
use App\Models\Location;
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
        \App\Models\User::factory(5)->create();

        Type::create([
            'type' => '4x5',
            'slug' => '4-5',
        ]);

        Type::create([
            'type' => '6x8',
            'slug' => '6-8',
        ]);

        Type::create([
            'type' => '12x15',
            'slug' => '12-15',
        ]);

        Type::create([
            'type' => '7x5',
            'slug' => '7-5',
        ]);


        // Location::factory(3)->create();

        // Warehouse::factory(20)->create();

        Location::create([
            'name' => 'Pacet',
            'detail' => 'Jl. Raya Mojowarno no 37, Pacet, Kutorejo, Mojokerto',
            'slug' => 'mojowarno',
        ]);

        Location::create([
            'name' => 'Bangsal',
            'detail' => 'Jl. Raya Puloniti No.1, Bangsal, Mojokerto',
            'slug' => 'bangsal',
        ]);

        Location::create([
            'name' => 'Puri',
            'detail' => 'Jl. Raya Banjaruri No.86, Puri, Mojokerto',
            'slug' => 'puri',
        ]);

        Location::create([
            'name' => 'Mojosari',
            'detail' => 'Jl. Raya Mojonesu no 07, Mojosari, Mojokerto',
            'slug' => 'mojosari',
        ]);

        
        
        

        Warehouse::create([
            'title' => 'Gudang mantappu',
            'slug' => 'gudang-mantappu',
            'stock' => 100,
            'harga' => 35000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' =>1,
            'type_id' => 1,
            'user_id' => 3,
        ]);

        Warehouse::create([
            'title' => 'Gudang Garam',
            'slug' => 'gudang-garam',
            'stock' => 100,
            'harga' => 32000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' =>2,
            'type_id' => 2,
            'user_id' => 3,
        ]);


        Warehouse::create([
            'title' => 'Gudang Cokelat',
            'slug' => 'gudang-cokelat',
            'stock' => 100,
            'harga' => 15000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' => 3,
            'type_id' => 3,
            'user_id' => 2,
        ]);


        Warehouse::create([
            'title' => 'Gudang Murah',
            'slug' => 'gudang-murah',
            'stock' => 100,
            'harga' => 45000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' =>1,
            'type_id' => 1,
            'user_id' => 2,
        ]);

        Warehouse::create([
            'title' => 'Akses Jalan Mudah',
            'slug' => 'akses-jalan-mudah',
            'stock' => 100,
            'harga' => 22000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' =>2,
            'type_id' => 2,
            'user_id' => 1,
        ]);


        Warehouse::create([
            'title' => 'Dekat Gunung',
            'slug' => 'dekat-gunung',
            'stock' => 100,
            'harga' => 17000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' => 3,
            'type_id' => 3,
            'user_id' => 1,
        ]);

        Warehouse::create([
            'title' => 'Dekat Sawah',
            'slug' => 'dekat-sawah',
            'stock' => 100,
            'harga' => 12000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' => 1,
            'type_id' => 1,
            'user_id' => 1,
        ]);

        Warehouse::create([
            'title' => 'Aktivitas Sedang',
            'slug' => 'aktivitas-sedang',
            'stock' => 100,
            'harga' => 22000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' => 1,
            'type_id' => 1,
            'user_id' => 1,
        ]);

        Warehouse::create([
            'title' => 'Gudang Sejuk',
            'slug' => 'Gudang-sejuk',
            'stock' => 100,
            'harga' => 28000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' => 2,
            'type_id' => 2,
            'user_id' => 2,
        ]);

        Warehouse::create([
            'title' => 'Alat Berat',
            'slug' => 'alat-berat',
            'stock' => 100,
            'harga' => 18000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' => 3,
            'type_id' => 3,
            'user_id' => 3,
        ]);

        Warehouse::create([
            'title' => 'Mobil bisa masuk',
            'slug' => 'mobil-bisa-masuk',
            'stock' => 100,
            'harga' => 38000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' => 2,
            'type_id' => 2,
            'user_id' => 2,
        ]);

        Warehouse::create([
            'title' => 'Simpan Saja',
            'slug' => 'simpan-saja',
            'stock' => 100,
            'harga' => 8000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' => 4,
            'type_id' => 4,
            'user_id' => 4,
        ]);

        Warehouse::create([
            'title' => 'Gudang bangunan',
            'slug' => 'gudang-bangunan',
            'stock' => 400,
            'harga' => 11000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' => 2,
            'type_id' => 2,
            'user_id' => 2,
        ]);

        Warehouse::create([
            'title' => 'Gudang Basah',
            'slug' => 'gudang-basah',
            'stock' => 100,
            'harga' => 9000,
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita delectus quasi quas officia rerum aliquid, perferendis magnam nesciunt necessitatibus illum esse, perspiciatis, odit ipsum consequatur quod voluptate voluptates ex deserunt? Ratione sed laudantium quidem eligendi reprehenderit. Nesciunt, ut. Eos vero dolore sit odio, libero est dicta esse? Eum, totam unde?',
            'location_id' => 4,
            'type_id' => 4,
            'user_id' => 4,
        ]);
    
    }

}
