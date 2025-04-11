<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::create([
            "text"=>'Просторный и уютный номер с базовыми удобствами. Подойдёт для кратковременного и бюджетного проживания. В номере: кровать, стол, шкаф, санузел.',
            "title"=>'Эконом',
            "img"=>'public/images/econom.jpg',
            "price"=>'95.00',
            "link"=>route('singlefirst')
        ]);
        Room::create([
            "text"=>'Улучшенный номер с дополнительными удобствами. Идеален для длительного проживания. Включает: телевизор, кондиционер, мягкую мебель и современный санузел.',
            "title"=>'Комфорт',
            "img"=>'public/images/comfort.jpg',
            "price"=>'150.00',
            "link"=>route('singlesecond')
        ]);
        Room::create([
            "text"=>'Просторный номер премиум-класса с элегантным интерьером. Включает зону отдыха, мини-бар, большую кровать, ванну и расширенный сервис. Подходит для комфортного и роскошного отдыха.',
            "title"=>'Люкс',
            "img"=>'public/images/lux.jpg',
            "price"=>'300.00',
            "link"=>route('singlethird')
        ]);
    }
}





