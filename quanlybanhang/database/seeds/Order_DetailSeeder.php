<?php

use Illuminate\Database\Seeder;

class Order_DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker\Factory::create('vi_VN'); //location ISO
        $list = [];

        $listOrder = DB::table('orders')->pluck('id'); //SELECT id From categories
        $listProduct = DB::table('products')->pluck('id'); //SELECT id From suppliers
        for ($i=1; $i <= 100; $i++) {
            array_push($list, [
                'quantily'              => $faker->numberBetween(1, 100),
                'unit_price'            => $faker->randomFloat(50000, 50000, 5000000000),
                'discount'              => $faker->numberBetween(0, 100),
                'order_detail_status'   => $faker->text(50),
                'date_allocated'        =>$faker->date($format = 'Y-m-d', $max = 'now'),
                //khoas ngoai
                'order_id'              => $faker->randomElement($listOrder),
                'product_id'            => $faker->randomElement($listProduct)
            ]);
        }
        DB::table('order_details')->insert($list);
    }
}
