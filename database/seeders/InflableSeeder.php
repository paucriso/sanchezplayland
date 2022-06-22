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
            'description' => 'Cars con doble resbaladilla de 17 pies de largo por 17 pies de ancho 
                                por 12 pies de alto para uso exclusivo en exterior o salones grandes. ',
            'image' => '/images/brincolines/image-cars.jpg',
            'category_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Castillo',
            'description' => 'Castillo de 16 pies de largo por 13 pies de ancho por 12 pies de alto
                                para uso exclusivo exterior o salones pequeños con capacidad para 
                                15 niños. ',
            'image' => '/images/brincolines/image-castillo.jpg',
            'category_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('inflables')->insert([
            'name' => 'Cocomelon',
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
