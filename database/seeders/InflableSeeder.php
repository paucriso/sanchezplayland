<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class InflableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inflables')->insert([
            'name' => 'Avengers',
            'slug' => 'avengers',
            'description' => 'Los vengadores con resbaladilla de 22 pies de largo por 10 pies de ancho 
                                por 18 pies de alto para uso exclusivo en exteriores o salones grandes. 
                                Capacidad para 20 niños. ',
            'image' => '/images/brincolines/image-avengers.jpg',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Babyshark',
            'slug' => 'babyshark',
            'description' => 'Babyshark: Resbaladilla de 30 pies de largo por 20 pies de ancho 
                                por 15 pies de alto para uso exclusivo en exterior. 
                                Capacidad para 30 niños. ',
            'image' => '/images/brincolines/image-babyshark-1.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Batman',
            'slug' => 'batman',
            'description' => 'Batman: Resbaladilla de 18 pies de largo por 18 pies de ancho 
                                por 18 pies de alto para uso exclusivo en exteriores o salones grandes. 
                                Capacidad para 20 niños. ',
            'image' => '/images/brincolines/image-batman.jpg',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Cars',
            'slug' => 'cars',
            'description' => 'Cars con doble resbaladilla de 17 pies de largo por 17 pies de ancho 
                                por 12 pies de alto para uso exclusivo en exterior o salones grandes. ',
            'image' => '/images/brincolines/image-cars.jpg',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Castillo',
            'slug' => 'castillo',
            'description' => 'Castillo de 16 pies de largo por 13 pies de ancho por 12 pies de alto
                                para uso exclusivo exterior o salones pequeños con capacidad para 
                                15 niños. ',
            'image' => '/images/brincolines/inflable_t.png',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Cocomelon',
            'slug' => 'cocomelon',
            'description' => 'Cocomelon con doble resbaladilla de 17 pies de largo por 17 pies de ancho 
                                y 12 pies de largo para uso exclusivo en exterior o salones grandes con 
                                capacidad para 20 niños.',
            'image' => '/images/brincolines/image-cocomelon.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Dragonball',
            'slug' => 'dragonball',
            'description' => 'Dragonball con doble resbaladilla de 17 pies de largo por 17 pies de ancho 
                                y 12 pies de largo para uso exclusivo en exterior o salones grandes con 
                                capacidad para 20 niños.',
            'image' => '/images/brincolines/image-dragonball.jpg',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Frozen',
            'slug' => 'frozen',
            'description' => 'Frozen con resbaladilla de 18 pies de largo por 20 pies de ancho 
                                y 15 pies de largo para uso exclusivo en exterior o salones grandes con 
                                capacidad para 25 niños.',
            'image' => '/images/brincolines/image-frozen-1.jpg',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Carruaje Fronzen',
            'slug' => 'carruaje-frozen',
            'description' => 'Carruaje Fronzen y Princesas con resbaladilla de 28 pies de largo por 13 pies de ancho 
                                y 15 pies de largo para uso exclusivo en exterior o salones grandes con 
                                capacidad para 25 niños.',
            'image' => '/images/brincolines/image-frozen-2.jpg',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Fronzen y Ariel',
            'slug' => 'frozen-y-ariel',
            'description' => 'Carruaje Fronzen y Princesas con resbaladilla de 16 pies de largo por 13 pies de ancho 
                                y 12 pies de largo para uso exclusivo en exterior o salones pequeños con 
                                capacidad para 15 niños.',
            'image' => '/images/brincolines/image-frozen-3.jpg',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Jurasic World',
            'slug' => 'jurasic-world',
            'description' => 'Dinosaurio cuadrado sin resbaladilla de 18 pies de largo por 18 pies de
                                ancho por 18 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-jurasic-world.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Lol surprise',
            'slug' => 'lol-surprise',
            'description' => 'Lol surprise cuadrado sin resbaladilla de 18 pies de largo por 18 pies de
                                ancho por 18 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-lolsuprise.jpg',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Los increíbles',
            'slug' => 'los-increibles',
            'description' => 'Los increíbles cuadrado con resbaladilla de 18 pies de largo por 18 pies de
                                ancho por 18 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-los-increibles.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Lucha libre',
            'slug' => 'lucha-libre',
            'description' => 'Lucha libre cuadrado sin resbaladilla de 11 pies de largo por 14 pies de
                                ancho por 7 pies de alto para uso exclusivo en exterior o salones
                                pequeños con capacidad para 10 niños.',
            'image' => '/images/brincolines/image-lucha-libre.jpg',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Mickey mouse',
            'slug' => 'mickey-mouse',
            'description' => 'Mickey mouse cuadrado sin resbaladilla de 18 pies de largo por 18 pies de
                                ancho por 18 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-mickey-1.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Mickey mouse',
            'slug' => 'mickey-mouse-2',
            'description' => 'Mickey mouse con resbaladilla de 16 pies de largo por 13 pies de
                                ancho por 12 pies de alto para uso exclusivo en exterior o salones
                                pequeños con capacidad para 15 niños.',
            'image' => '/images/brincolines/image-mickey-2.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Mickey mouse',
            'slug' => 'mickey-mouse-3',
            'description' => 'Mickey mouse con resbaladilla de 18 pies de largo por 20 pies de
                                ancho por 15 pies de alto para uso exclusivo en exterior o salones
                                pequeños con capacidad para 25 niños.',
            'image' => '/images/brincolines/image-mickey-3.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Mickey mouse',
            'slug' => 'mickey-mouse-4',
            'description' => 'Mickey mouse de agua con resbaladilla de 20 pies de largo por 30 pies de
                                ancho por 15 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 30 niños.',
            'image' => '/images/brincolines/image-mickey-2.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Moana',
            'slug' => 'moana',
            'description' => 'Moana con doble resbaladilla de 17 pies de largo por 17 pies de
                                ancho por 12 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-moana.jpg',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Pawpatrol',
            'slug' => 'pawpatrol',
            'description' => 'Pawpatrol con resbaladilla de 22 pies de largo por 10 pies de
                                ancho por 18 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-pawpatrol.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Safari',
            'slug' => 'safari',
            'description' => 'Safari con resbaladilla de 18 pies de largo por 20 pies de
                                ancho por 15 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 25 niños.',
            'image' => '/images/brincolines/image-safari-1.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Sonic',
            'slug' => 'sonic',
            'description' => 'Sonic cuadrado sin resbaladilla de 18 pies de largo por 18 pies de
                                ancho por 18 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-sonic.jpg',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Spiderman',
            'slug' => 'spiderman',
            'description' => 'Spiderman cuadrado sin resbaladilla de 18 pies de largo por 18 pies de
                                ancho por 18 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-spiderman.jpg',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Superman',
            'slug' => 'superman',
            'description' => 'Superman con doble resbaladilla de 17 pies de largo por 17 pies de
                                ancho por 12 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-superman.jpg',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Teen titan',
            'slug' => 'teen-titan',
            'description' => 'Teen titan con resbaladilla de 18 pies de largo por 18 pies de
                                ancho por 18 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-teentitan.jpg',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Torito',
            'slug' => 'torito',
            'description' => 'Torito inflable de 14 pies de largo por 14 pies de
                                ancho por 6 pies de alto para uso exclusivo en exterior o salones
                                pequeños con capacidad para 10 niños.',
            'image' => '/images/brincolines/image-toro-1.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Toro mecánico',
            'slug' => 'toro-mecanico',
            'description' => 'Toro mecánico de 16 pies de largo por 16 pies de
                                ancho por 9 pies de alto para uso exclusivo en exterior o interiores,
                                para niños o adultos.',
            'image' => '/images/brincolines/image-toro-2.jpg',
            'category_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Toy story',
            'slug' => 'toy-story',
            'description' => 'Toy story con resbaladilla de 16 pies de largo por 13 pies de
                                ancho por 12 pies de alto para uso exclusivo en exterior o salones
                                pequeños con capacidad para 15 niños.',
            'image' => '/images/brincolines/image-toystory.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Tren Thomas',
            'slug' => 'tren-thomas',
            'description' => 'Tren Thomas con doble resbaladilla de 17 pies de largo por 17 pies de
                                ancho por 12 pies de alto para uso exclusivo en exterior o salones
                                pequeños con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-trenthomas.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Trolls',
            'slug' => 'trolls',
            'description' => 'Trolls con resbaladilla de 18 pies de largo por 18 pies de
                                ancho por 18 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-trolls.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Unicornio',
            'slug' => 'unicornio',
            'description' => 'Unicornio con resbaladilla de 18 pies de largo por 18 pies de
                                ancho por 18 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 20 niños.',
            'image' => '/images/brincolines/image-unicornio-1.jpg',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Unicornio inflable',
            'slug' => 'unicornio-inflable',
            'description' => 'Unicornio inflable de 14 pies de largo por 14 pies de
                                ancho por 6 pies de alto para uso exclusivo en exterior o salones
                                paqueños con capacidad para 10 niños.',
            'image' => '/images/brincolines/image-unicornio-2.jpg',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Unicornio de agua',
            'slug' => 'unicornio-de-agua',
            'description' => 'Unicornio de agua de 20 pies de largo por 30 pies de
                                ancho por 15 pies de alto para uso exclusivo en exterior o salones
                                grandes con capacidad para 30 niños.',
            'image' => '/images/brincolines/image-unicornio-3.jpg',
            'category_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
