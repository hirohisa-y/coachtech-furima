<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // 直接挿入
        DB::table('items')->insert(
            [
                name => '腕時計',
                price => 15,000,
                brand_name => 'Rolax',
                explanation => 'スタイリッシュなデザインのメンズ腕時計',
                image => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',
                status => 1,
                user_id => 1
            ],
            [
                name => 'HDD',
                price => 5,000,
                brand_name => '西芝',
                explanation => '高速で信頼性の高いハードディスク',
                image => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
                status => 2,
                user_id => 1
            ],
            [
                name => '玉ねぎ3束',
                price => 300,
                brand_name => 'なし',
                explanation => '新鮮な玉ねぎ３束のセット',
                image => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
                status => 3,
                user_id => 1
            ],
            [
                name => '革靴',
                price => 4,000,
                brand_name => '',
                explanation => 'クラシックなデザインの革靴',
                image => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
                status => 4,
                user_id => 1
            ],
            [
                name => 'ノートPC',
                price => 45,000,
                brand_name => '',
                explanation => '高性能なノートパソコン',
                image => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
                status => 1,
                user_id => 1
            ],
            [
                name => 'マイク',
                price => '8,000',
                brand_name => 'なし',
                explanation => '高性能のレコーディング用マイク',
                image => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
                status => 2,
                user_id => 1
            ],
            [
                name => 'ショルダーバッグ',
                price => 3,500,
                brand_name => '',
                explanation => 'おしゃれなショルダーバッグ',
                image => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
                status => 3,
                user_id => 1
            ],
            [
                name => 'タンブラー',
                price => 500,
                brand_name => 'なし',
                explanation => '使いやすいタンブラー',
                image => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',
                status => 4,
                user_id => 1
            ],
            [
                name => 'コーヒーミル',
                price => 4,000,
                brand_name => 'Starbacks',
                explanation => '手動のコーヒーミル',
                image => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
                status => 1,
                user_id => 1
            ],
            [
                name => 'メイクセット',
                price => 2,500,
                brand_name => '',
                explanation => '便利なメイクアップセット',
                image => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',
                status => 2,
                user_id => 1
            ],
            );
    } //
}

