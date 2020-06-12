<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'id' => 1,
                'shop_name' => 'コンビニ',
                'area_id' => 1
            ],
            [
                'id' => 2,
                'shop_name' => 'デパート',
                'area_id' => 2
            ],
            [
                'id' => 3,
                'shop_name' => 'スーパー',
                'area_id' => 3
            ],
            [
                'id' => 4,
                'shop_name' => '病院',
                'area_id' => 3
            ]
        ]);
    }
}
